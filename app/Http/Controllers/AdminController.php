<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Http\Controller\Auth;
use App\Models\Firma;
use App\Models\Personel;
use Illuminate\Support\Facades\{Redirect,Storage};
use App\Photo;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        $personel=DB::table('firmas')
            ->select('*')
            ->join('personels', 'personels.personel_firma_id', '=', 'firmas.id')
            ->where('firmas.user_id', session('user_id'))
            ->get();

        $firma=DB::table('firmas')
            ->select('*')
            ->where('firmas.user_id', session('user_id'))
            ->get();


        $list["personeller"]=$personel;
        $list["firmalar"]=$firma;
        $list["pSayi"]=$personel->count();
        $list["fSayi"]=$firma->count();
        return view("index")->with("list",$list);
    }

    public function login()
    {
        return view("login");
    }

    public function welcome()
    {
        return view("welcome");
    }

    public function uyeler()
    {
        return view("uyeler");
    }






}
