<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
</head>
<body>
    <div class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a class="nav-link" href="#">Beranda</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Kinerja Kecamatan
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Pemberdayaan Masyarakat</a></li>
                            <li><a class="dropdown-item" href="#">Trantibum</a></li>
                            <li><a class="dropdown-item" href="#">Sarpras Pelayanan Umum</a></li>
                            <li><a class="dropdown-item" href="#">Pemerintahan</a></li>
                            <li><a class="dropdown-item" href="#">Pembinaan Pengawasan Desa</a></li>
                            <li><a class="dropdown-item" href="#">PKK</a></li>
                            <li><a class="dropdown-item" href="#">Prestasi</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#">Profil</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Desa/Kelurahan</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">PATEN</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Galeri</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">PPID</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">SIPPN</a></li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item-right"><a class="nav-link btn btn-danger text-black" href="{{ route('admin.login') }}">Login</a></li>
                    <li class="nav-item-tight"><a class="nav-link btn btn-primary text-black" href="{{ route('admin.register') }}">Sign Up</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container d-flex flex-column align-items-center">
        <div class="main-content">
            <h2 class="judul text-center">Berita</h2>
            <p class="text-center">Deskripsi disini</p>
            <!-- Menampilkan isi dari database beritas -->
            @foreach ($beritas as $berita)
                <div class="berita-item d-flex align-items-center mb-4">
                    @if ($berita->gambar)
                        <div class="berita-image">
                            <img src="{{ asset('images/' . $berita->gambar) }}" alt="{{ $berita->judul }}" class="img-fluid rounded">
                        </div>
                    @endif
                    <div class="berita-content ml-4">
                        <h3 class="berita-title">{{ $berita->judul }}</h3>
                        <p class="berita-description">{{ $berita->isi }}</p>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="main-content mt-5">
            <h2 class="judul text-center">Pengumuman</h2>
            <!-- Menampilkan isi dari database pengumumans -->
            @foreach ($pengumumans as $pengumuman)
                <div class="pengumuman-item mb-4">
                    <h3 class="pengumuman-title">{{ $pengumuman->judul }}</h3>
                    <p class="pengumuman-description">{{ $pengumuman->isi }}</p>
                </div>
            @endforeach
        </div>

        <div class="main-content mt-5">
            <h2 class="judul text-center">Kegiatan Desa</h2>
            <!-- Menampilkan isi dari database kegiatan_desas -->
            @foreach ($kegiatan_desas as $kegiatan)
                <div class="kegiatan-item mb-4">
                    <h3 class="kegiatan-title">{{ $kegiatan->judul }}</h3>
                    <p class="kegiatan-description">{{ $kegiatan->deskripsi }}</p>
                    <p class="kegiatan-date">Tanggal : {{ $kegiatan->tanggal }}</p>
                    @if ($kegiatan->gambar)
                        <div class="kegiatan-image">
                            <img src="{{ asset('images/' . $kegiatan->gambar) }}" alt="{{ $kegiatan->judul }}" class="img-fluid rounded">
                        </div>
                    @endif
                </div>
            @endforeach
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
