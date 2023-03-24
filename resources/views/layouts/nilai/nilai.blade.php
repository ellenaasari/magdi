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
                    <h2 class="card-title mb-0">Nilai</h2>
                </div>
                <div class="card-body">
                    <!-- Table with outer spacing -->
                    <div class="table-responsive">
                        <table class="table table-lg">
                            <thead>
    <tr>
            <th>ID</th>
            <th>NIS</th>
            <th>Nama</th>
            <th>Nilai</th>
            <th>Opsi</th>
        </tr>
        @foreach($nilai as $j)
        <tr>
            <td>{{ $j->id_nilai }}</td>
            <td>{{ $j->nis }}</td>
            <td>{{ $j->nama }}</td>
            <td>{{ $j->nilai }}</td>
            <td>
                <a href="/nilai/edit/{{ $j->id_nilai }}">Edit</a>

                <a href="/nilai/hapus/{{ $j->id_nilai }}" onclick="return confirm('Apakah anda yakin?')">Hapus</a>
            </td>
            </tr>
            @endforeach
    </table>
</body>
</html>
