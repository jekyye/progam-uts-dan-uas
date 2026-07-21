<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    public function index()
    {
        $data = Pendaftaran::all();
        return view('uts.data_mahasiswa', compact('data'));
    }

    public function create()
    {
        return view('uts.pendaftaran');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:100',
            'tempat_lahir' => 'required|string|max:100',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|string',
            'alamat' => 'required|string',
            'sekolah_asal' => 'required|string',
            'nilai_mtk' => 'required|numeric',
            'nilai_bing' => 'required|numeric',
            'nilai_bindo' => 'required|numeric',
            'jurusan1' => 'required|string',
            'jurusan2' => 'required|string',
            'alasan' => 'required|string',
        ]);

        $pendaftaran = Pendaftaran::create($validated);

        return view('uts.proses', compact('pendaftaran'));
    }

    public function edit(Pendaftaran $pendaftaran)
    {
        return view('uts.edit', compact('pendaftaran'));
    }

    public function update(Request $request, Pendaftaran $pendaftaran)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:100',
            'tempat_lahir' => 'required|string|max:100',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|string',
            'sekolah_asal' => 'required|string',
            'jurusan1' => 'required|string',
            'jurusan2' => 'required|string',
        ]);

        $pendaftaran->update($validated);

        return redirect()->route('pendaftaran.index')->with('success', 'Data berhasil diperbarui!');
    }

    public function destroy(Pendaftaran $pendaftaran)
    {
        $pendaftaran->delete();
        return redirect()->route('pendaftaran.index')->with('success', 'Data berhasil dihapus!');
    }
}
