<!doctype html>
<html lang="en">

    <head>

        <meta charset="utf-8" />
        <title>Login | Nazox - Admin & Dashboard Template</title>
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

                                                <h4 class="font-size-18 mt-4">Welcome Back !</h4>
                                                <p class="text-muted">Sign in to continue to Nazox.</p>
                                            </div>

                                            <div class="p-2 mt-5">
                                                @if (Session::has('error'))
                                                <div class="alert alert-primary d-flex align-items-center alert-dismissible fade show" role="alert">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                                                      <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                                    </svg>
                                                    <div>
                                                       {{ Session::get('error') }}
                                                    </div>
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                  </div>

                                                @endif
                                                <form action="{{route('seller.login')}}" method="post">
                                                    @csrf

                                                    <div class="mb-3 auth-form-group-custom mb-4">
                                                        <i class="ri-user-2-line auti-custom-input-icon"></i>
                                                        <label for="email">Email</label>
                                                        <input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
                                                    </div>

                                                    <div class="mb-3 auth-form-group-custom mb-4">
                                                        <i class="ri-lock-2-line auti-custom-input-icon"></i>
                                                        <label for="userpassword">Password</label>
                                                        <input type="password" class="form-control" name="password" id="userpassword" placeholder="Enter password">
                                                    </div>

                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" id="customControlInline">
                                                        <label class="form-check-label" for="customControlInline">Remember me</label>
                                                    </div>

                                                    <div class="mt-4 text-center">
                                                        <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Log In</button>
                                                    </div>

                                                    <div class="mt-4 text-center">
                                                        <a href="auth-recoverpw.html" class="text-muted"><i class="mdi mdi-lock me-1"></i> Forgot your password?</a>
                                                    </div>
                                                </form>
                                            </div>

                                            <div class="mt-5 text-center">
                                                <p>Don't have an account ? <a href="{{route('seller.register')}}" class="fw-medium text-primary"> Register </a> </p>
                                                <p>© <script>document.write(new Date().getFullYear())</script> Nazox. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesdesign</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="authentication-bg">
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
