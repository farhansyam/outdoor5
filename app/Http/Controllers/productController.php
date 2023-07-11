<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\BookingResi;
use DB;
use App\Models\TemporaryChart;

class productController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

        // Inisialisasi nilai properti global

    public function index()
    {
        if(auth()->user())
        {
            $total = TemporaryChart::where('status', 0)->where('id_user',auth()->user()->id)->count();
            $totalresi = BookingResi::where('id_user', auth()->user()->id)->count();
        }
        else
        {
            $total = 0;
            $totalresi = 0;
        }
        $products = Product::all();
        return view('front.home',compact('products','total','totalresi'));
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
          if(auth()->user())
        {
            $total = TemporaryChart::where('status', 0)->where('id_user',auth()->user()->id)->count();
            $totalresi = BookingResi::where('id_user', auth()->user()->id)->count();
        }
        else
        {
            $total = 0;
            $totalresi = 0;
        }
        $product = Product::where('product_id',$id)->first();
        return view('front.detail',compact('product','total','totalresi'));
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


    function jaket() {
        $products = Product::where('category_id',13)->get();
          if(auth()->user())
        {
            $total = TemporaryChart::where('status', 0)->where('id_user',auth()->user()->id)->count();
            $totalresi = BookingResi::where('id_user', auth()->user()->id)->count();
        }
        else
        {
            $total = 0;
            $totalresi = 0;
        }
        
        return view('front.jaket',compact('products','total','totalresi'));
    }
    function kompor() {
          if(auth()->user())
        {
            $total = TemporaryChart::where('status', 0)->where('id_user',auth()->user()->id)->count();
            $totalresi = BookingResi::where('id_user', auth()->user()->id)->count();
        }
        else
        {
            $total = 0;
            $totalresi = 0;
        }
        $products = Product::where('category_id',4)->get();
        return view('front.kompor',compact('products','total','totalresi'));
    }
    function carier() {
          if(auth()->user())
        {
            $total = TemporaryChart::where('status', 0)->where('id_user',auth()->user()->id)->count();
            $totalresi = BookingResi::where('id_user', auth()->user()->id)->count();
        }
        else
        {
            $total = 0;
            $totalresi = 0;
        }
        $products = Product::where('category_id',10)->get();
        return view('front.carier',compact('products','total','totalresi'));
    }
    function matras() {
          if(auth()->user())
        {
            $total = TemporaryChart::where('status', 0)->where('id_user',auth()->user()->id)->count();
            $totalresi = BookingResi::where('id_user', auth()->user()->id)->count();
        }
        else
        {
            $total = 0;
            $totalresi = 0;
        }
        $products = Product::where('category_id',12)->get();
        return view('front.matras',compact('products','total','totalresi'));
    }
    function sleepingbag() {
          if(auth()->user())
        {
            $total = TemporaryChart::where('status', 0)->where('id_user',auth()->user()->id)->count();
            $totalresi = BookingResi::where('id_user', auth()->user()->id)->count();
        }
        else
        {
            $total = 0;
            $totalresi = 0;
        }
        $products = Product::where('category_id',11)->get();
        return view('front.sleepingbag',compact('products','total','totalresi'));
    }
    function tenda() {
          if(auth()->user())
        {
            $total = TemporaryChart::where('status', 0)->where('id_user',auth()->user()->id)->count();
            $totalresi = BookingResi::where('id_user', auth()->user()->id)->count();
        }
        else
        {
            $total = 0;
            $totalresi = 0;
        }
        $products = Product::where('category_id',9)->get();
        return view('front.tenda',compact('products','total','totalresi'));
    }

        function find(Request $request) {
            $key = $request->cari;
        $products = DB::table('tb_product')
            ->where('product_name', 'LIKE', '%' . $request->cari . '%')
            ->get();
          if(auth()->user())
        {
            $total = TemporaryChart::where('status', 0)->where('id_user',auth()->user()->id)->count();
            $totalresi = BookingResi::where('id_user', auth()->user()->id)->count();
        }
        else
        {
            $total = 0;
            $totalresi = 0;
        }
        return view('front.search',compact('products','key','total','totalresi'));
    }
}
