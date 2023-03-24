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
                <h1>Tambah Data Laporan</h1>
            </div>
            <div class="card-body">

                <form action="/laporan/tambah/proses" method="HEAD">
                    {{ csrf_field() }}
                    Tanggal: <input class="form-control" type="date" name="tanggal" required><br>
                    <p></p>
                    Kegiatan: <input class="form-control" type="text" name="kegiatan" required><br>
                    <p></p>
                    Foto <input class="form-control" type="file" name="foto" required><br>
                    <p></p>
                    <input class="form-control btn btn-primary" type="submit" value="Simpan">
                </form>
            </div>
        </div>

    </div>
@endsection