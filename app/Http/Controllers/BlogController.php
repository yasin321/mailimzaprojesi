<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\Controller\Auth;
use App\Models\Firma;
use App\Models\Temalar;
use App\Models\Personel;
use App\Models\Blog;
use Illuminate\Support\Facades\{Redirect,Storage};
use App\Photo;
use Mail;
use App\Mail\ImzaMail;
use Illuminate\Support\Facades\DB;


class BlogController extends Controller
{
    public function blog($temaId)
    {
        $liste["bloglar"] = DB::table('blogs')
            ->select('*')
            ->where('sablon_id', $temaId)
            ->get();
        return view("temalist", $liste);
    }
}
