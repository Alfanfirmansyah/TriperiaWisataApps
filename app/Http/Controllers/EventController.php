<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Events;
use App\Wisata;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $data = Events::all();
         return view('events.viewmanageevent', compact('data'));  
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

         $dataevent = new Events([
        'created_by' => $request->created_by,
        'juduldeskripsi' => $request->juduldeskripsi,
        'judulevent' => $request->judulevent,
        'tanggalevent' => $request->date,
        'tanggaleventakhir' => $request->dateakhir,
        'deskripsi' => $request->deskripsi,
        'gambar' => $fileName,
        "created_at" =>  \Carbon\Carbon::now(), # \Datetime()
        "updated_at" => \Carbon\Carbon::now()
         ]);
         $dataevent->save();
         return redirect('event')->with('success', 'Data Wisata Ditambahkan');
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
        $editevent = Events::find($id);
        return view('events.editevent', compact('editevent','data'));
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
        $dataevent = Events::find($request->id);
        $dataevent->juduldeskripsi = $request->juduldeskripsi;
        $dataevent->judulevent = $request->judulevent;
        $dataevent->tanggalevent = $request->tanggalevent;
        $dataevent->tanggaleventakhir = $request->tanggaleventakhir;
        $dataevent->deskripsi = $request->deskripsi;
        $dataevent->updated_at = \Carbon\Carbon::now();
        $dataevent->save();
    }

    else{
        $file       = $request->file('gambar');
        $fileName   = $file->getClientOriginalName();
        $request->file('gambar')->move("image/", $fileName);

        $dataevent = Events::find($request->id);
        $dataevent->juduldeskripsi = $request->juduldeskripsi;
        $dataevent->judulevent = $request->judulevent;
        $dataevent->tanggalevent = $request->tanggalevent;
        $dataevent->tanggaleventakhir = $request->tanggaleventakhir;
        $dataevent->deskripsi = $request->deskripsi;
        $dataevent->gambar = $fileName;
        $dataevent->updated_at = \Carbon\Carbon::now();
        $dataevent->save();


    }


      
  
         return redirect('event')->with('success', 'Data Wisata Ditambahkan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dataevent = Events::find($id);
        $dataevent->delete();
    return redirect('/event');
    }
}
