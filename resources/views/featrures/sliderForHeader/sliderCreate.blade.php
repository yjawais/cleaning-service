@extends('layouts.dashboard')

@section('sidebar')
  @include('include.dashboard.role.admin.sidebar')
@endsection
<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>

@section('content')
<div class="header bg-secondary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
            </div>
            <div class="col-lg-6 col-5 text-right">
             <a href="{{route('slider.index')}}" class="btn btn-md btn-default">View</a> 
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
          <h1 class="title">Create Slider</h1>
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
          <form role="form" action="{{route('slider.store')}}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label class="form-control-label" for="example3cols1Input">Slider For</label>
                <select class="form-control" for="slider_for" id="slider_for" name="slider_for" required>             
                <option>Select For</option>
                <option value="welcome-page">Welcome Page</option>
                <option value="ecomerce-product-page">Ecomerce Product Page</option>
                </select>
              </div>
            </div>
            <div class="col-md-6"> 
            <div class="form-group">
                <label class="form-control-label" for="example4cols1Input">Description</label>
                <textarea name="description" class="form-control" rows="5"></textarea>
              </div>
            </div>
          </div>
          <div class="row">
          <div class="col-md-6">
          <div class="form-group">
              <label class="form-control-label">Images</label>
                  <input  type="file" name="images[]" class="form-control" multiple="" required/>
                </div>
                </div>
                <div class="col-md-6">
        
              </div>
                </div>        
          <div class="row">
          <div class="col-md-5"></div>
          <div class="col-md-6">
          <button type="reset" class="btn btn-danger">Reset</button>
          <button type="submit" class="btn btn-success">Submit</button>
          </div>
          </div>
            </div>
          </div>
         </form>
        </div>

@endsection
