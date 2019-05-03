<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\GambarWisata;
use App\Wisata;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = GambarWisata::all();
        $wisatadata = Wisata::all(); 
       return view('galeri.viewmanagegaleri', compact('data','wisatadata'));  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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

        $galeri = new GambarWisata([
        'deskripsinama' => $request->namagaleri,
        'wisataid_fk' => $request->wisataid,
        'gambarwisata' => $fileName


      
    ]);
        $galeri->save();
         return redirect('galeri')->with('success', 'Data Wisata Ditambahkan');
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
        $wisata = Wisata::all();
         $editgaleri = GambarWisata::find($id);
        return view('galeri.editgaleri', compact('editgaleri','wisata','data'));
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
             $galeri = GambarWisata::find($request->id);
             $galeri->deskripsinama  = $request->namagaleri;
             $galeri->wisataid_fk  = $request->wisataid;
             $galeri->save();
        
       
        }
        else{
        $file       = $request->file('gambar');
        $fileName   = $file->getClientOriginalName();
        $request->file('gambar')->move("image/", $fileName);

      $galeri = GambarWisata::find($request->id);
             $galeri->deskripsinama= $request->namagaleri;
             $galeri->wisataid_fk  = $request->wisataid;
             $galeri->gambarwisata = $fileName;
             $galeri->save();
   
        }
      
    return redirect('/galeri');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $galeri = GambarWisata::find($id);
      $galeri->delete();
      return redirect('/galeri');
    }
}
