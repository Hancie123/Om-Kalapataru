<!-- Navbar -->

<nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
    id="layout-navbar">
    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
            <i class="bx bx-menu bx-sm"></i>
        </a>
    </div>

    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
        <!-- Search -->
        <div class="navbar-nav align-items-center">
            <div class="nav-item d-flex align-items-center">
                <i class="bx bx-search fs-4 lh-0"></i>
                <input type="text" class="form-control border-0 shadow-none" placeholder="Search..."
                    aria-label="Search..." />
            </div>
        </div>
        <!-- /Search -->

        <ul class="navbar-nav flex-row align-items-center ms-auto">
            <!-- Place this tag where you want the button to render. -->

            <li class="nav-item lh-1  me-1 mt-2">
                <iframe scrolling="no" border="0" frameborder="0" marginwidth="0" marginheight="0"
                    allowtransparency="true"
                    src="https://www.ashesh.com.np/linknepali-time.php?dwn=only&font_color=333333&font_size=14&bikram_sambat=0&api=731273n184"
                    width="115" height="23">
                </iframe>

            </li>

            <li class="nav-item lh-1 me-2 mt-2 dropdown navbar-dropdown dropdown-user">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown"><i
                        class='bx bx-bell bx-sm notification-icon'>
                        @if(count($contact)>=1)
                        <span class="notification-badge">{{count($contact)}}</span>
                        @endif</i></a>
                <ul class="dropdown-menu dropdown-menu-end">
                    @if(count($contact) === 0)
                    <div class="dropdown-item text-dark">No Notification</div>
                    @else
                    <div class="dropdown-item text-dark mb-0">You have {{count($contact)}} notification(s)<a href="{{url('/home/contact/view')}}"
                            class="btn-sm btn-primary text-danger">View All</a></div>
                    @foreach($contact as $data)
                    <hr class="dropdown-divider">
                    <div class="container">
                        <div class="row alert alert-success alert-dismissible fade show p-2 px-4">
                            <div class="col-md-2 d-flex align-items-center justify-content-center">
                                <i class='bx bx-message-rounded-error bx-md text-warning'></i>
                            </div>

                            <div class="col-md-10">
                                <div class="" role="alert">
                                    <h5 class="alert-heading text-dark">{{$data->name}}</h5>
                                    <p class="mb-2 text-dark">{{$data->message}}</p>
                                    <p class="text-dark">{{$data->created_at->diffForHumans()}}</p>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            </div>
                        </div>


                    </div>

                    @endforeach
                    @endif

                </ul>
            </li>

            <!-- User -->
            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                        <img src="{{asset('assets/img/logo.png')}}" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                        <a class="dropdown-item" href="#">
                            <div class="d-flex">
                                <div class="flex-shrink-0 me-3">
                                    <div class="avatar avatar-online">
                                        <img src="{{asset('assets/img/logo.png')}}" alt
                                            class="w-px-40 h-auto rounded-circle" />
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <span class="fw-semibold d-block">{{Session()->get('name')}}</span>
                                    <small class="text-muted">{{Session()->get('role')}}</small>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <div class="dropdown-divider"></div>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">
                            <i class="bx bx-user me-2"></i>
                            <span class="align-middle">My Profile</span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#calendarmodal">
                            <i class='bx bx-calendar me-2'></i>
                            <span class="align-middle">Calendar</span>
                        </a>
                    </li>

                    <li>
                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#unicodemodal">
                            <i class='bx bx-calendar me-2'></i>
                            <span class="align-middle">Nepali Unicode</span>
                        </a>
                    </li>


                    @if(Session()->get('role')=='Admin')
                    <li>
                        <a class="dropdown-item" href="{{url('/home/settings')}}">
                            <i class="bx bx-cog me-2"></i>
                            <span class="align-middle">Settings</span>
                        </a>
                    </li>
                    @endif
                    <li>
                        <a class="dropdown-item" href="{{url('/home/documents')}}">
                        <i class='bx bxs-file-doc me-2'></i>
                            <span class="align-middle">Documents</span>
                        </a>
                    </li>
                    
                    <li>
                        <div class="dropdown-divider"></div>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{url('/logout')}}">
                            <i class="bx bx-power-off me-2"></i>
                            <span class="align-middle">Log Out</span>
                        </a>
                    </li>
                </ul>
            </li>
            <!--/ User -->
        </ul>
    </div>
</nav>

<!-- / Navbar -->


<!-- The Calendar Modal -->
<div class="modal fade" id="calendarmodal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header bg-primary text-lighter">
                <h4 class="modal-title text-center" style="color:white;">Om Kalpataru Carriers Calendar</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">

                <div class="row">
                    <div class="col-md-7">
                        <!-- Start of nepali calendar widget -->
                        <script type="text/javascript">
                        <!--
                        var nc_width = 450;
                        var nc_height = 250;
                        var nc_api_id = 33920230826290; //
                        -->
                        </script>
                        <script type="text/javascript" src="https://www.ashesh.com.np/calendarlink/nc.js"></script>


                    </div>


                    <div class="col-md-5">

                        <iframe
                            src="https://www.ashesh.com.np/linkdate-converter.php?h_color=21ADE2&b_color=CFE4B1&api=692185n233"
                            frameborder="0" scrolling="no" marginwidth="0" marginheight="0"
                            style="border:none; overflow:hidden; width:100%; height:250px;"
                            allowtransparency="true"></iframe>
                    </div>


                </div>



            </div>

        </div>
    </div>
</div>


<!------------ The Unicode Modal --------------->
<div class="modal fade" id="unicodemodal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header bg-primary text-lighter">
                <h4 class="modal-title text-center" style="color:white;">Nepali Unicode Typing</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">

                <iframe width="100%" height="400" frameborder="0" border="no" scrolling="no" marginwidth="0"
                    marginheight="0" allowtransparency="true"
                    src="https://www.ashesh.com.np/linknepali-unicode3.php?api=692182n447">
                </iframe><br>


            </div>

        </div>
    </div>
</div>

<style>.notification-icon {
    position: relative;
}

.notification-badge {
    background-color: red;
    color: white;
    border-radius: 50%;
    padding: 3px 7px;
    font-size: 12px;
    position: absolute;
    top: -6px;
    right: -6px;
}</style>