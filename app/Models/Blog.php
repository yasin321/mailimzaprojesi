<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = [
        'sablon_id',
        'blog_ad',
        'blog_icerik',
        'blog_resim_url',
    ];
}
