<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resimler extends Model
{
    use HasFactory;
    protected $fillable = [
        'resim_url',
        'resim_ekleyen',
    ];
}
