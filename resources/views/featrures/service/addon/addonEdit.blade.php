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
             <a href="{{route('addon.index')}}" class="btn btn-md btn-default">View Addons</a> 
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
          <h1 class="title">Service Addon</h1>
        </div>
       
        <!-- Card body -->
        <div class="card-body">
          <!-- Form groups used in grid -->
          <form role="form" action="{{route('addon.update',$addon['id'])}}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="row">
          <div class="col-md-6">
            <div class="form-group">
            <label class="form-control-label" for="example4cols1Input">Service ID</label>
            <input type="number" class="form-control" id="serviceid" placeholder="Enter Service ID" name="serviceid" value="{{$addon['service_id']}}" >
            </div>
            </div>
            <div class="col-md-6"> 
            <div class="form-group">
            <label class="form-control-label" for="example4cols1Input">Service Addon Name</label>
            <input type="text" class="form-control" id="servicename" placeholder="Enter Addon Service Name" name="servicename" value="{{$addon['service_name']}}" >
            </div>
            </div>
            <div class="col-md-6">
            <div class="form-group">
            <label class="form-control-label" for="example4cols1Input">Base Price</label>
            <input type="text" id="baseprice" placeholder="Enter Base Price" class="form-control" name="baseprice" value="{{$addon['base_price']}}" >
            </div>
            </div>
            <div class="col-md-6">
            <div class="form-group">
              <label class="form-control-label" for="example4cols1Input">Max Quantity</label>
              <input type="number" class="form-control" id="maxquantity" placeholder="Enter Maximum Quantity" name="maxquantity" value="{{$addon['max_quantity']}}" >
            </div>
            </div>
            <div class="col-md-6">
            <div class="form-group">
              <label class="form-control-label" for="example4cols1Input">Image</label>
              <input  type="text" name="image" class="form-control" value="{{$addon['image']}}"  />
            </div>
            </div>
            <div class="col-md-6">
            <div class="form-group">
              <label class="form-control-label" for="example4cols1Input">Multiple Quantity</label>
              <input type="text" class="form-control" id="multiplequantity" placeholder="Enter Multiple Quantity" name="multiplequantity" value="{{$addon['multiple_quantity']}}" >
            </div>
            </div>  
            <div class="col-md-6">
            <div class="form-group">
              <label class="form-control-label" for="example4cols1Input">Position</label>
              <input type="text" class="form-control" placeholder="Enter Position" id="position" name="position" value="{{$addon['position']}}" >
            </div>
            </div>
            <div class="col-md-6">
            <div class="form-group">
              <label class="form-control-label" for="example4cols1Input">Predefine Image</label>
              <input  type="text" name="predefineimage" class="form-control" value="{{$addon['predefine_image']}}"  />
            </div>
            </div>
            <div class="col-md-6">
            <div class="form-group">
              <label class="form-control-label" for="example4cols1Input">Predefine Image Title</label>
              <input type="text" class="form-control" id="predefineimagetitle" placeholder="Enter Title of Predefine Image" name="predefineimagetitle" value="{{$addon['predefine_image_title']}}" >
            </div>
            </div>
            <div class="col-md-7">
            <div class="form-group">
              <label class="form-control-label" for="example4cols1Input">Addon Description</label>
              <textarea name="addondescription" id="addondescription" placeholder="Enter Addon Description" class="form-control" rows="5">{{$addon['addon_description']}}</textarea>
            </div>
            </div>
            <div class="col-md-6">
            <div class="form-group">
              <label class="form-control-label" for="example4cols1Input">Duration</label>
              <input type="text" class="form-control" id="duration" placeholder="Enter Duration" name="duration" value="{{$addon['duration']}}" >
            </div>
            </div>
                </div>
                <!-- <div class="col-md-6">
                <button type="submit" class="btn btn-success">Submit</button>
              </div> -->
                </div>        
          <div class="row">
          <div class="col-md-5"></div>
          <div class="col-md-6">

          <button type="submit" class="btn btn-success">Submit</button>
          </div>
          </div>
            </div>
          </div>
         </form>
        </div>

@endsection