<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-assets-path="{{url('assets')}}" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>Dashboard - Download Documents</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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


                    <br>
                    <style>
                    #doc-container {
                        width: 100%;
                        height: 600px;

                    }

                    #pdf-container {
                        width: 100%;
                        height: 600px;
                        padding: 20px;
                    }
                    </style>


                    <div class="w3-sidebar w3-bar-block w3-card rounded" style="width:130px; height:50vh;">
                        <h5 class="w3-bar-item pt-4 fw-bolder text-dark">Documents</h5>
                        <button class="w3-bar-item w3-button tablink text-dark w3-hover-text-white"
                            onclick="openLink(event, 'Fade')">Letter Pad</button>
                        <button class="w3-bar-item w3-button tablink text-dark"
                            onclick="openLink(event, 'Left')">Company Documents</button>
                        <button class="w3-bar-item w3-button tablink text-dark" onclick="openLink(event, 'Right')">My
                            Documents</button>



                    </div>

                    <div style="margin-left:130px">
                        <div class="w3-padding text-dark text-center">Use the menu to select documents from one tab to
                            another.
                        </div>

                        <div id="Fade" class="w3-container city w3-animate-left" style="display:none">
                            <h2 class="text-dark text-center">Om Kalpataru Carriers Pvt.Ltd Letter pad</h2>
                            <div id="pdf-container">
                                <embed src="{{url('assets/docs/Letter.pdf')}}" type="application/pdf" width="100%"
                                    height="100%">
                            </div>
                            <button id="btn btn-primary download-button ">Download DOCX</button>
                        </div>

                        <div id="Left" class="w3-container city w3-animate-left" style="display:none">
                            <h2 class="text-dark text-center">Om Kalpataru Carriers Pvt.Ltd Company Documents</h2>
                            <div class="row px-xl-5">
                                <div class="col-md-6">
                                    <a href="" data-bs-toggle="modal" data-bs-target="#PANModel"><img
                                            class="img-thumbnail" id="myImg"
                                            src="{{url('assets/docs/IMG_20220824_143636_725_11zon.jpg')}}" alt="Snow"
                                            style="width:100%;max-width:300px; height:350px;"></a>
                                </div>

                                <div class="col-md-6">
                                    <a href="" data-bs-toggle="modal" data-bs-target="#registrationmodel"><img
                                            class="img-thumbnail" id="myImg"
                                            src="{{url('assets/docs/IMG_20220824_143650_804_11zon.jpg')}}" alt="Snow"
                                            style="width:100%;max-width:300px; height:350px;"></a>
                                </div>

                            </div>


                            <!-- The PAN Modal -->
                            <div class="modal" id="PANModel">
                                <div class="modal-dialog modal-lg modal-dialog-scrollable">
                                    <div class="modal-content">

                                        <!-- Modal Header -->
                                        <div class="modal-header bg-danger text-lighter">
                                            <h4 class="modal-title text-center" style="color:white;">Om Kalpataru
                                                Carriers Pvt.Ltd PAN Document</h4>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>

                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            <img class="mx-auto d-block" id="myImg"
                                                src="{{url('assets/docs/IMG_20220824_143636_725_11zon.jpg')}}"
                                                alt="Snow" style="width:100%;max-width:600px;height:auto;">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- The Registration Modal -->
                            <div class="modal" id="registrationmodel">
                                <div class="modal-dialog modal-lg modal-dialog-scrollable">
                                    <div class="modal-content">

                                        <!-- Modal Header -->
                                        <div class="modal-header bg-danger text-lighter">
                                            <h4 class="modal-title text-center" style="color:white;">Om Kalpataru
                                                Carriers Pvt.Ltd Certificate of Company Registration</h4>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>

                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            <img class="mx-auto d-block" id="myImg"
                                                src="{{url('assets/docs/IMG_20220824_143650_804_11zon.jpg')}}"
                                                alt="Snow" style="width:100%;max-width:600px;height:auto;">
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>

                        <div id="Right" class="w3-container city w3-animate-left" style="display:none">

                            <h2 class="text-dark text-center">My Documents</h2>
                            <div class="row px-xl-5">
                                <div class="col-md-6">
                                    <a href="" data-bs-toggle="modal" data-bs-target="#front">
                                        <img class="img-thumbnail img-loader"
                                            src="{{url('path-to-placeholder-image.jpg')}}" alt="PAN Document"
                                            style="width:100%;max-width:300px; height:250px;"
                                            data-src="{{url('assets/docs/IMG_20220824_143720_843.jpg')}}">
                                    </a>
                                </div>

                                <div class="col-md-6">
                                    <a href="" data-bs-toggle="modal" data-bs-target="#back">
                                        <img class="img-thumbnail img-loader"
                                            src="{{url('path-to-placeholder-image.jpg')}}" alt="Registration Document"
                                            style="width:100%;max-width:300px; height:250px;"
                                            data-src="{{url('assets/docs/IMG_20220824_143733_715.jpg')}}">
                                    </a>
                                </div>
                            </div>




                            <!-- The Front Modal -->
                            <div class="modal" id="front">
                                <div class="modal-dialog modal-lg modal-dialog-scrollable">
                                    <div class="modal-content">

                                        <!-- Modal Header -->
                                        <div class="modal-header bg-danger text-lighter">
                                            <h4 class="modal-title text-center" style="color:white;">Front Document</h4>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>

                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            <img class="mx-auto d-block" id="myImg"
                                                src="{{url('assets/docs/IMG_20220824_143720_843.jpg')}}"
                                                alt="Mahesh Hamal" style="width:100%;max-width:600px;height:auto;">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- The Back Modal -->
                            <div class="modal" id="back">
                                <div class="modal-dialog modal-lg modal-dialog-scrollable">
                                    <div class="modal-content">

                                        <!-- Modal Header -->
                                        <div class="modal-header bg-danger text-lighter">
                                            <h4 class="modal-title text-center" style="color:white;">Back Document</h4>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>

                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            <img class="mx-auto d-block" id="myImg"
                                                src="{{url('assets/docs/IMG_20220824_143733_715.jpg')}}"
                                                alt="Mahesh Hamal" style="width:100%;max-width:600px;height:auto;">
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>





                    </div>

                    <script>
                    function openLink(evt, animName) {
                        var i, x, tablinks;
                        x = document.getElementsByClassName("city");
                        for (i = 0; i < x.length; i++) {
                            x[i].style.display = "none";
                        }
                        tablinks = document.getElementsByClassName("tablink");
                        for (i = 0; i < x.length; i++) {
                            tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
                        }
                        document.getElementById(animName).style.display = "block";
                        evt.currentTarget.className += " w3-red";
                    }
                    </script>

                    <script>
                    const downloadButton = document.getElementById("download-button");

                    downloadButton.addEventListener("click", function() {
                        const docUrl = "{{url('assets/docs/Letter.docx')}}";
                        const link = document.createElement("a");
                        link.href = docUrl;
                        link.target = "_blank";
                        link.download =
                            "{{url('assets/docs/Letter.docx')}}";
                        link.click();
                    });
                    </script>

                    <script>
                    window.addEventListener('load', function() {
                        var imgLoaders = document.querySelectorAll('.img-loader');
                        imgLoaders.forEach(function(imgLoader) {
                            var imgSrc = imgLoader.getAttribute('data-src');
                            imgLoader.setAttribute('src', imgSrc);
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