<nav class="navbar navbar-ct-azure navbar-transparent navbar-fixed-top" role="navigation">
    <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button id="menu-toggle" type="button" class="navbar-toggle">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar bar1"></span>
        <span class="icon-bar bar2"></span>
        <span class="icon-bar bar3"></span>
      </button>
      <a class="navbar-brand" href="#">GSDKit</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
            <li class="active">
                <a href="{{route('aboutus')}}">
                     About Us
                </a>
            </li>
            <li>
                <a href="#">
                     FAQ
                </a>
            </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
            <li class="active">
                <a href="#">
                     Discover
                </a>
            </li>
            <li>
                <a href="#">
                     Stats
                </a>
            </li>
            @guest
            <li>
                <a href="{{ route('login') }}">
                <i class="pe-7s-user"></i> Login Page
              </a>
          </li>
          @if (Route::has('register'))
          <li >
              <a  href="{{ route('register') }}">
                <i class="fa fa-edit"></i> Signup Page
              </a>
          </li>
          @endif

          @else
            <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    Settings 
                    <b class="caret"></b>
                  </a>
                  <ul class="dropdown-menu dropdown-with-icons">
                    <li>
                        <a href="#">
                            <i class="pe-7s-user"></i> Account
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="pe-7s-mail"></i> Messages
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="pe-7s-portfolio"></i> Business Area
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="pe-7s-light"></i> Smart Area
                        </a>
                    </li>
                    <li>
                    
                        <a href="#">
                            <i class="pe-7s-tools"></i> Settings
                        </a>
                    </li>
                    <li>
                         
                            
                            <a class="text-danger" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                       <i class="pe-7s-close-circle"></i> {{ __('Logout ') }}
              
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                        </a>
                    </li>
                    @endguest 
                  </ul>
            </li>
       </ul>
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<!-- <li class="nav-item">
          <a class="nav-link" href="./examples/profile-page.html">
                <i class="now-ui-icons users_single-02"></i> Profile Page
              </a>
             </li>
             @guest
             <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">
                <i class="now-ui-icons users_circle-08"></i> Login Page
              </a>
          </li>
          @if (Route::has('register'))
          <li class="nav-item">
              <a class="nav-link" href="{{ route('register') }}">
                <i class="now-ui-icons tech_mobile"></i> Signup Page
              </a>
          </li>
          @endif
                        @else
                        <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown">
              <i class="now-ui-icons design_image" aria-hidden="true"></i>
              <p>{{ Auth::user()->name }}</p>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}>
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
            </div>
          </li>
              @endguest 
        </ul> -->
