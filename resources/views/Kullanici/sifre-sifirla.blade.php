<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Sifremi Sifirla| Gobel Software</title>
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <link rel="apple-touch-icon" href="{{asset("app-assets/")}}/images/logo/gobel.ico">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset("app-assets/")}}/images/logo/gobel.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
          rel="stylesheet">

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
    <script src="https://code.jquery.com/jquery-3.6.0.js"
            integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <style>
        #uyari{
            color: red;
            font-size: 12px;
        }
        #uyari2 {
            color: green;
            font-size: 12px;
        }
    </style>
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern blank-page navbar-floating footer-static  " data-open="click"
      data-menu="vertical-menu-modern" data-col="blank-page">
<!-- BEGIN: Content-->
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <div class="auth-wrapper auth-basic px-2">
                <div class="auth-inner my-2">
                    <!-- Reset Password basic -->
                    <div class="card mb-0">
                        <div class="card-body">
                            <a href="{{route("login")}}" class="brand-logo">
                                <img src="{{asset("app-assets/images/logo/imzalogo.svg")}}" height="70" alt="">
                            </a>

                            <h4 class="card-title mb-1">Şifre Sıfırla 🔒</h4>
                            <p class="card-text mb-2">Yeni şifrenizi giriniz</p>

                            <form class="auth-reset-password-form mt-2" id="sifreOnayForm">
                                @csrf
                                <div class="mb-1">
                                    <div class="d-flex justify-content-between">
                                        <label class="form-label" for="reset-password-new">Şifre</label>
                                    </div>
                                    <div class="input-group input-group-merge form-password-toggle">
                                        <input type="password" class="form-control form-control-merge" id="password" required
                                               name="sifre"
                                               placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                               aria-describedby="reset-password-new" tabindex="1" autofocus/>
                                        <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                                    </div>
                                </div>
                                <div class="mb-1">
                                    <div class="d-flex justify-content-between">
                                        <label class="form-label" for="reset-password-confirm">Şifre Tekrarı</label>
                                    </div>
                                    <div class="input-group input-group-merge form-password-toggle">
                                        <input type="password" class="form-control form-control-merge" id="password2" required
                                               name="sifreTekrar"
                                               placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                               aria-describedby="reset-password-confirm" tabindex="2"/>
                                        <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                                    </div>
                                </div>
                                <input type="hidden" name="aktivasyonkodu" value="{{$aktivasyon}}">
                                <div class="d-flex justify-content-between">
                                    <label class="form-label" id="uyari" for="reset-password-confirm" hidden>Şifreler birbiri ile aynı değil !!!</label>
                                    <label class="form-label" id="uyari2" for="reset-password-confirm" hidden>Şifre Güncellendi !!!</label>
                                </div>
                                <button type="submit" class="btn btn-primary w-100" tabindex="3" id="onayButton">Şifreyi
                                    Kaydet
                                </button>
                            </form>

                            <p class="text-center mt-2">
                                <a href="{{route('login')}}"> <i data-feather="chevron-left"></i> Giriş Sayfasına Dön
                                </a>
                            </p>
                        </div>
                    </div>
                    <!-- /Reset Password basic -->
                </div>
            </div>

        </div>
    </div>
</div>
<!-- END: Content-->


<!-- BEGIN: Vendor JS-->
<script src="{{asset("app-assets/")}}/vendors/js/vendors.min.js"></script>
<!-- BEGIN Vendor JS-->
<script src="{{asset("app-assets/")}}/vendors/dist/js/jquery-2.0.0.js"></script>
<script src="{{asset("app-assets/")}}/vendors/js/jquery/jquery.min.js"></script>
<!-- BEGIN: Page Vendor JS-->
<script src="{{asset("app-assets/")}}/vendors/js/forms/validation/jquery.validate.min.js"></script>
<!-- END: Page Vendor JS-->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- BEGIN: Theme JS-->
<script src="{{asset("app-assets/")}}/js/core/app-menu.js"></script>
<script src="{{asset("app-assets/")}}/js/core/app.js"></script>
<!-- END: Theme JS-->

<script>
    site_url = "{{url("/")}}"
    $(window).on('load', function () {
        if (feather) {
            feather.replace({
                width: 14,
                height: 14
            });
        }
    })
    $(function () {

        $("#sifreOnayForm").on("submit", function (e) {
            let password = $('#password').val();
            let password2 = $('#password2').val();
            e.preventDefault();


            var form_data = $("#sifreOnayForm").serialize();


            if(password==password2){
                $('#uyari').attr("hidden",true);
                $.ajaxSetup({

                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }

                });


                $.post(site_url + "/sifre-onay", form_data, function (cevap) {


                    console.log(cevap.success)

                })

                .done(function () {
                    $('#uyari2').removeAttr('hidden');
                    let timerInterval
                    Swal.fire({
                        title: 'Şifre Güncelleme Başarılı!',
                        html: 'Giriş Sayfasına Yönlendiriliyor <b></b>',
                        timer:3000,
                        timerProgressBar: true,
                        didOpen: () => {
                            Swal.showLoading()
                            const b = Swal.getHtmlContainer().querySelector('b')
                            timerInterval = setInterval(() => {
                                b.textContent = Swal.getTimerLeft()
                            }, 100)
                        },
                        willClose: () => {

                            clearInterval(timerInterval);
                            window.location.href=site_url;
                        }
                    }).then((result) => {
                        /* Read more about handling dismissals below */
                        if (result.dismiss === Swal.DismissReason.timer) {
                            console.log('I was closed by the timer')
                        }
                    })
                    /*
                    Swal.fire({
                        title: 'Başarılı!',
                        text: 'Şifre Değiştirildi. Yönlendiriliyor...',
                        icon: 'success',
                    })
                    setTimeout(function(){

                        window.location.href=site_url;
                    }, 3000);
*/
                })
                .fail(function () {
                    Swal.fire({
                        title: 'Başarısız!',
                        text: 'Hay aksi bir sorun oluştu!',
                        icon: 'error',
                        confirmButtonText: 'Tamam'
                    })
                })



            }else {
                $('#uyari').removeAttr('hidden');

            }

        });
    });

</script>
</body>
<!-- END: Body-->

</html>
