<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Wisata;
use DB;
use App\Events;
use App\GambarWisata;
use App\Lokasi;
use App\Kategori;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $count1 = Wisata::count();
        $count2 = Lokasi::count();
        $count3 = Kategori::count();
        $count4 = Events::count();
        $data = Wisata::all();
        $events = Events::all();
        $listing = DB::select("SELECT datawilayah.namawilayah,wilayahid_fk, gambar, COUNT(wilayahid_fk) as jumlah FROM datawisata join datawilayah on datawisata.wilayahid_fk = datawilayah.datawilayahid GROUP BY wilayahid_fk");
        
       return view('front.index', compact('data','listing','events','count1','count2','count3','count4'));
    }

     public function wisata()
    {
        $pantai = Wisata::where('kategoriid_fk', 'LIKE', '%' . 2 . '%')->get();
        $gunung = Wisata::where('kategoriid_fk', 'LIKE', '%' . 3 . '%')->get();
       return view('front.wisata', compact('pantai','gunung'));
    }
       public function destination($id)
    {
        $destination = Lokasi::where('datawilayahid', 'LIKE', '%' . $id . '%')->paginate(10);
        $listdestination = Wisata::where('wilayahid_fk', 'LIKE', '%' . $id . '%')->paginate(10);
       return view('front.destination', compact('destination','listdestination'));
    }

    public function event($id)
    {
        $event = Events::where('eventid', 'LIKE', '%' . $id . '%')->get();
        $latestevent = Events::offset(0)->limit(3)->get();
        return view('front.detailevent', compact('event','latestevent'));
    }

    public function eventmenu()
    {
        $event = Events::all();
        return view('front.event', compact('event'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $slider = GambarWisata::where('wisataid_fk', 'LIKE', '%' . $id . '%')->paginate(10);
        $detailwisata = Wisata::where('wisataid', 'LIKE', '%' . $id . '%')->paginate(10);

        return view('front.detailwisata', compact('detailwisata','slider'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
