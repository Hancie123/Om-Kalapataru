<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-assets-path="{{url('assets')}}" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>Dashboard - View Inbox Messages</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    @include('layouts/adminheader')
</head>

<body>
    @if(session('success'))
    @php
    $success = Session::get('success');
    $fail = Session::get('fail');
    @endphp
    <script>
    Swal.fire({
        title: '{{ $success }}',
        width: 600,
        padding: '3em',
        backdrop: 'rgba(0, 0, 123, 0.4) left top no-repeat',
    });
    </script>
    @endif

    @if(session('fail'))
    @php
    $success = Session::get('success');
    $fail = Session::get('fail');
    @endphp
    <script>
    Swal.fire({
        title: '{{ $fail }}',
        width: 600,
        padding: '3em',
        backdrop: 'rgba(0, 0, 123, 0.4) left top no-repeat'
    });
    </script>
    @endif
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            @include('layouts/adminsidemenu')

            <!-- Layout container -->
            <div class="layout-page">
                @include('layouts/adminnavbar')

                <!-- Content wrapper -->
                <div class="container content-wrapper">
                    <!-- Content -->


                    <h4 id="page_title" class="p-2 pt-3  text-dark">Inbox Messages</h4>

                    @foreach($contact as $data)
                    <div class="container bg-light rounded" style="max-width:1000px;">
                        <div class="row">
                            <div class="col-md-3 mt-2">
                                <img src="{{url('assets/img/profile_pic.png')}}" alt="Avatar" class="mx-auto d-block"
                                    style="width:100px;">
                                <p class=" text-dark text-center">{{$data->name}}</p>

                            </div>

                            <div class="col-md-7">
                                <p class="mt-4 text-dark mb-0">Email: {{$data->email}}</p>
                                <p class="text-dark">Message: {{$data->message}}</p>
                                <span class="time-right text-dark">{{$data->created_at->diffForHumans()}}</span>
                            </div>

                            <div class="col-md-2 d-flex justify-content-center align-items-center">
                                <a href="{{url('/home/contact/view/delete')}}/{{$data->contact_id}}" class="btn btn-primary text-light">Delete</a>
                            </div>


                        </div><br>

                    </div><br>
                    @endforeach































                </div>
                <!-- / Content -->



                <div class="content-backdrop fade"></div>
            </div>
            <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->



    @include('layouts/adminfooter')
</body>

</html>