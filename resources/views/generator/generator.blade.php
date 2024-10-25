@extends('layout')
@section('content')
    {{$color=""}}
    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h2 class="content-header-title float-start mb-0">Generator</h2>
                    <div class="breadcrumb-wrapper">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="">Anasayfa</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">Temalar</a>
                            </li>
                            <li class="breadcrumb-item active">Generator
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content-body">
        <!-- Validation -->
        <section class="bs-validation">
            <div class="row">
                <!-- Bootstrap Validation -->
                <div class="col-md-3 col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">İmza Ayrıntıları Düzenle</h4>
                        </div>
                        <div class="card-body">
                            <div class="accordion" id="accordionExample">
                                <div class="card accordion-item active">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button type="button" class="accordion-button" data-bs-toggle="collapse"
                                                data-bs-target="#accordionOne" aria-expanded="false"
                                                aria-controls="accordionOne" role="tabpanel">
                                            Firma Bilgileri
                                        </button>
                                    </h2>

                                    <div id="accordionOne" class="accordion-collapse collapse"
                                         data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <form class="needs-validation" novalidate>

                                                <div class="row">
                                                    <div class="mb-3 col">
                                                        <select name="DataTables_Table_0_length" id="firmaSelect"
                                                                aria-controls="DataTables_Table_0" class="form-select">
                                                            <option value="0">Firmalar</option>
                                                            @foreach($firmalar as $firma)
                                                                <option value="{{$firma->id}}">{{$firma->firma_ad}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>


                                                <div class="row">
                                                    <div class="mb-3 col">
                                                        <label for="nameFlipInX" class="form-label">Firma Ad</label>
                                                        <input type="text" onkeyup="duzenle('#inputFirmaAd','#firmaAd')"
                                                               id="inputFirmaAd" name="firma_ad" class="form-control"
                                                               placeholder="Firma adınızı giriniz.." required>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="mb-3 col">
                                                        <label for="nameFlipInX" class="form-label">Firma Adres</label>
                                                        <input type="text" id="inputFirmaAdres"
                                                               onkeyup="duzenle('#inputFirmaAdres','#firmaAdres')"
                                                               class="form-control" name="firma_adres"
                                                               placeholder="Firma adresinizi giriniz.." required>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="mb-3 col">
                                                        <label for="emailFlipInX" class="form-label">Firma
                                                            E-Posta</label>
                                                        <div class="input-group input-group-merge">
                                <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="14"
                                                                    height="14" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="feather feather-mail"><path
                                                d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline
                                                points="22,6 12,13 2,6"></polyline></svg></span>
                                                            <input type="email" id="inputFirmaEposta"
                                                                   onkeyup="duzenle('#inputFirmaEposta','#firmaEposta')"
                                                                   class="form-control"
                                                                   name="firma_eposta"
                                                                   placeholder="Email" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="mb-3 col">
                                                        <label for="emailFlipInX" class="form-label">Firma Gsm</label>
                                                        <div class="input-group input-group-merge">
                                <span class="input-group-text">

                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round" class="feather feather-phone"><path
                                                d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                                </span>
                                                            <input type="number" id="inputFirmaGsm"
                                                                   onkeyup="duzenle('#inputFirmaGsm','#firmaGsm')"
                                                                   class="form-control"
                                                                   name="firma_gsm"
                                                                   placeholder="GSM" required>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="row">

                                                    <div class="mb-3 col">
                                                        <label for="dobFlipInX" class="form-label">Firma Telefon</label>
                                                        <div class="input-group input-group-merge">
                                <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="14"
                                                                    height="14" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="feather feather-smartphone"><rect x="5" y="2"
                                                                                                             width="14"
                                                                                                             height="20"
                                                                                                             rx="2"
                                                                                                             ry="2"></rect><line
                                                x1="12" y1="18" x2="12.01" y2="18"></line></svg></span>
                                                            <input type="number" id="inputFirmaTelefon"
                                                                   onkeyup="duzenle('#inputFirmaTelefon','#firmaTelefon')"
                                                                   class="form-control"
                                                                   name="firma_tel"
                                                                   placeholder="Mobile" required>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="mb-3 col">
                                                        <label for="nameFlipInX" class="form-label">Firma
                                                            Website</label>
                                                        <input type="text" id="inputFirmaWebsite"
                                                               onkeyup="duzenle('#inputFirmaWebsite','#firmaWebsite')"
                                                               class="form-control" name="firma_website"
                                                               placeholder="Website adresinizi giriniz..">
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="mb-3">
                                                        <label for="formFile" class="form-label">Firma Logo</label> <br>
                                                        <button type="button"
                                                                class="btn btn-icon btn-warning waves-effect waves-float waves-light"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#modalScrollable">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="14"
                                                                 height="14" viewBox="0 0 24 24" fill="none"
                                                                 stroke="currentColor" stroke-width="2"
                                                                 stroke-linecap="round" stroke-linejoin="round"
                                                                 class="feather feather-inbox">
                                                                <polyline
                                                                        points="22 12 16 12 14 15 10 15 8 12 2 12"></polyline>
                                                                <path d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z"></path>
                                                            </svg>
                                                            Logo Seç
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="card accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button type="button" class="accordion-button collapsed"
                                                data-bs-toggle="collapse" data-bs-target="#accordionTwo"
                                                aria-expanded="false" aria-controls="accordionTwo" role="tabpanel">
                                            Personel Bilgileri
                                        </button>
                                    </h2>
                                    <div id="accordionTwo" class="accordion-collapse collapse"
                                         aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <form class="needs-validation" novalidate>
                                                <div class="row">
                                                    <div class="mb-3 col">
                                                        <select name="DataTables_Table_0_length" id="personelSelect"
                                                                aria-controls="DataTables_Table_0" class="form-select">
                                                            <option value="0">Personeller</option>
                                                            @foreach($personeller as $personel)
                                                                <option value="{{$personel->id}}">{{$personel->personel_adsoyad}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>


                                                <div class="row">
                                                    <div class="mb-3 col">
                                                        <label for="nameFlipInX" class="form-label">Personel Ad
                                                            Soyad</label>
                                                        <input type="text" name="personel_adsoyad" id="inputPersonelAd"
                                                               onkeyup="duzenle('#inputPersonelAd','#personelAd')"
                                                               class="form-control"
                                                               placeholder="Personel adını ve soyadınızı giriniz..">
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="mb-3 col">
                                                        <label for="emailFlipInX" class="form-label">Personel
                                                            E-Posta</label>
                                                        <div class="input-group input-group-merge">
                                <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="14"
                                                                    height="14" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="feather feather-mail"><path
                                                d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline
                                                points="22,6 12,13 2,6"></polyline></svg></span>
                                                            <input type="email" id="inputPersonelEposta"
                                                                   class="form-control"
                                                                   onkeyup="duzenle('#inputPersonelEposta','#personelEposta')"
                                                                   name="personel_eposta"
                                                                   placeholder="E-Posta">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="mb-3 col">
                                                        <label for="dobFlipInX" class="form-label">Personel
                                                            Telefon</label>
                                                        <div class="input-group input-group-merge">
                                <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="14"
                                                                    height="14" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="feather feather-smartphone"><rect x="5" y="2"
                                                                                                             width="14"
                                                                                                             height="20"
                                                                                                             rx="2"
                                                                                                             ry="2"></rect><line
                                                x1="12" y1="18" x2="12.01" y2="18"></line></svg></span>
                                                            <input type="number" id="inputPersonelTelefon"
                                                                   class="form-control"
                                                                   name="personel_tel"
                                                                   onkeyup="duzenle('#inputPersonelTelefon','#personelTelefon')"
                                                                   placeholder="Mobile">
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="mb-3 col">
                                                        <label for="nameFlipInX" class="form-label">Personel
                                                            Unvan</label>
                                                        <input type="text" id="inputPersonelUnvan"
                                                               onkeyup="duzenle('#inputPersonelUnvan','#personelUnvan')"
                                                               class="form-control" name="personel_unvan"
                                                               placeholder="Personel Unvanını Giriniz..." required>
                                                    </div>
                                                </div>


                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
                <!-- /Bootstrap Validation -->

                <!-- jQuery Validation -->
                <div class="col-md-7 col-12">
                    <div class="card" style="height: 700px">
                        <div class="card-header">
                            <h4 class="card-title" id="baslik">Mail Imza</h4>
                        </div>
                        <div class="card-body " id="deneme321">
                            @if($id=="1")
                                <iframe src="{{asset("temalar/tema1.blade.php")}}" frameborder="0" id="iframebutton"
                                        style="width: 100%;height: 100%;"></iframe>
                            @elseif($id=="2")
                                <iframe src="{{asset("temalar/tema2.blade.php")}}" frameborder="0" id="iframebutton"
                                        style="width: 100%;height: 100%;"></iframe>
                            @elseif($id=="3")
                                <iframe src="{{asset("temalar/tema3.blade.php")}}" frameborder="0" id="iframebutton"
                                        style="width: 100%;height: 100%;"></iframe>
                            @endif

                        </div>
                    </div>
                </div>
                <!-- /jQuery Validation -->
                <!-- Bootstrap Validation -->
                <div class="col-md-2 col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">İmza Ayrıntıları Düzenle</h4>
                        </div>
                        <div class="card-body">
                            <div class="accordion">
                                <div class="card">


                                    <div class="accordion-collapse collapse show">
                                        <div class="accordion-body">
                                            <div class="row">
                                                <div class="mb-3 col">
                                                    <button type="button" class="btn btn-success"
                                                            onclick="copyEvent2('tables')">Html Kopyala
                                                    </button>
                                                </div>
                                                <div class="mb-3 col" style="margin-top: -25px">
                                                    <button type="button" class="btn btn-success" id="copy_btn"

                                                            onclick="copyEvent()">Tablo Kopyala
                                                    </button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
                <!-- /Bootstrap Validation -->
            </div>
        </section>
        <!-- /Validation -->

    </div>

    <div style="display: none;">
        <div id="framediv">


        </div>
    </div>

    <div class="modal fade" id="modalScrollable" tabindex="-1" aria-labelledby="modalScrollableTitle"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" style="max-width: 1200px;" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalScrollableTitle">Logolar</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body">
                    <section id="wishlist" class="grid-view wishlist-items upload-page">
                        @foreach ($images as $image)
                            <div class="card ecommerce-card">
                                <div class="item-img text-center" style="height: 150px">
                                    <a href="javascript:void(0)" style="height: 100%">
                                        <img src="{{asset('images/'. $image->getFilename())}}"
                                             style="width: 100%;height: 100%;object-fit: contain" class="img-fluid"
                                             alt="img-placeholder"/>
                                    </a>
                                </div>

                                <div class="item-options text-center">
                                    <button type="button"
                                            onclick="logoSec('https://imza.checkirtech.com/images/{{$image->getFilename()}}')"
                                            class="btn btn-light btn-wishlist remove-wishlist" style="width: 100%"
                                            data-bs-dismiss="modal">

                                        <span>Seç</span>
                                    </button>

                                </div>
                            </div>
                        @endforeach
                    </section>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kapat</button>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="kopyaModal" tabindex="-1" aria-labelledby="modalScrollableTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" style="max-width: 1200px;" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalScrollableTitle">Logolar</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body" id="iframeDiv">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kapat</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        $("#firmaSelect").change(function () {
            var deger = $(this).val();


            <?php
                foreach ($firmalar as $list){
                ?>
            if (deger == <?php echo $list->id ?> ) {
                $("#inputFirmaAd").val('<?php echo $list->firma_ad ?>');
                $('#iframebutton').contents().find("#firmaAd").text('<?php echo $list->firma_ad ?>');
                $("#inputFirmaAdres").val('<?php echo $list->firma_adres ?>');
                $('#iframebutton').contents().find("#firmaAdres").text('<?php echo $list->firma_adres ?>');
                $("#inputFirmaEposta").val('<?php echo $list->firma_eposta ?>');
                $('#iframebutton').contents().find("#firmaEposta").text('<?php echo $list->firma_eposta ?>');
                $("#inputFirmaGsm").val('<?php echo $list->firma_gsm ?>');
                $('#iframebutton').contents().find("#firmaGsm").text('<?php echo $list->firma_gsm ?>');
                $("#inputFirmaTelefon").val('<?php echo $list->firma_tel ?>');
                $('#iframebutton').contents().find("#firmaTelefon").text('<?php echo $list->firma_tel ?>');
                $("#inputFirmaWebsite").val('<?php echo $list->firma_website ?>');
                $('#iframebutton').contents().find("#firmaWebsite").text('<?php echo $list->firma_website ?>');
                $('#iframebutton').contents().find("#firmaLogo").attr("src", '<?php echo asset($list->firma_logo) ?>');


            }
            <?php } ?>




        });

        $("#personelSelect").change(function () {
            var deger = $(this).val();

            <?php
                foreach ($personeller as $list){
                ?>
            if (deger == <?php echo $list->id ?> ) {
                $("#inputPersonelAd").val('<?php echo $list->personel_adsoyad ?>');
                $('#iframebutton').contents().find("#personelAd").text('<?php echo $list->personel_adsoyad ?>');

                $("#inputPersonelEposta").val('<?php echo $list->firma_eposta ?>');
                $('#iframebutton').contents().find("#personelEposta").text('<?php echo $list->personel_eposta ?>');

                $("#inputPersonelTelefon").val('<?php echo $list->personel_tel ?>');
                $('#iframebutton').contents().find("#personelTelefon").text('<?php echo $list->personel_tel ?>');

                $("#inputPersonelUnvan").val('<?php echo $list->personel_unvan ?>');
                $('#iframebutton').contents().find("#personelUnvan").text('<?php echo $list->personel_unvan ?>');
            }
            <?php } ?>




        });


        function logoSec(logoName) {
            $('#iframebutton').contents().find("#firmaLogo").attr("src", logoName);
        }

        function copyEvent() {
            var str = document.getElementById("iframebutton");
            var elmnt = str.contentWindow.document.getElementById("tables");
            document.getElementById("framediv").innerHTML = elmnt.outerHTML;


            var $temp = $("<input>");
            $("body").append($temp);
            $temp.val($('#framediv').html()).select();
            var stra = $('#framediv').html();

            function listener(e) {
                e.clipboardData.setData("text/html", stra);
                e.clipboardData.setData("text/plain", stra);
                e.preventDefault();
            }
            document.addEventListener("copy", listener);
            document.execCommand("copy");
            document.removeEventListener("copy", listener);

            $temp.remove();

        }

        function copyEvent2(id) {
            var iframe = document.getElementById("iframebutton");
            var elmnt = iframe.contentWindow.document.getElementsByTagName("table")[0];

            navigator.clipboard.writeText(elmnt.outerHTML);
            $.Toast("Kopyala", "İmza Html Kodu Kopyalandı", "success", {
                position_class: "toast-top-right",

            });
        }


        function duzenle(inputId, degiskenId) {

            var baslikInput = $(inputId).val();
            if (baslikInput == "") {

                $('#iframebutton').contents().find(degiskenId).text("Firma Ad");
            } else {
                $('#iframebutton').contents().find(degiskenId).text($(inputId).val());

            }
            //  let framedeki=document.getElementById("iframebutton").contentWindow.document;
        }

        function renkDuzenle(inputId, degiskenId) {
            $('#iframebutton').contents().find(degiskenId).text("  Ad");
            //  let framedeki=document.getElementById("iframebutton").contentWindow.document;
        }

    </script>
@endsection

