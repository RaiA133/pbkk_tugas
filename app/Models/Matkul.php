<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matkul extends Model
{
    use HasFactory;
    protected $table = "Matkul";
    protected $fillable = [
        'kode_matkul',
        'nama_matkul',
        'semester',
        'dosen'
    ];

    // MANY TO MANY RELATION
    public function mahasiswa()
    {
        return $this->belongsToMany('App\Models\Mahasiswa')->withPivot(['nilai']);
    }
    // ./MANY TO MANY RELATION
}
