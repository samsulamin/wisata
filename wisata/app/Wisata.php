<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wisata extends Model
{
    //
    protected $table = "wisata";
    protected $fillable = ['nama_wisata', 'alamat', 'kategori', 'informasi', 'fasilitas', 'lat', 'long', 'wilayah', 'foto', 'vidio', 'deleted_at'];
}
