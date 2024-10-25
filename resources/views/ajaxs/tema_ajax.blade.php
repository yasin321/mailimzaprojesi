



<table style="width: 400px;padding: 15px;font-family: Arial;font-size: 10px;" id="tables">
    <tbody>
    <tr>
        <td style="font-size: 8px">İyi Çalışmalar</td>
    </tr>
    <tr style="display: block;padding-top: 3%">
        <td> <b> {{$detay->personel_adsoyad}}</b> / {{$detay->personel_unvan}}</td>
    </tr>
    <tr >
        <td>{{$detay->personel_eposta}}</td>
    </tr>
    <tr >
        <td>{{$detay->personel_tel}}</td>
    </tr>

    <tr style="display: block;padding-top: 6%">
        <td><img src="{{asset($detay->firma->firma_logo)}}" style="width:150px" alt=""></td>
    </tr>
    <tr style="display: block; width: 100%">
        <td style="width: 100%;display: block"><img src="https://maxbagno.com/imza/Cizik.png" alt="" style="width: 100%" ></td>
    </tr>
    <tr style="display: block;padding-top: 3%">
        <td><b> Tel:</b> Office: {{$detay->firma->firma_gsm}}</td>
    </tr>
    <tr>
        <td> <b> Gsm: </b> {{$detay->firma->firma_gsm}}</td>
    </tr>
    <tr>
        <td> <b> Web:  </b>{{$detay->firma->firma_website}}</td>
    </tr>
    <tr>
        <td> <b> Mail: </b> {{$detay->firma->firma_eposta}}</td>
    </tr>
    <tr style="display: block;padding-top: 4%">
        <td> <b style="color: #ababab"> {{$detay->firma->firma_ad}}</b></td>
    </tr>
    <tr>
        <td style="color: #ababab">{{$detay->firma->firma_adres}}</td>
    </tr>
    </tbody>
</table>
