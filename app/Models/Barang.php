<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $fillable =[
        'kategori_id',
        'nama',
        'kuantitas',
        'warna',
        'file',
    ];

    public  function kategori(){
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }
}
