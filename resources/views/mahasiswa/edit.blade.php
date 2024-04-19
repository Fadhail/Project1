<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h2>Edit Mahasiswa</h2>
        <form action="{{ route('mahasiswa.update', $mahasiswa->npm) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="npm">NPM:</label>
                <input type="text" class="form-control" id="npm" name="npm" value="{{ $mahasiswa->npm }}" required>
            </div>
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $mahasiswa->name }}" required>
            </div>
            <div class="form-group">
                <label for="name">Email:</label>
                <input type="text" class="form-control" id="email" name="email" value="{{ $mahasiswa->email }}" required>
            </div>
            <div class="form-group">
                <label for="kelas">Kelas:</label>
                <input type="text" class="form-control" id="kelas" name="kelas" value="{{ $mahasiswa->kelas }}" required>
            </div>
            <div class="form-group">
                <label for="jurusan">Jurusan:</label>
                <input type="text" class="form-control" id="jurusan" name="jurusan" value="{{ $mahasiswa->jurusan }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>
</html>