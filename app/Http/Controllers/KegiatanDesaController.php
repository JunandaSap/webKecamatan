<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KegiatanDesa;

class KegiatanDesaController extends Controller
{
    public function create()
    {
        return view('tambah_kegiatan');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'tanggal' => 'required|date',
            'gambar' => 'nullable|image',
        ]);

        $kegiatanDesa = new KegiatanDesa();
        $kegiatanDesa->judul = $request->judul;
        $kegiatanDesa->deskripsi = $request->deskripsi;
        $kegiatanDesa->tanggal = $request->tanggal;

        if ($request->hasFile('gambar')) {
            $fileName = time().'.'.$request->gambar->extension();  
            $request->gambar->move(public_path('images'), $fileName);
            $kegiatanDesa->gambar = $fileName;
        }

        $kegiatanDesa->save();

        return redirect('/tambah_konten')
                         ->with('success', 'Kegiatan Desa created successfully.');
    }
}
