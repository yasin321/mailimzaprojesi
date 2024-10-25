@extends('layout')
@section('content')

    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h2 class="content-header-title float-start mb-0">Görsel Yükle</h2>
                    <div class="breadcrumb-wrapper">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Anasayfa</a>
                            </li>
                            </li>
                            <li class="breadcrumb-item active">Görsel Yükle
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content-body">

        <section id="basic-tabs-components">
            <div class="row match-height">
                <!-- Basic Tabs starts -->
                <div class=" col-xl-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Görseller</h4>
                        </div>
                        <div class="card-body">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#uploads"
                                       aria-controls="home" role="tab" aria-selected="true">Yükle</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " id="profile-tab" data-bs-toggle="tab" href="#kutuphane"
                                       aria-controls="profile" role="tab" aria-selected="false">Kütüphane</a>
                                </li>
                            </ul>
                            <div class="tab-content ">
                                <div class="tab-pane active" id="uploads" aria-labelledby="home-tab" role="tabpanel">

                                    <form action="{{route("logokaydet")}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <input type="file" name="firma_logo" class="dropify-1"/>

                                        </div>
                                        <div class="row">
                                            <button type="submit" class="btn btn-primary">Kaydet</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane " id="kutuphane" aria-labelledby="profile-tab" role="tabpanel">
                                    <section id="wishlist" class="grid-view wishlist-items upload-page">
                                        @foreach ($images as $image)
                                            <div class="card ecommerce-card">
                                                <div class="item-img text-center" style="height: 150px">
                                                    <a href="javascript:void(0)" style="height: 100%">
                                                        <img src="{{asset($image->resim_url)}}" style="width: 100%;height: 100%;object-fit: contain" class="img-fluid" alt="img-placeholder" />
                                                    </a>
                                                </div>

                                                <div class="item-options text-center">
                                                    <a type="button" href="{{route("sil",$image->id)}}" class="btn btn-light btn-wishlist remove-wishlist">

                                                        <span>Sil</span>
                                                    </a>

                                                </div>
                                            </div>
                                        @endforeach
                                    </section>



                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Basic Tabs ends -->

            </div>
        </section>


        <!-- Dropzone section start -->
        <section id="dropzone-examples">
            <!-- warnings and primary alerts starts -->
            <div class="row">
                <div class="col-12">

                </div>
            </div>
            <!-- warnings and primary alerts ends -->

        </section>
        <!-- Dropzone section end -->

    </div>
    <script>




    </script>
@endsection

