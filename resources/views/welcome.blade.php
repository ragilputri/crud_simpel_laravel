<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Projek CRUD Simpel</title>
</head>
<body>
    <h1 style="text-align:center;">Tabel Data Siswa</h1>
    <br>
    <div class="container">
    <a href="/tambah"><button type="button" class="btn btn-primary">Tambah Data</button></a>
    <br>
    <table class="table table-striped">
        <tr>
            <td>ID</td>
            <td>Nama Siswa</td>
            <td>Kelas</td>
            <td>Action</td>
        </tr>
        @foreach($data_siswa as $row)
        <tr>
            <td>{{$row->id}}</td>
            <td>{{$row->siswa}}</td>
            <td>{{$row->kelas}}</td>
            <td>
                <a href="/edit/{{$row->id}}"><button type="button" class="btn btn-warning">Edit</button></a>
                <a href="/delete/{{$row->id}}"><button type="button" class="btn btn-danger">Delete</button></a>
            </td>
        </tr>
        @endforeach
    </table>
    </div>
</body>
</html>
