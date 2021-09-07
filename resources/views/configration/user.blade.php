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
            <!-- <button type="button" class="btn btn-md btn-default" data-toggle="modal" data-target="#modal-form">New</button> -->
              <!-- <a href="#" class="btn btn-sm btn-neutral">New</a> 
          <a href="#" class="btn btn-sm btn-neutral">Filters</a> -->
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
              <h1 class="mb-0">Users</h1>
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
                    <th>Email Verified</th>
                    <th>Role</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                 
                <tbody>
               @foreach($users as $user)
                  <tr>
                    <td>{{$sr=$sr+1}}</td>
                    <td>{{$user['fname']}} {{$user['lname']}}</td>
                    <td>{{$user['email']}}</td>
                  
                      @if($user['email_verified_at'] == null)
                      <td style="color:red">No</td>
                      @endif
                      @if($user['email_verified_at'] != null)
                      <td style="color:green">Yes</td>
                      @endif                   

                    </td>
                    <td>{{$user['role_type']}}</td> 
                    @if($user['role']['is_activate'] === 1)
                   <td style="color:green">Activate</td>
                    @endif
                    @if($user['role']['is_activate'] === 0)
                    <td style="color:red">Deactivate</td>
                    @endif
                    <td> 
                   <button type="button" class="btn btn-success btn-icon-only rounded-circle" data-toggle="modal" data-target="#myModal-{{ $user['id']}}">

<i class="ni ni-album-2"></i> 
</button>
<div class="modal fade" id="myModal-{{ $user['id']}}" tabindex="-1" role="dialog" aria-labelledby="myModal-{{ $user['id']}}" aria-hidden="false">
                    <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
                      <div class="modal-content">
                        <div class="modal-body p-0">
                          <div class="card bg-secondary border-0 mb-0">
                            <div class="card-header bg-transparent pb-5">
                              <div class="text-muted text-center mt-2 mb-3"><h1>Users </h1></div>
                              
                            </div>
                            <div class="card-body px-md-5 py-md-5">
                           
                              <form role="form">
                              <div class="form-group row">
                    <label for="example-text-input" class="col-md-4 col-form-label form-control-label">Name</label>
                    <div class="col-md-8">
                      <input class="form-control" type="text" value="{{$user['fname']}} {{$user['lname']}}" id="example-text-input" disabled>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="example-text-input" class="col-md-4 col-form-label form-control-label">Email</label>
                    <div class="col-md-8">
                      <input class="form-control" type="text" value="{{$user['email']}}" id="example-text-input" disabled>
                    </div>
                  </div> 
                  <div class="form-group row">
                    <label for="example-text-input" class="col-md-4 col-form-label form-control-label">Contact</label>
                    <div class="col-md-8">
                      <input style="color:black" name="	mobile_number" class="form-control" type="text" value="{{$user['mobile_number']}}" id="example-text-input" disabled >
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="example-text-input" class="col-md-4 col-form-label form-control-label">Role</label>
                    <div class="col-md-8">
                     <input class="form-control" type="text" value="{{$user['role_type']}}" id="example-text-input" disabled>
                    </div>
                  </div>      
              <div class="form-group row">
                    <label for="example-text-input" class="col-md-4 col-form-label form-control-label">Status</label>
                    <div class="col-md-8">
                    @if($user['role']['is_activate'] == true)
                      <input class="form-control" type="text" value="Activate" id="example-text-input" disabled>
                      @endif
                      @if($user['role']['is_activate'] == false)
                      <input class="form-control" type="text" value="Deactivate" id="example-text-input" disabled>
                      @endif
                    </div>
                  </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div> 
<button type="button" class="btn btn-primary btn-icon-only rounded-circle" data-toggle="modal" data-target="#myModalEdit-{{ $user['id']}}">
<i class="ni ni-ruler-pencil" style="color:white"></i>
</button>
<div class="modal fade" id="myModalEdit-{{ $user['id']}}" tabindex="-1" role="dialog" aria-labelledby="myModalEdit-{{ $user['id']}}" aria-hidden="false">
                    <div class="modal-dialog modal- modal-dialog-centered modal-lg" role="document">
                      <div class="modal-content">
                        <div class="modal-body p-0">
                          <div class="card bg-secondary border-0 mb-0">
                            <div class="card-header bg-transparent pb-5">
                              <div class="text-muted text-center mt-2 mb-3"><h1>Users</h1></div>
                              
                            </div>
                            <div class="card-body px-lg-5 py-lg-5">
                           
                              <form role="form" action="{{route('superadmin.user.update',$user['id'])}}" method="POST">
                                @csrf
                                <div class="row">
                                  <div class="col-md-6">
                                  <div class="form-group row">
                    <label for="example-text-input" class="col-md-4 col-form-label form-control-label">First Name</label></label>
                    <div class="col-md-8">
                      <input style="color:black" name="fname" class="form-control" type="text" value="{{$user['fname']}}" id="example-text-input" >
                    </div>
                  </div>
                                  </div>
                                  <div class="col-md-6">
                                  <div class="form-group row">
                    <label for="example-text-input" class="col-md-4 col-form-label form-control-label">Last Name</label></label>
                    <div class="col-md-8">
                      <input style="color:black" name="lname" class="form-control" type="text" value="{{$user['lname']}}" id="example-text-input" >
                    </div>
                  </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-6">
                                  <div class="form-group row">
                    <label for="example-text-input" class="col-md-4 col-form-label form-control-label">Email Id</label>
                    <div class="col-md-8">
                      <input style="color:black" name="email" class="form-control" type="text" value="{{$user['email']}}" id="example-text-input" >
                    </div>
                  </div> 
                                  </div>
                                  <div class="col-md-6">
                                  <div class="form-group row">
                    <label for="example-text-input" class="col-md-4 col-form-label form-control-label">Contact</label>
                    <div class="col-md-8">
                      <input style="color:black" name="mobile_number" class="form-control" type="text" value="{{$user['mobile_number']}}" id="example-text-input" >
                    </div> 
                  </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-6">
                                  <div class="form-group row">
                    <label for="example-text-input" class="col-md-4 col-form-label form-control-label">Email Verified</label>
                    <div class="col-md-8">
                    <input class="form-control" value="{{$user['email_verified_at']}}" name="email_verified_at" type="datetime-local" id="example-datetime-local-input">
                    </div>
                  </div>   
                                  </div>
                                  <div class="col-md-6">
                                  <div class="form-group row">
                    <label for="example-text-input" class="col-md-4 col-form-label form-control-label">Role</label>
                    <div class="col-md-8">
                    <select style="color:black" class="form-control" data-toggle="select" id="user_type" name="user_type">
@foreach($roles as $role) 
<option value="{{$role['id']}}" <?php if($role['id'] == $user['role']['role_id']) echo'selected="selected"'; ?> >{{$role['name']}}</option>
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
                  @if($user['role']['is_activate'] == true)
                   <option value="true">Activate</option>
                   <option value="false">Inactivate</option>
                   @endif
                   @if($user['role']['is_activate'] == false)
                   <option value="false">Inactivate</option>
                   <option value="true">Activate</option>
                   @endif
                  </select>     
                    </div>
                  </div>    
</div> 
</div> 
                 
                  <div class="text-center">
                  <input name="role_id" value="{{$user['role']['role_id']}}" type="hidden">
                                  <button type="submit" class="btn btn-primary my-4">Submit</button>
                                </div>                               
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div> 
<a href="{{route('superadmin.user.destroy',$user['id'])}}"><button type="button" class="btn btn-danger btn-icon-only rounded-circle">
<i class="ni ni-scissors" style="color:white"></i>
</button>
 </a> 
                                      </td>
              
<!--                   
                    <td class="text-right">
                                      <div class="dropdown">
                                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          <i class="fas fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                          <a class="dropdown-item" href="#">View</a>
                                          <a class="dropdown-item" href="#">Edit</a>
                                          <a class="dropdown-item" href="#">Delete</a>
                                        </div>
                                      </div>
                                    </td> -->
                  </tr>
             @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

    </div>
    
    

    {{--    <div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="false">
                    <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
                      <div class="modal-content">
                        <div class="modal-body p-0">
                          <div class="card bg-secondary border-0 mb-0">
                            <div class="card-header bg-transparent pb-5">
                              <div class="text-muted text-center mt-2 mb-3"><h1>User Registration</h1></div>
                              
                            </div>
                            <div class="card-body px-lg-5 py-lg-5">
                           
                              <form role="form" action="{{route('superadmin.user.store')}}" method="POST">
                                @csrf
                              <div class="form-group row">
                    <label for="example-text-input" class="col-md-4 col-form-label form-control-label">Name</label></label>
                    <div class="col-md-8">
                      <input name="name" class="form-control" type="text"  id="name" >
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="example-text-input" class="col-md-4 col-form-label form-control-label">Email</label>
                    <div class="col-md-8">
                      <input name="email" class="form-control" type="text"  id="email" >
                    </div>
                  </div>   
                  
                  <div class="form-group row">
                    <label for="example-text-input" class="col-md-4 col-form-label form-control-label">User Type</label>
                    <div class="col-md-8">
                    <select style="color:black" class="form-control" data-toggle="select" id="user_type" name="user_type">
                    <option value="user">Select Role</option>
                      @foreach($roles as $role) 
                      <option value="{{$role['name']}}">{{$role['name']}}</option>
                      @endforeach
</select>    
                    </div>
                  </div>
                   
                  <div class="form-group row">
                    <label for="example-text-input" class="col-md-4 col-form-label form-control-label">Password</label>
                    <div class="col-md-8">
                      <input name="password" class="form-control" type="password"  id="password">
                    </div>
                  </div> 
                  <div class="form-group row">
                    <label for="example-text-input" class="col-md-4 col-form-label form-control-label">Password</label>
                    <div class="col-md-8">
                      <input name="password_confirm" class="form-control" type="password"  id="password_confirm">
                    </div>
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
                  </div> --}}
    

@endsection
