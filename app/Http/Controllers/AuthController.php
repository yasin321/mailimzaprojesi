<?php

namespace App\Http\Controllers;


use http\Cookie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Peronel;
use Illuminate\Support\Facades\Hash;
use Mail;
use App\Mail\ImzaMail;
use App\Mail\ResetMail;

class AuthController extends Controller
{

    public function sayfa()
    {
        return view("Kullanici.login");
    }

    public function login(Request $request)
    {
        /*  $request->validate([
              "uye_eposta"=>["required","email"],
              "uye_sifre"=>["required","min:6"]
          ]); */
        $data = $request->only("uye_eposta", "password");

        if (Auth::attempt([
            "uye_eposta" => $request->uye_eposta,
            "password" => $request->password
        ])) {

            $notification = array(
                'message' => Auth::user()->uye_adsoyad,
                'alert_type' => 'success',
            );
            //$cookie=Cookie::make('name',Auth::user()->uye_adsoyad);
            session(['adsoyad' => Auth::user()->uye_adsoyad]);
            session(['user_id' => Auth::user()->id]);

            return to_route("adminindex");
        } else {

            return to_route("loginauth");
        }
        // return view("index");
    }

    public function logout()
    {

        Session::flush();

        Auth::logout();
        return redirect('login');
    }

    public function profile()
    {
        $detay = DB::table('users')
            ->select('*')
            ->where('id', session('user_id'))
            ->get();
        return view("profile", $detay);
    }

    public function ayarlar()
    {

        $detay["users"] = DB::table('users')
            ->select('*')
            ->where('id', session('user_id'))
            ->first();


        return view('ayarlar', $detay);
    }

    public function uye_guncelle(User $id, Request $request)
    {

        if (is_null($request->password)) {
            $id->update($request->except('password'));
            session(['adsoyad' => $id->uye_adsoyad]);
            session(['user_id' => $id->id]);
        } else {

            $id->update($request->except('password') + ["password" => Hash::make($request->input("password"))]);
            session(['adsoyad' => $id->uye_adsoyad]);
            session(['user_id' => $id->id]);
        }


        return redirect()->route('ayarlar');
    }

    public function sifremi_unuttum()
    {


        /*
        try {
            Mail::to('yasinkir4@gmail.com')->send(new ResetMail);
        }catch (Exception $e){
            dd($e->getMessage());
        }
        */
        return view("Kullanici.sifremi-unuttum");
    }

    public function gonder(Request $request)
    {


        $eposta = $request->input('uye_eposta');
        /*
        try {
            Mail::to('yasinkir4@gmail.com')->send(new ResetMail);
        }catch (Exception $e){
            dd($e->getMessage());
        }
        */

        $detay["users"] = DB::table('users')
            ->select('*')
            ->where('uye_eposta', $eposta)
            ->first();

        if (is_null($detay["users"])) {
            return redirect()->route('sifremi-unuttum');
        } else {
            $aktivasyon_kod = md5($eposta . time());

            $veriler = array(
                "uye_aktivasyon_kod" => $aktivasyon_kod
            );


            $array = [
                'adsoyad' => $detay["users"]->uye_adsoyad,
                'aktivasyon_kodu' => $aktivasyon_kod,
                'email' => $request->input('uye_eposta'),
                'mesaj' => $request->get('mesaj')
            ];
            $guncelle = DB::table('users')
                ->where('uye_eposta', $eposta)
                ->update([
                    'uye_aktivasyon_kod' => $aktivasyon_kod
                ]);
            mail::send('Kullanici.sifre-mail', $array, function ($message) use ($eposta) {
                $message->from('yazilim@checkirtech.com', 'İletişim');
                $message->subject("İLETİŞİM FORMU");
                $message->to($eposta);
            });
            return redirect()->route('login');
        }

    }

    public function sifre_sifirla($aktivasyon)
    {
        $count = DB::table('users')
            ->select('*')
            ->where('uye_aktivasyon_kod', $aktivasyon)
            ->count();

        if ($count > 0){

            return view("Kullanici.sifre-sifirla",["aktivasyon"=>$aktivasyon]);
        }else{

            die(print_r("Aktivasyon Kodu Hatalı. Tekrardan aktivasyon Kodu alınız..."));
        }
        return redirect()->route('sifre-onay', $detay);
    }

    public function sifre_onay(Request $request)
    {
        $kod=$_POST["aktivasyonkodu"];
        $guncelle = DB::table('users')
            ->where('uye_aktivasyon_kod', $kod)
            ->update([
                'password' =>  Hash::make($_POST["sifre"]),
                'uye_aktivasyon_kod' =>  '',
            ]);

        return response()->json(['success'=>'OK']);


    }


}
