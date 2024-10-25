<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Controller\Auth;
use App\Models\Firma;
use App\Models\Personel;
use mysql_xdevapi\Exception;
use Illuminate\Support\Facades\{Redirect, Storage};
use App\Photo;

class FirmaController extends Controller
{
    public function firmalar()
    {
        $detay["firmalar"] = Firma::where("user_id", "=", session('user_id'))->orderBy('id','desc')->get();
        return view("firmalist", $detay);
    }

    public function firma_ekle(Request $request)
    {

        if ($request->hasFile('firma_logo')) {
            $request->validate([
                'firma_logo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            $image = Storage::disk('public')->put('images',
                $request->file('firma_logo'));
        }


        $firma = Firma::create($request->except('firma_logo') +['firma_logo' => $image ??
                null]);
        $firma->update(['user_id' => session('user_id')]);
        //    <a href="javascript:void(0)" class="item-edit" onclick="' . $onclik2 . '">
        $onclik2 = '$.firmaDetay(' . $firma->id . ')';
        $onclik = 'sil(' . $firma->id . ')';
        //dd($onclik,$request->all());
        $html = '<tr id="row-' . $firma->id . '">
                                            <td >
                                                <img src="'.asset($image).'" class="me-75"
                                                     height="40" width="100" style="object-fit: contain" alt="Angular"/>
                                            </td>
                                              <td>

                                                <span class="fw-bold">' . $request->firma_ad . '</span>
                                            </td>

                                            <td>' . $request->firma_eposta . '</td>
                                            <td>' . $request->firma_gsm . '</td>

                                            <td>' . $request->firma_website . '</td>

                                            <td>

                                                <a href="javascript:void(0)" onclick="' . $onclik . '" class="item-edit">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                         class="feather feather-trash-2 font-small-4 me-50">
                                                        <polyline points="3 6 5 6 21 6"></polyline>
                                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                        <line x1="10" y1="11" x2="10" y2="17"></line>
                                                        <line x1="14" y1="11" x2="14" y2="17"></line>
                                                    </svg>
                                                </a>
                                                <a href="javascript:void(0)" class="item-edit" onclick="' . $onclik2 . '">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox = "0 0 24 24" fill = "none" stroke = "currentColor"
                                                         stroke-width = "2" stroke-linecap = "round" stroke-linejoin = "round"
                                                         class="feather feather-edit font-small-4" >
                                                        <path d = "M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7" ></path >
                                                        <path d = "M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z" ></path >
                                                    </svg >
                                                </a >
                                            </td >
                                        </tr > ';
        //$html["status"]="";
        return response()->json($html);
    }


    public function firma_sil(Firma $id)
    {
        if (!is_null($id->firma_logo)) {
            Storage::disk('public')->delete($id->firma_logo);
        }
        $id->delete();
        return response()->json(["status" => "OK"]);
    }

    public function firma_detay(Request $request)
    {


        $id = $request->input("id");

        $detay = Firma::where("id", "=", $id)->first();

        if ($detay) {
            $html = view('ajaxs.firma_detay_ajax', ['detay' => $detay])->render();
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

    public function firma_guncelle( $id, Request $request)
    {

            $id=Firma::find($id);
            if (!is_null($id)){
                if ($request->hasFile('firma_logo')) {
                    $request->validate([
                        'firma_logo' => 'image | mimes:jpeg,png,jpg,gif,svg | max:2048',
                    ]);
                    if (!is_null($id->image)) {
                        Storage::disk('public')->delete($id->firma_logo);
                    }
                    $image = Storage::disk('public')->put('images',
                        $request->file('firma_logo'));
                }

                $status=$id->update($request->except('firma_logo') + ['firma_logo' => $image ??
                        $id->firma_logo]);
                return redirect()->route('firmaliste')->with("status","true");
            }else{
                return redirect()->route('firmaliste')->with("status","false");
            }





    }
}
