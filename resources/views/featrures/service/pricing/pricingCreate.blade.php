@extends('layouts.dashboard')

@section('sidebar')
  @include('include.dashboard.role.admin.sidebar')
@endsection
<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script>
function check(elem) {
    // use one of possible conditions
   if (elem.value == 'Other'){
        document.getElementById("other-div").style.display = 'block';
    } else {
        document.getElementById("other-div").style.display = 'none';
    }
}
</script>

@section('content')
<div class="header bg-secondary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
            </div>
            <div class="col-lg-6 col-5 text-right">
            <!-- <a href="{{route('method.create')}}" class="btn btn-md btn-default">Add Method</a>  -->
             <a href="{{route('method.index')}}" class="btn btn-md btn-default">View</a> 
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
          <h1 class="title">Add Service Methods</h1>
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
          <form role="form" action="{{route('method.store')}}" method="POST" enctype="multipart/form-data">
          @csrf
          <input type="hidden" name = "service_slug" value={{$slug}}>
          <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label class="form-control-label" for="example4cols1Input">Method Title</label>
              <select id="mySelect" onChange="check(this);" class="form-control" id="method_title_id" name="method_title_id">
              <option>Choose Your Method Name</option>
              @foreach($methods as $method)              
              <option value="{{$method['id']}}">{{$method['method_title']}}</option>
              @endforeach
              <option>Other</option>
              </select>
            <div id="other-div" style="display:none;">
              <label class="form-control-label">Enter Method Title <input name="method_title" id="other-input"></input></label>
            </div>
            </div>
            </div>
            <div class="col-md-6">
            <div class="form-group">
              <label class="form-control-label" for="example4cols1Input">Position</label>
              <input type="text" class="form-control" placeholder="Enter Position" id="position" name="position">
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