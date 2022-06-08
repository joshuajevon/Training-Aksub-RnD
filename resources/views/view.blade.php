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
    <h1>View Barang</h1>

    <form action="{{route('add')}}" method="GET">
        <button class="btn btn-primary" type="submit">Add Barang</button>
    </form>


    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Nama</th>
                <th scope="col">Kuantitas</th>
                <th scope="col">Warna</th>
                <th scope="col">Gambar</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($barangs as $barang)
                <tr>
                    <th scope="row">
                        {{$barang->id}}
                    </th>
                    <td>
                        {{$barang->nama}}
                    </td>
                    <td>
                        {{$barang->kuantitas}}
                    </td>
                    <td>
                        {{$barang->warna}}
                    </td>
                    <td>
                        <img src="{{asset('storage/image/'.$barang->file)}}" alt="" style="width: 300px">
                    </td>
                    <td>
                        <a href="{{route('editbarang' ,['id' => $barang->id])}}" class="btn btn-primary">Edit
                        </a>
                        <form action="{{route('deletebarang', ['id' => $barang->id])}}" method="POST">
                            @csrf
                            @method('delete')

                            <button type="submit" class="btn btn-danger">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
