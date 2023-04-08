<!doctype html>
<html lang="en">

    <head>

        <meta charset="utf-8" />
        <title>Register | Nazox - Admin & Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
         <!-- App favicon -->
         <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">

        <!-- Bootstrap Css -->
        <link href="{{asset('assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{asset('assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body class="auth-body-bg">
        <div>
            <div class="container-fluid p-0">
                <div class="row g-0">
                    <div class="col-lg-4">
                        <div class="authentication-page-content p-4 d-flex align-items-center min-vh-100">
                            <div class="w-100">
                                <div class="row justify-content-center">
                                    <div class="col-lg-9">
                                        <div>
                                            <div class="text-center">
                                                <div>
                                                    <a href="index.html" class="">
                                                        <img src="{{asset('assets/images/logo-dark.png')}}" alt="" height="20" class="auth-logo logo-dark mx-auto">
                                                        <img src="{{asset('assets/images/logo-light.png')}}" alt="" height="20" class="auth-logo logo-light mx-auto">
                                                    </a>
                                                </div>

                                                <h4 class="font-size-18 mt-4">Register account</h4>
                                                <p class="text-muted">Get your free Nazox account now.</p>
                                            </div>

                                            <div class="p-2 mt-5">
                                                <form class="" action="{{route('seller.register.store')}}" method="post">
                                                    @csrf

                                                    <div class="auth-form-group-custom mb-4">
                                                        <i class="ri-mail-line auti-custom-input-icon"></i>
                                                        <label for="useremail">Email</label>
                                                        <input type="email" class="form-control" name="email" id="useremail" placeholder="Enter email">
                                                    </div>

                                                    <div class="auth-form-group-custom mb-4">
                                                        <i class="ri-user-2-line auti-custom-input-icon"></i>
                                                        <label for="username">Username</label>
                                                        <input type="text" class="form-control" name="username" id="username" placeholder="Enter username">
                                                    </div>

                                                    <div class="auth-form-group-custom mb-4">
                                                        <i class="ri-lock-2-line auti-custom-input-icon"></i>
                                                        <label for="userpassword">Password</label>
                                                        <input type="password" class="form-control" name="password" id="userpassword" placeholder="Enter password">
                                                    </div>


                                                    <div class="text-center">
                                                        <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Register</button>
                                                    </div>

                                                    <div class="mt-4 text-center">
                                                        <p class="mb-0">By registering you agree to the Nazox <a href="#" class="text-primary">Terms of Use</a></p>
                                                    </div>
                                                </form>
                                            </div>

                                            <div class="mt-5 text-center">
                                                <p>Already have an account ? <a href="{{route('seller.login')}}" class="fw-medium text-primary"> Login</a> </p>
                                                <p>© <script>document.write(new Date().getFullYear())</script> Nazox. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesdesign</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="authentication-bg position-relative">
                            <div class="bg-overlay"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



         <!-- JAVASCRIPT -->
         <script src="{{asset('assets/libs/jquery/jquery.min.js')}}"></script>
         <script src="{{asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
         <script src="{{asset('assets/libs/metismenu/metisMenu.min.js')}}"></script>
         <script src="{{asset('assets/libs/simplebar/simplebar.min.js')}}"></script>
         <script src="{{asset('assets/libs/node-waves/waves.min.js')}}"></script>

        <!-- App js -->
        <script src="{{asset('assets/js/app.js')}}"></script>

    </body>
</html>
