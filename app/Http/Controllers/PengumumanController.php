<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengumuman;

class PengumumanController extends Controller
{
    public function create()
    {
        return view('tambah_pengumuman');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
        ]);

        $pengumuman = new Pengumuman();
        $pengumuman->judul = $request->judul;
        $pengumuman->isi = $request->isi;

        $pengumuman->save();

        return redirect('/tambah_konten')
                         ->with('success', 'Pengumuman created successfully.');
    }
}

