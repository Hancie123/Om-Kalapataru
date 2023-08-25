<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    @push('title')
    <title>Om Kalpataru Carriers Pvt.Ltd | Branches</title>
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
                    <p id="branchlist" href="#" class="list-group-item list-group-item-action">1. Adarshanagar,
                        Birgunj-Biratnagar
                        Booking<br>
                        Branch Incharge: Umesh Chaudary<br>
                        Ph no: 9855024126<br>
                         Landline: 051-591414<br>
                       </p>

                    <p id="branchlist" href="#" class="list-group-item list-group-item-action">2. Birgunj-Birtamode Booking<br>
                        Branch Incharge: Subash Mahato<br>
                        Ph no: 9821836821<br>
                    Landline: 051-591458</p>

                    <p id="branchlist" href="#" class="list-group-item list-group-item-action">3. Ithari (Near Traffic Office)<br>
                        Branch Incharge: Bhola Chaudary<br>
                        Ph no: 9855024113</p>
                    <p id="branchlist" href="#" class="list-group-item list-group-item-action">4. Biratnagar (Near
                        Bhat-Bhateni)<br>
                        Branch Incharge: Sumit Pokhrel<br>
                        Tel: 021590960<br>
                        Ph no: 9852039545</p>
                    <p id="branchlist" href="#" class="list-group-item list-group-item-action">5. Damak (Near Pashuhaat)<br>
                        Branch Incharge: Sanjay Mandal<br>
                        Tel: 023-570153<br>
                        Ph no: 9801715691</p>
                    <p id="branchlist" class="list-group-item list-group-item-action">6. Birtamode (Near B&C Hospital)<br>
                        Branch Incharge: Madav Dahal<br>
                        Tel: 023-530129<br>
                        Ph no: 9852639545<br>
                        Ph no: 9801715692
                    </p>
                </div>


            </div>


        </div>

    </div>


    <style>
    #map {
        height: 80vh;
    }

    #branchlist {
        font-weight: normal;
        margin: 0;

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
            phone: '9855036545'
        },
        {
            name: 'Damak',
            coordinates: [26.658942, 87.701977],
            email: 'hamal.mahesh45@gmail.com',
            phone: '9855036545'
        },
        {
            name: 'Ithari',
            coordinates: [26.665972, 87.265503],
            email: 'hamal.mahesh45@gmail.com',
            phone: '9855036545'
        },
        {
            name: 'Biratnagar',
            coordinates: [26.458989, 87.277689],
            email: 'hamal.mahesh45@gmail.com',
            phone: '9855036545'
        },
        {
            name: 'Birgunj-Birtamode Booking',
            coordinates: [27.012703, 84.871075],
            email: 'hamal.mahesh45@gmail.com',
            phone: '9855036545'
        },
        {
            name: 'Birgunj-Biratnagar Booking',
            coordinates: [27.012835, 84.872331],
            email: 'hamal.mahesh45@gmail.com',
            phone: '9855036545'
        }
    ];

    locations.forEach(function(location) {
        var marker = L.marker(location.coordinates).addTo(map);
        marker.bindPopup("<b>" + location.name + "</b><br>Email: " + location.email + "<br>Phone: " + location
            .phone);
    });
    </script>

    @livewireScripts
    @include('layouts/footer')
</body>

</html>