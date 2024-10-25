<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Controller\Auth;
use App\Models\Firma;
use App\Models\Personel;
use Illuminate\Support\Facades\Redirect;
use App\Photo;
use Illuminate\Support\Facades\DB;
class PersonelController extends Controller
{
    public function personel()
    {

        $liste["personeller"] = DB::table('firmas')
            ->select('*')
            ->join('personels', 'personels.personel_firma_id', '=', 'firmas.id')
            ->where('firmas.user_id', session('user_id'))
            ->get();

        //$liste["personeller"] = Personel::orderBy('id', 'desc')->with("firma")->get();
        //dd($liste);

        $liste["firmalar"] = Firma::where("user_id", "=", session('user_id'))->get();
        foreach ($liste["personeller"] as $index){

        }

        return view("personel", $liste);
    }

    public function personelEkle(Request $request)
    {
        Personel::create($request->all());

        return redirect()->route('personel')->with("statusPersonelEkle","true");
    }

    public function personelSil(Personel $id)
    {
        $id->delete();
        return redirect()->route('personel')->with("statusPersonelSil","true");;
    }

    public function personel_detay(Request $request)
    {


        $id = $request->input("id");

        $detay = Personel::where("id", "=", $id)->first();
        $firma = Firma::where("user_id", "=", session('user_id'))->get();

        if ($detay) {
            $html = view('ajaxs.personel_detay_ajax', ['detay' => $detay,'firma'=>$firma])->render();
            $json['durum'] = "basarili";
            $json["cikti"] = $html;
            echo json_encode($json);
        } else {

            $json['durum'] = "basarisiz";
            $json['aciklama'] = "Çıktı Bulunamadı.";
            echo json_encode($json);
            exit();
        }


    }

    public function personelGuncelle(Personel $id,Request $request)
    {

        $id->update($request->all());

        return redirect()->route('personel')->with("statusPersonelGuncelle","true");
    }
}
