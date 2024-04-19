<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Mahasiswa</title>
</head>
<body>
    <div class="container">
        <h2>Add Mahasiswa</h2>
        <form action="{{ route('mahasiswa.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="npm">NPM:</label>
                <input type="text" class="form-control" id="npm" name="npm" required>
            </div>
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="name">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="kelas">Kelas:</label>
                <input type="text" class="form-control" id="kelas" name="kelas" required>
            </div>
            <div class="form-group">
                <label for="jurusan">Jurusan:</label>
                <input type="text" class="form-control" id="jurusan" name="jurusan" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>