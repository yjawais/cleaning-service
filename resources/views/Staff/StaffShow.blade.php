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
                       <a class="btn btn-md btn-default" href="{{route('superadmin.staff')}}">Back</a> 
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
                    <h1 class="mb-0">Staff</h1>
{{--                   @if ($message = Session::get('success'))
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
--}}
                </div>
                <div class="card-body py-4">
                    <form role="form">
                        <div class="form-group row">
                            <label for="example-text-input" class="col-md-4 col-form-label form-control-label">Name</label>
                            <div class="col-md-8">
                                <input class="form-control" type="text" value="{{$staff['fname']}} {{$staff['lname']}}" id="example-text-input" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-md-4 col-form-label form-control-label">Email</label>
                            <div class="col-md-8">
                                <input class="form-control" type="text" value="{{$staff['email']}}" id="example-text-input" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-md-4 col-form-label form-control-label">Contact</label>
                            <div class="col-md-8">
                                <input style="color:black" name="	mobile_number" class="form-control" type="text" value="{{$staff['mobile_number']}}" id="example-text-input" disabled>
                            </div>
                        </div>
                        
                       {{-- <div class="form-group row">
                            <label for="example-text-input" class="col-md-4 col-form-label form-control-label">Role</label>
                            <div class="col-md-8">
                                <input class="form-control" type="text" value="{{$staff['role_type']}}" id="example-text-input" disabled>
                            </div>
                        </div>
                         <div class="form-group row">
                            <label for="example-text-input" class="col-md-4 col-form-label form-control-label">Status</label>
                            <div class="col-md-8">
                                @if($staff['role']['is_activate'] == true)
                                <input class="form-control" type="text" value="Activate" id="example-text-input" disabled>
                                @endif
                                @if($staff['role']['is_activate'] == false)
                                <input class="form-control" type="text" value="Deactivate" id="example-text-input" disabled>
                                @endif
                            </div>
                        </div> --}}
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>




@endsection