<?php

namespace App\Http\Controllers;

use View;
use File;
use Illuminate\Http\Request;
use Illuminate\Http\Controller\Auth;
use App\Models\Firma;
use App\Models\Personel;
use App\Models\Temalar;
use Illuminate\Support\Facades\{Redirect, Storage};
use App\todo;

use App\Photo;
use Illuminate\Support\Facades\DB;
class GeneratorController extends Controller
{

    public function generatorTemaList()
    {
        $liste["temalar"] = Temalar::all();
        return view("generator.temagenerator",$liste);
    }
    public function generators($temaid)
    {
        $liste["id"]=$temaid;
        $liste["personeller"] = DB::table('firmas')
            ->select('*')
            ->join('personels', 'personels.personel_firma_id', '=', 'firmas.id')
            ->where('firmas.user_id', session('user_id'))
            ->get();
        $liste["images"] = \File::allFiles(public_path('images'));

        $liste["firmalar"] = Firma::where("user_id", "=", session('user_id'))->get();
        return view("generator.generator",$liste);
    }
    public function upload(){


        $gorseller = DB::table('resimler')
            ->select('*')
            ->where('resim_ekleyen', session('user_id'))
            ->get();

        return View('generator.upload')->with(array('images'=>$gorseller));
    }
    public function logokaydet(Request $request)
    {

        if ($request->hasFile('firma_logo')) {
            $request->validate([
                'firma_logo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            $image = Storage::disk('public')->put('images',
                $request->file('firma_logo'));
            DB::insert('insert into resimler (resim_url, resim_ekleyen) values (?, ?)', [$image, '1']);
        }
        $images = \File::allFiles(public_path('images'));
        $gorseller = DB::table('resimler')
            ->select('*')
            ->where('resim_ekleyen', session('user_id'))
            ->get();

        return view('generator.upload')->with(array('images'=>$gorseller));
    }
    public function sil($id){

        $gorsel = DB::table('resimler')
            ->select('*')
            ->where('id', $id)
            ->first();

        $image_path = public_path($gorsel->resim_url);
        if(file_exists($image_path)){
            unlink($image_path);
        }
        DB::table('resimler')->where('id', $id)->delete();

        $gorseller = DB::table('resimler')
            ->select('*')
            ->where('resim_ekleyen', session('user_id'))
            ->get();
        return view('generator.upload')->with(array('images'=>$gorseller));
    }

    public function mail_gonder($mail)
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
