<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Provjabar;
use App\Models\Kabkotajabar;

class PetaController extends Controller
{
    public function index(){
        $list_provjabar = Provjabar::all();
        return view('peta.index', ['list_provjabar' => $list_provjabar]);
    }
    public function luas_wilayah(){
        $luas_jabar = Kabkotajabar::all();
        return view('peta.luas_wilayah', ['luas_jabar' => $luas_jabar]);
    }
    public function jumlah_penduduk(){
        $jumlah_penduduk = Kabkotajabar::all();
        return view('peta.jumlah_penduduk', ['jumlah_penduduk' => $jumlah_penduduk]);
    }
    public function jumlah_kepala_keluarga(){
        $jumlah_kepala_keluarga = Kabkotajabar::all();
        return view('peta.jumlah_kepala_keluarga', ['jumlah_kepala_keluarga' => $jumlah_kepala_keluarga]);
    }
    public function jumlah_pendidikan_s1(){
        $jumlah_pendidikan_s1 = Kabkotajabar::all();
        return view('peta.jumlah_pendidikan_s1', ['jumlah_pendidikan_s1' => $jumlah_pendidikan_s1]);
    }
    public function jumlah_guru(){
        $jumlah_guru = Kabkotajabar::all();
        return view('peta.jumlah_guru', ['jumlah_guru' => $jumlah_guru]);
    }
    public function welcome(){
        return view('welcome');
    }
}

