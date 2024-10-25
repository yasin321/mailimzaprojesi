@extends('layout')
@section('content')

    <div class="app-content">
        <div class="content-wrapper container-xl p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-start mb-0">Firmalar</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route("adminindex")}}">Anasayfa</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="{{route("firmaliste")}}">Firmalar</a>
                                    </li>

                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
                    <div class="mb-1 breadcrumb-right">

                    </div>
                </div>
            </div>
            <div class="content-body">


                <!-- Hoverable rows start -->
                <div class="row" id="table-hover-row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header d-block">
                                <button type="button" style="float: right" class="btn rounded-pill me-2 btn-primary"
                                        data-bs-toggle="modal" data-bs-target="#flipInXAnimationModal">Ekle
                                </button>
                            </div>
                            <div class="card-body">
                                <p class="card-text">

                                </p>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th>Firma</th>
                                        <th>Firma Ad</th>
                                        <th>E-Posta</th>
                                        <th>GSM</th>
                                        <th>Website</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody id="table">
                                    @foreach($firmalar as $list)
                                        <tr id="row-{{$list->id}}">
                                            <td>
                                                <!-- ../../../app-assets/images/icons/angular.svg-->
                                                <img src="{{asset($list->firma_logo)}}" class="me-75"
                                                     height="40" width="100" style="object-fit: contain"
                                                     alt="Jbm Interactive"/>
                                            </td>
                                            <td>

                                                <span class="fw-bold">{{$list->firma_ad}}</span>
                                            </td>
                                            <td>{{$list->firma_eposta}}</td>
                                            <td>{{$list->firma_gsm}}</td>
                                            <td>{{$list->firma_website}}</td>

                                            <td>
                                                <a href="javascript:void(0)" onclick="sil({{$list->id}})"
                                                   class="item-edit">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                         class="feather feather-trash-2 font-small-4 me-50">
                                                        <polyline points="3 6 5 6 21 6"></polyline>
                                                        <path
                                                            d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                        <line x1="10" y1="11" x2="10" y2="17"></line>
                                                        <line x1="14" y1="11" x2="14" y2="17"></line>
                                                    </svg>
                                                </a>
                                                <a href="javascript:void(0)" class="item-edit"
                                                   onclick="$.firmaDetay({{$list->id}})">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                         class="feather feather-edit font-small-4">
                                                        <path
                                                            d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                                        <path
                                                            d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                                    </svg>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Hoverable rows end -->


            </div>
        </div>
    </div>
    <div class="modal animate__animated animate__flipInX" id="flipInXAnimationModal" tabindex="-1"
         aria-labelledby="flipInXAnimationModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Firma Ekle</h5>
                    <button type="button" class="btn-close" id="ekleModalKapat" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body">
                    <form id="firmaEkle" action="" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <input type="file" name="firma_logo" class="dropify"/>
                        </div>

                        <div class="row">
                            <div class="mb-3 col">
                                <label for="nameFlipInX" class="form-label">Firma Ad</label>
                                <input type="text" id="nameFlipInX" name="firma_ad" class="form-control"
                                       placeholder="Firma adınızı giriniz.." required >
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col">
                                <label for="nameFlipInX" class="form-label">Firma Adres</label>
                                <input type="text" id="nameFlipInX" class="form-control" name="firma_adres"
                                       placeholder="Firma adresinizi giriniz.." required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3 col">
                                <label for="emailFlipInX" class="form-label">Firma E-Posta</label>
                                <div class="input-group input-group-merge">
                                <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="14"
                                                                    height="14" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="feather feather-mail"><path
                                            d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline
                                            points="22,6 12,13 2,6"></polyline></svg></span>
                                    <input type="email" id="email-icon" class="form-control"
                                           name="firma_eposta"
                                           placeholder="Email" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col mb-0">
                                <label for="emailFlipInX" class="form-label">Firma Gsm</label>
                                <div class="input-group input-group-merge">
                                <span class="input-group-text">

                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round" class="feather feather-phone"><path
                                            d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                                </span>
                                    <input type="number" id="contact-icon" class="form-control"
                                           name="firma_gsm"
                                           placeholder="GSM" required>
                                </div>
                            </div>
                            <div class="mb-3 col mb-0">
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
                                    <input type="number" id="contact-icon" class="form-control"
                                           name="firma_tel"
                                           placeholder="Mobile" required>
                                </div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col">
                                <label for="nameFlipInX" class="form-label">Firma Website</label>
                                <input type="text" id="nameFlipInX" class="form-control" name="firma_website"
                                       placeholder="Website adresinizi giriniz.." >
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kapat</button>
                            <button type="submit" class="btn btn-primary">Kaydet</button>
                        </div>
                    </form>
                </div>


            </div>
        </div>
    </div>

    <div class="modal animate__animated animate__flipInX" id="firmaaGuncelleModal" tabindex="-1"
         aria-labelledby="flipInXAnimationModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Firma Güncellle</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body" id="firma_guncelle">

                </div>


            </div>
        </div>
    </div>

    <script>


        let status="{{session("status")??"yok"}}";
        addEventListener("DOMContentLoaded", (event) => {
            if(status=="false"){
                Swal.fire({
                    title: 'Başarısız!',
                    text: 'Firma güncellenmedi...',
                    icon: 'error',
                    confirmButtonText: 'Tamam'
                })
            }else if(status=="true"){
                Swal.fire({
                    title: 'Başarılı!',
                    text: 'Firma güncellendi...',
                    icon: 'success',
                    confirmButtonText: 'Tamam'
                })
            }
        });

        function ekle() {
            let form = document.getElementById("firmaEkle");
            let table = document.getElementById("table");
            form.addEventListener("submit", function (e) {
                let values = table.outerHTML;
                e.preventDefault();
                let data = new FormData(form);
                //  data.append("_token",{{csrf_token()}})
                let url = "{{route("firma_eklee")}}";
                //let values=[...data.entries()];
                fetch(url, {
                    method: "post",
                    body: data,
                    headers: {
                        'X-CSRF-TOKEN': '{{csrf_token()}}',

                    },

                })
                    .then(res => res.json())
                    .then(data => {
                        table.innerHTML = data + values;
                       // flipInXAnimationModal
                        document.getElementById("ekleModalKapat").click();
                        form.reset();
                        Swal.fire({
                            title: 'Başarılı!',
                            text: 'Firma eklendi...',
                            icon: 'success',
                            confirmButtonText: 'Tamam'
                        })
                    });

            });
        }

        ekle();
        function sil(id) {
            let url = "{{route("firma_sill",":id")}}";
            url = url.replace(":id", id);
            fetch(url, {
                method: "delete",
                headers: {
                    'X-CSRF-TOKEN': '{{csrf_token()}}',

                },

            })
                .then(res => res.json())
                .then(data => {
                    console.log(data);
                    //table.innerHTML = data + values;
                    //table.insertRow(data);
                    if (data.status == "OK") {
                        document.getElementById("row-" + id).remove();
                        Swal.fire({
                            title: 'Başarılı!',
                            text: 'Firma Silindi...',
                            icon: 'success',
                            confirmButtonText: 'Tamam'
                        })
                    } else {
                        Swal.fire({
                            title: 'Başarısız!',
                            text: 'Firma Eklenmedi...',
                            icon: 'error',
                            confirmButtonText: 'Tamam'
                        })
                        alert("Hata");
                    }
                });
        }
    </script>
@endsection
