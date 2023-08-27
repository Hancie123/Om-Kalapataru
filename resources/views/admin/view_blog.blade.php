<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-assets-path="{{url('assets')}}" data-template="vertical-menu-template-free">


<head>

    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>Dashboard - View Blogs</title>
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


                    <h4 id="page_title" class="p-2 pt-3  text-dark"><a class="btn btn-primary mx-3" href="{{ url()->previous() }}" wire:navigate><i class='bx bx-arrow-back'></i> Back</a>  View Blogs Data </h4> 
                    


                    <div class="table-responsive  mt-3 rounded border p-3">
                        <table id="dataTable" class="table rounded table-bordered">
                            <thead class="bg-dark color-light">
                                <tr id="table-heading">
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th>Content</th>
                                    <th>Image</th>
                                    <th>Action</th>

                                </tr>

                            </thead>
                            <tbody>
                                @foreach($blogs as $data)
                                <tr>
                                    <td>{{$data->blog_id}}</td>
                                    <td>{{$data->title}}</td>
                                    <td>{{$data->category}}</td>
                                    <td>{!! substr(strip_tags($data->content), 0, 250)!!}</td>
                                    <td class="text-center"><img src="{{asset('assets/'.$data->blog_image)}}"
                                            class="rounded" style="width:50px;" />
                                    </td>
                                    <td class="text-center"><a href="{{url('/home/blogs/view/delete')}}/{{$data->blog_id}}"
                                            class="btn btn-primary">Delete</a></td>
                                </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div>






                    <script>
                    $(document).ready(function() {
                        // Initialize DataTables with styling
                        $('#dataTable').DataTable({
                            "paging": true,
                            "lengthChange": true,
                            "searching": true,
                            "info": true,
                            "autoWidth": false,
                            "language": {
                                "paginate": {
                                    "next": "Next",
                                    "previous": "Prev"
                                }
                            }
                        });
                    });
                    </script>

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

                    .bg-dark.color-light th {
                        color: white;
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







                    <style>
                    /* Simple input border highlight */
                    .form-control {
                        border: 1px solid #ccc;
                        padding: 8px;
                        transition: border-color 0.3s, box-shadow 0.3s;
                    }

                    .form-control:focus {
                        border-color: #007bff;
                        outline: none;
                        box-shadow: 0 0 5px #007bff;
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