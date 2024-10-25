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
                                    <li class="breadcrumb-item"><a href="{{route("temalist")}}">Şablonlar</a>
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

                <div class="row" style="padding-top: 80px">

                    <div class="col-md-6 col-sm-12">
                        @foreach($sablonlar as $sablon)
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">{{$sablon->sablon_name}}</h4>
                            </div>
                            <div class="card-body" style="height: 400px;">

                                <a href="{{route("sablondetay",$sablon->id)}}" style="width: 100%;height: 100%;display: contents">
                                    <img src="{{$sablon->resim_url}}" alt="" style="width: 100%;height: 100%">
                                </a>
                            </div>

                        </div>
                        @endforeach
                    </div>


                </div>


            </div>
        </div>
    </div>





@endsection

