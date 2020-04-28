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
        $wisata = Wisata::all();
        return view('content.dataWisata', compact('wisata'));
    }
    
    public function addWisata(){
        return view('content.addWisata');
    }

    public function store(Request $request){

        $foto = $request->file('foto')->store('foto');
        //$folder = [];
        //$folder[] = $request->file('foto')->store('uploads');

        $oke = Wisata::create([
            'nama_wisata' => $request->namawisata,
            'alamat'      => $request->alamat,
            'kategori'    => $request->kategori,
            'informasi'   => $request->informasi,
            'fasilitas'   => $request->fasilitas,
            'lat'         => $request->latittude,
            'long'        => $request->longitude,
            'wilayah'     => $request->wilayah,
            'foto'        => $foto,
            //'vidio'       => $filevideo
        ]);
        return redirect('/dataWisata');
    }

    public function update(){
        return view('content.updatewisata');
    }

    public function storepalsu(Request $request){
 // dd($request->file('foto'));
        //$foto = $request->file('foto')->store('foto');
        $folder = [];
        $folder[] = $request->file('foto')->store('uploads');

        Wisata::create([
            'nama_wisata' => $request->namawisata,
            'alamat'      => $request->alamat,
            'kategori'    => $request->kategori,
            'informasi'   => $request->informasi,
            'fasilitas'   => $request->fasilitas,
            'lat'         => $request->latittude,
            'long'        => $request->longitude,
            'wilayah'     => $request->wilayah,
            'foto'        => $foto,
            //'vidio'       => $filevideo
        ]);
        return redirect('/dataWisata');
    }
}
