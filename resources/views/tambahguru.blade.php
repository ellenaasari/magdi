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
                <h1>Tambah Data Guru</h1>
            </div>
            <div class="card-body">

                <form action="/guru/input" method="HEAD">
                    {{ csrf_field() }}
                    ID Guru <input class="form-control" type="text" name="id_guru" required>
                    NIP<input class="form-control" type="text" name="nip" required>
                    Nama<input class="form-control" type="text" name="nama_guru" required>
                    No. Hp<input class="form-control" type="text" name="no_hp" required>
                    Jenis kelamin<input class="form-control" type="text" name="jenis_kelamin" required>
                    Alamat<input class="form-control" type="text" name="alamat" required>
                    <input class="form-control btn btn-primary" type="submit" value="Simpan">
                </form>
            </div>
        </div>

    </div>
@endsection
