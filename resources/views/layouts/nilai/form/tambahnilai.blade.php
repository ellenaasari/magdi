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
                <h1>Tambah Nilai</h1>
            </div>
            <div class="card-body">

    <form action="/nilai/input" method="post">
        {{ csrf_field() }}
        ID <input class="form-control" type="text"name="id_nilai" required><br>
        NIS <input class="form-control" type="text"name="nis" required><br>
        Nama <input class="form-control" type="text"name="nama" required><br>
        Nilai <input class="form-control" type="text"name="nilai" required><br>
        <input class="form-control btn btn-primary" type="submit" value="Simpan">
    </form>

</body>
</html>
