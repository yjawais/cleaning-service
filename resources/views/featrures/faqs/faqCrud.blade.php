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
            <div class="card-header">
              <h1 class="mb-0">FAQ</h1>
              
            </div>
            <div class="table-responsive py-4">
              <table class="table table-flush" id="datatable-buttons">
                <thead class="thead-light">
                  <tr>
                    <th>Sr.No</th>
                    <th>Title</th>
                    <th>Type</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                
                <tbody>
               @foreach($faqs as $faq)
                  <tr>
                    <td>{{$sr=$sr+1}}</td>
                    <td>{{$faq['title']}}</td>
                    <td>{{$faq['type']}}</td>
                    @if($faq['is_activate'] === 1)
                   <td style="color:green">Activate</td>
                    @endif
                    @if($faq['is_activate'] === 0)
                    <td style="color:red">Deactivate</td>
                    @endif
                    <td> 
                   <button type="button" class="btn btn-success btn-icon-only rounded-circle" data-toggle="modal" data-target="#myModal-{{ $faq['id'] }}">

<i class="ni ni-album-2"></i>
</button>
<div class="modal fade" id="myModal-{{ $faq['id'] }}" tabindex="-1" role="dialog" aria-labelledby="myModal-{{ $faq['id'] }}" aria-hidden="false">
                    <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
                      <div class="modal-content">
                        <div class="modal-body p-0">
                          <div class="card bg-secondary border-0 mb-0">
                            <div class="card-header bg-transparent pb-5">
                              <div class="text-muted text-center mt-2 mb-3"><h1>FAQ</h1></div>
                              
                            </div>
                            <div class="card-body px-lg-5 py-lg-5">
                           
                              <form role="form">
                              <div class="form-group row">
                    <label for="example-text-input" class="col-md-4 col-form-label form-control-label">Title</label>
                    <div class="col-md-8">
                      <input class="form-control" type="text" value="{{$faq['title']}}" id="example-text-input" readonly>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="example-text-input" class="col-md-4 col-form-label form-control-label">Discription</label>
                    <div class="col-md-8">
                    <textarea name="detail" class="form-control" id="detail" readonly>{{$faq['detail']}}</textarea>
                    </div>
                  </div>    
                  <div class="form-group row">
                    <label for="example-text-input" class="col-md-4 col-form-label form-control-label">Type</label>
                    <div class="col-md-8">
                      <input class="form-control" type="text" value="{{$faq['type']}}" id="example-text-input" readonly>
                    </div>
                  </div>   
                  <div class="form-group row">
                    <label for="example-text-input" class="col-md-4 col-form-label form-control-label">Slug</label>
                    <div class="col-md-8">
                      <input class="form-control" type="text" value="{{$faq['slug']}}" id="example-text-input" readonly>
                    </div>
                  </div>   
                  <div class="form-group row">
                    <label for="example-text-input" class="col-md-4 col-form-label form-control-label">Status</label>
                    <div class="col-md-8">
                    @if($faq['is_activate'] == true)
                      <input class="form-control" type="text" value="Activate" id="example-text-input" readonly>
                      @endif
                      @if($faq['is_activate'] == false)
                      <input class="form-control" type="text" value="Deactivate" id="example-text-input" readonly>
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
<button type="button" class="btn btn-primary btn-icon-only rounded-circle" data-toggle="modal" data-target="#myModalEdit-{{ $faq['id'] }}">
<i class="ni ni-ruler-pencil" style="color:white"></i>
</button>
<div class="modal fade" id="myModalEdit-{{ $faq['id'] }}" tabindex="-1" role="dialog" aria-labelledby="myModalEdit-{{ $faq['id'] }}" aria-hidden="false">
                    <div class="modal-dialog modal- modal-dialog-centered modal-md" role="document">
                      <div class="modal-content">
                        <div class="modal-body p-0">
                          <div class="card bg-secondary border-0 mb-0">
                            <div class="card-header bg-transparent pb-5">
                              <div class="text-muted text-center mt-2 mb-3"><h1>FAQ</h1></div>
                               
                            </div>
                            <div class="card-body px-lg-5 py-lg-5">
                           
                              <form role="form" action="{{route('update.faq',$faq['id'])}}" method="POST">
                                @csrf
                              <div class="form-group row">
                    <label for="example-text-input" class="col-md-4 col-form-label form-control-label">Title</label>
                    <div class="col-md-8">
                      <input name="title" class="form-control" type="text" value="{{$faq['title']}}" id="example-text-input" >
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="example-text-input" class="col-md-4 col-form-label form-control-label">Discription</label>
                    <div class="col-md-8">
                     
                      <textarea name="description" class="form-control" id="description">{{$faq['detail']}}</textarea>
                    </div>
                  </div>  
                  <div class="form-group row">
                    <label for="example-text-input" class="col-md-4 col-form-label form-control-label">Type</label>
                    <div class="col-md-8">
                      <input name="type" class="form-control" type="text" value="{{$faq['type']}}" id="example-text-input" >
                    </div>
                  </div>     
                
                  <div class="form-group row">
                    <label for="example-text-input" class="col-md-4 col-form-label form-control-label">Status</label>
                    <div class="col-md-8">
                    
                  <select class="form-control" id="status" name="status">
                  @if($faq['is_activate'] == true)
                   <option value="true">Activate</option>
                   <option value="false">Inactivate</option>
                   @endif
                   @if($faq['is_activate'] == false)
                   <option value="false">Inactivate</option>
                   <option value="true">Activate</option>
                   @endif
                  </select>     
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
<a href="{{route('destroy.faq',$faq['id'])}}"><button type="button" class="btn btn-danger btn-icon-only rounded-circle">
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
                    <div class="modal-dialog modal- modal-dialog-centered modal-md" role="document">
                      <div class="modal-content">
                        <div class="modal-body p-0">
                          <div class="card bg-secondary border-0 mb-0">
                            <div class="card-header bg-transparent pb-5">
                              <div class="text-muted text-center mt-2 mb-3"><h1>FAQ</h1></div>
                              
                            </div>
                            <div class="card-body px-lg-5 py-lg-5">
                           
                              <form role="form" action="{{route('store.faq')}}" method="POST">
                                @csrf
              
                              <div class="form-group row">
                    <label for="example-text-input" class="col-md-4 col-form-label form-control-label">FAQ Title <req>*</req></label>
                    <div class="col-md-8">
                      
                      <input placeholder="Enter Title here" id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required  autofocus>

@error('title')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
</div>
                    </div>
                  <div class="form-group row">
                    <label for="example-text-input" class="col-md-4 col-form-label form-control-label">Discription <req>*</req></label>
                    <div class="col-md-8">
                    <textarea name="description" class="form-control @error('description') is-invalid @enderror" id="description" required autofocus></textarea>
                
@error('description')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                    </div>
                  </div>      
                  <div class="form-group row">
                    <label for="example-text-input" class="col-md-4 col-form-label form-control-label">Type <req>*</req></label>
                    <div class="col-md-8">
                    <select class="form-control @error('type') is-invalid @enderror"  data-trigger="" id="type" name="type">
                         <option value="landing" >Landing FAQ</option>
                          </select>
                          @error('type')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
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