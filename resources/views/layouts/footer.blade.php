<!-- Footer Start -->
<div class="container-fluid bg-dark footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-4">Our Office</h4>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Head Office: Birgunj</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+977 9855036545</p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>omkalpataru.brj@gmail.com<br>
                    hamal.mahesh45@gmail.com</p>
                <div class="d-flex pt-3">
                    <a class="btn btn-square btn-light rounded-circle me-2" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-square btn-light rounded-circle me-2" href=""><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square btn-light rounded-circle me-2" href=""><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-square btn-light rounded-circle me-2" href=""><i
                            class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-4">Quick Links</h4>
                <a class="btn btn-link" href="{{url('/about-company')}}" wire:navigate>About Us</a>
                <a class="btn btn-link" href="{{url('/contact')}}" wire:navigate>Contact Us</a>
                <a class="btn btn-link" href="{{url('/services')}}" wire:navigate>Our Services</a>
                <a class="btn btn-link" href="{{url('/branches')}}" wire:navigate>Our Branches</a>
                <a class="btn btn-link" href="{{url('/company-vision')}}" wire:navigate>Our Vision</a>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-4">Business Hours</h4>
                <p class="mb-1">Sunday - Saturday</p>
                <h6 class="text-light">24 hours open</h6>
                <br>
                <a href="#"
                    onclick="window.open('https://www.sitelock.com/verify.php?site=omkalpatarucarriers.com.np','SiteLock','width=600,height=600,left=160,top=170');"><img
                        class="img-fluid" alt="SiteLock" title="SiteLock"
                        src="https://shield.sitelock.com/shield/omkalpatarucarriers.com.np" wire:navigate/></a>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-4">Branches</h4>
                <ul>
                    <li>Birgunj</li>
                    <li>Ithari</li>
                    <li>Biratnagar</li>
                    <li>Damak</li>
                    <li>Birtamode</li>

                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->


<!-- Copyright Start -->
<div class="container-fluid copyright py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0 text-light">
                &copy; <?php echo date('Y')?> <a class="fw-medium text-light" href="{{url('/')}}" wire:navigate>Om Kalapataru Carriers
                    Pvt.Ltd</a>, All Right Reserved.
            </div>
            <div class="col-md-6 text-center text-md-end">
                Designed By <a class="fw-medium text-light" target="_blank"
                    href="https://www.hancie-phago.com.np/">Hancie and Nitesh Hamal</a>
                Distributed By <a class="fw-medium text-light" target="_blank"
                    href="https://techrevonepal.hancie-phago.com.np/">Tech Revo Nepal</a>
            </div>
        </div>
    </div>
</div>
<!-- Copyright End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('assets/lib/wow/wow.min.js')}}"></script>
<script src="{{asset('assets/lib/easing/easing.min.js')}}"></script>
<script src="{{asset('assets/lib/waypoints/waypoints.min.js')}}"></script>
<script src="{{asset('assets/lib/owlcarousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/lib/lightbox/js/lightbox.min.js')}}"></script>

<!-- Template Javascript -->
<script src="{{asset('assets/js/main.js')}}"></script>