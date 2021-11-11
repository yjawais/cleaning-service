 <!-- Sidenav -->
 <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  d-flex  align-items-center">
        <a class="navbar-brand" href="{{route('home')}}">
          <!-- <img src="{{asset('adminPanel/img/brand/kaliba.png')}}" class="navbar-brand-img" alt="..."> -->
          KALIBA
        </a>
        
        <div class=" ml-auto ">
          <!-- Sidenav toggler -->
          <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
            <div class="sidenav-toggler-inner">
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
            </div>
          </div>
        </div>
      </div>
      
  
  
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
              <li class="nav-item">
                  
                  <a class="nav-link" href="{{route('home')}}" aria-controls="navbar-dashboards">
                      <i class="ni ni-badge text-primary"></i>
                    <span class="nav-link-text"> {{ Auth::user()->roles[0]->name }}  </span>
                  </a>
                </li>

            <li class="nav-item">
              <a class="nav-link" href="#navbar-dashboards" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-dashboards">
                <i class="ni ni-shop text-info"></i>
                <span class="nav-link-text">Dashboards</span>
              </a>
              <div class="collapse" id="navbar-dashboards">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a href="" class="nav-link">
                      <span class="sidenav-mini-icon"> D </span>
                      <span class="sidenav-normal"> Dashboard </span>
                    </a>
                  </li>
                 
                </ul>
              </div>
            </li>
          
            <li class="nav-item">
              <a class="nav-link" href="#navbar-components" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-components">
                <i class="ni ni-ui-04 text-info"></i>
                <span class="nav-link-text">Configration</span>
              </a>
              <div class="collapse" id="navbar-components">
                <ul class="nav nav-sm flex-column">
                <li class="nav-item">
                    <a href="{{route('emailtemplet.view')}}" class="nav-link">
                      <span class="sidenav-mini-icon"> E </span>
                      <span class="sidenav-normal">Email Template</span>
                    </a>
                  </li>
                
                  <li class="nav-item">
                    <a href="{{route('superadmin.languagecode')}}" class="nav-link">
                      <span class="sidenav-mini-icon"> L </span>
                      <span class="sidenav-normal"> Language Code </span>
                    </a>
                  </li>
       

                  <li class="nav-item">
                    <a href="{{route('smstemplet.view')}}" class="nav-link">
                      <span class="sidenav-mini-icon"> S </span>
                      <span class="sidenav-normal">SMS Template</span>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a href="{{route('social.index')}}" class="nav-link">
                      <span class="sidenav-mini-icon"> S </span>
                      <span class="sidenav-normal">Social Settings</span>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a href="#navbar-multilevel-user" class="nav-link" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-multilevel-user">
                      <span class="sidenav-mini-icon"> U </span>
                      <span class="sidenav-normal"> User </span>
                    </a>
                    <div class="collapse show" id="navbar-multilevel-user" style="">
                      <ul class="nav nav-sm flex-column">
                        <li class="nav-item">
                          <a href="{{route('superadmin.typeofrole')}}" class="nav-link ">User Role Type</a>
                        </li>
                        <li class="nav-item">
                          <a href="{{route('superadmin.user')}}" class="nav-link ">User</a>
                        </li>
                      </ul>
                    </div>
                  </li>

                </ul>
              </div>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#navbar-page-settings" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-page-settings">
                <i class="ni ni-ui-04 text-info"></i>
                <span class="nav-link-text">Page Setting</span>
              </a>
              <div class="collapse" id="navbar-page-settings">
                <ul class="nav nav-sm flex-column">
                
                  <li class="nav-item">
                    <a href="{{route('index.faq')}}" class="nav-link">
                      <span class="sidenav-mini-icon"> F </span>
                      <span class="sidenav-normal">Faq Page</span>
                    </a>
                  </li>
              
                <li class="nav-item">
                    <a href="{{route('slider.index')}}" class="nav-link">
                      <span class="sidenav-mini-icon"> S </span>
                      <span class="sidenav-normal">Slider</span>
                    </a>
                  </li>

                </ul>
              </div>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#navbar-features" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-features">
                <i class="ni ni-ui-04 text-info"></i>
                <span class="nav-link-text">Features</span>
              </a>
              <div class="collapse" id="navbar-features">
                <ul class="nav nav-sm flex-column">
                
                <li class="nav-item">
                    <a href="{{route('service.index')}}" class="nav-link">
                      <span class="sidenav-mini-icon"> S </span>
                      <span class="sidenav-normal">Services</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('payment.index')}}" class="nav-link">
                      <span class="sidenav-mini-icon"> P </span>
                      <span class="sidenav-normal">Payment</span>
                    </a>
                  </li>
                 

                </ul>
              </div>

            </li>
   
            <li class="nav-item">
              <a class="nav-link" href="#navbar-users" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-users">
                <i class="ni ni-ui-04 text-info"></i>
                <span class="nav-link-text">Users</span>
              </a>
              <div class="collapse" id="navbar-users">
                <ul class="nav nav-sm flex-column">
                
                  <li class="nav-item">
                    <a href="{{route('superadmin.staff')}}" class="nav-link">
                      <span class="sidenav-mini-icon"> S </span>
                      <span class="sidenav-normal">Staff</span>
                    </a>
                  </li>
              
                <li class="nav-item">
                    <a href=" " class="nav-link">
                      <span class="sidenav-mini-icon"> U </span>
                      <span class="sidenav-normal">User</span>
                    </a>
                  </li>

                </ul>
              </div>
            </li>         
           </ul>
          <!-- Divider -->
          <hr class="my-3">
          <!-- Heading -->
          <!-- <h6 class="navbar-heading p-0 text-muted">
            <span class="docs-normal">Documentation</span>
            <span class="docs-mini">D</span>
          </h6> -->
          <!-- Navigation -->
          <!-- <ul class="navbar-nav mb-md-3">
            <li class="nav-item">
              <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard-pro/docs/getting-started/overview.html" target="_blank">
                <i class="ni ni-spaceship"></i>
                <span class="nav-link-text">Getting started</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard-pro/docs/foundation/colors.html" target="_blank">
                <i class="ni ni-palette"></i>
                <span class="nav-link-text">Foundation</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard-pro/docs/components/alerts.html" target="_blank">
                <i class="ni ni-ui-04"></i>
                <span class="nav-link-text">Components</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard-pro/docs/plugins/charts.html" target="_blank">
                <i class="ni ni-chart-pie-35"></i>
                <span class="nav-link-text">Plugins</span>
              </a>
            </li>
          </ul> -->
        </div>
      </div>
    </div>
  </nav>
  