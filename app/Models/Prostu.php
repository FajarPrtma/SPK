<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prostu extends Model
{
    use HasFactory;
    protected $table = "prostus";
    protected $fillable = [
        'prodi',
        'gambar',
        'deskripsi',
    ];
}
