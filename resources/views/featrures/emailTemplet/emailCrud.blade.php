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
            <button type="button" class="btn btn-md btn-default" data-toggle="modal" data-target="#modal-form">New</button>
              <!-- <a href="#" class="btn btn-sm btn-neutral">New</a> -->
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
              <h1 class="mb-0">Email Template</h1>
              
            </div>
            <div class="table-responsive py-4">
              <table class="table table-flush" id="datatable-buttons">
                <thead class="thead-light">
                  <tr>
                    <th>Sr.No</th>
                    <th>Email Type</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                
                <tbody>
               @foreach($emails as $email)
                  <tr>
                    <td>{{$sr=$sr+1}}</td>
                    <td>{{$email['email_type']}}</td>
                    @if($email['is_activate'] === 1)
                   <td style="color:green">Activate</td>
                    @endif
                    @if($email['is_activate'] === 0)
                    <td style="color:red">Deactivate</td>
                    @endif
                    <td> 
                   <button type="button" class="btn btn-success btn-icon-only rounded-circle" data-toggle="modal" data-target="#myModal-{{ $email['id'] }}">

<i class="ni ni-album-2"></i>
</button>
<div class="modal fade" id="myModal-{{ $email['id'] }}" tabindex="-1" role="dialog" aria-labelledby="myModal-{{ $email['id'] }}" aria-hidden="false">
                    <div class="modal-dialog modal- modal-dialog-centered modal-lg" role="document">
                      <div class="modal-content">
                        <div class="modal-body p-0">
                          <div class="card bg-secondary border-0 mb-0">
                            <div class="card-header bg-transparent pb-5">
                              <div class="text-muted text-center mt-2 mb-3"><h1>Email Template</h1></div>
                              
                            </div>
                            <div class="card-body px-lg-5 py-lg-5">
                           
                              <form role="form"> 
                              <div class="row">
                    <div class="col-md-6">
                    <div class="form-group">
                    <label for="example-text-input" class="col-md-4 col-form-label form-control-label">Email Type</label>
                    <input class="form-control" type="text" value="{{$email['email_type']}}" id="example-text-input" disabled>
                      </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                    <label for="example-text-input" class="col-md-4 col-form-label form-control-label">Status</label>
                    @if($email['is_activate'] == true)
                      <input class="form-control" type="text" value="Activate" id="example-text-input" disabled>
                      @endif
                      @if($email['is_activate'] == false)
                      <input class="form-control" type="text" value="Deactivate" id="example-text-input" disabled>
                      @endif
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="example-text-input" class="col-md-4 col-form-label form-control-label">Subject</label>
                    <div class="col-md-10">
                    <input class="form-control" type="text" value="{{$email['email_subject']}}" id="example-text-input" disabled>
                    </div>
                  </div> 
                  <div class="form-group row">
                    <label for="example-text-input" class="col-md-4 col-form-label form-control-label">Body</label>
                    <div class="col-md-10">
                    <textarea name="body" class="ckeditor form-control" disabled>{!!html_entity_decode($email['email_body'])!!}</textarea>
                    
                    </div>
                  </div>   
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div> 
<button type="button" class="btn btn-primary btn-icon-only rounded-circle" data-toggle="modal" data-target="#myModalEdit-{{ $email['id'] }}">
<i class="ni ni-ruler-pencil" style="color:white"></i>
</button>
<div class="modal fade" id="myModalEdit-{{ $email['id'] }}" tabindex="-1" role="dialog" aria-labelledby="myModalEdit-{{ $email['id'] }}" aria-hidden="false">
                    <div class="modal-dialog modal- modal-dialog-centered modal-lg" role="document">
                      <div class="modal-content">
                        <div class="modal-body p-0">
                          <div class="card bg-secondary border-0 mb-0">
                            <div class="card-header bg-transparent pb-5">
                              <div class="text-muted text-center mt-2 mb-3"><h1>Email Template</h1></div>
                              
                            </div>
                            <div class="card-body px-lg-5 py-lg-5">
                           
                              <form role="form" action="{{route('emailtemplet.update',$email['id'])}}" method="POST">
                                @csrf
                                <div class="row">
                    <div class="col-md-6">
                    <div class="form-group">
                    <label for="example-text-input" class="col-md-4 col-form-label form-control-label">Email Type</label>
                    <input name="email_type" class="form-control" type="text" value="{{$email['email_type']}}" id="example-text-input" >

                      </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                    <label for="example-text-input" class="col-md-4 col-form-label form-control-label">Status</label>
                    <select class="form-control" id="status" name="status">
                  @if($email['is_activate'] == true)
                   <option value="true">Activate</option>
                   <option value="false">Inactivate</option>
                   @endif
                   @if($email['is_activate'] == false)
                   <option value="false">Inactivate</option>
                   <option value="true">Activate</option>
                   @endif
                  </select>     
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="example-text-input" class="col-md-4 col-form-label form-control-label">Subject</label>
                    <div class="col-md-10">
                    <input name="email_subject" class="form-control" type="text" value="{{$email['email_subject']}}" id="example-text-input">

                    </div>
                  </div>  
                            
                  <div class="form-group row">
                    <label for="example-text-input" class="col-md-4 col-form-label form-control-label">Body</label>
                    <div class="col-md-10">
                    <textarea  class="ckeditor form-control" name="body">{!!html_entity_decode($email['email_body'])!!}</textarea>
                     
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
                  </div> 
<a href="{{route('emailtemplet.destroy',$email['id'])}}"><button type="button" class="btn btn-danger btn-icon-only rounded-circle">
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
    
    

    <div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="false">
                    <div class="modal-dialog modal- modal-dialog-centered modal-lg" role="document">
                      <div class="modal-content">
                        <div class="modal-body p-0">
                          <div class="card bg-secondary border-0 mb-0">
                            <div class="card-header bg-transparent pb-5">
                              <div class="text-muted text-center mt-2 mb-3"><h1>Email Template</h1></div>
                              
                            </div>
                            <div class="card-body px-lg-5 py-lg-5">
                           
                              <form role="form" action="{{route('emailtemplet.store')}}" method="POST">
                                @csrf
                              <div class="form-group row">
                    <label for="example-text-input" class="col-md-4 col-form-label form-control-label">Email Type</label>
                    <div class="col-md-10">
                      <input name="email_type" class="form-control" type="text"  id="example-text-input" >
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="example-text-input" class="col-md-4 col-form-label form-control-label">Subject</label>
                    <div class="col-md-10">
                      <input name="email_subject" class="form-control" type="text"  id="example-text-input" >
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="example-text-input" class="col-md-4 col-form-label form-control-label">Body</label>
                    <div class="col-md-10">
                    <textarea  class="ckeditor form-control" name="body"></textarea>
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
                  </div> 
    

@endsection