<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProdukController extends Controller
{
    public function index()
    {
        $data = Produk::all();
        return view('produk.tampil', compact('data'));
    }

    public function create()
    {
        $kategori = Kategori::all();
        return view('produk.tambah', compact('kategori'));
    }

    public function store(Request $request)
    {
        $validator = $request->validate([
            'namaProduk' => 'required',
            'harga' => 'required',
            'descProduk' => 'required',
            'kategori_id' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $fotoPath = $request->file('foto')->store('img');
        $namafile = $request->file('foto')->getClientOriginalName();


        $validator['foto'] = $fotoPath;
        Produk::create($validator);
        return redirect('produk')->with('success', 'Data berhasil diinput');
    }

    public function edit(string $id)
    {
            $data = Produk::find($id);
            $kategori = Kategori::all();
            return view('produk.edit', compact('data', 'kategori'));


    }

    public function update(Request $request, string $id)
    {
        $data = Produk::find($id);
        $validator = $request->validate([
            'namaProduk' => 'required',
            'harga' => 'required',
            'descProduk' => 'required',
            'kategori_id' => 'required',
            'foto' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            Storage::delete($data->foto);
            $fotoPath = $request->file('foto')->store('img');
            $validator['foto'] = $fotoPath;
        } else {
            $validator['foto'] = $data->foto;
        }

        $data->update($validator);
        return redirect('produk')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Produk::find($id);
        $data->delete();
        return redirect('produk')->with('success', 'Data berhasil dihapus');
    }
}
