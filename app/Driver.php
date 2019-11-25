<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    public $timestamps = false;
    protected $table = 'Driver';
    
    public $arrJob = array(
        '1' => 'Motor',
        '2' => 'Mobil',
        '3' => 'Truck',
    );

    public $arrKategori = array(
        '1' => 'Karyawan',
        '2' => 'Mitra',
    );

    public function getJob(){
        if(array_key_exists($this->job,$this->arrJob)){
            return $this->arrJob[$this->job];
        } else {
            return 'Job Tidak diketahui';
        }
    }

    public function getKategori(){
        if(array_key_exists($this->kategori,$this->arrKategori)){
            return $this->arrKategori[$this->kategori];
        } else {
            return 'Kategori Tidak diketahui';
        }
    }

    public function getJenisKelamin(){
        if($this->jenis_kelamin == 1){
            return "Laki Laki";
        } else {
            return "Perempuan";
        }
    }

}
