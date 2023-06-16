<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $table = "Mahasiswa";
    protected $fillable = [
        'nama',
        'jk',
        'alamat',
        'hp',
        'jurusan',
        'email'
    ];

    // ONE TO ONE RELATARION
    public function wali()
    {
        return $this->hasOne('App\Models\Wali');
    }

    // ATAU //

    // public function wali()
    // {
    //     return $this->hasOne(Wali::class);
    // }
    // ./ONE TO ONE RELATARION 


    // ONE TO MANY RELATION
    public function dosen()
    {
        return $this->belongsTo('App\Models\Dosen');
    }
    // ./ONE TO MANY RELATION


    // MANY TO MANY RELATION
    public function matkul()
    {
        return $this->belongsToMany('App\Models\Matkul')->withPivot(['nilai']);
    }
    // ./MANY TO MANY RELATION

}
