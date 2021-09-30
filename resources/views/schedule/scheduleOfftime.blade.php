@extends('layouts.dashboard')


@section('sidebar')
  @include('include.dashboard.role.admin.sidebar')
@endsection

@section('content')
<div class="header bg-secondary pb-6">
      <div class="container-fluid"> 
        <div class="header-body"> 
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
            <button type="button" class="btn btn-md btn-default"  style="float: left;" data-toggle="modal" data-target="#modal-form-availability">Availabilty</button>             
            <button type="button" class="btn btn-md btn-default"  style="float: left;" data-toggle="modal" data-target="#modal-form-add-offtime">Add offtime</button>   
            </div>
             <div class="col-lg-6 col-5 text-right">
            <button type="button" class="btn btn-md btn-default" data-toggle="modal" data-target="#modal-form-weekly">WEEKLY</button>
            <button type="button" class="btn btn-md btn-default" data-toggle="modal" data-target="#modal-form-monthly">MONTHLY</button>
              <!-- <a href="#" class="btn btn-sm btn-neutral">New</a> -->
              <!-- <a href="#" class="btn btn-sm btn-neutral">Filters</a> -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid mt--6">
      <!-- Table -->
      <div class="row">
        <div class="col">
         
          <div class="card">
            <!-- Card header -->
            @if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
</div>
@endif
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
            <div class="card-header">
              <h1 class="mb-0">Scheduled Offtime</h1>
              
            </div>
            <div class="table-responsive py-4">
              <table class="table table-flush" id="datatable-buttons">
                <thead class="thead-light">
                  <tr>
                    <th>Sr.No</th>
                    <th>Offtime Start</th>
                    <th>Offtime End</th>
                    <th>Action</th>
                  </tr>
                </thead>
                
                <tbody>
             @foreach($schedule_offtimes as $offtime)
                  <tr>
                    <td>{{$sr=$sr+1}}</td>
                    <td>{{$offtime['start_date_time']}}</td>
                    <td>{{$offtime['end_date_time']}}</td>
                    <td>
                   <button type="button" class="btn btn-success btn-icon-only rounded-circle" data-toggle="modal" data-target="#myModal-{{ $offtime['id'] }}">

<i class="ni ni-album-2"></i>
</button>
<div class="modal fade" id="myModal-{{ $offtime['id'] }}" tabindex="-1" role="dialog" aria-labelledby="myModal-{{ $offtime['id'] }}" aria-hidden="false">
                    <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
                      <div class="modal-content">
                        <div class="modal-body p-0">
                          <div class="card bg-secondary border-0 mb-0">
                            <div class="card-header bg-transparent pb-5">
                              <div class="text-muted text-center mt-2 mb-3"><h1>offtime</h1></div>
                              
                            </div>
                            <div class="card-body px-lg-5 py-lg-5">
                           
                              <form role="form">
                              <div class="form-group row">
                              <label for="start-time" class="col-md-4 col-form-label form-control-label">Id</label>
                              <div class="col-md-8">
                              <input class="form-control" type="text" value="{{$offtime['id']}}" id="offtime" readonly>
                              </div>
                              </div>
                              <div class="form-group row">
                              <label for="start-time" class="col-md-4 col-form-label form-control-label">offtime Start</label>
                    <div class="col-md-8">
                      <input class="form-control" type="text" value="{{$offtime['start_date_time']}}" id="start-time" readonly>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="end-time" class="col-md-4 col-form-label form-control-label">offtime End</label>
                    <div class="col-md-8">
                    <input name="end-time" class="form-control" id="end-time" value="{{$offtime['end_date_time']}}" readonly>
                    </div>
                  </div>    
                {{-- <div class="form-group row">
                    <label for="start-time" class="col-md-4 col-form-label form-control-label">Type</label>
                    <div class="col-md-8">
                      <input class="form-control" type="text" value="{{$offtime['type']}}" id="start-time" readonly>
                    </div>
                  </div>   
                  <div class="form-group row">
                    <label for="start-time" class="col-md-4 col-form-label form-control-label">Slug</label>
                    <div class="col-md-8">
                      <input class="form-control" type="text" value="{{$offtime['slug']}}" id="start-time" readonly>
                    </div>
                  </div>   
                  <div class="form-group row">
                    <label for="start-time" class="col-md-4 col-form-label form-control-label">Status</label>
                   
                  </div> --}}
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div> 
<button type="button" class="btn btn-primary btn-icon-only rounded-circle" data-toggle="modal" data-target="#myModalEdit-{{ $offtime['id'] }}">
<i class="ni ni-ruler-pencil" style="color:white"></i>
</button>
<div class="modal fade" id="myModalEdit-{{ $offtime['id'] }}" tabindex="-1" role="dialog" aria-labelledby="myModalEdit-{{ $offtime['id'] }}" aria-hidden="false">
                    <div class="modal-dialog modal- modal-dialog-centered modal-md" role="document">
                      <div class="modal-content">
                        <div class="modal-body p-0">
                          <div class="card bg-secondary border-0 mb-0">
                            <div class="card-header bg-transparent pb-5">
                              <div class="text-muted text-center mt-2 mb-3"><h1>offtime</h1></div>
                               
                            </div>
                            <div class="card-body px-lg-5 py-lg-5">
                           
                              <form role="form" action="{{route('update.scheduleofftime',$offtime['id'])}}" method="POST">
                                @csrf
                              <div class="form-group row">
                    <label for="start-time" class="col-md-4 col-form-label form-control-label">Start Date</label>
                    <div class="col-md-8">
                      <input name="start-time" class="form-control" type="time" value="{{$offtime['start_date_time']}}" id="start-time" >
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="start-time" class="col-md-4 col-form-label form-control-label">End Date</label>
                    <div class="col-md-8">
                     
                      <input type="time" name="end-time" class="form-control" id="end-time" value="{{$offtime['end_date_time']}}">
                    </div>
                  </div>  
                
                    
                  <div class="text-center">
                                  <button type="submit" class="btn btn-primary my-4">Submit</button>
                                </div>                               
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div> 
<a href="{{route('destroy.scheduleofftime',$offtime['id'])}}"><button type="button" class="btn btn-danger btn-icon-only rounded-circle">
<i class="ni ni-scissors" style="color:white"></i>
</button>
 </a> 
                                      </td>
              
<!--                   
                    <td class="text-right">
                                      <div class="dropdown">
                                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          <i class="fas fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                          <a class="dropdown-item" href="#">View</a>
                                          <a class="dropdown-item" href="#">Edit</a>
                                          <a class="dropdown-item" href="#">Delete</a>
                                        </div>
                                      </div>
                                    </td> -->
                  </tr>
             @endforeach 
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

    </div>
    
    
<!-- week offtime form -->
    <div class="modal fade" id="modal-form-weekly" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="false">
                    <div class="modal-dialog modal- modal-dialog-centered modal-md" role="document">
                      <div class="modal-content">
                        <div class="modal-body p-0">
                          <div class="card bg-secondary border-0 mb-0">
                            <div class="card-header bg-transparent pb-5">
                              <div class="text-muted text-center mt-2 mb-3"><h1>Weekly offtime</h1></div>
                              
                            </div>
                            <div class="card-body px-lg-5 py-lg-5">
                           
                              <form role="form" action="" >
                               
              
                              <div class="form-group row">
                              <div class="table-responsive py-4">
              <table class="table table-flush" id="datatable-buttons">
                <thead class="thead-light">
                  <tr>
                    <th>Weekday</th>
                    <th>Offtime</th>
                  </tr>
                </thead>
                <tr> <td> Monday</td></tr>
                <tr> <td> Tuesday</td></tr>
                <tr> <td> Wednesday</td></tr>
                <tr> <td> Thursday</td></tr>
                <tr> <td> Friday</td></tr>
                <tr> <td> Saturday</td></tr>
                <tr> <td> Sunday</td></tr>
                </table>
                
                      
                     
                  <div class="text-center">
                                  <button type="submit" class="btn btn-primary my-4">Close</button>
                                </div>                               
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div> 
                </div>
              </div> 

<!-- monthly offtime view -->
              <div class="modal fade" id="modal-form-monthly" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="false">
                    <div class="modal-dialog modal- modal-dialog-centered modal-md" role="document">
                      <div class="modal-content">
                        <div class="modal-body p-0">
                          <div class="card bg-secondary border-0 mb-0">
                            <div class="card-header bg-transparent pb-5">
                              <div class="text-muted text-center mt-2 mb-3"><h1>Monthly offtime</h1></div>
                              
                            </div>
                            <div class="card-body px-lg-5 py-lg-5">
                           
                              <form role="form" action="" >
                               
              
                              <div class="form-group row">
                              <div class="table-responsive py-4">
              <table class="table table-flush" id="datatable-buttons">
                <thead class="thead-light">
                  <tr>
                    <th>Weekday</th>
                    <th>Offtime</th>
                  </tr>
                </thead>
                <tr> <td> Monday</td></tr>
                <tr> <td> Tuesday</td></tr>
                <tr> <td> Wednesday</td></tr>
                <tr> <td> Thursday</td></tr>
                <tr> <td> Friday</td></tr>
                <tr> <td> Saturday</td></tr>
                <tr> <td> Sunday</td></tr>
                </table>
                
                      
                     
                  <div class="text-center">
                                  <button type="submit" class="btn btn-primary my-4">Close</button>
                                </div>                               
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div> 
                </div>
              </div> 


<!-- add offtime form -->
              <div class="modal fade" id="modal-form-add-offtime" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="false">
                    <div class="modal-dialog modal- modal-dialog-centered modal-md" role="document">
                      <div class="modal-content">
                        <div class="modal-body p-0">
                          <div class="card bg-secondary border-0 mb-0">
                            <div class="card-header bg-transparent pb-5">
                              <div class="text-muted text-center mt-2 mb-3"><h1>Add offtime</h1></div>
                              
                            </div>
                            <div class="card-body px-lg-5 py-lg-5">
                           
                              <form role="form" action="{{route('store.scheduleofftime')}}" method="POST">
                                @csrf
              
                              <div class="form-group row">
                    <label for="start-time" class="col-md-4 col-form-label form-control-label">Start Date <req>*</req></label>
                    <div class="col-md-8">
                      
                      <input placeholder="Enter date" id="start-time" type="time" class="form-control" name="start-time" required  autofocus>
                    </div>

                    </div>
                  <div class="form-group row">
                    <label for="end-time" class="col-md-4 col-form-label form-control-label">End Date <req>*</req></label>
                    <div class="col-md-8">
                    <input placeholder="Enter date" id="end-time" type="time" class="form-control" name="end-time" required  autofocus>

                    </div>
                  </div>      
                 
                  <div class="text-center">
                                  <button type="submit" class="btn btn-primary my-4">Submit</button>
                                </div>                               
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div> 



@endsection