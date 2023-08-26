<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-assets-path="{{url('assets')}}" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>Dashboard - System Settings</title>
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




                    <h4 class="p-3 text-dark fw-bold">System Settings</h4>
                    <div class="container border rounded mt-3">

                        <!-- Accordion -->


                        <div class="accordion mt-3" id="accordionExample">
                            <div class="card accordion-item active">
                                <h2 class="accordion-header" id="headingOne">
                                    <button type="button" class="accordion-button" data-bs-toggle="collapse"
                                        data-bs-target="#accordionOne" aria-expanded="true"
                                        aria-controls="accordionOne">
                                        Company Info
                                    </button>
                                </h2>

                                <div id="accordionOne" class="accordion-collapse collapse bg-secondary"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <form>
                                            <div class="row mt-3">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label id="label" for="title" style="color:white;">COMPANY
                                                            NAME</label>
                                                        <input type="text" class="form-control" name="company_name" />
                                                    </div>
                                                </div>

                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label id="label" for="title"
                                                            style="color:white;">ADDRESS</label>
                                                        <input type="text" class="form-control"
                                                            name="company_address" />
                                                    </div>
                                                </div>

                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label id="label" for="title" style="color:white;">PHONE</label>
                                                        <input type="text" class="form-control" name="phone" />
                                                    </div>
                                                </div>

                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label id="label" for="title" style="color:white;">PAN
                                                            NO</label>
                                                        <input type="text" class="form-control" name="pan_no" />
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="row mt-3">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label id="label" for="title" style="color:white;">EMAIL</label>
                                                        <input type="text" class="form-control" name="email" />
                                                    </div>
                                                </div>

                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label id="label" for="title" style="color:white;">FISCAL YEAR
                                                            START
                                                            MITI</label>
                                                        <input type="text" class="form-control"
                                                            name="fiscal_year_start_miti" />
                                                    </div>
                                                </div>

                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label id="label" for="title" style="color:white;">FISCAL YEAR
                                                            END
                                                            MITI</label>
                                                        <input type="text" class="form-control"
                                                            name="fiscal_year_end_miti" />
                                                    </div>
                                                </div>


                                            </div><br>
                                            <button class="btn btn-primary">Save</button>

                                        </form>


                                    </div>
                                </div>
                            </div>
                            <div class="card accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#accordionTwo" aria-expanded="false"
                                        aria-controls="accordionTwo">
                                        Image Setup
                                    </button>
                                </h2>
                                <div id="accordionTwo" class="accordion-collapse collapse bg-secondary"
                                    aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <form>
                                            <div class="row mt-3">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label id="label" style="color:white;" for="imageUpload">COMPANY
                                                            LOGO</label><br>
                                                        <input type="file" class="form-control-file" id="imageUpload"
                                                            accept="image/*" style="color:white;">
                                                    </div>
                                                    <div id="imagePreview" class="mt-4">
                                                        <img src="#" alt="Image Preview"
                                                            class="img-fluid d-none border-light" style="width:80px;">
                                                    </div><br>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label id="label" style="color:white;" for="imageUpload">COMPANY
                                                            QR
                                                            LOGO</label><br>
                                                        <input type="file" class="form-control-file" id="imageUpload2"
                                                            accept="image/*" style="color:white;">
                                                    </div>
                                                    <div id="imagePreview2" class="mt-4">
                                                        <img src="#" alt="Image Preview"
                                                            class="img-fluid d-none border-light" style="width:80px;">
                                                    </div><br>
                                                </div>


                                            </div>

                                            <button class="btn btn-primary">Save</button>
                                        </form>



                                    </div>
                                </div>
                            </div>
                            <div class="card accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#accordionThree" aria-expanded="false"
                                        aria-controls="accordionThree">
                                        VAT Setup
                                    </button>
                                </h2>
                                <div id="accordionThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">


                                        <form></form>


                                    </div>
                                </div>
                            </div>
                        </div><br>

                        <!--/ Accordion -->



                    </div>


























                    <style>
                    #label {
                        font-size: 14px;
                        font-family: Roboto, sans-serif;
                        font-weight: 600;
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

                    /* Simple input border highlight */
                    .form-control {
                        border: 1px solid #ccc;
                        transition: border-color 0.3s, box-shadow 0.3s;
                    }

                    .form-control:focus {
                        border-color: #007bff;
                        outline: none;
                        box-shadow: 0 0 5px #007bff;
                    }
                    </style>


                    <script>
                    $(document).ready(function() {
                        $("#imageUpload").change(function() {
                            var input = this;

                            if (input.files && input.files[0]) {
                                var reader = new FileReader();

                                reader.onload = function(e) {
                                    $('#imagePreview img').attr('src', e.target.result);
                                    $('#imagePreview img').removeClass('d-none');
                                }

                                reader.readAsDataURL(input.files[0]);
                            }
                        });
                    });
                    </script>

                    <script>
                    $(document).ready(function() {
                        $("#imageUpload2").change(function() {
                            var input = this;

                            if (input.files && input.files[0]) {
                                var reader = new FileReader();

                                reader.onload = function(e) {
                                    $('#imagePreview2 img').attr('src', e.target.result);
                                    $('#imagePreview2 img').removeClass('d-none');
                                }

                                reader.readAsDataURL(input.files[0]);
                            }
                        });
                    });
                    </script>










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