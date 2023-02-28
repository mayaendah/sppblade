<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pembayaran;

class pembayaranController extends Controller
{
    public function index(){
        $getpembayaran=pembayaran::latest()->get();
        return view('tampilbayar',['getbayar'=>$getpembayaran]);

    }
    public function simpanbayarspp(Request $request){
        $carisiswa=pembayaran::where('id_siswa',$request->nisn)
        ->where('thn_bayar',$request->tahun)->first();
        if($carisiswa){
            return redirect('/getpembayaran')->with('alert', 'siswa telah melakukan pembayaran silahkan lakukan update pembayaran!');
        }else{
            $bulan=implode(",",$request->ENBApicks);
        $data=[
            'id_user'=>'1',
            'id_siswa'=>$request->nisn,
            'id_spp'=>$request->id_spp,
            'tgl_bayar'=>$request->tgl,
            'bulan'=>$bulan,
            'thn_bayar'=>$request->tahun,
            'id_spp'=>$request->id_spp,
            'jumlah_bayar'=>$request->jumlah_bayar

        ];

        pembayaran::create($data);
        return redirect('/getpembayaran')->with('alert', 'siswa telah melakukan pembayaran silahkan lakukan update pembayaran!');
        }


    }
    public function editbulanbayar($id){

        $geteditbayar = pembayaran::join('siswas', 'siswas.nisn', '=', 'pembayarans.id_siswa')
        ->join('spps','siswas.id_spp','=','spps.id')
        ->where('pembayarans.id_siswa', $id)
        ->first(['siswas.*','spps.*','pembayarans.*' ]);
        // dd( $geteditbayar);



        $pecahbulan=explode(",",$geteditbayar->bulan);
        return view('editbayar',['getEbayar'=>$geteditbayar,'splitbulan'=>$pecahbulan]);
    }

    public function updatebulanbayar(Request $request,$id){
        // dd($id);

        $bln_byr=implode(",",$request->ENBApicks);

        $updatebayar=pembayaran::where('id_siswa',$id)->first();

        $updatebayar->bulan=$bln_byr;
        $updatebayar->jumlah_bayar = $request->jumlah_bayar? $request->jumlah_bayar:$request->edit_bayar;
        $updatebayar->save();
        return redirect('/getpembayaran');
    }
}
