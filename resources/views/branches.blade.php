<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    @push('title')
    <title>Om Kalpataru Carriers Pvt.Ltd</title>
    <meta name="description"
        content="Om Kalpataru Carriers Pvt.Ltd is a transport company of Nepal which is established in 2079. This transport company provides services in different part of Nepal.">
    <meta name="keywords"
        content="Om Kalpataru Carriers Pvt.Ltd, Om Transport, Om Kalpataru, Om Kalpataru Carriers, Hancie Phago, Nitesh Hamal, NH Group, Mahesh Hamal, Om Chaudary">
    <meta name="author" content="Hancie Phago | Nitesh Hamal">

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
        background: linear-gradient(rgba(0, 0, 0, .1), rgba(0, 0, 0, .1)), url(../assets/img/global-communication-background-business-network-design.jpg) center center no-repeat;
        background-size: cover;
    }
    </style>

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">Branches</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                    <li class="breadcrumb-item text-primary" aria-current="page">Branches</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <div class="container">
        <div class="row">
            <div class="col-md-8">

                <div id="map"></div>


            </div>
            <div class="col-md-4">
                <h1 class="text-center">Our Branches</h1>
                <p class="text-dark bold">Contact any of our branches using the details below if you need any help.</p>

                <div class="list-group">
                    <a id="branchlist" href="#" class="list-group-item list-group-item-action">1. Adarshanagar, Birgunj
                        Booking<br>
                        Umesh Chaudary
                        Ph no: 9845257819<br>
                        Om Chaudary Ph no: 9855024126</a>
                    <a id="branchlist" href="#" class="list-group-item list-group-item-action">Ithari</a>
                    <a id="branchlist" href="#" class="list-group-item list-group-item-action">Biratnagar</a>
                    <a id="branchlist" href="#" class="list-group-item list-group-item-action">Damak</a>
                    <a id="branchlist" href="#" class="list-group-item list-group-item-action">Birtamode</a>
                </div>


            </div>


        </div>

    </div>


    <style>
    #map {
        height: 70vh;
    }

    #branchlist {
        font-weight: bold;
    }

    #branchlist:hover {
        background-color: #4661FF;
        /* Custom hover color (orange in this example) */
        color: white;
    }
    </style>

    <script>
    // Initialize the map
    var map = L.map('map').setView([28.3949, 84.1240], 7); // Centered at Nepal coordinates, with zoom level 7

    // Add the base map layer (you can choose other tile layers from different providers)
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    // Add markers for Birtamode, Damak, Ithari, Biratnagar, and Birgunj
    var locations = [{
            name: 'Birtamode',
            coordinates: [26.64355271750209, 87.99940108305019],
            email: 'hamal.mahesh45@gmail.com',
            phone: '9825915122'
        },
        {
            name: 'Damak',
            coordinates: [26.660069854885073, 87.69778292026827],
            email: 'hamal.mahesh45@gmail.com',
            phone: '9825915122'
        },
        {
            name: 'Ithari',
            coordinates: [26.6621, 87.2707],
            email: 'hamal.mahesh45@gmail.com',
            phone: '9825915122'
        },
        {
            name: 'Biratnagar',
            coordinates: [26.4562, 87.2728],
            email: 'hamal.mahesh45@gmail.com',
            phone: '9825915122'
        },
        {
            name: 'Birgunj',
            coordinates: [27.0092, 84.8770],
            email: 'hamal.mahesh45@gmail.com',
            phone: '9825915122'
        }
    ];

    locations.forEach(function(location) {
        var marker = L.marker(location.coordinates).addTo(map);
        marker.bindPopup("<b>" + location.name + "</b><br>Email: " + location.email + "<br>Phone: " + location
            .phone);
    });
    </script>


    @include('layouts/footer')
</body>

</html>