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
                    <h1 class="mb-0">Staff </h1>
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

                    <form role="form" action="{{route('superadmin.staff.update',$staff['id'])}}">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-md-4 col-form-label form-control-label">First Name</label></label>
                                    <div class="col-md-8">
                                        <input style="color:black" name="fname" class="form-control @error('fname') is-invalid @enderror" type="text" value="{{$staff['fname']}}" id="fname">
                                    </div>
                                    @error('fname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-md-4 col-form-label form-control-label">Last Name</label></label>
                                    <div class="col-md-8">
                                        <input style="color:black" name="lname" class="form-control @error('lname') is-invalid @enderror" type="text" value="{{$staff['lname']}}" id="lname">
                                    </div>
                                    @error('lname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-md-4 col-form-label form-control-label">Email Id</label>
                                    <div class="col-md-8">
                                        <input style="color:black" name="email" class="form-control @error('email') is-invalid @enderror" type="text" value="{{$staff['email']}}" id="email">
                                    </div>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-md-4 col-form-label form-control-label">Contact</label>
                                    <div class="col-md-8">
                                        <input style="color:black" name="mobile_number" class="form-control @error('mobile_number') is-invalid @enderror" type="text" value="{{$staff['mobile_number']}}" id="mobile_number">
                                    </div>
                                    @error('mobile_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            {{-- <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-md-4 col-form-label form-control-label">Email Verified</label>
                                    <div class="col-md-8">
                                        <input class="form-control" value="{{$staff['email_verified_at']}}" name="email_verified_at" type="datetime-local" id="example-datetime-local-input">
                        </div>
                </div>
            </div>--}}
            {{-- <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-md-4 col-form-label form-control-label">Role</label>
                                    <div class="col-md-8">
                                    <select style="color:black" class="form-control" data-toggle="select" id="user_type" name="user_type">
                                            @foreach($roles as $role)
                                            <option value="{{$role['id']}}" <?php if ($role['id'] == $staff['role']['role_id']) echo 'selected="selected"'; ?>>{{$role['name']}}</option>
            @endforeach
            </select>
        </div>
    </div>
</div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="form-group row">
            <label for="example-text-input" class="col-md-4 col-form-label form-control-label">Status</label>
            <div class="col-md-8">

                <select style="color:black" class="form-control" id="status" name="status">
                    @if($staff['role']['is_activate'] == true)
                    <option value="true">Activate</option>
                    <option value="false">Inactivate</option>
                    @endif
                    @if($staff['role']['is_activate'] == false)
                    <option value="false">Inactivate</option>
                    <option value="true">Activate</option>
                    @endif
                </select>
            </div>
        </div>
    </div>
</div>--}}

<div class="text-center">
    {{-- <input name="role_id" value="{{$staff['role']['role_id']}}" type="hidden">--}}
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