<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<head>
    <meta charset="utf-8">
    @push('title')
    <title>Om Kalpataru Carriers Pvt.Ltd | About Company</title>
    <meta name="description" content="Welcome to Om Kalapataru Pvt. Ltd, your premier transport company in Nepal
         with a strong and reliable presence across the nation. Established in 2079 B.S., 
         we take immense pride in being one of the best transport service providers in the country.">
    <meta name="keywords"
        content="Om Kalpataru Carriers Pvt.Ltd, Om Transport, Om Kalpataru,
         Om Kalpataru Carriers, Hancie Phago, Nitesh Hamal, NH Group, Mahesh Hamal, Om Chaudary, Om Kalapataru Carriers Branches">
    <meta name="author" content="Hancie Phago | Nitesh Hamal">
    @livewireStyles
    @include('layouts.header')
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
    <style>
    .page-header {
        background: linear-gradient(rgba(0, 0, 0, .1), rgba(0, 0, 0, .1)), url(../assets/img/abstract-dark-blue-futuristic-digital-grid-background.jpg) center center no-repeat;
        background-size: cover;
    }
    </style>

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">About Us</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                    <li class="breadcrumb-item text-primary" aria-current="page">About</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <h1 class="wow fadeInUp text-center" data-wow-delay="0.1s">About Om Kalpataru Carriers</h1>

    <div class="container mt-4">
        <div class="wow fadeInUp row" data-wow-delay="0.1s">
            <!-- First Column -->
            <div class="col-md-6">
                <div class="w3-content" style="max-width:1200px">
                    <img class="mySlides" src="{{asset('assets/img/pic1.jpg')}}" style="width:100%;display:none">
                    <img class="mySlides" src="{{asset('assets/img/pic2.jpg')}}" style="width:100%">
                    <img class="mySlides" src="{{asset('assets/img/pic3.jpg')}}" style="width:100%;display:none">

                    <div class="w3-row-padding w3-section">
                        <div class="w3-col s4">
                            <img class="demo w3-opacity w3-hover-opacity-off" src="{{asset('assets/img/pic1.jpg')}}"
                                style="width:100%;cursor:pointer" onclick="currentDiv(1)">
                        </div>
                        <div class="w3-col s4">
                            <img class="demo w3-opacity w3-hover-opacity-off" src="{{asset('assets/img/pic2.jpg')}}"
                                style="width:100%;cursor:pointer" onclick="currentDiv(2)">
                        </div>
                        <div class="w3-col s4">
                            <img class="demo w3-opacity w3-hover-opacity-off" src="{{asset('assets/img/pic3.jpg')}}"
                                style="width:100%;cursor:pointer" onclick="currentDiv(3)">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Second Column -->
            <div class="col-md-6">
                <p class="wow fadeInUp" data-wow-delay="0.1s">Welcome to Om Kalapataru Pvt. Ltd., a distinguished
                    transportation company founded in the year
                    2079 B.S. by visionary entrepreneur Mahesh Hamal. Since our inception, we have been a driving force
                    in Nepal's transportation sector, catering to the diverse needs of individuals and businesses.<br>
                    <br>
                    Our head office strategically resides in Birgunj, a significant industrial and commercial hub
                    in Nepal's southern region. This strategic location allows us to efficiently manage operations
                    and provide seamless services to our valued clients.
                </p>

                <p class="wow fadeInUp" data-wow-delay="0.1s">As our prominence and reputation grew, we expanded our
                    reach by establishing branches in key
                    locations across the country, including Birtamode, Damak, Ithari, and Biratnagar. This
                    widespread coverage ensures accessibility and convenience for customers in different
                    regions.<br><br>

                    We take immense pride in being recognized as one of Nepal's finest transport companies,
                    thanks to our unwavering commitment to excellence, reliability, and customer satisfaction.
                    Our modern fleet of vehicles, equipped with the latest technology, ensures the safe and
                    efficient transportation of goods.</p>
            </div>
        </div>

        <p class="wow fadeInUp" data-wow-delay="0.1s">One of our core specialties lies in carrying products from India to various parts of Nepal. With our
            well-established network and expert team, we have streamlined the process, ensuring timely and secure
            delivery of goods to their destinations. This has made us the preferred choice for businesses and traders
            relying on smooth cross-border logistics.

            At Om Kalapataru Pvt. Ltd., we place a strong emphasis on customer service and build enduring relationships
            with our clients based on trust and transparency. Our dedication to meeting deadlines and handling goods
            with utmost care has earned us a loyal customer base, cementing our position as one of Nepal's most reliable
            transport companies.

            With a vision to expand our services and improve logistics operations, we continue to innovate and adapt to
            the ever-changing demands of the transportation industry. As we move ahead, we remain committed to upholding
            our reputation as a benchmark for excellence in the Nepalese transport sector.</p>
    </div>


    <script>
    function currentDiv(n) {
        showDivs(slideIndex = n);
    }

    function showDivs(n) {
        var i;
        var x = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("demo");
        if (n > x.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = x.length
        }
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
        }
        x[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " w3-opacity-off";
    }
    </script>

    @livewireScripts
    @include('layouts/footer')
</body>

</html>