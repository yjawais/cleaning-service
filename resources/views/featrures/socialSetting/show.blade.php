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
            <!-- <button type="button" class="btn btn-md btn-default" data-toggle="modal" data-target="#modal-form">New</button> -->
            <a href="{{route('social.index')}}" class="btn btn-md btn-default">View List</a>

              <!-- <a href="#" class="btn btn-sm btn-neutral">Filters</a> -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="card mb-4">
        <!-- Card header -->
        <div class="card-header"> 
          <h1 class="title">Social Provider</h1>
        </div>
        <!-- Card body -->
        <div class="card-body">
          <!-- Form groups used in grid -->
          <form role="form">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label class="form-control-label" for="example3cols1Input">Provider</label>
                <input value="{{$social_setting->provider}}" readonly>
              </div>
            </div>
            <div class="col-md-6">
            <div class="form-group">
                <label class="form-control-label" for="example4cols1Input">Description</label>
                <textarea name="description" class="form-control"readonly>{{$social_setting->description}}</textarea>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label class="form-control-label" for="example2cols1Input">Icon</label>
                <input type="text" class="form-control" value="{{$social_setting->icon}}" readonly>
              </div>
            </div>
            <div class="col-md-6">
            <div class="form-group">
                <label class="form-control-label" for="example2cols1Input">Redirect Link</label>
                <input type="text" class="form-control" value="{{$social_setting->redirect_link}}" readonly>
              </div>
            </div>
          </div>
        
          <div class="row">
            <div class="col-md-6">
            <div class="form-group">
                <label class="form-control-label" for="example2cols2Input">Client Id</label>
                <input type="text" class="form-control" value="{{$social_setting->client_id}}" readonly>
               
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label class="form-control-label" for="example2cols2Input">Client Secret</label>
                <textarea name="client_secret" class="form-control"readonly>{{$social_setting->client_secret}}</textarea>
              </div>
            </div>
          </div> 
</form>
        </div>
      </div>
      

    </div>
@endsection
