<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Wisata;
use App\Events;
use App\Kategori;
use App\Lokasi;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $count1 = Wisata::count();
        $count2 = Lokasi::count();
        $count3 = Kategori::count();
        $count4 = Events::count();
         $data = Wisata::all();
        return view('home',compact('data','count1','count2','count3','count4'));
    }
     
}
