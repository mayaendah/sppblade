<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\siswa;
// use Illuminate\Support\Facades\DB;

class siswaController extends Controller
{
    public function index()
    {

        $siswa = siswa::leftJoin('spps', 'siswas.id_spp', '=', 'spps.id')
            ->leftJoin('kelas', 'siswas.id_kelas', '=', 'kelas.id')
            ->get(['siswas.*', 'spps.*', 'kelas.*']);


        // dd($siswa);
        return view('siswa', ['siswa' => $siswa]);
    }

    public function getInfoSiswaById($id)
    {
        $siswaByid = siswa::join('spps', 'spps.id', '=', 'siswas.id_spp')
            ->join('kelas','kelas.id','=','siswas.id_kelas')
            ->where('siswas.nisn', $id)
            ->first();


        // dd( $siswaByid);
        return view('pembayaran', ['siswaByid' => $siswaByid]);
    }
}
