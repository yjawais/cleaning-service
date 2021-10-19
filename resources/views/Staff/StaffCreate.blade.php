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
                    <!-- <button type="button" class="btn btn-md btn-default" href="{{route('superadmin.staff')}}">Back</button> -->
                        <a class="btn btn-md btn-default " href="{{route('superadmin.staff')}}">Back</a> 
          <!-- <a href="#" class="btn btn-sm btn-neutral">Filters</a> --> 
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
                    <h1 class="mb-0">Staff Registration</h1>
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

                </div>
                <div class="card-body py-4">

                    <form role="form" action="{{route('superadmin.staff.store')}}" method="POST">
                        @csrf
                        <div class="form-group row">
                            <label for="example-text-input" class="col-md-4 col-form-label form-control-label">First Name</label>
                            <div class="col-md-8">
                                <input name="fname" class="form-control @error('fname') is-invalid @enderror" type="text" id="fname">
                            </div>
                            @error('fname')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-md-4 col-form-label form-control-label">Last Name</label>
                            <div class="col-md-8">
                                <input name="lname" class="form-control @error('lname') is-invalid @enderror" type="text" id="lname">
                            </div>
                            @error('lname')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-md-4 col-form-label form-control-label">Email</label>
                            <div class="col-md-8">
                                <input name="email" class="form-control @error('email') is-invalid @enderror" type="text" id="email">
                            </div>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-md-4 col-form-label form-control-label">Contact</label>
                            <div class="col-md-8">
                                <input name="mobile_number" class="form-control @error('mobile_number') is-invalid @enderror" type="text" id="mobile_number">
                            </div>
                            @error('mobile_number')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-md-4 col-form-label form-control-label">User Type</label>
                            <div class="col-md-8">
                                <select style="color:black" class="form-control" data-toggle="select" id="user_type" name="user_type">
                                 {{--   <option value="user">Select Role</option>
                                    @foreach($roles as $role)
                                    <option value="{{$role['name']}}">{{$role['name']}}</option>
                                    @endforeach--}}
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-md-4 col-form-label form-control-label">Password</label>
                            <div class="col-md-8">
                                <input name="password" class="form-control @error('password') is-invalid @enderror" type="password" id="password">
                            </div>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-md-4 col-form-label form-control-label">Password</label>
                            <div class="col-md-8">
                                <input name="password_confirm" class="form-control @error('password_confirm') is-invalid @enderror" type="password" id="password_confirm">
                            </div>
                            @error('password_confirm')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary my-4">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


@endsection