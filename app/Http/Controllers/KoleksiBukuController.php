<?php

namespace App\Http\Controllers;

use App\Models\KoleksiBuku;
use Illuminate\Http\Request;

class KoleksiBukuController extends Controller
{
    public function index()
    {
        $data = KoleksiBuku::orderBy('id', 'desc')->get();
        return view('uas.data_buku', compact('data'));
    }

    public function create()
    {
        return view('uas.tambah_buku');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'penulis' => 'required|string|max:255',
            'penerbit' => 'required|string|max:255',
            'tahun' => 'required|integer',
            'kategori' => 'required|string|max:100',
        ]);

        KoleksiBuku::create($validated);

        return redirect()->route('buku.index')->with('success', 'Data buku berhasil ditambahkan!');
    }

    public function edit(KoleksiBuku $buku)
    {
        return view('uas.edit_buku', compact('buku'));
    }

    public function update(Request $request, KoleksiBuku $buku)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'penulis' => 'required|string|max:255',
            'penerbit' => 'required|string|max:255',
            'tahun' => 'required|integer',
            'kategori' => 'required|string|max:100',
        ]);

        $buku->update($validated);

        return redirect()->route('buku.index')->with('success', 'Data buku berhasil diperbarui!');
    }

    public function destroy(KoleksiBuku $buku)
    {
        $buku->delete();
        return redirect()->route('buku.index')->with('success', 'Data buku berhasil dihapus!');
    }
}
