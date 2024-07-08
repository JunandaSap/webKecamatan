<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Kegiatan Desa</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/homeAdmin.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Tambah Kegiatan Desa</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('kegiatan_desas.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="judul">Judul:</label>
                <input type="text" class="form-control" id="judul" name="judul">
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi:</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi"></textarea>
            </div>
            <div class="form-group">
                <label for="tanggal">Tanggal:</label>
                <input type="date" class="form-control" id="tanggal" name="tanggal">
            </div>
            <div class="form-group">
                <label for="gambar">Gambar:</label>
                <input type="file" class="form-control-file" id="gambar" name="gambar">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="submit"><a href="/tambah_konten" class="btn btn-secondary mb-3">Kembali</button>
        </form>
    </div>
</body>
</html>
