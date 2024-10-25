<table class="sc-jAaTju fNCBho" cellpadding="0" cellspacing="0"
       style="vertical-align: -webkit-baseline-middle; font-size: medium; font-family: Verdana;" id="tables">
    <tbody>
    <tr>
        <td>
            <table class="sc-jAaTju fNCBho" cellpadding="0" cellspacing="0"
                   style="vertical-align: -webkit-baseline-middle; font-size: medium; font-family: Verdana;">
                <tbody>
                <tr>

                    <td style="vertical-align: middle;">
                        <h3 class="sc-hzDkRC kpsoyz" color="#000000"
                            style="margin: 0px; font-size: 18px; color: rgb(0, 0, 0);">
                            <span>{{$detay->personel_adsoyad}}</span></h3>
                        <p class="sc-jhAzac hmXDXQ" color="#000000" font-size="medium"
                           style="margin: 0px; color: rgb(70, 70, 70); font-size: 12px; line-height: 22px; font-weight: 200">
                            <span>{{$detay->personel_unvan}}</span></p>
                        <p class="sc-fBuWsC eeihxG" color="#000000" font-size="medium"
                           style="margin: 0px; font-weight: 500; color: rgb(0, 0, 0); font-size: 12px; line-height: 22px;">
                            <span>Tel:{{$detay->personel_tel}}</span></p>
                        <p class="sc-fBuWsC eeihxG" color="#000000" font-size="medium"
                           style="margin: 0px; font-weight: 500; color: rgb(0, 0, 0); font-size: 12px; line-height: 22px;">
                            <span>E-Posta:{{$detay->personel_eposta}}</span></p>
                    </td>
                    <td width="30"></td>
                    <td width="1" class="sc-bRBYWo ccSRck" color="#faaa34" direction="vertical"
                        style="width: 1px; border-bottom: none; border-left: 1px solid rgb(250, 170, 52);"></td>
                    <td width="30"></td>
                    <td width="150" style="vertical-align: middle;"><span class="sc-cHGsZl bHiaRe"
                                                                          style="margin-right: 20px; display: block;"><img width="130" class="sc-gisBJw kDlVKO"
                                                                                                                           src="{{asset($detay->firma->firma_logo)}}" role="presentation"
                                                                                                                           style="max-width: 130px;"></span></td>
                    <td style="vertical-align: middle;">
                        <table class="sc-jAaTju fNCBho" cellpadding="0" cellspacing="0"
                               style="vertical-align: -webkit-baseline-middle; font-size: medium; font-family: Verdana;">
                            <tbody>
                            <tr height="25" style="vertical-align: middle;">
                                <td width="70" style="vertical-align: middle;">
                                    <table class="sc-jAaTju fNCBho" cellpadding="0" cellspacing="0"
                                           style="vertical-align: -webkit-baseline-middle; font-size: 12px; font-family: Verdana;">
                                        <tbody>
                                        <tr>
                                            <td style="vertical-align: bottom;">Gsm:</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </td>
                                <td style="padding: 0px; color: rgb(0, 0, 0);"><a class="sc-iRbamj blSEcj"
                                                                                  href="tel:(+972) 054-798-7970" color="#000000"
                                                                                  style="text-decoration: none; color: rgb(0, 0, 0); font-size: 12px;"><span>{{$detay->firma->firma_gsm}}</span></a></td>
                            </tr>
                            <tr height="25" style="vertical-align: middle;">
                                <td width="70" style="vertical-align: middle;">
                                    <table class="sc-jAaTju fNCBho" cellpadding="0" cellspacing="0"
                                           style="vertical-align: -webkit-baseline-middle; font-size: 12px; font-family: Verdana;">
                                        <tbody>
                                        <tr>
                                            <td style="vertical-align: bottom;">Tel:</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </td>
                                <td style="padding: 0px; color: rgb(0, 0, 0);"><a class="sc-iRbamj blSEcj"
                                                                                  href="tel:(+972) 054-798-7970" color="#000000"
                                                                                  style="text-decoration: none; color: rgb(0, 0, 0); font-size: 12px;"><span>{{$detay->firma->firma_tel}}</span></a></td>
                            </tr>
                            <tr height="25" style="vertical-align: middle;">
                                <td width="70" style="vertical-align: middle;">
                                    <table class="sc-jAaTju fNCBho" cellpadding="0" cellspacing="0"
                                           style="vertical-align: -webkit-baseline-middle; font-size: 12px; font-family: Verdana;">
                                        <tbody>
                                        <tr>
                                            <td style="vertical-align: bottom;">Mail:</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </td>
                                <td style="padding: 0px;"><a class="sc-iRbamj blSEcj" href="mailto:{{$detay->firma->firma_gsm}}"
                                                             color="#000000"
                                                             style="text-decoration: none; color: rgb(0, 0, 0); font-size: 12px;"><span>{{$detay->firma->firma_eposta}}</span></a>
                                </td>
                            </tr>
                            <tr height="25" style="vertical-align: middle;">
                                <td width="70" style="vertical-align: middle;">
                                    <table class="sc-jAaTju fNCBho" cellpadding="0" cellspacing="0"
                                           style="vertical-align: -webkit-baseline-middle; font-size: 12px; font-family: Verdana;">
                                        <tbody>
                                        <tr>
                                            <td style="vertical-align: bottom;">Web Site</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </td>
                                <td style="padding: 0px;"><a class="sc-iRbamj blSEcj" href="#"
                                                             color="#000000"
                                                             style="text-decoration: none; color: rgb(0, 0, 0); font-size: 12px;"><span>{{$detay->firma->firma_website}}</span></a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                </tbody>
            </table>
        </td>
    </tr>
    <tr>
        <td>
            <table class="sc-jAaTju fNCBho" cellpadding="0" cellspacing="0"
                   style="vertical-align: -webkit-baseline-middle; font-size: medium; font-family: Verdana; width: 100%;">
                <tbody>
                <tr>
                    <td height="30"></td>
                </tr>
                <tr>
                    <td height="1" class="sc-bRBYWo ccSRck" color="#faaa34" direction="horizontal"
                        style="width: 100%; border-bottom: 1px solid rgb(250, 170, 52); border-left: none; display: block;">
                    </td>
                </tr>
                <tr>
                    <td height="30"></td>
                </tr>
                </tbody>
            </table>
        </td>
    </tr>
    <tr>
        <td>
            <table class="sc-jAaTju fNCBho" cellpadding="0" cellspacing="0"
                   style=" font-size: 12px; font-family: Verdana; width: 100%;">
                <tbody>
                <tr>
                    <td style="padding-left: 25px">
                        <p style="font: 14px;  font-weight: bold;">{{$detay->firma->firma_ad}}</p>
                        <p >{{$detay->firma->firma_adres}}</p>
                    </td>
                    <td style="text-align: right; vertical-align: top;">
                        <table class="sc-jAaTju fNCBho" cellpadding="0" cellspacing="0"
                               style="vertical-align: -webkit-baseline-middle; font-size: medium; font-family: Verdana; display: inline-block;">
                            <tbody>
                            </tbody>
                        </table>
                    </td>
                </tr>
                </tbody>
            </table>
        </td>
    </tr>
    </tbody>
</table>


