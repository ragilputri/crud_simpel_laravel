<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Tambah Data</title>
</head>
<body>
    <div class="container">
    <h1>Form Input Data</h1>
    <form action="{{url('save')}}" method="post">
    @csrf
        <p>
            <label>Nama</label><br>
            <input type="text" name="nama" class="form-control" width="50%"><br>
        </p>
        <p>
            <label>Kelas</label><br>
            <input type="text" name="kelas" class="form-control"><br>
        </p>
        <p>
            <input type="submit" name="tombol_add" value="simpan" class="btn btn-primary"><br>
        </p>
    </form>
    </div>

</body>
</html>
