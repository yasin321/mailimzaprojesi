@extends('layout')
@section('content')
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-start mb-0">Ayarlar</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route("adminindex")}}">Anasayfa</a>
                                </li>
                                <li class="breadcrumb-item active"><a href="#">Ayarlar</a>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <!-- Basic Horizontal form layout section start -->
            <section id="basic-horizontal-layouts">
                <div class="row">

                    <div class="col-md-6 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Profil Düzenle</h4>
                            </div>
                            <div class="card-body">
                                <form action="{{route("uyeGuncelle",$users->id)}}"  method="post" >
                                    @csrf
                                    @method("PUT")
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="mb-1 row">
                                                <div class="col-sm-3">
                                                    <label class="col-form-label" for="fname-icon">Ad Soyad</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <div class="input-group input-group-merge">
                                                        <span class="input-group-text"><i data-feather="user"></i></span>
                                                        <input type="text" id="fname-icon" class="form-control" name="uye_adsoyad" value="{{$users->uye_adsoyad}}"  placeholder="Ad Soyad"  required/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-1 row">
                                                <div class="col-sm-3">
                                                    <label class="col-form-label" for="email-icon">E-Posta</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <div class="input-group input-group-merge">
                                                        <span class="input-group-text"><i data-feather="mail"></i></span>
                                                        <input type="email" id="email-icon" class="form-control" name="uye_eposta" value="{{$users->uye_eposta}}"  placeholder="Email" required />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="mb-1 row">
                                                <div class="col-sm-3">
                                                    <label class="col-form-label" for="pass-icon">Şifre</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <div class="input-group input-group-merge">
                                                        <span class="input-group-text"><i data-feather="lock"></i></span>
                                                        <input type="password" id="pass-icon" class="form-control" name="password" placeholder="Yeni Şifre" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-9 offset-sm-3">
                                            <button type="submit" class="btn btn-primary">Güncelle</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
@endsection
