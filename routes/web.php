<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PersonelController;
use App\Http\Controllers\FirmaController;
use App\Http\Controllers\TemalarController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GeneratorController;
use App\Http\Controllers\StampreadyController;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::controller(AuthController::class)->group(function (){
    Route::get('/login','sayfa')->name("login");
    Route::post('/login','login')->name("loginauth");
    Route::get('/logout','logout')->name("logout");
    Route::get('/profil','profile')->name("profile");
    Route::get('/ayarlar','ayarlar')->name("ayarlar");
    Route::put('/uye_guncelle/{id}', 'uye_guncelle')->name('uyeGuncelle');
    Route::get('/sifremi-unuttum','sifremi_unuttum')->name("sifremi-unuttum");
    Route::put("/gonder","gonder")->name("gonder");
    Route::get('/sifre-sifirla/{id}','sifre_sifirla')->name("sifre-sifirla");
    Route::post('/sifre-onay','sifre_onay')->name("sifre-onay");
});

Route::controller(AdminController::class)->middleware("auth")->group(function (){
    Route::get("/","index")->name("adminindex");
    /* Route::get("/",function (){
         dd(Auth::user()->uye_eposta,\auth()->user()->id);
     });*/
    Route::post("/","index")->name("home");
    Route::get("/welcome","welcome");
    Route::get("/uyeler","uyeler")->name("uyeler");
});
Route::controller(FirmaController::class)->middleware("auth")->group(function (){
    Route::get("/firmalar","firmalar")->name("firmaliste");
    Route::post("/firmaekle","firma_ekle")->name("firma_eklee");
    Route::delete('/firma_sil/{id}', 'firma_sil')->name('firma_sill');
    Route::post('/firma_detay', 'firma_detay')->name('firma_detay');
    Route::post('/firmaGuncelle/{id}', 'firma_guncelle')->name('firma_guncelle');
});
Route::controller(PersonelController::class)->middleware("auth")->group(function (){
    Route::get('/personel', 'personel')->name('personel');
    Route::post('/personelekle', 'personelEkle')->name('personel_ekle');
    Route::post('/personel_detay', 'personel_detay')->name('personel_detay');
    Route::get('/personelsil/{id}', 'personelSil')->name('personel_sil');
    Route::post('/personelGuncelle/{id}', 'personelGuncelle')->name('personel_guncelle');
});
Route::controller(TemalarController::class)->middleware("auth")->group(function (){
    Route::get('/temalist', 'temalist')->name('temalist');
    Route::post('/temaekle', 'temaEkle')->name('tema_ekle');
    Route::post('/tema_detay', 'tema_detay')->name('tema_detay');
    Route::post('/tema_kaydet', 'tema_kaydet')->name('tema_kaydet');
    Route::post('/tema_goster', 'tema_goster')->name('tema_goster');
    Route::post('/mail_gonder', 'mail_gonder')->name('mail_gonder');

});
Route::controller(GeneratorController::class)->middleware("auth")->group(function (){
    Route::get('/generator-tema', 'generatorTemaList')->name('temaGenerator');
    Route::get('/generators/{id}', 'generators')->name('generators');
    Route::get('/upload', 'upload')->name('upload');
    Route::post("/logokaydet","logokaydet")->name("logokaydet");
    Route::get("/sil/{id}","sil")->name("sil");
});

Route::controller(StampreadyController::class)->middleware("auth")->group(function (){
    Route::get('/sablonlar', 'sablonlar')->name('sablonlar');
    Route::get('/sablonedit/{id}', 'sablondetay')->name('sablondetay');

});
