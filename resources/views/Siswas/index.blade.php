<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siswa View Index</title>
    <!--safira Nur Azmi (xi ipa u2)-->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>CRUD Tabel Siswa</h1>
        <i><h5>Safira Nur Azmi</h5></i>
        <a href="siswa/create" class="btn btn-primary">Tambah Siswa</a>
        
        <table class="table table-bordered table-stripped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>gender</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($siswas as $no => $item)
                <tr>
                    <td>{{ ++$no }}</td>
                    <td>{{ $item->siswas }}</td>
                    <td>{{ $item->gender }}</td>
                    <td>Edit</td>
                    <td>Delete
                        <form action="{{ route('siswa.destroy', $item->id) }}" onsubmit="return confirm('Apakah Anda Yakin?')" method="POST">
                        <a class="btn btn-primary" href="{{ route('siswa.edit', $item->) }}"> Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>
</html>