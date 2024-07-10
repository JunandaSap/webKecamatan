<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Pengumuman;
use App\Models\KegiatanDesa;
class BeritaController extends Controller
{
    public function create()
    {
        return view('tambah_berita');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'gambar' => 'nullable|image',
        ]);

        $berita = new Berita();
        $berita->judul = $request->judul;
        $berita->isi = $request->isi;

        if ($request->hasFile('gambar')) {
            $fileName = time().'.'.$request->gambar->extension();  
            $request->gambar->move(public_path('images'), $fileName);
            $berita->gambar = $fileName;
        }

        $berita->save();

        return redirect('/tambah_konten')
                         ->with('success', 'Berita created successfully.');
    }
    public function berita()
    {
        $beritas = Berita::all();
        return view('homeAdmin', compact('beritas'));
    }

    public function showBerita()  {
        $beritas = Berita::all();
        $pengumumans = Pengumuman::all();
        $kegiatan_desas = KegiatanDesa::all();
        return view('home', compact('beritas', 'pengumumans', 'kegiatan_desas'));
    }

}

