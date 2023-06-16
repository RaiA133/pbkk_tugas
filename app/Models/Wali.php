<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wali extends Model
{
    use HasFactory;
    protected $table = 'wali';
    protected $guarded = [];

    // ONE TO ONE RELATARION //
    public function mahasiswa()
    {
        return $this->belongsTo('App\Models\Mahasiswa');
    }

    // ATAU //

    // public function mahasiswa()
    // {
    //     return $this->belongsTo(Mahasiswa::class);
    // }
    // ./ONE TO ONE RELATARION //
}
