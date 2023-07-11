<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\TemporaryChart;
use App\Models\BookingResi;
use App\Models\Product;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Carbon\Carbon;

class BookingController extends Controller
{
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'id_user' => 'required',
            'id_barang' => 'required',
            'jumlah' => 'required|integer|min:1',
        ]);

        // Simpan data TemporaryChart
        TemporaryChart::create($request->all());

        // Tampilkan pesan SweetAlert
        Alert::success('Sukses', ' berhasil Dimasukan Ke Keranjangn Booking!');

        // Redirect atau kembali ke halaman sebelumnya
        return back();
    }
   
    function index()
    {
        $user = Auth::user();
        
        $total = TemporaryChart::where('status', 0)->where('id_user',auth()->user()->id)->count();
        $totalresi = BookingResi::where('id_user', auth()->user()->id)->count();
        if($total > 0)
        {
                  
 $temporaryCharts = TemporaryChart::where('id_user', $user->id)
                                 ->where('status', 0)
                                 ->get();

$totalHarga = 0;

foreach ($temporaryCharts as $chart) {
    $product = Product::where('product_id',$chart->id_barang)->first();
    $subtotal = $product->product_price * $chart->jumlah;
    $totalHarga += $subtotal;
}

        $charts = TemporaryChart::where('id_user', $user->id)
                                ->where('status', 0)
                                ->get();
        }
        else
        {
             $charts = TemporaryChart::where('id_user', $user->id)
                                ->where('status', 0)
                                ->get();
            $total = 0;
            $totalHarga = 0;
        }
        return view('front.chart',compact('charts','total','totalHarga','totalresi'));
    }

    public function checkout()
    {
        // Mendapatkan ID pengguna yang sedang login
        $userId = Auth::id();

        // Mengedit status di tabel temporarychart
        // Menghasilkan kode unik 3 digit
        // Mengedit kode unik di tabel temporarychart
        $kodeUnik = mt_rand(100, 999);
        TemporaryChart::where('id_user', $userId)->where('status',0)->update(['status' => 1, 'kode_unik' => $kodeUnik]);

        // Memasukkan data ke tabel booking_resi
        $kodeResi = mt_rand(1000000000, 9999999999);

        BookingResi::create([
            'resi' => $kodeResi, // Isi dengan data resi sesuai kebutuhan
            'kode_unik' => $kodeUnik,
            'id_user' => $userId,
        ]);

        // Redirect atau tampilkan pesan sukses
        return redirect()->back()->with('success', 'Checkout berhasil. Resi Booking Anda: ' . $kodeResi);
    }

    function listresi(){
        $resis = BookingResi::where('id_user',auth()->user()->id)->get();
        $total = TemporaryChart::where('status', 0)->where('id_user',auth()->user()->id)->count();
        $totalresi = BookingResi::where('id_user', auth()->user()->id)->count();
        return view('front.resi',compact('resis','total','totalresi'));
    }

    function show($id){
    
        $user = Auth::user();
        $resi = BookingResi::where('kode_unik',$id)->first();
        
        $total = TemporaryChart::where('status', 1)->where('id_user',auth()->user()->id)->count();
        $totalresi = BookingResi::where('id_user', auth()->user()->id)->count();
        if($total > 0)
        {
                  
 $temporaryCharts = TemporaryChart::where('id_user', $user->id)
                                 ->where('status', 1)
                                 ->where('kode_unik',$id)
                                 ->get();
$totalHarga = 0;

foreach ($temporaryCharts as $chart) {
    $product = Product::where('product_id',$chart->id_barang)->first();
    $subtotal = $product->product_price * $chart->jumlah;
    $totalHarga += $subtotal;
}

        $charts = TemporaryChart::where('id_user', $user->id)
                                ->where('status', 1)
                                 ->where('kode_unik',$id)
                                ->get();
        }
        else
        {
             $charts = TemporaryChart::where('id_user', $user->id)
                                ->where('status', 1)
                                 ->where('kode_unik',$id)
                                ->get();
            $total = 0;
            $totalHarga = 0;
        }

        $created_at = $resi->created_at; // Misalnya, $data adalah objek model yang memiliki kolom created_at
        $c = $resi->created_at; // Misalnya, $data adalah objek model yang memiliki kolom created_at
        $expiry_time = $created_at->addDay(); // Menambahkan 1 hari ke waktu created_at
        $current_time = Carbon::now(); // Waktu saat ini
        $remaining_time = $expiry_time->diffInSeconds($current_time); // Perbedaan waktu dalam detik
        $remaining_hours = floor($remaining_time / 3600); // Hitung jam yang tersisa

        $remaining_minutes = floor(($remaining_time % 3600) / 60); // Hitung menit yang tersisa
        $remaining_seconds = $remaining_time % 60; // Hitung detik yang tersisa
        return view('front.chartresi',compact('charts','total','totalHarga','totalresi','resi','expiry_time'));       
    }
}
