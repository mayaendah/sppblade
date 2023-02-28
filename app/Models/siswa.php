<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    use HasFactory;
    protected $table='siswas';
    protected $fillable=[
        'nisn','nis','nama','id_kelas','alamat','no_tlp','id_spp'
    ];

    public function spp(){
        return $this->belongsTo(spp::class);
    }

    public function kelas(){
        return $this->belongsTo(kelas::class);
    }
}
