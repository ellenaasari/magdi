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
                <h1>Tambah Data Dudi</h1>
            </div>
            <div class="card-body">

                <form action="/dudi/input" method="POST">
                    {{ csrf_field() }}
                    ID Dudi
                    <input class="form-control" type="text" name="id_dudi" required>
                    Nama
                    <input class="form-control" type="text" name="nama_dudi" required>
                    No. Hp
                    <input class="form-control" type="text" name="no_hp" required>
                    Alamat
                    <input class="form-control" type="text" name="alamat" required>
                    <input type="submit" class="btn btn-primary mt-3 w-100" value="Simpan">
                </form>

                </body>

                </html>
