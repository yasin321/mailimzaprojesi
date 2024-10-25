<form action="{{route("personel_guncelle",$detay->id)}}"  method="post" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="mb-3 col">
            <label for="nameFlipInX" class="form-label">Personel Ad Soyad</label>
            <input type="text" id="personel_ad" name="personel_adsoyad" class="form-control"
                   placeholder="Yasin Kır" value="{{$detay->personel_adsoyad}}" >
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
                       placeholder="E-Posta" value="{{$detay->personel_eposta}}">
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
                       name="personel_tel" value="{{$detay->personel_tel}}"
                       placeholder="Mobile">
            </div>

        </div>
    </div>
    <div class="row">
        <div class="mb-3 col">
            <label for="nameFlipInX" class="form-label">Personel Unvan</label>
            <input type="text" id="nameFlipInX" class="form-control" name="personel_unvan"
                   placeholder="Personel Unvanını Giriniz..." value="{{$detay->personel_unvan}}" >
        </div>
    </div>
    <div class="row">
        <div class="mb-3">
            <label for="select2Basic" class="form-label">Basic</label>
            <select id="select2Basic" name="personel_firma_id" class="select2 form-select form-select-lg" data-allow-clear="true">
                @foreach($firma as $firmalist)
                    @if($firmalist->id==$detay->personel_firma_id)
                        <option value="{{$firmalist->id}}" selected>{{$firmalist->firma_ad}}</option>
                    @else
                        <option value="{{$firmalist->id}}" >{{$firmalist->firma_ad}}</option>
                    @endif

                @endforeach


            </select>
        </div>
    </div>
    <div class="modal-footer">
        <input type="hidden" value="{{$detay->id}}">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kapat</button>
        <button type="submit" class="btn btn-primary">Kaydet</button>
    </div>
</form>
