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
              <a href="{{route('method.create')}}" class="btn btn-md btn-default">Add Service Method</a>
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
              <h1 class="mb-0">Services Method</h1>
              
            </div>
            <div class="table-responsive py-4">
              <table class="table table-flush" id="datatable-buttons">
                <thead class="thead-light">
                  <tr>
                    <th>Sr.No</th>
                    <th>Method Title</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                
                <tbody>
               @foreach($method_details as $method)
                  <tr>
                    <td>{{$sr=$sr+1}}</td>
                    <td>{{$method['method_title']}}</td>
                    @if($method['is_activate'] === 1)
                   <td style="color:green">Activate</td>
                    @endif
                    @if($method['is_activate'] === 0)
                    <td style="color:red">Deactivate</td>
                    @endif
                    <td> 
                    <a href="{{route('unit.index')}}"><button type="button" class="btn btn-outline-default" >Method Unit</button> </a>
                    </td>
                    {{--<td> 
                    <a href="{{route('method.show',$method['slug'])}}">
                       <button type="button" class="btn btn-success btn-icon-only rounded-circle" >
                        <i class="ni ni-album-2"></i>
                    </button></a>
                    <a href="{{route('method.edit',$method['slug'])}}">
                        <button type="button" class="btn btn-primary btn-icon-only rounded-circle" data-toggle="modal" >
                        <i class="ni ni-ruler-pencil" style="color:white"></i>
                    </button></a>
                    <a href="{{route('method.destroy',$method['id'])}}">
                        <button type="button" class="btn btn-danger btn-icon-only rounded-circle">
                        <i class="ni ni-scissors" style="color:white"></i>
                    </button></a> 
                    </td>--}}
              

             @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

    </div>
    

@endsection