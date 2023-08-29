<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-assets-path="{{url('assets')}}" data-template="vertical-menu-template-free">


<head>

    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>Dashboard - Staff Management System</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    @include('layouts/adminheader')
</head>

<body>
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


                    <h4 id="page_title" class="p-2 pt-3  text-dark">Staff Details</h4>
                    <div class="container border rounded mt-3 bg-light">





                        <form method="post" action="{{url('/home/manage-staff/save')}}" enctype="multipart/form-data"
                            class="p-3">
                            @csrf

                            <div class="row mb-2">
                                <div class="col-md-4 mb-2">
                                    <label id="label" for="name" class="form-label">Name:</label>
                                    <input type="text" class="form-control" id="name" wire:model.live="name"
                                        placeholder="Enter name" name="name">
                                    @error('name')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>


                                <div class="col-md-4 mb-2">
                                    <label id="label" for="email" class="form-label">Email:</label>
                                    <input type="text" class="form-control" wire:model.live="email" id="email"
                                        placeholder="Enter email" name="email">
                                    @error('email')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>

                                <div class="col-md-4 mb-2">
                                    <label id="label" for="mobile" class="form-label">Mobile:</label>
                                    <input type="text" class="form-control" wire:model.live="mobile" id="mobile"
                                        placeholder="Enter mobile" name="mobile">
                                    @error('mobile')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>

                            </div>


                            <div class="row">




                                <div class="col-md-4 mb-2">
                                    <label id="label" for="name" class="form-label">Address:</label>
                                    <input type="text" class="form-control" id="address" wire:model.live="address"
                                        placeholder="Enter address" name="address">
                                    @error('address')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>

                                <div class="col-md-4 mb-2">

                                    <label id="label" for="mobile" class="form-label">Profile Pic:</label>
                                    <input type="file" class="form-control" placeholder="Upload profile_pic"
                                        name="profile_pic">
                                    @error('profile_pic')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror

                                </div>

                                <div class="col-md-4 mb-2">
                                    <label id="label" for="mobile" class="form-label">Bio:</label>
                                    <textarea class="form-control" name="bio" wire:model.blur="bio"></textarea>
                                    @error('bio')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>

                            </div>


                            <button type="submit" class="btn btn-primary">Save </button>
                        </form>
                        <br>
                    </div>

                    @if(Session()->has('success'))
                    <div class="alert alert-success">
                        <strong>Success!</strong> {{Session()->get('success')}}
                    </div>
                    @endif
                    @if(Session()->has('fail'))
                    <div class="alert alert-danger">
                        <strong>Fail!</strong> {{Session()->get('fail')}}
                    </div>
                    @endif

                    <div class="table-responsive  mt-3 rounded border p-3 bg-light table-bordered">
                        <table id="dataTable" class="table rounded table-bordered">
                            <thead class="bg-dark color-light">
                                <tr id="table-heading">
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Mobile</th>
                                    <th>Email</th>
                                    <th>Address</th>
                                    <th>Bio</th>
                                    <th>Image</th>
                                    <th>Action</th>

                                </tr>

                            </thead>
                            <tbody>
                                @foreach($alldata as $data)
                                <tr>
                                    <td>{{$data->id}}</td>
                                    <td>{{$data->name}}</td>
                                    <td>{{$data->mobile}}</td>
                                    <td>{{$data->email}}</td>
                                    <td>{{$data->address}}</td>
                                    <td>{{$data->bio}}</td>
                                    <td class="text-center"><img src="{{asset('assets/'.$data->profile_picture)}}"
                                            class="rounded" style="width:50px;" />
                                    </td>
                                    <td class="text-center"><a href="{{url('/home/manage-staff/delete')}}/{{$data->id}}"
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