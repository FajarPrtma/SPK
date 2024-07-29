<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    use HasFactory;
    protected $table = "results";
    protected $fillable = [
        'quisioner_id',
        'cita_cita',
        'pendidikan',
        'hobi',
        'keahlian',
        'lingkungan',
        'total'
    ];

    public function quisioner()
    {
        return $this->belongsTo(Quisioner::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function getRoundedCitaCitaAttribute()
    {
        return $this->roundValue($this->cita_cita);
    }

    public function getRoundedPendidikanAttribute()
    {
        return $this->roundValue($this->pendidikan);
    }

    public function getRoundedHobiAttribute()
    {
        return $this->roundValue($this->hobi);
    }

    public function getRoundedKeahlianAttribute()
    {
        return $this->roundValue($this->keahlian);
    }

    public function getRoundedLingkunganAttribute()
    {
        return $this->roundValue($this->lingkungan);
    }

    private function roundValue($value)
    {
        return round($value, 5);
    }

}


// namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class Result extends Model
// {
//     use HasFactory;
    // protected $table = "results";
//     protected $fillable = ['quisioner_id', 'total'];

//     public function quisioner()
//     {
//         return $this->belongsTo(Quisioner::class);
//     }
// }
