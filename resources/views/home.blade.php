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
        <button class="toggle-btn" id="toggleBtn" onclick="toggleSidebar()">&#9664;</button>
        <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="#">About</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Services</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
        </ul>
    </div>
    <div class="sidebar" id="sidebar">
        <div class="menu-box">
        <div class="logo">
            <img src="{{ asset('images/image.png') }}" alt="Image">
        </div>
            <h3>Kinerja Kecamatan</h3>
            <ul class="menu-list">
                <li><a href="#">Pemberdayaan Masyarakat</a></li>
                <li><a href="#">Trantibum</a></li>
                <li><a href="#">Sarpras Pelayanan Umum</a></li>
                <li><a href="#">Pemerintahan</a></li>
                <li><a href="#">Pembinaan Pengawasan Desa</a></li>
                <li><a href="#">PKK</a></li>
                <li><a href="#">Prestasi</a></li>
            </ul>
        </div>
    </div>
    <div class="container" id="container">
        <div class="main-content">
            <h2>Pemberdayaan Masyarakat</h2>
            <p>Deskripsi disini</p>
            <div class="section-content">
                <img src="{{ asset('images/Usaha1.png') }}" alt="Image">
                <div>
                    <h3>Bakol Krupuk Maknyus</h3>
                    <p>Merupakan bidang yang menangani penyediaan dan pengelolaan...</p>
                    <ul>
                        <li>Jaringan intra pemerintah</li>
                        <li>CCTV</li>
                        <li>Pusat Data</li>
                        <li>Sistem Manajemen Keamanan Informasi</li>
                    </ul>
                </div>
            </div>
            <div class="section-content">
                <img src="{{ asset('images/Usaha1.png') }}" alt="Image">
                <div>
                    <h3>Bakol Krupuk Maknyus</h3>
                    <p>Merupakan bidang yang menangani penyediaan dan pengelolaan...</p>
                    <ul>
                        <li>Jaringan intra pemerintah</li>
                        <li>CCTV</li>
                        <li>Pusat Data</li>
                        <li>Sistem Manajemen Keamanan Informasi</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="social-icons">
            <a href="https://www.google.com" target="_blank">Google</a>
            <a href="https://www.microsoft.com" target="_blank">Microsoft</a>
            <a href="https://aws.amazon.com" target="_blank">AWS</a>
            <a href="https://www.ibm.com" target="_blank">IBM</a>
            <a href="https://line.me" target="_blank">LINE</a>
        </div>
        <p>&copy; 2022-2023 | Dinas Komunikasi dan Informatika Kota Nganjuk</p>
        <p>Alamat: Jl. Merdeka Nomor 21 Nganjuk, Nganjuk, East Java</p>
        <p>Email: Kominfonganjuuk@gmail.com</p>
        <p>Telepon: (031) 5312144 Psw. 384 / 241, (031) 99277339</p>
    </div>
    <script>
        function toggleSidebar() {
            var sidebar = document.getElementById('sidebar');
            var container = document.getElementById('container');
            var toggleBtn = document.getElementById('toggleBtn');
            
            sidebar.classList.toggle('closed');
            container.classList.toggle('center');
            
            if (sidebar.classList.contains('closed')) {
                toggleBtn.innerHTML = '&#9654;'; // Arrow pointing right
            } else {
                toggleBtn.innerHTML = '&#9664;'; // Arrow pointing left
            }
        }
    </script>
</body>
</html>
