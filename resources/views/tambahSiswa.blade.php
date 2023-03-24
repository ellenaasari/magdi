@extends('layouts.app')
@section('main')
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
              <i class="bi bi-justify fs-3"></i>
            </a>
          </header>
        <div class="card">
            <div class="card-header">
                <h1>Tambah Data Siswa</h1>
            </div>
            <div class="card-body">

                <form action="/siswa/simpan" method="POST">
                    @csrf
                    <div>
                        Nis
                        <input class="form-control" type="text" name="nis" required>
                    </div>
                    <div>
                        Nama
                        <input class="form-control" type="text" name="nama" required>
                    </div>
                    <div>
                        No hp
                        <input class="form-control" type="text" name="no_hp" required>
                    </div>
                    <div>
                        Alamat
                        <input class="form-control" type="text" name="alamat" required>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3 w-100">Simpan</button>
                </form>
            </div>
        </div>

    </div>
@endsection



{{--  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Tambah Data Siswa</h3>
    <form action="/simpan" method="POST">
        @csrf
        <div>
         Nis:
        <input type="text" name="nis" required>
        </div>
        <div>
        Nama :
        <input type="text" name="nama" required>
        </div>
        <div>
        No.hp :
        <input type="text" name="no_hp" required>
        </div>
        <div>
        Alamat :
        <input type="text" name="alamat" required>
        </div>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>  --}}
