<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Om Kalpataru Carriers | Dashboard</title>
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
                    <h2 class="text-center">Gallery Management System</h2><br>

                    <div class="container rounded border p-3">
                        <form action="{{url('/home/gallery/insert')}}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <div class="col-md-6">
                                    <label for="title" class="form-label">Title:</label>
                                    <input type="text" class="form-control form-control-sm" id="image_title"
                                        placeholder="Enter image title" name="image_title">
                                    @error('image_title')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="gallery_image" class="form-label">Image:</label>
                                    <input type="file" class="form-control form-control-sm" placeholder="Upload image"
                                        name="gallery_image">
                                    @error('gallery_image')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>


                            <button type="submit" class="btn btn-primary mt-3">Save </button><br><br>
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
                        </form>
                    </div>


                    <div class="container mt-3 rounded border p-3">
                        <table class="table rounded table-bordered">
                            <thead class="table-primary">
                                <tr>
                                    <th>ID</th>
                                    <th>Image Title</th>
                                    <th>Image</th>
                                    <th>Uploaded At</th>
                                    <th>Action</th>

                                </tr>

                            </thead>
                            <tbody>
                                @foreach($gallery as $data)
                                <tr>
                                    <td>{{$data->gallery_id}}</td>
                                    <td>{{$data->title}}</td>
                                    <td class="text-center"><img src="{{asset('assets/'.$data->image_path)}}" /></td>
                                    <td>{{$data->updated_at}}</td>
                                    <td class="text-center"><a href="{{url('/home/gallery/delete')}}/{{$data->gallery_id}}"
                                            class="btn btn-primary">Delete</a></td>
                                </tr>
                                @endforeach
                            </tbody>

                        </table>
                        {{$gallery->links('pagination::bootstrap-5')}}
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

                   
                </div>
            </div>
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    @include('layouts/adminfooter')
    @livewireScripts
</body>

</html>