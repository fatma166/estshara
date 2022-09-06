<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8" />
    <title>تسجيل الدخول</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- third party css -->
    <link href="{{asset('libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('libs/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- third party css end -->
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}">

    <!-- Plugins css -->
    <link href="{{asset('libs/flatpickr/flatpickr.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('libs/selectize/css/selectize.bootstrap3.css')}}" rel="stylesheet" type="text/css" />
    <!-- Plugins css -->
    <link href="{{asset('libs/dropzone/min/dropzone.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('libs/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('libs/flatpickr/flatpickr.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Kufi+Arabic:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- App css -->
    <link href="{{asset('css/config/default/bootstrap-rtl.min.css')}}" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
    <link href="{{asset('css/config/default/app-rtl.min.css')}}" rel="stylesheet" type="text/css" id="app-default-stylesheet" />

    <link href="{{asset('css/config/default/bootstrap-dark-rtl.min.css')}}" rel="stylesheet" type="text/css" id="bs-dark-stylesheet" />
    <link href="{{asset('css/config/default/app-dark-rtl.min.css')}}" rel="stylesheet" type="text/css" id="app-dark-stylesheet" />
    <link href="{{asset('css/dawam.css')}}" rel="stylesheet" type="text/css" id="app-dark-stylesheet" />
    <!-- icons -->
    <link href="{{asset('css/icons-rtl.min.css')}}" rel="stylesheet" type="text/css" />

</head>

<body class="loading auth-fluid-pages pb-0">

<div class="auth-fluid">
    <!--Auth fluid left content -->
    <div class="auth-fluid-form-box">
        <div class="align-items-center d-flex h-100">
            <div class="card-body">

                <!-- Logo -->
                <div class="auth-brand text-center text-lg-start">
                    <div class="auth-logo">
                        <a href="index.html" class="logo logo-dark text-center">
                                    <span class="logo-lg">
                                        <img src="{{asset('images/logo.png')}}" alt="" height="22">
                                    </span>
                        </a>

                        <a href="index.html" class="logo logo-light text-center">
                                    <span class="logo-lg">
                                        <img src="{{asset('images/logo.png')}}" alt="" height="22">
                                    </span>
                        </a>
                    </div>
                </div>

                <!-- title-->
                <h4 class="mt-0">تسجيل الدخول</h4>
                <p class="text-muted mb-4">من فضلك ادخل البريد الالكتروني وكلمة المرور الخاصة بحسابك </p>

                <!-- form -->
                <form action="{{route('postLogin')}}" method="post">
               	{{ csrf_field() }}
                    <div class="mb-3">
                        <label for="emailaddress" class="form-label">البريد الالكتروني</label>
                        <input class="form-control" type="email"  name="email" id="emailaddress" required="" placeholder="muaz@highspeed.technology">
                    </div>
                    <div class="mb-3">
                        <a href="auth-recoverpw-2.html" class="text-muted float-end"><small>نسيت كلمة المرور ؟</small></a>
                        <label for="password" class="form-label">كلمة المرور</label>
                        <div class="input-group input-group-merge">
                            <input type="password" id="password" name="password" class="form-control" placeholder="*********">
                            <div class="input-group-text" data-password="false">
                                <span class="password-eye"></span>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="checkbox-signin">
                            <label class="form-check-label" for="checkbox-signin">تذكرني</label>
                        </div>
                    </div>
                    <div class="text-center d-grid">
                        <button class="btn btn-primary" type="submit">تسجيل الدخول </button>
                    </div>
                    <!-- social-->
                    <div class="text-center mt-4">
                        <p class="text-muted font-16">تسجيل الدخول باستخدام</p>
                        <ul class="social-list list-inline mt-3">
                            <li class="list-inline-item">
                                <a href="javascript: void(0);" class="social-list-item border-primary text-primary"><i class="mdi mdi-facebook"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="javascript: void(0);" class="social-list-item border-danger text-danger"><i class="mdi mdi-google"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="javascript: void(0);" class="social-list-item border-info text-info"><i class="mdi mdi-twitter"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="javascript: void(0);" class="social-list-item border-secondary text-secondary"><i class="mdi mdi-github"></i></a>
                            </li>
                        </ul>
                    </div>
                </form>
                <!-- end form-->

                <!-- Footer-->
                <footer class="footer footer-alt">
                    <p class="text-muted">ليس لديك حساب ؟ <a href="#" class="text-muted ms-1"><b>اشترك الان</b></a></p>
                </footer>

            </div> <!-- end .card-body -->
        </div> <!-- end .align-items-center.d-flex.h-100-->
    </div>
    <!-- end auth-fluid-form-box-->

    <!-- Auth fluid right content -->
    <div class="auth-fluid-right text-center">
        <div class="auth-user-testimonial">
            <h2 class="mb-3 text-white">تطبيق استشارة</h2>
            <p class="lead"><i class="mdi mdi-format-quote-open"></i> الان يمكنك طلب استشارة اون لاين من اطباء حول العالم   <i class="mdi mdi-format-quote-close"></i>
            </p>
            <h5 class="text-white">
                - هاي سبيد : محمد سلمان
            </h5>
        </div> <!-- end auth-user-testimonial-->
    </div>
    <!-- end Auth fluid right content -->
</div>
<!-- end auth-fluid-->

<!-- Vendor js -->
<script src="{{asset('js/vendor.min.js')}}"></script>

<!-- App js -->
<script src="{{asset('js/app.min.js')}}"></script>

</body>
</html>
