<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Kategori;
use App\Models\BookingResi;
use App\Models\TemporaryChart;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;
use Auth;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('back.index',compact('products'));
    }
    public function indexUser()
    {
        $users = User::where('role','user')->get();
        return view('back.index_user',compact('users'));
    }
    public function indexKategtori()
    {
        $kategoris = Kategori::all();
        return view('back.index_kategori',compact('kategoris'));
    }
    public function indexTransaksi()
    {
        $transaksis = BookingResi::all();
        return view('back.index_transaksi',compact('transaksis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    function createproduk(){
            return view('back.createProduk');
    }
    function createkategori(){
            return view('back.createKategori');
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
        $resi = BookingResi::where('kode_unik',$id)->first();
        
        $total = TemporaryChart::where('status', 1)->where('id_user',$resi->id_user)->count();
        // $totalresi = BookingResi::where('id_user', auth()->user()->id)->count();
        if($total > 0)
        {
                  
 $temporaryCharts = TemporaryChart::where('id_user', $resi->id_user)
                                 ->where('status', 1)
                                 ->where('kode_unik',$id)
                                 ->get();
$totalHarga = 0;

foreach ($temporaryCharts as $chart) {
    $product = Product::where('product_id',$chart->id_barang)->first();
    $subtotal = $product->product_price * $chart->jumlah;
    $totalHarga += $subtotal;
}

        $charts = TemporaryChart::where('id_user', $resi->id_user)
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
        return view('back.chartresi',compact('charts','total','totalHarga','resi'));       
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

    function productStore(Request $request)
    {
        // Validasi data yang diterima dari form

        // Simpan gambar produk ke dalam storage dan dapatkan path-nya
         $image = $request->file('product_image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('produk'), $imageName);

        // Buat instance model Product baru
        $product = new Product();
        $product->product_name = $request->product_name;
        $product->product_price = $request->product_price;
        $product->category_id = $request->product_category;
        $product->product_status = $request->status;
        $product->product_image = $imageName;
        $product->product_description = $request->product_description;

        // Simpan produk ke dalam database
        $product->save();

        // Redirect ke halaman yang diinginkan setelah penyimpanan berhasil
        Alert::success('Sukses', ' berhasil Input Data');
        return redirect()->route('products.index')->with('success', 'Produk berhasil disimpan.');
    }
    function kategoriStore(Request $request)
    {
        // Buat instance model Product baru
        $kategori = new Kategori();
        $kategori->category_name = $request->kategori;
        $kategori->save();

        // Redirect ke halaman yang diinginkan setelah penyimpanan berhasil
        Alert::success('Sukses', ' berhasil Input Data');
        return redirect()->route('admin.kategori')->with('success', 'Produk berhasil disimpan.');
    }
    
    function deleteProduct($id){
       $data = Product::where('product_id', $id)->first();

        if ($data) {
            $data->delete();

            Alert::success('Sukses', ' berhasil Hapus Data');
            return back();
        }

            
    }
    function deleteUser($id){
       $data = User::where('id', $id)->first();

        if ($data) {
            $data->delete();

            Alert::success('Sukses', ' berhasil Hapus Data');
            return back();
        }

            
    }
    function deleteTransaksi($id){
       $data = BookingResi::where('id', $id)->first();

        if ($data) {
            $data->delete();

            Alert::success('Sukses', ' berhasil Hapus Data');
            return back();
        }

            
    }
    function deleteKategori($id){
       $data = Kategori::where('category_id', $id)->first();

        if ($data) {
            $data->delete();

            Alert::success('Sukses', ' berhasil Hapus Data');
            return back();
        }

            
    }
    function editKategori($id){
       $data = Kategori::where('category_id', $id)->first();

        return view('back.edit_kategori',compact('data'));
            
    }
    function editProduct($id){
       $data = Product::where('product_id', $id)->first();

        return view('back.edit_product',compact('data'));
            
    }

    public function updateKategori(Request $request, $id)
{
    $kategori = Kategori::where('category_id',$id)->first();
    $kategori->category_name = $request->input('kategori');
    $kategori->save();
    Alert::success('Sukses', ' berhasil Update Data');

    return redirect()->route('admin.kategori')->with('success', 'Kategori berhasil diperbarui.');
}

    function updateProduct(Request $request,$id)
        {
        $produk = Product::findOrFail($id);

        $produk->product_name = $request->input('product_name');
        $produk->category_id = $request->input('category_id');
        $produk->product_status = $request->input('status');
        $produk->product_price = $request->input('product_price');

        // Proses file gambar jika diunggah
        if ($request->hasFile('product_image')) {
            $file = $request->file('product_image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('produk'), $filename);
            $produk->product_image = $filename;
        }

        $produk->save();
        Alert::success('Sukses', ' berhasil Update Data');
        return redirect()->route('products.index')->with('success', 'Produk berhasil diperbarui.');
    }
    
}
