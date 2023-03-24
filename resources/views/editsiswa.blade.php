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
                <h1>Ubah Data Siswa</h1>
            </div>
            <div class="card-body">


                <form action="/siswa/update/{{ $isi->nis }}" method="POST">
                    @csrf
                    <div class="form-group">
                        Nama :
                        <input type="text" name="nama" class="form-control" value="{{ $isi->nama }}">
                    </div>
                    <div class="form-group">
                        No.hp :
                        <input type="text" name="no_hp" class="form-control" value="{{ $isi->no_hp }}">
                    </div>
                    <div class="form-group">
                        Alamat :
                        <input type="text" name="alamat" class="form-control" value="{{ $isi->alamat }}">
                    </div>
                    <button type="submit" class="btn btn-primary mt-2 w-100">Simpan</button>
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
    <div class="container">
        <form action="/update/{{$isi->nis}}" method="POST">
        @csrf
            <div class="form-group">
                Nama :
                <input type="text" name="nama" class="form-control" value="{{$isi->nama}}">
            </div>
            <div class="form-group">
                No.hp :
                <input type="text" name="no_hp" class="form-control" value="{{$isi->no_hp}}">
            </div>
            <div class="form-group">
                Alamat :
                <input type="text" name="alamat" class="form-control" value="{{$isi->alamat}}">
            </div>
            <button type="submit">Simpan</button>
        </form>
    </div>
</body>
</html>  --}}
