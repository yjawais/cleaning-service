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
          <h1 class="title">Update Social Provider</h1>
        </div>
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
        <!-- Card body -->
        <div class="card-body">
          <!-- Form groups used in grid -->
          <form role="form" action="{{route('social.update',$social_setting->id)}}" method="POST">
          @csrf
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label class="form-control-label" for="example3cols1Input">Provider</label>
                <input type="text" class="form-control" name="provider" id="provider" value="{{$social_setting->provider}}" required>
              </div>
            </div>
            <div class="col-md-6">
            <div class="form-group">
                <label class="form-control-label" for="example4cols1Input">Description</label>
                <textarea name="description" class="form-control">{{$social_setting->description}}</textarea>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label class="form-control-label" for="example2cols1Input">Icon</label>
                <input type="text" class="form-control" name="icon" id="icon" value="{{$social_setting->icon}}">
              </div>
            </div>
            <div class="col-md-6">
            <div class="form-group">
                <label class="form-control-label" for="example2cols1Input">Redirect Link</label>
                <input type="text" class="form-control" name="redirect_link" id="redirect_link" value="{{$social_setting->redirect_link}}" required>
              </div>
            </div>
          </div>
        
          <div class="row">
            <div class="col-md-6">
            <div class="form-group">
                <label class="form-control-label" for="example2cols2Input">Client Id</label>
                <input type="text" class="form-control" name="client_id" id="client_id" value="{{$social_setting->client_id}}">
               
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label class="form-control-label" for="example2cols2Input">Client Secret</label>
                <textarea name="client_secret" class="form-control">{{$social_setting->client_secret}}</textarea>
              </div>
            </div>
          </div> 
          <div class="row">
            <div class="col-md-6">
            <div class="form-group">
            <label for="example-text-input" class="form-control-label">Status</label>
                    <select class="form-control" id="status" name="status">
                  @if($social_setting->is_activate == true)
                   <option value="true">Activate</option>
                   <option value="false">Inactivate</option>
                   @endif
                   @if($social_setting->is_activate == false)
                   <option value="false">Inactivate</option>
                   <option value="true">Activate</option>
                   @endif
                  </select>     
              </div>
            </div>
            <div class="col-md-6">
           
            </div>
          </div> 
          <div class="text-center">
          <button type="reset" class="btn btn-danger my-4">Reset</button>
                                  <button type="submit" class="btn btn-primary my-4">Submit</button>
                                </div> 
</form>
        </div>
      </div>
      

    </div>
@endsection
