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
        </div>
        <div class="col-lg-6 col-5 text-right">
          <a href="{{route('social.create')}}" class="btn btn-md btn-default">New</a>
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
        <div class="card-header">
          <h1 class="mb-0">Social Setting</h1>
        </div>
        <div class="table-responsive py-4">
          <table class="table table-flush" id="datatable-buttons">
            <thead class="thead-light">
              <tr>
                <th>Sr.No</th>
                <th>Provider</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>

            <tbody>
              @foreach($social_settings as $social_setting)
              <tr>
                <td>{{$sr=$sr+1}}</td>
                <td>{{$social_setting->provider}}</td>
                @if($social_setting->is_activate === 1)
                <td style="color:green">Activate</td>
                @endif
                @if($social_setting->is_activate === 0)
                <td style="color:red">Deactivate</td>
                @endif
                <td>
                  <a href="{{route('social.show',$social_setting->id)}}"><button type="button" class="btn btn-success btn-icon-only rounded-circle">

                      <i class="ni ni-album-2"></i>
                    </button> </a>
                  <a href="{{route('social.edit',$social_setting->id)}}">
                    <button type="button" class="btn btn-primary btn-icon-only rounded-circle" data-toggle="modal">
                      <i class="ni ni-ruler-pencil" style="color:white"></i>
                    </button></a>
                  <a href="{{route('social.destroy',$social_setting->id)}}"><button type="button" class="btn btn-danger btn-icon-only rounded-circle">
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






@endsection