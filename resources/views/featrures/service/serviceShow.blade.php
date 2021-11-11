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
             <a href="{{route('service.index')}}" class="btn btn-md btn-default">View Service</a> 
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
          <h1 class="title">Service</h1>
        </div>
       
        <!-- Card body -->
        <div class="card-body">
          <!-- Form groups used in grid -->
          <form role="form">
          <div class="row">
          <div class="col-md-8">
            <div class="form-group">
              <label class="form-control-label" for="example4cols1Input">Title</label>
              <input type="text" class="form-control" placeholder="Enter Service Title" id="title" name="title" readonly value="{{$servicee['title']}}">
            </div>
            </div>
            <div class="col-md-8"> 
            <div class="form-group">
                <label class="form-control-label" for="example4cols1Input">Description</label>
                <textarea name="description" id="description" placeholder="Enter Service Description" class="form-control" rows="5" readonly>{{$servicee['description']}}</textarea>
            </div>
            </div>
            <div class="col-md-8">
            <div class="form-group">
              <label class="form-control-label" for="example4cols1Input">Color</label>
              <input type="color" class="form-control" id="color" name="color" style="height:75px; width:95px; background-color: white;" value="{{$servicee['color']}}" disabled>
            </div>
            </div>
            <div class="col-md-8">
            <div class="form-group">
              <label class="form-control-label" for="example4cols1Input">Image</label>
              <input type="text" class="form-control" placeholder="Enter Link Of Image" id="image" name="image"  readonly value="{{$servicee['image']}}">
            </div>
            </div>
            <div class="col-md-8">
            <div class="form-group">
              <label class="form-control-label" for="example4cols1Input">Position</label>
              <input type="text" class="form-control" placeholder="Enter Position" id="position" name="position"  readonly value="{{$servicee['position']}}">
            </div>
            </div>

        </div>        
          </div>
         </form>
        </div>

@endsection
