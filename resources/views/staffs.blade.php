<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<head>
    <meta charset="utf-8">
    @push('title')
    <title>Om Kalpataru Carriers Pvt.Ltd | Staffs</title>
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
    <div class="container-fluid page-header py-3 mb-3 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-3">
            <h1 class=" text-white mb-2 animated slideInDown">Company Members</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{url('/')}}" wire:navigate>Home</a></li>
                    <li class="breadcrumb-item text-primary" aria-current="page">members</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->




    <h1 class="wow fadeInUp text-center mt-5" data-wow-delay="0.1s">Om Kalpataru Branch Members</h1>
    <br><br>
    <div class="container">
        <div class="row">
            @foreach ($alldata as $data)


            <div class="col-md-3 mb-3">


                <div class="card wow fadeInUp" data-wow-delay="0.1s">
                    <div style="max-width: 100%; height: auto;">
                        @if($data->profile_picture && file_exists(public_path('assets/' . $data->profile_picture)))
                        <img class="card-img-top" src="{{ asset('assets/' . $data->profile_picture) }}" alt="Card image"
                            style="max-width: 100%; height: auto;">
                        @else
                        <img class="card-img-top" src="{{ asset('assets/img/logo.png') }}" alt="Card image"
                            style="max-width: 100%; height: auto;">
                        @endif
                    </div>

                    <div class="card-body">
                        <p class="p-0 m-0">Name: {{$data->name}}</p>
                        <p class="p-0 m-0">Mobile no: {{$data->mobile}}</p>
                        </p>
                        <p class="p-0 m-0 text-light bg-primary rounded text-center">Incharge: {{$data->address}}</p>

                    </div>
                </div>






            </div>
            @endforeach

        </div>

    </div>










    @livewireScripts
    @include('layouts/footer')
</body>

</html>