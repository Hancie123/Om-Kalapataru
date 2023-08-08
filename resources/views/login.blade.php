<!DOCTYPE html>
<html lang="en">

<head>
    <title>Om Kalpataru Carriers Pvt.Ltd | Login System</title>
    <link rel="icon" href="{{asset('assets/img/logo.png')}}" />
    @extends('layouts/loginheader')
    @livewireStyles
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth px-0">
                <div class="row w-100 mx-0">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                            <div class="brand-logo">
                                <img class="mx-auto d-block" src="{{asset('assets/img/logo.png')}}" alt="logo"
                                    style="width:20%;">
                                <p class="text-center mt-2">Om Kalpataru Carriers Pvt.Ltd</p>
                            </div>
                            <h4>Hello! let's get started</h4>
                            <h6 class="font-weight-light mt-1">Sign in to continue.</h6>




                            <form class="pt-3" method="post" action="/login">
                                @csrf

                                @if(Session()->has('fail'))
                                <div class="alert alert-danger">
                                    {{Session()->get('fail')}}
                                </div>
                                @endif
                                @if(Session()->has('success'))
                                <div class="alert alert-success">
                                    {{Session()->get('success')}}
                                </div>
                                @endif

                                <div class="form-group">
                                    <x-bladewind.input type="email" name="email" required="true" label="Email" />
                                    @error('email')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <x-bladewind.input name="password" label="Password" required="true" type="password"
                                        viewable="true" />
                                    @error('password')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror

                                </div>


                                <div class="mt-3">
                                    <button type="submit"
                                        class="btn btn-block btn-primary bg-primary btn-lg font-weight-medium">SIGN
                                        IN</button>
                                </div>
                                <div class="my-2 d-flex justify-content-between align-items-center">

                                    <a href="{{url('/login/forgot-password')}}" class="auth-link text-black" wire:navigate>Forgot password?</a>
                                </div>
                                <div class="text-center mt-4 font-weight-light">
                                    <a href="{{ url()->previous() }}" wire:navigate>Back</a>
                                </div>

                                <!-- <div class="text-center mt-4 font-weight-light">
                                    Don't have an account? <a href="register.html" class="text-primary">Create</a>
                                </div> -->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>

    @livewireScripts
</body>

</html>