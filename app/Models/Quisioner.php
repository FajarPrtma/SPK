<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quisioner extends Model
{
    use HasFactory;
    protected $table = "quisioners";
    protected $fillable = [
        'jurusan',
        'cita',
        'cita_nilai',
        'pendidikan',
        'pendidikan_nilai',
        'hobi',
        'hobi_nilai',
        'keahlian',
        'keahlian_nilai',
        'lingkungan',
        'lingkungan_nilai',
    ];
}

