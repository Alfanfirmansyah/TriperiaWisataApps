<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Wisata;
use App\Kategori;
use App\Lokasi;

class ManageWisataController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $kategori = Kategori::all();
        $provinsi = Lokasi::all();
        $data = Wisata::all();

       return view('wisata.viewmanagewisata', compact('data','kategori','provinsi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     
        $file       = $request->file('gambar');
        $fileName   = $file->getClientOriginalName();
        $request->file('gambar')->move("image/", $fileName);

        $wisata = new Wisata([
        'created_by' => $request->created_by,
        'namawisata' => $request->namawisata,
        'deskripsiwisata' => $request->deskripsi,
        'latitude' => $request->latitude,
        'longitude' => $request->longitude,
        'embedmaps' => $request->embedmaps,
        'lokasi' => $request->lokasi,
        'kategoriid_fk' => $request->kategori,
        'wilayahid_fk' => $request->wilayah,
        'gambar' => $fileName


      
    ]);
        $wisata->save();
         return redirect('wisata')->with('success', 'Data Wisata Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   

        $data = Wisata::all();
         $kategori = Kategori::all();
         $provinsi = Lokasi::all();
         $editwisata = Wisata::find($id);
        return view('wisata.editwisata', compact('editwisata','kategori','provinsi','data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

       

        if (empty($request->file('gambar'))){
        $wisata = Wisata::find($request->id);
        $wisata->namawisata = $request->namawisata;
        $wisata->deskripsiwisata = $request->deskripsi;
        $wisata->latitude = $request->latitude;
        $wisata->longitude = $request->longitude;
        $wisata->embedmaps = $request->embedmaps;
        $wisata->lokasi = $request->lokasi;
        $wisata->kategoriid_fk = $request->kategori;
        $wisata->wilayahid_fk = $request->wilayah;
        $wisata->save();
    }
    else{
         $file       = $request->file('gambar');
        $fileName   = $file->getClientOriginalName();
        $request->file('gambar')->move("image/", $fileName);

         $wisata = Wisata::find($request->id);
        $wisata->namawisata = $request->namawisata;
        $wisata->deskripsiwisata = $request->deskripsi;
        $wisata->latitude = $request->latitude;
        $wisata->longitude = $request->longitude;
        $wisata->embedmaps = $request->embedmaps;
        $wisata->lokasi = $request->lokasi;
        $wisata->kategoriid_fk = $request->kategori;
        $wisata->wilayahid_fk = $request->wilayah;
        $wisata->gambar = $fileName;
        $wisata->save();

    }

   
    return redirect('/wisata');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $wisata = Wisata::find($id);
        $wisata->delete();
      return redirect('/wisata');
    }
}
