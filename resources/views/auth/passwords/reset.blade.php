@extends('layouts.login')

@section('content')

<div class="page-header header-filter" filter-color="orange">
    <div class="page-header-image" style="background-image:url({{asset('img/login.jpg')}})"></div>
    <div class="content">
      <div class="container">
        <div class="col-md-5 ml-auto mr-auto">
            
          <div class="card card-login card-plain">
          <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">
              <div class="card-header text-center">
                <div class="logo-container">
                  <img src="{{asset('img/now-logo.png')}}" alt="">
                </div>
                <h3>Reset Password</h3>
              </div>
              <div class="card-body">
                <div class="input-group no-border input-lg">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="now-ui-icons users_circle-08"></i></span>
                  </div>
                 
                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                </div>
                <div class="input-group no-border input-lg">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="now-ui-icons text_caps-small"></i></span>
                  </div>
                 <input placeholder="Enter New Password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>
                <div class="input-group no-border input-lg">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="now-ui-icons text_caps-small"></i></span>
                  </div>
                  <input placeholder="Enter Confirm Password" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                          
                </div>
            
              </div>
              <div class="card-footer text-center">
              <button type="submit" class="btn btn-primary btn-round btn-md btn-block">
              {{ __('Reset Password') }}
                                </button>

        {{--<a href="#pablo" class="btn btn-primary btn-round btn-lg btn-block">  {{ __('Login') }}</a>--}}
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
