<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Perpudigital</title>
</head>

<body>
    <nav class="navbar navbar-dark navbar-expand-lg" style="background-color: #FFB996">
        <div class="container-fluid">
            <a class="navbar-brand h1" href="#">PERPUSDIGITAL</a>
            <div class="justify-end ">
            </div>
        </div>
    </nav>
    <div class="container mt-5">
        <div class="row">
            <div class="col-sm">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title"></h5>
                    </div>
                    <div class="card-body">
                        <div class="col ">
                            <a class="btn btn-sm btn-success" href="{{ route('bukus.create') }}">Tambah Buku</a>
                        </div>
                        <table class="table table-bordered">
                            <tr>
                                <th>ID</th>
                                <th>Judul</th>
                                <th>Penulis</th>
                                <th>Penerbit</th>
                                <th>Tahun Terbit</th>
                                <th>Aksi</th>
                            </tr>
                            @foreach ($bukus as $p)
                                <tr>
                                    <td>{{ $p->bukuID }}</td>
                                    <td>{{ $p->judul }}</td>
                                    <td>{{ $p->penulis }}</td>
                                    <td>{{ $p->penerbit }}</td>
                                    <td>{{ $p->tahun_terbit }}</td>
                                    <td>
                                        <a class="btn btn-info" href="">Show</a>
                                        <a class="btn btn-primary" href="">Edit</a>
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
