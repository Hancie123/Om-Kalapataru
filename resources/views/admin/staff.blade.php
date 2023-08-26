<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-assets-path="{{url('assets')}}" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Dashboard - Analytics | Sneat - Bootstrap 5 HTML Admin Template - Pro</title>

    <meta name="description" content="" />


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



                    <div class="container border rounded mt-3">
                        <h2 class="p-3">Staff Details</h2>




                        <form method="post" action="{{url('/home/manage-staff/save')}}" enctype="multipart/form-data">
                            @csrf

                            <div class="row mb-2">
                                <div class="col-md-4 mb-2">
                                    <label for="name" class="form-label">Name:</label>
                                    <input type="text" class="form-control" id="name"
                                        wire:model.live="name" placeholder="Enter name" name="name">
                                    @error('name')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>


                                <div class="col-md-4 mb-2">
                                    <label for="email" class="form-label">Email:</label>
                                    <input type="text" class="form-control" wire:model.live="email"
                                        id="email" placeholder="Enter email" name="email">
                                    @error('email')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>

                                <div class="col-md-4 mb-2">
                                    <label for="mobile" class="form-label">Mobile:</label>
                                    <input type="text" class="form-control" wire:model.live="mobile"
                                        id="mobile" placeholder="Enter mobile" name="mobile">
                                    @error('mobile')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>

                            </div>


                            <div class="row">




                                <div class="col-md-4 mb-2">
                                    <label for="name" class="form-label">Address:</label>
                                    <input type="text" class="form-control" id="address"
                                        wire:model.live="address" placeholder="Enter address" name="address">
                                    @error('address')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>

                                <div class="col-md-4 mb-2">

                                    <label for="mobile" class="form-label">Profile Pic:</label>
                                    <input type="file" class="form-control"
                                        placeholder="Upload profile_pic" name="profile_pic">
                                    @error('profile_pic')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror

                                </div>

                                <div class="col-md-4 mb-2">
                                    <label for="mobile" class="form-label">Bio:</label>
                                    <textarea class="form-control" name="bio"
                                        wire:model.blur="bio"></textarea>
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

                    <div class="container mt-3 rounded border p-3">
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
                   .bg-dark.color-light th {
            color: white;}

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

                <!-- Footer -->
                <footer class="content-footer text-center footer bg-footer-theme p-2">

                    ©
                    <script>
                    document.write(new Date().getFullYear());
                    </script>
                    , Designed by Hancie and Nitesh Hamal


                </footer>
                <!-- / Footer -->

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

    <script>
    document.addEventListener("DOMContentLoaded", function() {
        var greetingIconElement = document.getElementById("greeting-icon");
        var greetingElement = document.getElementById("greeting");
        var currentTime = new Date();
        var currentHour = currentTime.getHours();

        if (currentHour >= 5 && currentHour < 12) {
            greetingIconElement.innerHTML = "&#128072;"; // Morning icon
            greetingElement.textContent = "Good Morning";
        } else if (currentHour >= 12 && currentHour < 15) {
            greetingIconElement.innerHTML = "&#127774;"; // Afternoon icon
            greetingElement.textContent = "Good Afternoon";
        } else {
            greetingIconElement.innerHTML = "&#127769;"; // Evening icon
            greetingElement.textContent = "Good Evening";
        }
    });
    </script>

    @include('layouts/adminfooter')
</body>

</html>