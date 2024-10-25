<!DOCTYPE html>
<html class="loading" lang="tr" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <title>E-İmza</title>
    <link rel="apple-touch-icon" href="{{asset("app-assets/")}}/images/logo/gobel.ico">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset("app-assets/")}}/images/logo/gobel.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
          rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset("app-assets/")}}/vendors/css/vendors.min.css">
    <!-- END: Vendor CSS-->
    <script src="{{asset("app-assets/")}}/vendors/dist/js/jquery-2.0.0.js"></script>
    <script src="{{asset("app-assets/")}}/vendors/js/jquery/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset("app-assets/")}}/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="{{asset("app-assets/")}}/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="{{asset("app-assets/")}}/css/colors.css">
    <link rel="stylesheet" type="text/css" href="{{asset("app-assets/")}}/css/components.css">
    <link rel="stylesheet" type="text/css" href="{{asset("app-assets/")}}/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="{{asset("app-assets/")}}/css/themes/bordered-layout.css">
    <link rel="stylesheet" type="text/css" href="{{asset("app-assets/")}}/css/themes/semi-dark-layout.css">
    <link rel="stylesheet" href="{{asset("app-assets/")}}/vendors/css/animate/animate.css">
    <link rel="stylesheet" href="{{asset("app-assets/")}}/vendors/dropify/dist/css/dropify.min.css">
    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset("app-assets/")}}/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="{{asset("app-assets/")}}/css/plugins/charts/chart-apex.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset("assets/")}}/css/style.css">
    <link rel="stylesheet" type="text/css" href="{{asset("assets/")}}/css/toast.style.min.css">


</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click"
      data-menu="vertical-menu-modern" data-col="">

<!-- BEGIN: Header-->
<nav class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow container-xxl">
    <div class="navbar-container d-flex content">
        <div class="bookmark-wrapper d-flex align-items-center">
            <ul class="nav navbar-nav d-xl-none">
                <li class="nav-item"><a class="nav-link menu-toggle" href="#"><i class="ficon" data-feather="menu"></i></a>
                </li>
            </ul>

            <ul class="nav navbar-nav">
                <li class="nav-item d-none d-lg-block"><a class="nav-link bookmark-star"><i class="ficon text-warning"
                                                                                            data-feather="star"></i></a>
                    <div class="bookmark-input search-input">
                        <div class="bookmark-input-icon"><i data-feather="search"></i></div>
                        <input class="form-control input" type="text" placeholder="Bookmark" tabindex="0"
                               data-search="search">
                        <ul class="search-list search-list-bookmark"></ul>
                    </div>
                </li>
            </ul>
        </div>
        <ul class="nav navbar-nav align-items-center ms-auto">

            <li class="nav-item dropdown dropdown-user"><a class="nav-link dropdown-toggle dropdown-user-link"
                                                           id="dropdown-user" href="#" data-bs-toggle="dropdown"
                                                           aria-haspopup="true" aria-expanded="false">
                    <div class="user-nav d-sm-flex d-none"><span
                                class="user-name fw-bolder">{{session("adsoyad")}}</span><span
                                class="user-status">Admin</span></div>
                    <span class="avatar"><img class="round"
                                              src="{{asset("app-assets/images/profile/user-uploads/profile2.png")}}"
                                              alt="avatar" height="40" width="40"><span
                                class="avatar-status-online"></span></span>
                </a>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-user">

                 <!--   <a class="dropdown-item" href="{{route("profile")}}">
                        <i class="me-50" data-feather="user"></i>
                        Profil</a>
-->
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{route("ayarlar")}}"><i class="me-50" data-feather="settings"></i> Ayarlar</a>

                        <a class="dropdown-item" href="{{route('logout')}}">
                            <i class="me-50" data-feather="power"></i> Çıkış Yap</a>
                </div>
            </li>
        </ul>
    </div>
</nav>


<!-- END: Header-->


<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header" style="height: 7.5rem;">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item me-auto"><a class="navbar-brand" href="" style="margin: 0"><span class="brand-logo">
                           <img src="{{asset("app-assets/images/logo/imzalogo.svg")}}" style="height: 80px;max-width: 100%;" alt=""></span>

                </a></li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse"><i
                            class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i
                            class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary"
                            data-feather="disc" data-ticon="disc"></i></a></li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class=" nav-item"><a class="d-flex align-items-center" href="{{route("adminindex")}}"><i data-feather="home"></i><span
                            class="menu-title text-truncate">Anasayfa</span></a>

            <li class=" navigation-header"><span data-i18n="Apps &amp; Pages">Sayfalar</span><i
                        data-feather="more-horizontal"></i>
            </li>
            <!--
            <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="user"></i><span class="menu-title text-truncate" data-i18n="User">Üyeler</span></a>
                <ul class="menu-content">
                    <li><a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">Üye Liste</span></a>
                    <li><a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">Üye Ekle</span></a>
                    </li>

                </ul>
            </li>
            -->
            <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="briefcase"></i><span
                            class="menu-title text-truncate" data-i18n="briefcase">Firmalar</span></a>
                <ul class="menu-content">
                    <li><a class="d-flex align-items-center" href="{{route("firmaliste")}}"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">Firma Liste</span></a>
                    </li>

                </ul>
            </li>
            <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="user-check"></i><span
                            class="menu-title text-truncate" data-i18n="user-check">Personeller</span></a>
                <ul class="menu-content">
                    <li><a class="d-flex align-items-center" href="{{route("personel")}}"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">Personel Liste</span></a>
                    </li>

                </ul>
            </li>
            <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="folder"></i><span
                            class="menu-title text-truncate" data-i18n="folder">İmza Temalar</span></a>
                <ul class="menu-content">
                    <li><a class="d-flex align-items-center" href="{{route("temalist")}}"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">Temalar</span></a>
                    </li>

                </ul>
            </li>
            <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="map"></i><span
                            class="menu-title text-truncate" data-i18n="folder">Generator</span></a>
                <ul class="menu-content">
                    <li><a class="d-flex align-items-center" href="{{route("temaGenerator")}}"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">Generator</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="{{route("upload")}}"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">Kütüphane</span></a>
                    </li>

                </ul>
            </li>


        </ul>
    </div>
</div>
<!-- END: Main Menu-->

<!-- BEGIN: Content-->
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        @yield('content')

    </div>
</div>
<!-- END: Content-->

<div class="sidenav-overlay"></div>
<div class="drag-target"></div>

<!-- BEGIN: Footer-->
<footer class="footer footer-static footer-light">
    <p class="clearfix mb-0"><span class="float-md-start d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2023<a
                    class="ms-25" href="https://jbm.com.tr/" target="_blank">Jbm Interactive</a><span
                    class="d-none d-sm-inline-block">, Tüm hakları saklıdır</span></span></p>
</footer>
<button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
<!-- END: Footer-->

<script src="{{asset("app-assets/")}}/vendors/js/charts/apexcharts.min.js"></script>
<script src="{{asset("app-assets/")}}/vendors/js/vendors.min.js"></script>
<script src="{{asset("app-assets/")}}/vendors/dist/js/jquery-2.0.0.js"></script>
<script src="{{asset("app-assets/")}}/vendors/js/jquery/jquery.min.js"></script>
<script src="{{asset("app-assets/")}}/vendors/dist/js/jquery.highlight-4.js"></script>
<script src="{{asset("app-assets/")}}/vendors/dropify/dist/js/dropify.min.js"></script>
<script src="{{asset("app-assets/")}}/vendors/dist/js/dropify-data.js"></script>
<script src="{{asset("app-assets/")}}/tinymce/js/tinymce/tinymce.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{asset("assets/")}}/js/toast.script.js"></script>
<script src="{{asset("app-assets/")}}/js/scripts/charts/new_chart_apex.js"></script>


<!-- BEGIN: Vendor JS-->

<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="{{asset("app-assets/")}}/js/core/app-menu.js"></script>
<script src="{{asset("app-assets/")}}/js/core/app.js"></script>
<script src="{{asset("assets/")}}/js/scripts.js"></script>
<script type="text/javascript">

    site_url = "{{url("/")}}"
    token = "{{csrf_token()}}"
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
<script>
    $(document).ready(function () {
        // Basic
        $('.dropify').dropify();
        $('.dropify-1').dropify();
        // Translated



    });
</script>
<script>
    $(window).on('load', function () {
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
