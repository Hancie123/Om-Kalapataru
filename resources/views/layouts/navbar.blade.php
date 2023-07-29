<!-- Navbar Start -->
<div class="container-fluid bg-white sticky-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-white navbar-light p-lg-0">
                <a href="index.html" class="navbar-brand d-lg-none">
                    <h1 class="fw-bold m-0">Om Kalapataru</h1>
                </a>
                <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav">
                        <a href="{{url('/')}}" class="nav-item nav-link active" wire:navigate.hover>Home</a>
                        <a href="{{url('branches')}}" class="nav-item nav-link" wire:navigate>Branches</a>
                        <a href="{{url('/services')}}" class="nav-item nav-link" wire:navigate>Services</a>
                        <a href="project.html" class="nav-item nav-link" wire:navigate>Gallery</a>
                        <a href="project.html" class="nav-item nav-link" wire:navigate>Staffs</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">About Us</a>
                            <div class="dropdown-menu bg-light rounded-0 rounded-bottom m-0">
                                <a href="feature.html" class="dropdown-item" wire:navigate>Company Profile</a>
                                <a href="team.html" class="dropdown-item" wire:navigate>Our Vision</a>
                            </div>
                        </div>
                        <a href="contact.html" class="nav-item nav-link">Contact</a>
                    </div>
                    <div class="ms-auto d-none d-lg-block">
                        <a href="" class="btn btn-primary rounded-pill py-2 px-3">Login</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->