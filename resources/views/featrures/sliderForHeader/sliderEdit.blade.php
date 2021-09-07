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
             <a href="{{route('slider.index')}}" class="btn btn-md btn-default">View List</a> 
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
          <h1 class="title">Slider</h1>
        </div>
       
        <!-- Card body -->
        <div class="card-body">
          <!-- Form groups used in grid -->
          <form role="form">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label class="form-control-label" for="example3cols1Input">Slider For</label>
                <select class="form-control" for="slider_for" id="slider_for" name="slider_for">
                <option>{{$slider['slider_for']}}</option>
                </select>
              </div> 
            </div>
            <div class="col-md-6"> 
            <div class="form-group">
                <label class="form-control-label" for="example4cols1Input">Description</label>
                <textarea name="description" class="form-control" rows="5">{{$slider['description']}}</textarea>
              </div>
            </div>
          </div>
          <div class="row">
          <div class="col-md-6">
          <div class="form-group">
          <label class="form-control-label">Images</label>
           @php
                  $images = json_decode($slider['images']);
                  @endphp

              @foreach($images as $image)
              @php 
                $data = json_decode($image);
                @endphp
                <div class="col-md-4">
              <div class="form-group">
              <div class="input-group">
             
             <a href="{{$image_path}}{{$data->image}}" target="_blank">
                        <img src="{{$image_path}}{{$data->image}}" style="width: 300px; height: 200px"></a> 
                      
                </div>
                <button type="reset" class="btn btn-sm btn-danger">Delete</button>
                <button type="submit" class="btn btn-sm btn-success">Replace</button>
                </div>
              
                </div>  
                
               @endforeach

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
