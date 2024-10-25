<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\Controller\Auth;
use App\Models\Firma;
use App\Models\Temalar;
use App\Models\Personel;
use Illuminate\Support\Facades\{Redirect,Storage};
use App\Photo;
use Mail;
use App\Mail\ImzaMail;
use Illuminate\Support\Facades\DB;

class TemalarController extends Controller
{
    public function temalist()
    {
        $liste["temalar"] = Temalar::all();
        return view("temalist", $liste);
    }

    public function temaEkle(Request $request)
    {
        Temalar::create($request->all());
        $liste = Temalar::orderBy('id', 'desc')->get();;
        return redirect()->route('temalist');
    }
    public function tema_detay()
    {
            $detay["personeller"] = DB::table('firmas')
                ->select('*')
                ->join('personels', 'personels.personel_firma_id', '=', 'firmas.id')
                ->where('firmas.user_id', session('user_id'))
                ->get();
            $html = view('ajaxs.imza_personel_ajax', $detay)->render();
            $json['durum'] = "basarili";
            $json["cikti"] = $html;
            echo json_encode($json);
    }
    public function tema_kaydet()
    {
        /*
        $tema_id=request()->input("tema_id");
        $personel=Personel::where("id",request()->input("personel_id"))->first();
        if ($tema_id==1){
            //dd($tema_id,$personel);
            $data=view('Temalar.tema1-1',$personel);
            return view('Temalar.tema1-1',compact("personel"));
        }else if ($tema_id==1){
            $data=view('Temalar.tema2',$personel);
            return view('Temalar.tema2',compact("personel"));
        }
        */

    }
    public function tema_goster(Request $request)
    {
        $tema_id=$request->tema_id;
        $id = $request->input("id");

        $detay = Personel::where("id", "=", $id)->with("firma")->first();


        if ($detay) {

            if ($tema_id==1){
                $html = view('ajaxs.tema_ajax', ['detay' => $detay])->render();
            }else if($tema_id==2){

                $html = view('ajaxs.tema2_ajax', ['detay' => $detay])->render();
            }
            else if($tema_id==3){
                $html = view('ajaxs.tema3_ajax', ['detay' => $detay])->render();
            }
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
    public function mail_gonder()
    {

        Storage::disk("mail")->put("mail.blade.php",$_POST["icerik"]);
        $personel_id=$_POST["personelId"];
        $detay2 = Personel::where("id", "=", $personel_id)->with("firma")->first();
        try {
            Mail::to($detay2->firma->firma_eposta)->send(new ImzaMail);
            Mail::to($detay2->personel_eposta)->send(new ImzaMail);
        }catch (Exception $e){
            dd($e->getMessage());
        }



    }



}
