@extends('layout')
@section('content')

    <div class="app-content">
        <div class="content-wrapper container-xl p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-start mb-0">Temalar</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route("adminindex")}}">Anasayfa</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="{{route("temalist")}}">Temalar</a>
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



            </div>
        </div>
    </div>




    <div class="row" style="padding-top: 80px">

        <div class="col-md-6 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Tema 1</h4>
                </div>
                <div class="card-body" style="height: 400px;">

                    <iframe src="{{asset("temalar/tema1.blade.php")}}" frameborder="0" style="width: 100%;height: 100%;"></iframe>

                    <a href="javascript:void(0)"  onclick="$.tema_detay('1')" type="button" style="float: right;margin-top: -35px;" class="btn rounded-pill me-2 btn-primary">Tema Seç
                    </a>
                </div>

            </div>
        </div>
        <div class="col-md-6 col-sm-12">
            <div class="card" id="card2">
                <div class="card-header">
                    <h4 class="card-title">Tema 2</h4>
                </div>
                <div class="card-body"  style="height: 400px;" >

                    <iframe src="{{asset("temalar/tema2.blade.php")}}" frameborder="0" id="iframebutton"  style="width: 100%;height: 100%;"></iframe>

                    <a href="javascript:void(0)"  onclick="$.tema_detay('2')" type="button" style="float: right;margin-top: -35px;" class="btn rounded-pill me-2 btn-primary">Tema Seç
                    </a>
                </div>

            </div>
        </div>
        <div class="col-md-6 col-sm-12">
            <div class="card" id="card2">
                <div class="card-header">
                    <h4 class="card-title">Tema 3</h4>
                </div>
                <div class="card-body"  style="height: 400px;" >

                    <iframe src="{{asset("temalar/tema3.blade.php")}}" frameborder="0" id="iframebutton"  style="width: 100%;height: 100%;"></iframe>

                    <a href="javascript:void(0)"  onclick="$.tema_detay('3')" type="button" style="float: right;margin-top: -35px;" class="btn rounded-pill me-2 btn-primary">Tema Seç
                    </a>
                </div>

            </div>
        </div>

    </div>

    <div class="modal animate__animated animate__flipInX" id="personelListeleModel" tabindex="-1"
         aria-labelledby="flipInXAnimationModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document" >
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Personel Seç</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body" id="tema_model23">

                </div>


            </div>
        </div>
    </div>
    <div class="modal animate__animated animate__flipInX" id="temaPersonelModel" tabindex="-1"
         aria-labelledby="flipInXAnimationModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 700px" >
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Mail İmza</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body" id="tema_personel_model">

                </div>

                <div class="modal-footer">
                    <div style="display: none" id="deneme23"></div>
                    <button type="button" class="btn btn-primary" onclick="copyEvent2('tables')">Html Kopyala</button>
                    <button type="button" class="btn btn-primary" onclick="copyEvent('tema_personel_model')">Kopyala</button>
                    <form action="">
                        <a type="button" id="gonder_button" class="btn btn-primary" onclick="$.mailgonder()">Mail Gönder</a>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <input type="hidden" id="asd">
    <script>
        function copyEvent(id)
        {
            let str = document.getElementById(id);
            window.getSelection().selectAllChildren(str);
            document.execCommand("Copy")
            $.Toast("Kopyala","İmza Kopyalandı","success",{
                position_class:"toast-top-right",

            });

        }



        function copyEvent2(id)
        {
            let data=document.getElementById(id).outerHTML;
            navigator.clipboard.writeText(data);
            $.Toast("Kopyala","İmza Html Kodu Kopyalandı","success",{
                position_class:"toast-top-right",

            });
        }

    </script>
@endsection

