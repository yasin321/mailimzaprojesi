<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\Controller\Auth;
use App\Models\Firma;
use App\Models\Temalar;
use App\Models\Sablon;
use App\Models\Personel;
use Illuminate\Support\Facades\{Redirect,Storage};
use App\Photo;
use Mail;
use App\Mail\ImzaMail;
use Illuminate\Support\Facades\DB;


class StampreadyController extends Controller
{
    public function sablonlar()
    {
        $liste["sablonlar"] = Sablon::all();
        return view("StampReady.sablonlar", $liste);
    }

    public function sablondetay($temaId)
    {
        $liste["bloglar"] = DB::table('blogs')
            ->select('*')
            ->where('sablon_id', $temaId)
            ->get();
        return view("StampReady.sablonDetay", $liste);
    }
}
