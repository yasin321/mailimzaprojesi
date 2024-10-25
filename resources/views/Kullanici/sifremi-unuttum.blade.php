<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Sifremi Unuttum | Gobel Software</title>
    <link rel="apple-touch-icon" href="{{asset("app-assets/")}}/images/logo/gobel.ico">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset("app-assets/")}}/images/logo/gobel.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset("app-assets/")}}/vendors/css/vendors.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset("app-assets/")}}/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="{{asset("app-assets/")}}/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="{{asset("app-assets/")}}/css/colors.css">
    <link rel="stylesheet" type="text/css" href="{{asset("app-assets/")}}/css/components.css">
    <link rel="stylesheet" type="text/css" href="{{asset("app-assets/")}}/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="{{asset("app-assets/")}}/css/themes/bordered-layout.css">
    <link rel="stylesheet" type="text/css" href="{{asset("app-assets/")}}/css/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset("app-assets/")}}/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="{{asset("app-assets/")}}/css/plugins/forms/form-validation.css">
    <link rel="stylesheet" type="text/css" href="{{asset("app-assets/")}}/css/pages/authentication.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset("assets/")}}/css/style.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern blank-page navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="blank-page">
<!-- BEGIN: Content-->
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <div class="auth-wrapper auth-cover">
                <div class="auth-inner row m-0">
                    <!-- Brand logo--><a class="brand-logo" href="{{url("/")}}">
                        <img src="{{asset("app-assets/images/logo/imzalogo.svg")}}" height="70" alt="">
                    </a>
                    <!-- /Brand logo-->
                    <!-- Left Text-->
                    <div class="d-none d-lg-flex col-lg-8 align-items-center p-5">
                        <div class="w-100 d-lg-flex align-items-center justify-content-center px-5"><img class="img-fluid" src="../../../app-assets/images/pages/forgot-password-v2.svg" alt="Forgot password V2" /></div>
                    </div>
                    <!-- /Left Text-->
                    <!-- Forgot password-->
                    <div class="d-flex col-lg-4 align-items-center auth-bg px-2 p-lg-5">
                        <div class="col-12 col-sm-8 col-md-6 col-lg-12 px-xl-2 mx-auto">
                            <h2 class="card-title fw-bold mb-1">Şifremi Unuttum? 🔒</h2>
                            <p class="card-text mb-2">E-postanızı girin, size şifrenizi sıfırlamak için talimatlar gönderelim.</p>
                            <form class="auth-forgot-password-form mt-2" action="{{route('gonder')}}" id="sifremiUnuttumForm" method="POST">
                                @csrf
                                @method("PUT")
                                <div class="mb-1">
                                    <label class="form-label" for="forgot-password-email">Email</label>
                                    <input class="form-control" id="forgot-password-email" type="text"  name="uye_eposta"  placeholder="örnek@jbm.com.tr" autofocus="" tabindex="1" />
                                </div>
                                <button class="btn btn-primary w-100" tabindex="2">Talimatları Gönder </button>
                            </form>
                            <p class="text-center mt-2"><a href="{{route("login")}}"><i data-feather="chevron-left"></i> Geri Dön</a></p>
                        </div>
                    </div>
                    <!-- /Forgot password-->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END: Content-->


<!-- BEGIN: Vendor JS-->
<script src="{{asset("app-assets/")}}/vendors/js/vendors.min.js"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="{{asset("app-assets/")}}/vendors/js/forms/validation/jquery.validate.min.js"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="{{asset("app-assets/")}}/js/core/app-menu.js"></script>
<script src="{{asset("app-assets/")}}/js/core/app.js"></script>
<!-- END: Theme JS-->


<script>
    $(window).on('load', function() {
        if (feather) {
            feather.replace({
                width: 14,
                height: 14
            });
        }
    })



</script>

</body>
<!-- END: Body-->

</html>
