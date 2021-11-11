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
                    <a class="btn btn-md btn-default" href="{{route('user')}}">Back</a>
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
                    <h1 class="mb-0">User</h1>
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

                    <form role="form" action="{{route('user.update',$user['id'])}}">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-md-4 col-form-label form-control-label">First Name</label></label>
                                    <div class="col-md-8">
                                        <input style="color:black" name="fname" class="form-control @error('fname') is-invalid @enderror" type="text" value="{{$user['fname']}}" id="fname">
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
                                        <input style="color:black" name="lname" class="form-control @error('lname') is-invalid @enderror" type="text" value="{{$user['lname']}}" id="lname">
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
                                        <input style="color:black" name="email" class="form-control @error('email') is-invalid @enderror" type="text" value="{{$user['email']}}" id="email">
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
                                        <input style="color:black" name="mobile_number" class="form-control @error('mobile_number') is-invalid @enderror" type="text" value="{{$user['mobile_number']}}" id="mobile_number">
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