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
             <a href="{{route('unit.index')}}" class="btn btn-md btn-default">View</a> 
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
          <h1 class="title">Add Service Method Units</h1>
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
          <form role="form" action="{{route('unit.store')}}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label class="form-control-label" for="example4cols1Input">Service ID</label>
              <input type="number" class="form-control" placeholder="Enter Service ID" id="service_id" name="service_id">
            </div>
            </div>
            <div class="col-md-6">
            <div class="form-group">
              <label class="form-control-label" for="example4cols1Input">Method ID</label>
              <input type="number" class="form-control" placeholder="Enter Method ID" id="method_id" name="method_id">
            </div>
            </div>
            <div class="col-md-6">
            <div class="form-group">
              <label class="form-control-label" for="example4cols1Input">Unit Title</label>
              <input type="text" class="form-control" placeholder="Enter Unit Title" id="unit_title" name="unit_title">
            </div>
            </div>
            <div class="col-md-6">
            <div class="form-group">
              <label class="form-control-label" for="example4cols1Input">Base Price</label>
              <input type="text" class="form-control" placeholder="Enter Base Price" id="base_price" name="base_price">
            </div>
            </div>
            <div class="col-md-6">
            <div class="form-group">
              <label class="form-control-label" for="example4cols1Input">Minimum Limit</label>
              <input type="number" class="form-control" placeholder="Enter Minimum Limit" id="min_limit" name="min_limit">
            </div>
            </div>
            <div class="col-md-6">
            <div class="form-group">
              <label class="form-control-label" for="example4cols1Input">Maximum Limit</label>
              <input type="number" class="form-control" placeholder="Enter Maximum Limit" id="max_limit" name="max_limit">
            </div>
            </div>
            <div class="col-md-6">
            <div class="form-group">
              <label class="form-control-label" for="example4cols1Input">Position</label>
              <input type="text" class="form-control" placeholder="Enter Position" id="position" name="position">
            </div>
            </div>
            <div class="col-md-6">
            <div class="form-group">
              <label class="form-control-label" for="example4cols1Input">Limit Title</label>
              <input type="text" class="form-control" placeholder="Enter Limit Title" id="limit_title" name="limit_title">
            </div>
            </div>
            <div class="col-md-6">
            <div class="form-group">
              <label class="form-control-label" for="example4cols1Input">Unit Symbol</label>
              <input type="text" class="form-control" placeholder="Enter Unit Symbol" id="unit_symbol" name="unit_symbol">
            </div>
            </div>
            <div class="col-md-6">
            <div class="form-group">
              <label class="form-control-label" for="example4cols1Input">Half Section</label>
              <input type="text" class="form-control" placeholder="Enter Half Section" id="half_section" name="half_section">
            </div>
            </div>
            <div class="col-md-6">
            <div class="form-group">
              <label class="form-control-label" for="example4cols1Input">Duration</label>
              <input type="text" class="form-control" placeholder="Enter Half Section" id="duration" name="duration">
            </div>
            </div>
          </div>
       
          <div class="row">
          <div class="col-md-5"></div>
          <div class="col-md-6">
          <button type="reset" class="btn btn-danger">Reset</button>
          <button type="submit" class="btn btn-success">Submit</button>
          </div>
          </div>
         </form>
        </div>

@endsection