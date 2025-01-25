<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kabkotajabar extends Model
{
    use HasFactory;
    protected $table = 'kabkotajabars';
    protected $fillable = [
        'name', 
        'alt_name',
        'latitude',
        'longitude',
        'luas_wilayah',
        'jumlah_penduduk',
        'jumlah_kepala_keluarga',
        'jumlah_pendidikan_s1',
        'jumlah_guru',
        'provinsi_id'
    ];
    function provjabars(){
        return $this->belongsTo(Provjabar::class);
    }
}
