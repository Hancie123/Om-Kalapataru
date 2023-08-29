<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    @push('title')
    <title>Om Kalpataru Carriers Pvt.Ltd | {{ $blogs->title }}</title>
    <meta name="description" content="Welcome to Om Kalapataru Pvt. Ltd, your premier transport company in Nepal
         with a strong and reliable presence across the nation. Established in 2079 B.S., 
         we take immense pride in being one of the best transport service providers in the country.">
    <meta name="keywords"
        content="Om Kalpataru Carriers Pvt.Ltd, Om Transport, Om Kalpataru,
         Om Kalpataru Carriers, Hancie Phago, Nitesh Hamal, NH Group, Mahesh Hamal, Om Chaudary, Om Kalapataru Carriers Branches">
    <meta name="author" content="Hancie Phago | Nitesh Hamal">
    <meta property="og:title" content="{{ $blogs->title }}">
    <meta property="og:description" content="{{ substr(strip_tags($blogs->content), 0, 250) }}">
    <meta property="og:image" content="{{ asset('assets/' . $blogs->blog_image) }}">
    <meta property="og:url" content="{{ request()->fullUrl() }}">
    @livewireStyles
    @include('layouts.header')
</head>

<body>
    <!-- Load Facebook SDK for JavaScript -->
    <div id="fb-root"></div>
    <script>
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
    </script>
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
    <div class="container-fluid page-header py-3 mb-3 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-3">
            <h2 class=" text-white mb-2 animated slideInDown">Blog: {{$blogs->slug}}</h2>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{url('/')}}" wire:navigate>Home</a></li>
                    <li class="breadcrumb-item"><a href="{{url('/blogs')}}" wire:navigate>Blogs</a></li>
                    <li class="breadcrumb-item text-primary" aria-current="page">View</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->
<br>
    <div class="container mt-4" style="max-width:900px;">
        <h1 class="text-center">{{ $blogs->title }}</h1><br>
        <div class="image-container2 mx-auto d-block">
            @if($blogs->blog_image && file_exists(public_path('assets/' . $blogs->blog_image)))
            <img class="card-img-top" src="{{ asset('assets/' . $blogs->blog_image) }}" alt="Blog image"
                style="max-width: 100%; height: auto;">
            @else
            <img class="card-img-top" src="{{ asset('assets/img/logo.png') }}" alt="Blog image"
                style="max-width: 100%; height: auto;">
            @endif
        </div>
        <p>{!!$blogs->content!!}</p>


        <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->fullUrl()) }}" target="_blank"
            class="btn btn-primary"><i class="bi bi-facebook"></i> Facebook</a>
    </div>




    <style>
    .image-container2 {
        width: 350px;
        /* Set the desired size */
        height: 350px;
        /* Set the same desired size */
        overflow: hidden;
        /* Hide overflowing content */
        position: relative;
        /* For centering the image */
    }

    .image-container img {
        width: 100%;
        height: auto;
        /* Maintain aspect ratio */
        display: block;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }
    </style>


    @livewireScripts
    @include('layouts/footer')
</body>

</html>