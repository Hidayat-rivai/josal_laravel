<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Driver;

class DriverController extends Controller
{
    public function index(){
        $driver = Driver::all();

        $arrDriver = array();
        foreach($driver as $d){
            $arr = array();
            $arr['id'] = $d->id;
            $arr['kategori'] = $d->kategori;
            $arr['nama_kategori'] = $d->getKategori();
            $arr['job'] = $d->job;
            $arr['nama_job'] = $d->getJob();
            $arr['nama_depan'] = $d->nama_depan;
            $arr['nama_belakang'] = $d->nama_belakang;
            $arr['nomor_ktp'] = $d->nomor_ktp;
            $arr['tgl_lahir'] = $d->tgl_lahir;
            $arr['tempat_lahir'] = $d->tempat_lahir;
            $arr['nomor_hp'] = $d->nomor_hp;
            $arr['email'] = $d->email;
            $arr['photo_profil'] = $d->photo_profil;
            $arr['rating'] = $d->rating;
            $arr['jenis_kelamin'] = $d->getJenisKelamin();
            $arr['nomor_registrasi'] = $d->nomor_registrasi;
            $arr['id_kendaraan'] = $d->id_kendaraan;
            $arr['status'] = $d->status;
            array_push($arrDriver,$arr);
        }
        return response()->json([
            'driver'=>$arrDriver,
            ], 200);
    }
}
