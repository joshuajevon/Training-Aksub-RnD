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

    <form action="{{route('kategori')}}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="namaKategori" class="form-label">Kategori Barang</label>
            <input name="namaKategori" type="text" class="form-control" id="namaKategori" value="{{ old('namaKategori') }}" placeholder="Masukkan Nama Kategori Barang" required>
        </div>

        <button type="submit" class="btn btn-success">Submit</button>

    </form>


</body>
</html>
