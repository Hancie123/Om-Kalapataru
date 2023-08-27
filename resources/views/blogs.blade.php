<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    @push('title')
    <title>Om Kalpataru Carriers Pvt.Ltd | Blogs</title>
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
            <h1 class=" text-white mb-2 animated slideInDown">All Blog Posts</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                    <li class="breadcrumb-item text-primary" aria-current="page">Blogs</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <br>

    <div class="container text-center mt-xl-5 " style="max-width:1000px;">
    @if(count($blogs) === 0)
    <p class="p-xl-5">No blog posts available currently.</p>
    @else
        @foreach($blogs as $data)
        <a href="{{url('blogs')}}/{{$data->slug}}" wire:navigate>
            <div class="row border">
                <div class="col-md-4 p-3">
                    <div class="image-container2 border mx-auto d-block">
                        @if($data->blog_image && file_exists(public_path('assets/' . $data->blog_image)))
                        <img class="card-img-top" src="{{ asset('assets/' . $data->blog_image) }}" alt="Blog image"
                            style="max-width: 100%; height: auto;">
                        @else
                        <img class="card-img-top" src="{{ asset('assets/img/logo.png') }}" alt="Blog image"
                            style="max-width: 100%; height: auto;">
                        @endif
                    </div>
                </div>
                <div class="col-md-8 p-3">
                    <h4 class="text-start">{{ $data->title }}</h4>
                    <p class="text-start text-secondary">{{$data->created_at->diffForHumans()}}</p>
                    <p class="text-start text-dark">{!! substr(strip_tags($data->content), 0, 250)!!}</p>
                    <button class="float-start btn btn-primary">Read More</button>
                </div>
            </div><br>
        </a>
        @endforeach
        {{$blogs->links('pagination::bootstrap-5')}}
       
        @endif
    </div>




    <style>
    .image-container2 {
        width: 250px;
        /* Set the desired size */
        height: 250px;
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