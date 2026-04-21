<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use Illuminate\Http\Request;

class ObatController extends Controller
{
    public function index()
    {
        $obats = Obat::latest()->get();
        return view('obat.index', compact('obats'));
    }

    public function create()
    {
        return view('obat.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_obat' => 'required|max:255',
            'kategori' => 'required|max:100',
            'harga' => 'required|integer|min:0',
            'stok' => 'required|integer|min:0',
            'tanggal_kadaluarsa' => 'required|date',
        ]);

        Obat::create([
            'nama_obat' => $request-> input ('nama_obat'),
            'kategori' => $request-> input ('kategori'),
            'harga' => $request-> input ('harga'),
            'stok' => $request-> input ('stok'),
            'tanggal_kadaluarsa' => $request-> input ('tanggal_kadaluarsa'),
        ]);

        return redirect()->route('obat.index')->with('success', 'Data obat berhasil ditambahkan.');
    }

    public function edit(string $id)
    {
        $obat = Obat::findOrFail($id);
        return view('obat.edit', compact('obat'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_obat' => 'required|max:255',
            'kategori' => 'required|max:100',
            'harga' => 'required|integer|min:0',
            'stok' => 'required|integer|min:0',
            'tanggal_kadaluarsa' => 'required|date',
        ]);

        $obat = Obat::findOrFail($id);

        $obat->update([
            'nama_obat' => $request-> input ('nama_obat'),
            'kategori' => $request-> input ('kategori'),
            'harga' => $request-> input ('harga'),
            'stok' => $request-> input ('stok'),
            'tanggal_kadaluarsa' => $request-> input ('tanggal_kadaluarsa'),
        ]);

        return redirect()->route('obat.index')->with('success', 'Data obat berhasil diupdate.');
    }

    public function destroy(string $id)
    {
        $obat = Obat::findOrFail($id);
        $obat->delete();

        return redirect()->route('obat.index')->with('success', 'Data obat berhasil dihapus.');
    }
}
