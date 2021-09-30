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
              <a href="{{route('service.create')}}" class="btn btn-md btn-default">Add Service</a>
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
              <h1 class="mb-0">Services</h1>
              
            </div>
            <div class="table-responsive py-4">
              <table class="table table-flush" id="datatable-buttons">
                <thead class="thead-light">
                  <tr>
                    <th>Sr.No</th>
                    <th>Service Title</th>
                    <th>Description</th>
                    <th>Color</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                
                <tbody>
               @foreach($service_details as $service)
                  <tr>
                    <td>{{$sr=$sr+1}}</td>
                    <td>{{$service['title']}}</td>
                    <td>{{$service['description']}}</td>
                    <td>{{$service['color']}}</td>
                   @if($service['is_activate'] === 1)
                   <td style="color:green">Activate</td>
                    @endif
                    @if($service['is_activate'] === 0)
                    <td style="color:red">Deactivate</td>
                    @endif
                  <td> 
                   <a href="{{route('addon.index')}}"><button type="button" class="btn btn-outline-default" >Addon</button> </a>
                    <a href="#"><button type="button" class="btn btn-outline-default">Pricing</button></a>
                  </td>
              
                  
                    <td class="text-right">
                                      <div class="dropdown">
                                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          <i class="fas fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                          <a class="dropdown-item" href="{{route('service.show',$service['slug'])}}">View</a>
                                          <a class="dropdown-item" href="{{route('service.edit',$service['slug'])}}">Edit</a>
                                          <a class="dropdown-item" href="{{route('service.destroy',$service['id'])}}">Delete</a>
                                        </div>
                                      </div>
                                    </td>
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