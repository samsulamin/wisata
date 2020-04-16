<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Wisata;

class adminWisataController extends Controller
{
    //
    public function index(){
        return view('content.home');
    }

    public function dataWisata(){
        return view('content.dataWisata');
    }
    
    public function addWisata(){
        return view('content.addWisata');
    }

    public function store(Request $request)
    {

        $filefoto = $request->file('foto');
        // Mendapatkan Nama File
        $nama_filefoto = $filefoto->getClientOriginalName();
        // Mendapatkan Extension File
        $extensionfoto = $filefoto->getClientOriginalExtension();
        // Mendapatkan Ukuran File
        $ukuran_filefoto = $filefoto->getSize();
        // Proses Upload File
        $destinationPathfoto = public_path('uploads/foto');
        $filefoto->move($destinationPathfoto,$filefoto->getClientOriginalName());
        //video
        $filevideo = $request->file('vidio');
        $nama_filevideo = $filevideo->getClientOriginalName();
        $extensionvideo = $filevideo->getClientOriginalExtension();
        $ukuran_filevideo = $filevideo->getSize();
        $destinationPathvideo = public_path('uploads/video');
        $filevideo->move($destinationPathvideo,$filevideo->getClientOriginalName());
        Wisata::create([
            'nama_wisata' => $request->namawisata,
            'alamat'      => $request->alamat,
            'kategori'    => $request->kategori,
            'informasi'   => $request->informasi,
            'fasilitas'   => $request->fasilitas,
            'lat'         => $request->latittude,
            'long'        => $request->longitude,
            'wilayah'     => $request->wilayah,
            'foto'        => $filefoto,
            'vidio'       => $filevideo
        ]);

        return view('content.dataWisata');
    }
    
    public function update(){
        return view('content.updatewisata');
    }
}
