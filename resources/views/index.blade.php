<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @push('title')
    <title>Om Kalpataru Carriers Pvt.Ltd</title>
    <meta name="description"
        content="Welcome to Om Kalapataru Pvt. Ltd, a trusted and efficient transport company in Nepal. We specialize in carrying products from India to various parts of Nepal. With a strong presence across the country, our branches in Birgunj, Birtamode, Damak, Ithari, and Biratnagar ensure reliable transportation services. Contact us for prompt assistance and support.">
    <meta name="keywords"
        content="transport company, Nepal, India to Nepal transportation, reliable transport, Birgunj, Birtamode, Damak, Ithari, Biratnagar">
    <meta name="author" content="Hancie Phago | Nitesh Hamal">
    <meta name="msvalidate.01" content="DF72CCC73368653D7969F211C150B6D7" />
    @include('layouts.header')
    @livewireStyles
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->


    @include('layouts/topbar')


    @include('layouts/navbar')

    <!---------- Latest Updates Start ------------>
    <style>
    .col-md-2 {
        padding: 2px;
        color: #fff;
        font-weight: bold;
        text-align: center;
        background-color: #dc3545;
    }

    .col-md-2 div {
        font-size: 16px;
    }

    .col-md-10 {
        padding: 2px;
        background-color: #007bff;
        color: #fff;
        font-size: 18px;
        line-height: 1.6;
        white-space: nowrap;
        /* Prevent text from wrapping */


    }

    .marquee-container {

        overflow: hidden;
    }

    .marquee-content {
        animation: marquee 30s linear infinite;
    }

    @keyframes marquee {
        0% {
            transform: translateX(100%);
            /* Start from the right side of the container */
        }

        100% {
            transform: translateX(-100%);
            /* Move to the left side of the container */
        }
    }
    </style>

    <div class="row">
        <div class="col-4 col-md-2 bg-danger">
            <div>Latest Updates</div>
        </div>
        <div class="col-8 col-md-10 bg-primary">
            <div class="marquee-container">
                <div class="marquee-content">
                    Opening Soon! Opening Soon! &nbsp;&nbsp; Kathmandu Booking. Kathmandu -Biratnagar
                </div>
            </div>
        </div>
    </div>
    <!---------- Latest Updates End ------------>



    <!-- Carousel Start -->
    <div class="container-fluid px-0 mb-5">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{asset('assets/img/gettyimages-495816922.webp')}}" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-lg-7 text-start">
                                    <p class="fs-4 text-white animated slideInRight">Welcome to
                                        <strong>Om Kalapataru</strong>
                                    </p>
                                    <h1 class="display-1 text-white mb-4 animated slideInRight">Unlock Your Business
                                        Growth</h1>
                                    <a href=""
                                        class="btn btn-primary rounded-pill py-3 px-5 animated slideInRight">Explore
                                        More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{asset('assets/img/gettyimages-495816922.webp')}}" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-end">
                                <div class="col-lg-7 text-end">
                                    <p class="fs-4 text-white animated slideInLeft">Welcome to <strong>
                                            Om Kalapataru</strong>
                                    </p>
                                    <h1 class="display-1 text-white mb-5 animated slideInLeft">Ready to Grow Your
                                        Business</h1>
                                    <a href=""
                                        class="btn btn-primary rounded-pill py-3 px-5 animated slideInLeft">Explore
                                        More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Features Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-0 feature-row">
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                    <div class="feature-item border h-100 p-5">
                        <div class="btn-square bg-light rounded-circle mb-4" style="width: 64px; height: 64px;">
                            <span class="material-symbols-outlined bx-lg text-primary">
                                local_shipping
                            </span>
                        </div>
                        <h5 class="mb-3">Reliable Transportation</h5>
                        <p class="mb-0">Ensuring punctual and dependable transport services to meet customer needs.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
                    <div class="feature-item border h-100 p-5">
                        <div class="btn-square bg-light rounded-circle mb-4" style="width: 64px; height: 64px;">
                            <span class="material-symbols-outlined bx-lg text-primary">
                                zone_person_idle
                            </span>
                        </div>
                        <h5 class="mb-3">Safety and Security</h5>
                        <p class="mb-0">Prioritizing the safety of products with well-maintained
                            vehicles and trained drivers.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
                    <div class="feature-item border h-100 p-5">
                        <div class="btn-square bg-light rounded-circle mb-4" style="width: 64px; height: 64px;">
                            <span class="material-symbols-outlined bx-lg text-primary">
                                share_location
                            </span>
                        </div>
                        <h5 class="mb-3">Tracking and Visibility</h5>
                        <p class="mb-0">Offering real-time tracking systems and regular updates on the status of
                            shipments.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s">
                    <div class="feature-item border h-100 p-5">
                        <div class="btn-square bg-light rounded-circle mb-4" style="width: 64px; height: 64px;">
                            <span class="material-symbols-outlined bx-lg text-primary">
                                support_agent
                            </span>
                        </div>
                        <h5 class="mb-3">Customer Support</h5>
                        <p class="mb-0">Maintaining responsive customer service to handle inquiries and provide
                            assistance.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->


    <!-- About Start -->
    <div class="container-xxl about my-5">
        <div class="container">
            <div class="row g-0">
                <div class="col-lg-6">
                    <div class="h-100 d-flex align-items-center justify-content-center" style="min-height: 300px;">
                        <button type="button" class="btn-play" data-bs-toggle="modal"
                            data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                            <span></span>
                        </button>
                    </div>
                </div>
                <div class="col-lg-6 pt-lg-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="bg-white rounded-top p-5 mt-lg-5">

                        <h1 class="display-6 mb-4">Om Kalapataru Carriers Pvt.Ltd</h1>
                        <p class="mb-4">Om Kalapataru Pvt. Ltd. is a distinguished transport company that was
                            established in the year 2079 B.S. with the visionary entrepreneur Mahesh Hamal as its owner.
                            Since its inception, the company has been a driving force in the transportation sector in
                            Nepal, catering to the needs of individuals and businesses alike.</p>
                        <div class="row g-5 pt-2 mb-5">
                            <div class="col-sm-6">
                                <img class="img-fluid mb-4" src="img/icon/icon-5.png" alt="">
                                <h5 class="mb-3">Managing Director</h5>
                                <span>Mahesh Hamal</span>
                            </div>
                            <div class="col-sm-6">
                                <img class="img-fluid mb-4" src="img/icon/icon-2.png" alt="">
                                <h5 class="mb-3">Head Office</h5>
                                <ul>
                                    <li>Birgunj</li>

                                </ul>
                            </div>
                        </div>
                        <a class="btn btn-primary rounded-pill py-3 px-5" href="#">Explore More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Video Modal Start -->
    <div class="modal modal-video fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Youtube Video</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9">
                        <iframe class="embed-responsive-item" src="" id="video" allowfullscreen
                            allowscriptaccess="always" allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->


    <div class="container py-4 py-xl-5">
        <div class="row gy-4 gy-md-0">
            <div class="wow fadeInUp col-md-6 text-center text-md-start d-flex d-sm-flex d-md-flex justify-content-center align-items-center justify-content-md-start align-items-md-center justify-content-xl-center" data-wow-delay="0.1s">
                <div style="max-width: 350px;">
                    <h1 class="fw-bold">Om Chaudary</h1>
                    <h5>Co-founder</h5>
                    <p class="my-3">Om Kalpataru Carriers Pvt. Ltd stands as a paramount transport company in Nepal. Our 
                        commitment to excellence drives us to be the epitome of trust and reliability in the transportation
                         sector. As Om Kalpataru Pvt. Ltd., our vision extends to becoming Nepal's premier and most 
                         dependable transportation entity, ushering in a new era of industry standards.</p><a class="btn btn-primary btn-lg me-2" role="button" href="{{url('/contact')}}" wire:navigate>Contact Us</a>
                </div>
            </div>
            <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="p-xl-5 m-xl-5"><img class="rounded img-fluid w-100 fit-cover" style="min-height: 300px;" src="{{asset('assets/img/Om Chaudary.jpeg')}}"></div>
            </div>
        </div>
    </div>





    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-medium text-primary">Our Services</p>
                <h1 class="display-5 mb-5">Transport Services that We Offer</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item position-relative h-100">
                        <div class="service-text rounded p-5">
                            <div class="btn-square bg-light rounded-circle mx-auto mb-4"
                                style="width: 64px; height: 64px;">
                                <i class="bi bi-truck bx-lg text-primary"></i>
                            </div>
                            <h5 class="mb-3">Freight Transport</h4>
                                <p class="mb-0">The company specializes in the transportation of various types of goods
                                    and commodities and
                                    transport from one location to another.</p>
                        </div>
                        <div class="service-btn rounded-0 rounded-bottom">
                            <a class="text-primary fw-medium" href="">Read More<i
                                    class="bi bi-chevron-double-right ms-2"></i></a>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item position-relative h-100">
                        <div class="service-text rounded p-5">
                            <div class="btn-square bg-light rounded-circle mx-auto mb-4"
                                style="width: 64px; height: 64px;">
                                <span class="material-symbols-outlined bx-lg text-primary">
                                    production_quantity_limits
                                </span>
                            </div>
                            <h5 class="mb-3">Cross-Border Logistics</h4>
                                <p class="mb-0">With its head office located at Birgunj and Biratnagar, a major border
                                    town, the
                                    company excels in cross-border logistics between Nepal and India.</p>
                        </div>
                        <div class="service-btn rounded-0 rounded-bottom">
                            <a class="text-primary fw-medium" href="">Read More<i
                                    class="bi bi-chevron-double-right ms-2"></i></a>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item position-relative h-100">
                        <div class="service-text rounded p-5">
                            <div class="btn-square bg-light rounded-circle mx-auto mb-4"
                                style="width: 64px; height: 64px;">
                                <span class="material-symbols-outlined bx-lg text-primary">
                                    local_shipping
                                </span>
                            </div>
                            <h5 class="mb-3">Full Truck Load (FTL) Services</h4>
                                <p class="mb-0">Om Kalapataru Carriers Pvt. Ltd. provides dedicated full truckload
                                    services to
                                    customers who require an entire truck to transport their goods.</p>
                        </div>
                        <div class="service-btn rounded-0 rounded-bottom">
                            <a class="text-primary fw-medium" href="">Read More<i
                                    class="bi bi-chevron-double-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item position-relative h-100">
                        <div class="service-text rounded p-5">
                            <div class="btn-square bg-light rounded-circle mx-auto mb-4"
                                style="width: 64px; height: 64px;">
                                <span class="material-symbols-outlined bx-lg text-primary">
                                    local_shipping
                                </span>
                            </div>
                            <h5 class="mb-3">Less Than Truckload (LTL) Services</h4>
                                <p class="mb-0">For smaller shipments that do not require an entire truck, The Om
                                    Kalapataru Carriers
                                    offers Less Than Truckload services.</p>
                        </div>
                        <div class="service-btn rounded-0 rounded-bottom">
                            <a class="text-primary fw-medium" href="">Read More<i
                                    class="bi bi-chevron-double-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item position-relative h-100">
                        <div class="service-text rounded p-5">
                            <div class="btn-square bg-light rounded-circle mx-auto mb-4"
                                style="width: 64px; height: 64px;">
                                <span class="material-symbols-outlined bx-lg text-primary">
                                    warehouse
                                </span>
                            </div>
                            <h5 class="mb-3">Warehousing and Storage</h4>
                                <p class="mb-0">The company may also provide warehousing and storage facilities for
                                    customers who need to store their goods temporarily before onward delivery. </p>
                        </div>
                        <div class="service-btn rounded-0 rounded-bottom">
                            <a class="text-primary fw-medium" href="">Read More<i
                                    class="bi bi-chevron-double-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item position-relative h-100">
                        <div class="service-text rounded p-5">
                            <div class="btn-square bg-light rounded-circle mx-auto mb-4"
                                style="width: 64px; height: 64px;">
                                <span class="material-symbols-outlined bx-lg text-primary">
                                    local_shipping
                                </span>
                            </div>
                            <h5 class="mb-3">Express Delivery Services</h4>
                                <p class="mb-0">For time-sensitive shipments, Om Kalapataru Pvt. Ltd. offers express
                                    delivery services. This ensures that urgent shipments reach their destination
                                    quickly and on time.</p>
                        </div>
                        <div class="service-btn rounded-0 rounded-bottom">
                            <a class="text-primary fw-medium" href="">Read More<i
                                    class="bi bi-chevron-double-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Branches Start -->
    <div class="container-xxl pt-5">
        <div class="container">
            <div class="text-center text-md-start pb-5 pb-md-0 wow fadeInUp" data-wow-delay="0.1s"
                style="max-width: 500px;">
                <p class="fs-5 fw-medium text-primary">Our Branches</p>
                <h1 class="display-5 mb-5">We have 5 branches nationwide</h1>
            </div>
            <div class="owl-carousel project-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="project-item mb-5">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{asset('assets/img/Shankharacharya_Gate,_Birgunj.jpg')}}" alt="">
                        <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1"
                                href="{{asset('assets/img/Shankharacharya_Gate,_Birgunj.jpg')}}"
                                data-lightbox="project"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href=""><i
                                    class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="p-4">
                        <a class="d-block h5" href="">Birgunj</a>
                        <span>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem</span>
                    </div>
                </div>
                <div class="project-item mb-5">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{asset('assets/img/Biratnagar_Drone_Footage.png')}}" alt="">
                        <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1"
                                href="{{asset('assets/img/Biratnagar_Drone_Footage.png')}}" data-lightbox="project"><i
                                    class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href=""><i
                                    class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="p-4">
                        <a class="d-block h5" href="">Biratnagar</a>
                        <span>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem</span>
                    </div>
                </div>
                <div class="project-item mb-5">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{asset('assets/img/damak.jpg')}}" alt="">
                        <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1"
                                href="{{asset('assets/img/damak.jpg')}}" data-lightbox="project"><i
                                    class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href=""><i
                                    class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="p-4">
                        <a class="d-block h5" href="">Damak</a>
                        <span>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem</span>
                    </div>
                </div>
                <div class="project-item mb-5">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{asset('assets/img/Itahari_jpg.jpg')}}" alt="">
                        <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1"
                                href="{{asset('assets/img/Itahari_jpg.jpg')}}" data-lightbox="project"><i
                                    class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href=""><i
                                    class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="p-4">
                        <a class="d-block h5" href="">Ithari</a>
                        <span>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem</span>
                    </div>
                </div>
                <div class="project-item mb-5">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{asset('assets/img/Birtamode_city_of_jhapa_district4.jpg')}}"
                            alt="">
                        <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1"
                                href="{{asset('assets/img/Birtamode_city_of_jhapa_district4.jpg')}}"
                                data-lightbox="project"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href=""><i
                                    class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="p-4">
                        <a class="d-block h5" href="">Birtamode</a>
                        <span>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Project End -->



    <!-- Testimonial Start -->
    <div class="container-xxl pt-5">
        <div class="container">
            <div class="text-center text-md-start pb-5 pb-md-0 wow fadeInUp" data-wow-delay="0.1s"
                style="max-width: 500px;">
                <h1 class="display-5 mb-5">What Clients Say About Our Services!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item rounded p-4 p-lg-5 mb-5">
                    <img class="mb-4" src="{{asset('assets/img/testimonial-2.jpg')}}" alt="">
                    <p class="mb-4">I have been using Om Kalapataru Pvt. Ltd.'s transport services for years, and I must
                        say they are exceptional! Their efficient cross-border logistics have made importing goods from
                        India a breeze. With their reliable and timely deliveries, my business has flourished. Highly
                        recommended!</p>
                    <h5>Rajesh Sharma</h5>
                    <span class="text-primary">Business Owner</span>
                </div>
                <div class="testimonial-item rounded p-4 p-lg-5 mb-5">
                    <img class="mb-4" src="{{asset('assets/img/testimonial-1.jpg')}}" alt="">
                    <p class="mb-4">I had a great experience with Om Kalapataru Pvt. Ltd. Their team provided excellent
                        customer support, guiding me through the entire process of transporting my goods to Biratnagar.
                        The shipment arrived on time, and I couldn't be happier with their services. Thank you!</p>
                    <h5>Sunita Devi</h5>
                    <span class="text-primary">Entrepreneur</span>
                </div>
                <div class="testimonial-item rounded p-4 p-lg-5 mb-5">
                    <img class="mb-4" src="{{asset('assets/img/testimonial-3.jpg')}}" alt="">
                    <p class="mb-4">Om Kalapataru Pvt. Ltd. has consistently been our go-to transport company for
                        distributing our products across Nepal. Their widespread branches, like the one in Birtamode,
                        have allowed us to reach our customers efficiently. The professionalism and dedication of their
                        team are commendable.</p>
                    <h5>Alok Singh</h5>
                    <span class="text-primary">Supply Chain Manager</span>
                </div>
                <div class="testimonial-item rounded p-4 p-lg-5 mb-5">
                    <img class="mb-4" src="{{asset('assets/img/testimonial-4.jpg')}}" alt="">
                    <p class="mb-4">I have used various transport companies in the past, but none have matched the level
                        of service provided by Om Kalapataru Pvt. Ltd. Their secure and well-maintained vehicles gave me
                        peace of mind when transporting my delicate machinery. Their Birgunj head office makes it so
                        convenient for all our shipping needs.</p>
                    <h5>Priya Shah</h5>
                    <span class="text-primary">Importer</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

<!-- Messenger Chat Plugin Code -->
<div id="fb-root"></div>

<!-- Your Chat Plugin code -->
<div id="fb-customer-chat" class="fb-customerchat">
</div>

<script>
  var chatbox = document.getElementById('fb-customer-chat');
  chatbox.setAttribute("page_id", "112116315320113");
  chatbox.setAttribute("attribution", "biz_inbox");
</script>

<!-- Your SDK code -->
<script>
  window.fbAsyncInit = function() {
    FB.init({
      xfbml            : true,
      version          : 'v14.0'
    });
  };

  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
</script>







@livewireScripts

    @include('layouts/footer')
</body>

</html>