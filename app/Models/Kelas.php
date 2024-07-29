<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;
    protected $table = "kelass";
    protected $fillable = [
        'name',
    ];

    public function users()
    {
        return $this->hasMany(User::class,'kelas_id');
    }
}
