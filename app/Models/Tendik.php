<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tendik extends Model
{
    use HasFactory;
    protected $table = "Tendik";
    protected $fillable = [
        'nama',
        'jenkel',
        'alamat',
        'hp',
        'bagian',
        'email',
        'foto',
        'no_ktp'
    ];
}
