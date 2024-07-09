<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
</head>
<body>
    <div class="navbar">
        <button class="navbar-toggler" onclick="toggleNavbar()">&#9776;</button>
        <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" href="#">Beranda</a></li>
            <li class="nav-item dropdown">
                <a class="nav-link" href="#" onclick="toggleDropdown(event)">Kinerja Kecamatan</a>
                <ul class="dropdown-menu">
                    <li><a href="#">Pemberdayaan Masyarakat</a></li>
                    <li><a href="#">Trantibum</a></li>
                    <li><a href="#">Sarpras Pelayanan Umum</a></li>
                    <li><a href="#">Pemerintahan</a></li>
                    <li><a href="#">Pembinaan Pengawasan Desa</a></li>
                    <li><a href="#">PKK</a></li>
                    <li><a href="#">Prestasi</a></li>
                </ul>
            </li>
            <li class="nav-item"><a class="nav-link" href="#">Profil</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Desa/Kelurahan</a></li>
            <li class="nav-item"><a class="nav-link" href="#">PATEN</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Galeri</a></li>
            <li class="nav-item"><a class="nav-link" href="#">PPID</a></li>
            <li class="nav-item"><a class="nav-link" href="#">SIPPN</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('admin.login') }}">Admin Login</a></li>
        </ul>
    </div>
    <div class="container center" id="container">
        <div class="main-content">
            <h2>Pemberdayaan Masyarakat</h2>
            <p>Deskripsi disini</p>
            <!-- Menampilkan isi dari database beritas -->
            @foreach ($beritas as $berita)
                <div class="berita-item">
                    @if ($berita->gambar)
                        <img src="{{ asset('images/' . $berita->gambar) }}" alt="{{ $berita->judul }}">
                    @endif
                    <div class="content">
                        <h3>{{ $berita->judul }}</h3>
                        <p>{{ $berita->isi }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    
    <script>
        function toggleNavbar() {
            var navbarNav = document.querySelector('.navbar-nav');
            navbarNav.classList.toggle('closed');
        }

        function toggleDropdown(event) {
            event.preventDefault();
            var dropdown = event.target.nextElementSibling;
            dropdown.classList.toggle('open');
        }
    </script>
</body>
</html>