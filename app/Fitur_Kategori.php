<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fitur_Kategori extends Model
{
    public $timestamps = false;
    protected $table = 'fitur_kategori';

    public function Fitur(){
        return $this->belongsTo('App\Fitur','id_fitur');
    }
}
