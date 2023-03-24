@extends('layouts.app')
@section('main')
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
              <i class="bi bi-justify fs-3"></i>
            </a>
          </header>

        <!-- Basic Tables start -->
        <section class="section">

            <div class="card shadow-4">
                <div class="card-header">
                    <h2 class="card-title mb-0">Table Data Laporan</h2>
                </div>
                <div class="card-body">
                    <!-- Table with outer spacing -->
                    <div class="table-responsive">
                        <table class="table table-lg">
                            <thead>
    <tr>
        <th>ID</th>
        <th>Tanggal</th>
        <th>Kegiatan</th>
        <th>Foto</th>
        <th>Opsi</th>
    </tr>
    @foreach($data as $aku)
    <tr>
        <td>{{$aku->id}}</td>
        <td>{{$aku->tanggal}}</td>
        <td>{{$aku->kegiatan}}</td>
        <td><img src='/storage/gambar/{{$aku->foto}}'  width="100"></td>
        <td>
            <a href="/laporan/edit/{{$aku->id}}">Edit | </a>

            <a href="/laporan/hapus/{{$aku->id}}"onclick="return confirm('apakah anda yakin?')">Hapus</a>
        </td>
    </tr>
    @endforeach
    </table>
</body>
</html>