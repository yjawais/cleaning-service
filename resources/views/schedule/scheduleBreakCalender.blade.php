@extends('layouts.dashboard')


@section('sidebar')
  @include('include.dashboard.role.admin.sidebar')
@endsection

@section('content')
<div class="main-content" id="panel">
    <!-- Topnav -->
   
    <!-- Header -->
    <!-- Header -->
    <div class="header header-dark bg-primary pb-6 content__title content__title--calendar">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6">
              <h6 class="fullcalendar-title h2 text-white d-inline-block mb-0">Scheduled Breaks</h6>
              <nav aria-label="breadcrumb" class="d-none d-lg-inline-block ml-lg-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Calendar</li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-6 mt-3 mt-lg-0 text-lg-right">
              <a href="#" class="fullcalendar-btn-prev btn btn-sm btn-neutral">
                <i class="fas fa-angle-left"></i>
              </a>
              <a href="#" class="fullcalendar-btn-next btn btn-sm btn-neutral">
                <i class="fas fa-angle-right"></i>
              </a>
              <a href="#" class="btn btn-sm btn-neutral" data-calendar-view="month">Month</a>
              <a href="#" class="btn btn-sm btn-neutral" data-calendar-view="basicWeek">Week</a>
              <a href="#" class="btn btn-sm btn-neutral" data-calendar-view="basicDay">Day</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col">
          <!-- Fullcalendar -->
          <div class="card card-calendar">
            <!-- Card header -->
            <div class="card-header">
              <!-- Title -->
              <h5 class="h3 mb-0">Calendar</h5>
            </div>
            <!-- Card body -->
            <div class="card-body p-0">
              <div class="calendar" data-toggle="calendar" id="calendar"></div>
              @foreach($schedule_breaks as $break)
            </div>
          </div>
          <!-- Modal - Add new event -->
          <!--* Modal header *-->
          <!--* Modal body *-->
          <!--* Modal footer *-->
          <!--* Modal init *-->
          <div class="modal fade" id="new-event" tabindex="-1" role="dialog" aria-labelledby="new-event-label" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-secondary" role="document">
              <div class="modal-content">
                <!-- Modal body -->
                <div class="modal-body">
                  <form class="new-event--form" action="{{route('schedulebreak.index')}}">
                  @csrf
                    <div class="form-group">
                      <label class="form-control-label">Add Break</label>
                    </div>
                    <div class="form-group mb-0">
                    <div class="form-group row">
                    <label for="start-date" class="col-md-4 col-form-label form-control-label">Start Date <req>*</req></label>
                    <div class="col-md-8">
                      
                      <input placeholder="Enter date" id="start-date" type="datetime-local" class="form-control" name="start-date" required  autofocus>
                    </div>

                    </div>
                  <div class="form-group row">
                    <label for="end-date" class="col-md-4 col-form-label form-control-label">End Date <req>*</req></label>
                    <div class="col-md-8">
                    <input placeholder="Enter date" id="end-date" type="datetime-local" class="form-control" name="end-date" required  autofocus>

                    </div>
                  </div>   
                    </div>
                    <input type="hidden" class="new-event--start" />
                    <input type="hidden" class="new-event--end" />
                  
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                  <button type="submit" class="btn btn-primary new-event--add">Submit</button>
                  <button type="button" class="btn btn-link ml-auto" data-dismiss="modal">Close</button>
                </div>
                </form>
              </div>
            </div>
          </div>
          <!-- Modal - Edit event -->
          <!--* Modal body *-->
          <!--* Modal footer *-->
          <!--* Modal init *-->
          <div class="modal fade" id="edit-event" tabindex="-1" role="dialog" aria-labelledby="edit-event-label" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-secondary" role="document">
              <div class="modal-content">
                <!-- Modal body -->
                <div class="modal-body">
                  <form class="edit-event--form" action="{{route('update.schedulebreak',$break['id'])}}" method="POST">
                    @csrf
                    <div class="form-group">
                      <label class="form-control-label">Break Details</label>
                      <input type="text" class="form-control form-control-alternative edit-event--title" placeholder="Event Title">
                    </div>
                    <div class="form-group">
                      <label class="form-control-label d-block mb-3">Status color</label>
                      
                    </div>
                    <div class="form-group">
                      <textarea class="form-control form-control-alternative edit-event--description textarea-autosize" placeholder="Event Desctiption"></textarea>
                      <i class="form-group--bar"></i>
                    </div>
                    <input type="hidden" class="edit-event--id">
                  </form>
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                  <button class="btn btn-primary" data-calendar="update">Update</button>
                  <a href="{{route('destroy.schedulebreak',$break['id'])}}"> <button class="btn btn-danger" data-calendar="delete">Delete</button></a>
                  <button class="btn btn-link ml-auto" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
      <!-- Footer -->
     
    </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="{{asset('adminPanel/vendor/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{asset('adminPanel/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('adminPanel/vendor/js-cookie/js.cookie.js')}}"></script>
  <script src="{{asset('adminPanel/vendor/jquery.scrollbar/jquery.scrollbar.min.js')}}"></script>
  <script src="{{asset('adminPanel/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js')}}"></script>
  <!-- Optional JS -->
  <script src="{{asset('adminPanel/vendor/moment/min/moment.min.js')}}"></script>
  <script src="{{asset('adminPanel/vendor/fullcalendar/dist/fullcalendar.min.js')}}"></script>
  <script src="{{asset('adminPanel/vendor/sweetalert2/dist/sweetalert2.min.js')}}"></script>
  <!-- Argon JS -->
  <script src="{{asset('adminPanel/js/argon.js?v=1.2.0')}}"></script>
 

@endsection