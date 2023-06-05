<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index() {

        $kategori = Kategori::select('Name', 'id')->get();
        $produk = Product::get();

        return view('Add-product', [
            'produk' => $produk,
            'kategori'=> $kategori
        ]);
    }

    public function create(Request $request) {

        $ekstensi = $request->file('Gambar')->getClientOriginalExtension();
        $newName = $request->Name.'-'.now()->timestamp.'.'.$ekstensi;
        $request->file('Gambar')->storeAs('Produk',$newName);
        $produk = Product::create([
            'Name' => $request->Name,
            'Keterangan' => $request->Keterangan,
            'Harga' => $request->Harga,
            'Gambar' => $newName,
            'categary_id' => $request->categary_id
        ]);

        return redirect('Add-product');
    }

    public function delete($id) {

        $produk = Product::findOrFail($id)->delete();
        return redirect('Add-product');

    }

    public function edit($id) {


        $kategori = Kategori::all();
        $full = Product::findOrFail($id);
        $produk = Product::findOrFail($id)->where('id', '!=', $id)->get();
        return view('update-produk',[
            'produkList' => $produk,
            'produk' => $full,
            'kategori' => $kategori
        ]);
    }

    public function update(Request $request, $id) {
        $ekstension = $request->file('Gambar')->getClientOriginalExtension();
        $newName = $request->Name.'-'.now()->timestamp.'.'.$ekstension;
        $request['Gambar'] = $newName;
        $produk = Product::findOrFail($id)->update([
            'Name' => $request->Name,
            'Keterangan' => $request->Keterangan,
            'Harga' => $request->Harga,
            'Gambar' => $newName,
            'categary_id' => $request->categary_id
        ]);

        return redirect('Add-product');

    }

    public function detail(Request $request, $id) {
        $produk = Product::with('Katagori')->findOrFail($id);
        return view('detail-produk', [
            'produk' => $produk
        ]);
    }
}
