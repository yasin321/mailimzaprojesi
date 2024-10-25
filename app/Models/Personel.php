<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Firma;
class Personel extends Model
{
    use HasFactory;

    protected $fillable = [
        'personel_adsoyad',
        'personel_eposta',
        'personel_tel',
        'personel_unvan',
        'personel_firma_id',

    ];

    public function firma(){
        return $this->belongsTo(Firma::class,"personel_firma_id","id");
    }
}
