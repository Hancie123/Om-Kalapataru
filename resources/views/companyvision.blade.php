<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<head>
    <meta charset="utf-8">
    @push('title')
    <title>Om Kalpataru Carriers Pvt.Ltd | Company Vision</title>
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
            <h1 class="display-2 text-white mb-4 animated slideInDown">Company Vision</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                    <li class="breadcrumb-item text-primary" aria-current="page">About</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <h1 class="wow fadeInUp text-center" data-wow-delay="0.1s">Om Kalpataru Carriers' Future Vision</h1>

    <div class="container mt-4">
        <div class="wow fadeInUp row" data-wow-delay="0.1s">
            <!-- First Column -->
            <div class="col-md-6">

                <img src="{{asset('assets/img/Team goals-rafiki.png')}}" class="img-fluid">
            </div>

            <!-- Second Column -->
            <div class="col-md-6">

                <div class="w3-panel w3-pale-red w3-leftbar w3-border-red p-3 wow fadeInUp" data-wow-delay="0.1s">
                    <p>Our vision at Om Kalapataru Pvt. Ltd. is to be the leading and most trusted transportation
                        company in Nepal, setting new benchmarks for excellence in the industry. We aim to leverage our
                        strategic locations and modern fleet of vehicles to provide seamless and efficient
                        transportation services to individuals and businesses across the country.</p>
                </div>

                <div class="w3-panel w3-pale-green w3-leftbar w3-border-green p-3 wow fadeInUp" data-wow-delay="0.1s">
                    <p>We envision ourselves as a driving force in Nepal's transportation sector, catering to diverse
                        customer needs and becoming the go-to choice for businesses and traders relying on smooth
                        cross-border logistics. With a strong emphasis on customer service, trust, and transparency, we
                        are committed to building enduring relationships with our clients.</p>
                </div>

                <div class="w3-panel w3-pale-blue w3-leftbar w3-border-blue p-3 wow fadeInUp" data-wow-delay="0.1s">
                    <p>Our goal is to continue expanding our reach and services, establishing branches in key locations
                        across Nepal, and adapting to the ever-changing demands of the transportation industry. By
                        integrating the latest technology and expertise, we strive to ensure safe and timely delivery of
                        goods while upholding our reputation as one of Nepal's finest transport companies.</p>
                </div>



            </div>
        </div>


    </div>




    @livewireScripts
    @include('layouts/footer')
</body>

</html>