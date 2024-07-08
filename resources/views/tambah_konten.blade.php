<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/tambahkonten.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="heading">Tambah Konten</h1>
        <div class="row justify-content-center">
            <div class="col-md-12 mb-3">
                <a href="{{ url('/tambah_berita') }}" class="btn btn-block">Tambah Berita</a>
            </div>
            <div class="col-md-12 mb-3">
                <a href="{{ url('/tambah_pengumuman') }}" class="btn btn-block">Tambah Pengumuman</a>
            </div>
            <div class="col-md-12 mb-3">
                <a href="{{ url('/tambah_kegiatan') }}" class="btn btn-block">Tambah Kegiatan</a>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
