          <!-- Menu -->

          <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
              <div class="app-brand demo">
                  <a href="{{url('/home/dashboard')}}" class="app-brand-link">
                      <span class="app-brand-logo demo">
                          <img src="{{asset('assets/img/logo.png')}}" alt class="w-px-40 h-auto rounded-circle" />
                      </span>
                      <span class="app-brand-text demo menu-text fw-bolder ms-2">{{Session()->get('name')}}</span>
                  </a>

                  <a href="javascript:void(0);"
                      class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                      <i class="bx bx-chevron-left bx-sm align-middle"></i>
                  </a>
              </div>

              <div class="menu-inner-shadow"></div>

              <ul class="menu-inner py-1">
                  <!-- Dashboard -->
                  <li class="menu-item {{ request()->is('home/dashboard') ? 'active' : '' }}">
                      <a href="{{url('/home/dashboard')}}" class="menu-link text-dark">
                          <i class="menu-icon tf-icons bx bx-home-circle"></i>
                          <div data-i18n="Analytics">Dashboard</div>
                      </a>
                  </li>

                  <!-- Layouts -->
                  <li class="menu-item">
                      <a href="javascript:void(0);" class="menu-link menu-toggle text-dark">
                          <i class="menu-icon tf-icons bx bx-layout"></i>
                          <div data-i18n="Layouts">Website Settings</div>
                      </a>

                      <ul class="menu-sub">
                          <li class="menu-item {{ request()->is('home/manage-staff') ? 'active' : '' }}">
                              <a href="{{url('/home/manage-staff')}}" class="menu-link text-dark">
                                  <div data-i18n="Without menu">Staff Details</div>
                              </a>
                          </li>
                          <li class="menu-item {{ request()->is('home/gallery') ? 'active' : '' }}">
                              <a href="{{url('/home/gallery')}}" class="menu-link text-dark">
                                  <div data-i18n="Without navbar">Gallery</div>
                              </a>
                          </li>
                          <li class="menu-item {{ request()->is('home/blogs') ? 'active' : '' }}">
                              <a href="{{url('/home/blogs')}}" class="menu-link text-dark">
                                  <div data-i18n="Without navbar">Blogs</div>
                              </a>
                          </li>
                          <li class="menu-item">
                              <a href="layouts-container.html" class="menu-link text-dark">
                                  <div data-i18n="Container">Announcements</div>
                              </a>
                          </li>
                         
                          
                      </ul>
                  </li>

                  <li class="menu-header small text-uppercase text-dark">
                      <span class="menu-header-text">Pages</span>
                  </li>
                  <li class="menu-item">
                      <a href="javascript:void(0);" class="menu-link menu-toggle text-dark">
                          <i class="menu-icon tf-icons bx bx-dock-top"></i>
                          <div data-i18n="Account Settings">Backoffice</div>
                      </a>
                      <ul class="menu-sub">
                          <li class="menu-item">
                              <a href="pages-account-settings-account.html" class="menu-link text-dark">
                                  <div data-i18n="Account">Account</div>
                              </a>
                          </li>
                          <li class="menu-item">
                              <a href="pages-account-settings-notifications.html" class="menu-link text-dark">
                                  <div data-i18n="Notifications">Notifications</div>
                              </a>
                          </li>
                          <li class="menu-item">
                              <a href="pages-account-settings-connections.html" class="menu-link text-dark">
                                  <div data-i18n="Connections">Connections</div>
                              </a>
                          </li>
                      </ul>
                  </li>
                  <li class="menu-item">
                      <a href="javascript:void(0);" class="menu-link menu-toggle text-dark">
                          <i class="menu-icon tf-icons bx bx-lock-open-alt"></i>
                          <div data-i18n="Authentications">Transactions</div>
                      </a>
                      <ul class="menu-sub">
                          <li class="menu-item">
                              <a href="auth-login-basic.html" class="menu-link text-dark" target="_blank">
                                  <div data-i18n="Basic">Login</div>
                              </a>
                          </li>
                          <li class="menu-item">
                              <a href="auth-register-basic.html" class="menu-link text-dark" target="_blank">
                                  <div data-i18n="Basic">Register</div>
                              </a>
                          </li>
                          <li class="menu-item">
                              <a href="auth-forgot-password-basic.html" class="menu-link text-dark" target="_blank">
                                  <div data-i18n="Basic">Forgot Password</div>
                              </a>
                          </li>
                      </ul>
                  </li>
                  <li class="menu-item">
                      <a href="javascript:void(0);" class="menu-link menu-toggle text-dark">
                          <i class="menu-icon tf-icons bx bx-cube-alt"></i>
                          <div data-i18n="Misc">Due Forms</div>
                      </a>
                      <ul class="menu-sub">
                          <li class="menu-item">
                              <a href="pages-misc-error.html" class="menu-link text-dark">
                                  <div data-i18n="Error">Error</div>
                              </a>
                          </li>
                          <li class="menu-item">
                              <a href="pages-misc-under-maintenance.html" class="menu-link text-dark">
                                  <div data-i18n="Under Maintenance">Under Maintenance</div>
                              </a>
                          </li>
                      </ul>
                  </li>
                 


                 
                  
                  
                 
              </ul>
          </aside>
          <!-- / Menu -->