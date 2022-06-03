<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TUGAS AKSUB</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

    <form action="{{route('addbook')}}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="nama" class="form-label">Nama Barang</label>
            <input name="nama" type="text" class="form-control" id="nama" value="{{ old('nama') }}" placeholder="Masukkan Nama Barang" required>
        </div>

        <div class="mb-3">
            <label for="kuantitas" class="form-label">Kuantitas Barang</label>
            <input name="kuantitas" type="number" class="form-control" id="kuantitas" value="{{ old('kuantitas') }}" placeholder="Masukkan Kuantitas Barang" required>
        </div>

        <div class="mb-3">
            <label for="warna" class="form-label">Warna Barang</label>
            <input name="warna" type="text" class="form-control" id="warna" value="{{ old('warna') }}" placeholder="Masukkan Warna Barang" required>
        </div>

        <div class="mb-3">
            <label for="file" class="form-label">Gambar Barang</label>
            <input name="file" type="file" class="form-control" id="file" value="{{ old('file') }}" placeholder="Masukkan Nama Barang" required>
        </div>

        <button type="submit" class="btn btn-success">Submit</button>

    </form>


</body>
</html>
