<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use mysql_xdevapi\Table;

class Temalar extends Model
{
    use HasFactory;
    protected $table="temalar";
    protected $fillable = [
        'tema_ad',
        'tema_icerik',

    ];
}
