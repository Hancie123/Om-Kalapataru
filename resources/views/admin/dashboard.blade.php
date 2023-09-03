<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-assets-path="{{url('assets')}}" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Dashboard - Om Kalpataru Carriers Pvt.Ltd</title>

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
                <div class="content-wrapper">
                    <!-- Content -->

                    <div class="container-xxl flex-grow-1 container-p-y">
                        <div class="row">
                            <div class="col-12 mb-4 order-0">
                                <div class="card">
                                    <div class="d-flex align-items-end row">
                                        <div class="col-sm-7">
                                            <div class="card-body">
                                                <h5 class="card-title text-primary"><span id="greeting-icon"
                                                        class="greeting-icon"></span> <span id="greeting"></span>
                                                    {{Session()->get('name')}}</h5>
                                                <p class="mb-4 text-dark">
                                                    You have {{count($contact)}} inbox message(s). 
                                                    If you want to view all the inbox messages then click o below button.
                                                </p>

                                                <a href="{{url('/home/contact/view')}}" class="btn btn-sm btn-primary">View
                                                    Inbox</a>
                                            </div>
                                        </div>
                                        <div class="col-sm-5 text-center text-sm-left">
                                            <div class="card-body pb-0 px-0 px-md-4">
                                                <img src="{{url('assets/img/man-with-laptop-light.png')}}" height="140"
                                                    alt="View Badge User"
                                                    data-app-dark-img="illustrations/man-with-laptop-dark.png"
                                                    data-app-light-img="illustrations/man-with-laptop-light.png" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            


                        </div>



                    </div>
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