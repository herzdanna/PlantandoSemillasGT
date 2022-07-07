<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login - Planting Seeds</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="/favicon.png">
    <link rel="stylesheet" href="/back/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/back/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="/back/assets/css/themify-icons.css">
    <link rel="stylesheet" href="/back/assets/css/metisMenu.css">
    <link rel="stylesheet" href="/back/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/back/assets/css/slicknav.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="/back/assets/css/typography.css">
    <link rel="stylesheet" href="/back/assets/css/default-css.css">
    <link rel="stylesheet" href="/back/assets/css/styles.css">
    <link rel="stylesheet" href="/back/assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="/back/assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- login area start -->
    <div class="login-area login-bg">
        <div class="container">
            <div class="login-box ptb--100">
                <form method="POST" action="{{ route('login') }}" id="formAuthentication" class="sign__form">
                    @csrf
                    <div class="login-form-head">
                        <img src="/assets/img/logo_t.png">
                        <p style="color: #222; margin-top: 15px;">Sign in to start your session</p>
                    </div>
                    <div class="login-form-body">
                        <div class="col-12">
                          <div class="mb-3 mt-2">
                          @if(count($errors) > 0)
                            @foreach( $errors->all() as $message )
                            <div class="alert alert-danger display-hide">
                            <span>{{ $message }}</span>
                            </div>
                            @endforeach
                          @endif
                          @if(Session::has('exito'))
                            <div class="alert alert-success display-hide">
                            <span>{!! Session::get('exito') !!}</span>
                            </div>
                          @endif
                          </div>
                        </div>
                        <div class="form-gp">
                            <label for="email">Email address</label>
                            <input type="email" id="email" name="email" required maxlength="100" autofocus>
                            <i class="ti-email"></i>
                            <div class="text-danger"></div>
                        </div>
                        <div class="form-gp">
                            <label for="password">Password</label>
                            <input type="password" id="password" name="password" aria-describedby="password" required maxlength="35">
                            <i class="ti-lock"></i>
                            <div class="text-danger"></div>
                        </div>
                        <div class="row mb-4 rmber-area">
                            <div class="col-6">
                                <div class="custom-control custom-checkbox mr-sm-2">
                                    <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                                    <label class="custom-control-label" for="customControlAutosizing">Remember Me</label>
                                </div>
                            </div>
                        </div>
                        <div class="submit-btn-area">
                            <button id="form_submit" type="submit">Login <i class="ti-arrow-right"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- jquery latest version -->
    <script src="/back/assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="/back/assets/js/popper.min.js"></script>
    <script src="/back/assets/js/bootstrap.min.js"></script>
    <script src="/back/assets/js/owl.carousel.min.js"></script>
    <script src="/back/assets/js/metisMenu.min.js"></script>
    <script src="/back/assets/js/jquery.slimscroll.min.js"></script>
    <script src="/back/assets/js/jquery.slicknav.min.js"></script>
    
    <!-- others plugins -->
    <script src="/back/assets/js/plugins.js"></script>
    <script src="/back/assets/js/scripts.js"></script>
</body>

</html>