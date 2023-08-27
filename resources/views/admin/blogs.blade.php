<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-assets-path="{{url('assets')}}" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>Dashboard - Blogs Management System</title>
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>
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


                    <h4 id="page_title" class="p-2 pt-3  text-dark">Blogs Management System</h4>
                    <div class="container border rounded bg-light">





                        <form method="post" action="{{url('/home/blogs/insert')}}" enctype="multipart/form-data"
                            class="p-3">
                            @csrf

                            <div class="row mb-2">
                                <div class="col-md-4 mb-2">
                                    <label id="label" for="title" class="form-label custom-input">Title:</label>
                                    <input type="text" class="form-control" placeholder="Enter blog title"
                                        name="blog_title">
                                    @error('blog_title')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>


                                <div class="col-md-4 mb-2">
                                    <label id="label" for="category" class="form-label">Category:</label>
                                    <select class="form-select" name="category">
                                        <option>News</option>
                                        <option>Events</option>
                                        <option>Announcements</option>
                                        <option>Problems</option>
                                        <option>Information</option>
                                        <option>Politics</option>
                                        <option>Transport System</option>
                                    </select>
                                    @error('category')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>

                                <div class="col-md-4 mb-2">
                                    <label id="label" for="image" class="form-label">Image:</label>
                                    <input type="file" class="form-control" placeholder="Upload an image"
                                        name="blog_image">
                                    @error('blog_image')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>

                            </div>


                            <div class="row">

                                <div class="col-12">
                                    <input id="x" type="hidden" name="content">
                                    <trix-editor input="x"></trix-editor>
                                </div>



                            </div>

                            <br>
                            <button type="submit" class="btn btn-primary">Publish </button>
                            <a  href="{{url('/home/blogs/view')}}" class="btn btn-primary">View Blogs </a>
                        </form>
                        <br>
                    </div>



                    








                    <style>
                    #label {
                        font-size: 14px;
                        font-family: 'Roboto', sans-serif;
                        font-weight: 500;
                        color: black;
                    }

                    #page_title {
                        font-family: 'Roboto', sans-serif;
                        font-weight: 600;
                        font-size: 18px;
                    }

                    trix-editor {
                        min-height: 200px;
                        color: black;
                        font-size: 16px;
                    }

                    .custom-input {
                        color: black;
                    }


                    .bg-dark.color-light th {
                        color: white;
                    }

                    #dataTable_wrapper {
                        padding: 20px;
                        border: 1px solid #ddd;
                        border-radius: 8px;
                        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                    }

                    /* Styling for pagination controls */
                    .dataTables_paginate {
                        margin-top: 10px;
                    }

                    /* Styling for search box */
                    .dataTables_filter {
                        margin-bottom: 10px;
                    }
                    </style>












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