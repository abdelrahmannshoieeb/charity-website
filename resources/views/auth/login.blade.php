<!DOCTYPE html>
<html lang="en" dir="ltr" data-startbar="dark" data-bs-theme="light">

    
<!-- Mirrored from mannatthemes.com/approx/default/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Nov 2024 23:11:26 GMT -->
<head>
        

        <meta charset="utf-8" />
                <title>Login | Approx - Admin & Dashboard Template</title>
                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
                <meta content="" name="author" />
                <meta http-equiv="X-UA-Compatible" content="IE=edge" />

                <!-- App favicon -->
                <link rel="shortcut icon" href="assets/images/favicon.ico">

       
         <!-- App css -->
         <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
         <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
         <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />

         @livewireStyles()
    </head>

    
    <!-- Top Bar Start -->
    <body>
    <div class="container-xxl">
        <div class="row vh-100 d-flex justify-content-center">
            <div class="col-12 align-self-center">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4 mx-auto">
                            <div class="card">
                                <div class="card-body p-0 bg-black auth-header-box rounded-top">
                                    <div class="text-center p-3">
                                        <a href="index.html" class="logo logo-admin">
                                            <img src="assets/images/logo-sm.png" height="50" alt="logo" class="auth-logo">
                                        </a>
                                        <h4 class="mt-3 mb-1 fw-semibold text-white fs-18">Let's Get Started Charity website</h4>   
                                        <p class="text-muted fw-medium mb-0">Sign in to continue to Charity website.</p>  
                                    </div>
                                </div>
                                <div class="card-body pt-0">    

                                <livewire:login/>

                                    <div class="text-center  mb-2">
                                        <p class="text-muted">Don't have an account ?  <a href="{{ route('signup') }}" class="text-primary ms-2">Free Resister</a></p>
                                    </div>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!--end card-body-->
            </div><!--end col-->
        </div><!--end row-->                                        
    </div><!-- container -->
    </body>
    <!--end body-->

    @livewireScripts()

<!-- Mirrored from mannatthemes.com/approx/default/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Nov 2024 23:11:26 GMT -->
</html>