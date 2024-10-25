@extends('layout')
@section('content')

    <div class="app-content">
        <div class="content-wrapper container-xl p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-start mb-0">Personeller</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route("adminindex")}}">Anasayfa</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="{{route("personel")}}">Personeller</a>
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
                                        <th>Ad Soyad</th>
                                        <th>E-Posta</th>
                                        <th>Telefon</th>
                                        <th>Unvan</th>
                                        <th>Personel Firma</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody id="table">
                                    @foreach($personeller as $list)
                                    <tr>
                                        <td>{{$list->personel_adsoyad}}</td>
                                        <td>{{$list->personel_eposta}}</td>
                                        <td>{{$list->personel_tel}}</td>
                                        <td>{{$list->personel_unvan}}</td>
                                        <td>{{$list->firma_ad}}</td>

                                        <td>

                                            <a href="{{route("personel_sil",$list->id)}}"
                                               class="item-edit">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-trash-2 font-small-4 me-50">
                                                    <polyline points="3 6 5 6 21 6"></polyline>
                                                    <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                    <line x1="10" y1="11" x2="10" y2="17"></line>
                                                    <line x1="14" y1="11" x2="14" y2="17"></line>
                                                </svg>
                                            </a>
                                            <a href="javascript:void(0)" class="item-edit modal-button" onclick="$.detay({{$list->id}})">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-edit font-small-4">
                                                    <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                                    <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
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
                    <h5 class="modal-title" id="exampleModalLabel">Personel Ekle</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{route("personel_ekle")}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="mb-3 col">
                                <label for="nameFlipInX" class="form-label">Personel Ad Soyad</label>
                                <input type="text" id="nameFlipInX" name="personel_adsoyad" class="form-control"
                                       placeholder="Personel adını ve soyadınızı giriniz.." >
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3 col">
                                <label for="emailFlipInX" class="form-label">Personel E-Posta</label>
                                <div class="input-group input-group-merge">
                                <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="14"
                                                                    height="14" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="feather feather-mail"><path
                                                d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline
                                                points="22,6 12,13 2,6"></polyline></svg></span>
                                    <input type="email" id="email-icon" class="form-control"
                                           name="personel_eposta"
                                           placeholder="E-Posta">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col">
                                <label for="dobFlipInX" class="form-label">Personel Telefon</label>
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
                                           name="personel_tel"
                                           placeholder="Mobile">
                                </div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col">
                                <label for="nameFlipInX" class="form-label">Personel Unvan</label>
                                <input type="text" id="nameFlipInX" class="form-control" name="personel_unvan"
                                       placeholder="Personel Unvanını Giriniz..." required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3">
                                <label for="select2Basic" class="form-label">Firma</label>
                                <select id="select2Basic" name="personel_firma_id" class="select2 form-select form-select-lg" data-allow-clear="true">
                                    @foreach($firmalar as $firma)
                                    <option value="{{$firma->id}}" >{{$firma->firma_ad}}</option>
                                    @endforeach


                                </select>
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
    <div class="modal animate__animated animate__flipInX" id="personelGuncelleModel" tabindex="-1"
         aria-labelledby="flipInXAnimationModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Personel Güncelle</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body" id="personel_guncelle">

                </div>


            </div>
        </div>
    </div>
    <script type="text/javascript">

        let status="{{session("statusPersonelEkle")??"yok"}}";
        let guncellestatus="{{session("statusPersonelGuncelle")??"yok"}}";
        let silstatus="{{session("statusPersonelSil")??"yok"}}";
        addEventListener("DOMContentLoaded", (event) => {
            if(status=="false"){
                Swal.fire({
                    title: 'Başarısız!',
                    text: 'Personel eklenmedi...',
                    icon: 'error',
                    confirmButtonText: 'Tamam'
                })
            }else if(status=="true"){
                Swal.fire({
                    title: 'Başarılı!',
                    text: 'Personel eklendi...',
                    icon: 'success',
                    confirmButtonText: 'Tamam'
                })
            }
            if(guncellestatus=="false"){
                Swal.fire({
                    title: 'Başarısız!',
                    text: 'Personel güncellenmedi...',
                    icon: 'error',
                    confirmButtonText: 'Tamam'
                })
            }else if(guncellestatus=="true"){
                Swal.fire({
                    title: 'Başarılı!',
                    text: 'Personel güncellendi...',
                    icon: 'success',
                    confirmButtonText: 'Tamam'
                })
            }
            if(silstatus=="false"){
                Swal.fire({
                    title: 'Başarısız!',
                    text: 'Personel silenemedi...',
                    icon: 'error',
                    confirmButtonText: 'Tamam'
                })
            }else if(silstatus=="true"){
                Swal.fire({
                    title: 'Başarılı!',
                    text: 'Personel silindi...',
                    icon: 'success',
                    confirmButtonText: 'Tamam'
                })
            }
        });

        $('.modal-button').click(function(){
            //modal içindeki labelin textine data-id değerini ver
            $('.personel_ad').text($(this).attr('data-id'));
            //modalı aç;
            $('.modal').modal();

            //false return etmezsen sayfa navigate olur
            return false;
        });
    </script>
@endsection
