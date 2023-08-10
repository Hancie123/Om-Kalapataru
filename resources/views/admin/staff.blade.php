<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Om Kalpataru Carriers | Staff Management System</title>
    @include('layouts/adminheader')
    @livewireStyles
</head>

<body>
    <div class="container-scroller">
        @include('layouts/adminnavbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_settings-panel.html -->
            <div class="theme-setting-wrapper">
                <div id="settings-trigger"><i class='bx bx-cog'></i></div>
                <div id="theme-settings" class="settings-panel">

                    <i class='bx bx-x-circle settings-close'></i>
                    <p class="settings-heading">SIDEBAR SKINS</p>
                    <div class="sidebar-bg-options selected" id="sidebar-light-theme">
                        <div class="img-ss rounded-circle bg-light border mr-3"></div>Light
                    </div>
                    <div class="sidebar-bg-options" id="sidebar-dark-theme">
                        <div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark
                    </div>
                    <p class="settings-heading mt-2">HEADER SKINS</p>
                    <div class="color-tiles mx-0 px-4">
                        <div class="tiles success"></div>
                        <div class="tiles warning"></div>
                        <div class="tiles danger"></div>
                        <div class="tiles info"></div>
                        <div class="tiles dark"></div>
                        <div class="tiles default"></div>
                    </div>
                </div>
            </div>

            <div id="right-sidebar" class="settings-panel">
                <h1>Hy</h1>
            </div>

            @include('layouts/adminsidemenu')
            <div class="main-panel">
                <div class="content-wrapper">

                    <h2>Staff Details</h2>




                    <form method="post" action="{{url('/home/manage-staff/save')}}" enctype="multipart/form-data">
                        @csrf

                        <div class="row mb-2">
                            <div class="col-md-4 mb-2">
                                <label for="name" class="form-label">Name:</label>
                                <input type="text" class="form-control form-control-sm" id="name" wire:model.live="name"
                                    placeholder="Enter name" name="name">
                                @error('name')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>


                            <div class="col-md-4 mb-2">
                                <label for="email" class="form-label">Email:</label>
                                <input type="text" class="form-control form-control-sm" wire:model.live="email"
                                    id="email" placeholder="Enter email" name="email">
                                @error('email')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>

                            <div class="col-md-4 mb-2">
                                <label for="mobile" class="form-label">Mobile:</label>
                                <input type="text" class="form-control form-control-sm" wire:model.live="mobile"
                                    id="mobile" placeholder="Enter mobile" name="mobile">
                                @error('mobile')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>

                        </div>


                        <div class="row">




                            <div class="col-md-4 mb-2">
                                <label for="name" class="form-label">Address:</label>
                                <input type="text" class="form-control form-control-sm" id="address"
                                    wire:model.live="address" placeholder="Enter address" name="address">
                                @error('address')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>

                            <div class="col-md-4 mb-2">

                                <label for="mobile" class="form-label">Profile Pic:</label>
                                <input type="file" class="form-control form-control-sm" 
                                     placeholder="Upload profile_pic" name="profile_pic">
                                @error('profile_pic')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                                
                            </div>

                            <div class="col-md-4 mb-2">
                                <label for="mobile" class="form-label">Bio:</label>
                                <textarea class="form-control form-control-sm" name="bio"
                                    wire:model.blur="bio"></textarea>
                                @error('bio')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>

                        </div>


                        <button type="submit" class="btn btn-primary">Save </button>
                    </form>
                    <br>

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

                    <div class="container mt-3 rounded">
                        <table class="table rounded">
                            <thead>
                                <tr>
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
                                    <td><img src="{{asset('assets/'.$data->profile_picture)}}" /></td>
                                    <td><a href="{{url('/home/manage-staff/delete')}}/{{$data->id}}"
                                            class="btn btn-primary">Delete</a></td>
                                </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div>















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

                    @include('layouts/adminfooter')
                </div>
            </div>
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    @livewireScripts
</body>

</html>