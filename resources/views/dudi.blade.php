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
                    <h2 class="card-title mb-0">Table Data Dudi</h2>
                </div>
                <div class="card-body">
                    <!-- Table with outer spacing -->
                    <div class="table-responsive">
                        <table class="table table-lg">
                            <thead>
        <tr>
            <th>ID Dudi</th>
            <th>Nama</th>
            <th>No. Hp</th>
            <th>Alamat</th>
            <th>Opsi</th>
        </tr>
        @foreach($dudi as $a)
        <tr>
            <td>{{ $a->id_dudi }}</td>
            <td>{{ $a->nama_dudi }}</td>
            <td>{{ $a->no_hp }}</td>
            <td>{{ $a->alamat }}</td>
            <td>
                <a href="/dudi/edit/{{ $a->id_dudi }}">Edit</a>
                |
                <a href="/dudi/hapus/{{ $a->id_dudi }}" onclick="return confirm('Apakah anda yakin?')">Hapus</a>
            </td>
        </tr>
        @endforeach
    </tbody>
    </table>
</div>
</div>
</section>
