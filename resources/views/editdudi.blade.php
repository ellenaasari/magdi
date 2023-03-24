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
                <h1>Ubah Data Dudi</h1>
            </div>
            <div class="card-body">


                @foreach ($dudi as $a)
                    <form action="/dudi/update" method="HEAD">
                        {{ csrf_field() }}
                        id_dudi <input class="form-control" type="text" name="id_dudi" value={{ $a->id_dudi }}>
                        nama_dudi <input class="form-control" type="text" name="nama_dudi" value="{{ $a->nama_dudi }}" required>
                        no_hp <input class="form-control" type="text" name="no_hp" value="{{ $a->no_hp }}" required>
                        alamat <input class="form-control" type="text" name="alamat" value="{{ $a->alamat }}" required>
                        <input class="btn btn-primary w-100 mt-3" type="submit" value="Simpan">
                    </form>
                @endforeach
            </div>
        </div>

    </div>
@endsection


{{--  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=a, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="/dudi">Kembali</a>
    <br>
    <br>

    @foreach ($dudi as $a)
    <form action="/dudi/update" method="HEAD">
        {{ csrf_field() }}
        id_dudi <input type="text" name="id_dudi" value={{ $a->id_dudi }}><br>
        nama_dudi <input type="text" name="nama_dudi" value="{{ $a->nama_dudi }}" required><br>
        no_hp <input type="text" name="no_hp" value="{{ $a->no_hp }}" required><br>
        alamat <input type="text" name="alamat" value="{{ $a->alamat }}" required><br>
        <input type="submit" value="Simpan">
    </form>
    @endforeach

</body>
</html>  --}}
