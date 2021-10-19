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
                    <!-- <button type="button" class="btn btn-md btn-default" href="{{route('superadmin.staff.create')}}">New</button> -->
                    <a href="{{route('superadmin.staff.create')}}" class="btn btn-md btn-default">New</a>
                    <!-- <a href="#" class="btn btn-sm btn-default">Filters</a> -->
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
                <div class="table-responsive py-4">
                    <table class="table table-flush" id="datatable-buttons">
                        <thead class="thead-light">
                            <tr>
                                <th>Sr.No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Mobile Number</th>
                                <th>Email Verified</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($staffs as $staff)
                            <tr>
                                <td>{{$sr=$sr+1}}</td>
                                <td>{{$staff['fname']}} {{$staff['lname']}}</td>
                                <td>{{$staff['email']}}</td>
                                <td>{{$staff['mobile_number']}}</td>
                                @if($staff['email_verified_at'] == null)
                                <td style="color:red">No</td>
                                @endif
                                @if($staff['email_verified_at'] != null)
                                <td style="color:green">Yes</td>
                                @endif

                                {{-- </td>
                                @if($staff['role']['is_activate'] === 1)
                                <td style="color:green">Activate</td>
                                @endif
                                @if($staff['role']['is_activate'] === 0)
                                <td style="color:red">Deactivate</td>
                                @endif--}}
                                <td>
                                    <a href="{{route('superadmin.staff.show',$staff['id'])}}"><button type="button" class="btn btn-success btn-icon-only rounded-circle">

                                            <i class="ni ni-album-2"></i>
                                        </button></a>

                                    <a href="{{route('superadmin.staff.edit',$staff['id'])}}"><button type="button" class="btn btn-primary btn-icon-only rounded-circle">
                                            <i class="ni ni-ruler-pencil" style="color:white"></i>
                                        </button></a>

                                    <a href="{{route('superadmin.staff.destroy',$staff['id'])}}"><button type="button" class="btn btn-danger btn-icon-only rounded-circle">
                                            <i class="ni ni-scissors" style="color:white"></i>
                                        </button>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>


@endsection