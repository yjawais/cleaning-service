@extends('layouts.login')

@section('content')
<div class="page-header header-filter" filter-color="orange">
    <div class="page-header-image" style="background-image:url({{asset('img/login.jpg')}})"></div>
    <div class="content">
      <div class="container">
        <div class="col-md-5 ml-auto mr-auto">
          <div class="card card-login card-plain">
          @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
              <div class="card-header text-center">
                <div class="logo-container">
                  <img src="{{asset('img/now-logo.png')}}" alt="">
                </div>
              </div>
              <div class="card-body">
                <div class="input-group no-border input-lg">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="now-ui-icons users_circle-08"></i></span>
                  </div>
                 
                  <input placeholder="Enter Email Id" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required  autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>
              </div>
              <div class="card-footer text-center">
              <button type="submit" class="btn btn-primary btn-round btn-md btn-block">
              {{ __('Send Password Reset Link') }}
                                </button>
              </div>
              <div class="pull-left">
                <h6>
                  <a href="{{ route('register') }}" class="link footer-link">Create Account</a>
                </h6>
              </div> 
              <div class="pull-right">
                <h6>
                                    <a class="link footer-link" href="{{ route('login') }}">
                                        {{ __('Login') }}
                                    </a>
                </h6>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
