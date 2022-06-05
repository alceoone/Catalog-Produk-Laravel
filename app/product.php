<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    
    protected $fillable = [
    'nama_item','url_gambar',
    'deskripsi_singkat','deskripsi_panjang','link_shoppe','wa'
    ];
}
