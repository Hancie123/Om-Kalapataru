<!-- partial -->
<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{url('/home/dashboard')}}" wire:navigate>
                <i class='bx bx-grid-alt mx-1 bx-sm'></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="material-symbols-outlined bx-sm mx-1">
                    home
                </span>
                <span class="menu-title">My Website</span>
                <i class='bx bx-chevron-right'></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Announcment</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Staffs</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Gallery</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false"
                aria-controls="form-elements">
                <i class='bx bxs-graduation mx-1 bx-sm'></i>
                <span class="menu-title">Consignment</span>
                <i class='bx bx-chevron-right'></i>
            </a>
            <div class="collapse" id="form-elements">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="pages/forms/basic_elements.html">Basic
                            Elements</a></li>
                </ul>
            </div>
        </li>
       
        

        <li class="nav-item">
            <a class="nav-link" href="{{url('/logout')}}">
            <i class='bx bx-log-out-circle bx-sm mx-1' ></i>
                <span class="menu-title">Sign Out</span>

            </a>
        </li>
    </ul>
</nav>
<!-- partial -->