
<form id="firmaGuncelle" action="{{route("firma_guncelle",$detay->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <input type="file"name="firma_logo" class="dropify" data-default-file="{{asset($detay->firma_logo)}}"/>
    </div>

    <div class="row">
        <div class="mb-3 col">
            <label for="nameFlipInX" class="form-label">Firma Ad</label>
            <input type="text" id="nameFlipInX" name="firma_ad" class="form-control"
                   placeholder="Firma adınızı giriniz.." value="{{$detay->firma_ad}}" required >
        </div>
    </div>
    <div class="row">
        <div class="mb-3 col">
            <label for="nameFlipInX" class="form-label">Firma Adres</label>
            <input type="text" id="nameFlipInX" class="form-control" name="firma_adres"
                   placeholder="Firma adresinizi giriniz.." value="{{$detay->firma_adres}}" required>
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
                       placeholder="Email" value="{{$detay->firma_eposta}}" required>
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
                       placeholder="GSM" value="{{$detay->firma_gsm}}" required >
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
                       placeholder="Mobile" value="{{$detay->firma_tel}}" required>
            </div>

        </div>
    </div>
    <div class="row">
        <div class="mb-3 col">
            <label for="nameFlipInX" class="form-label">Firma Website</label>
            <input type="text" id="nameFlipInX" class="form-control" name="firma_website"
                   placeholder="Website adresinizi giriniz.."  value="{{$detay->firma_website}}">
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kapat</button>
        <button type="submit" class="btn btn-primary">Kaydet</button>
    </div>
</form>
<script>

</script>
