<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Firma extends Model
{
    use HasFactory;

/*
    protected $table = "kullanicilar";  // TABLOMUZUN İSMİ
    protected $guarded = [];
*/
    protected $fillable = [
        'user_id',
        'firma_ad',
        'firma_adres',
        'firma_eposta',
        'firma_gsm',
        'firma_tel',
        'firma_logo',
        'firma_website'

    ];
}
