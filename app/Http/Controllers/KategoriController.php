<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function home(Request $request) {
        $kategori = Kategori::all();
        $produk = Product::all();

        return view('Home', [
            'kategori' => $kategori,
            'produk' => $produk
        ]);
    }

    public function index(){
    $kategori = Kategori::all();
    // dd($kategori);
    return view('Add-kategori', [
        'kategoriList' => $kategori
    ]);
    }


    public function create(Request $request){

        // $kategori = new Kategori;

        $ekstension = $request->file('Gambar')->getClientOriginalExtension();
        $newName = $request->Name.'-'.now()->timestamp.'.'.$ekstension;
        $request->file('Gambar')->storeAs('Gambar', $newName);
        // return $newName;
        $request['Gambar'] = $newName;
        $kategori = Kategori::create([
            'Name' => $request->Name,
            'Gambar' => $newName
        ]);
        return redirect('Add-ketegori');
    }

    public function delete($id) {
        $delete = Kategori::findOrFail($id)->delete();
        return redirect('Add-ketegori');
    }

    public function edit(Request $request, $id) {
        $kategori = Kategori::findOrFail($id);
        $kategoridua = Kategori::all();
        $kategoridua = Kategori::where('id', '!=', $id)->get('Name', 'Gambar');
        return view('update-kategori', [
            'kategori' => $kategori,
            'kategoriList' => $kategoridua
        ]);
    }

    public function update(Request $request, $id) {
        $ekstension = $request->file('Gambar')->getClientOriginalExtension();
        $newName = $request->Name.'-'.now()->timestamp.'.'.$ekstension;
        $request->file('Gambar')->storeAs('Gambar', $newName);
        $request['Gambar'] = $newName;
        $kategori = Kategori::findOrFail($id);
        $kategori->update([
            'Name' => $request->Name,
            'Gambar' => $newName
        ]);
        return redirect('Add-ketegori');
    }

    public function detail($id) {
        $kategori = Kategori::findOrFail($id);
        dd($kategori);
    }
}
