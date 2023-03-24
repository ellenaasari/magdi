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
                    <h2 class="card-title mb-0">Table Data Siswa</h2>
                </div>
                <div class="card-body">
                    <!-- Table with outer spacing -->
                    <div class="table-responsive">
                        <table class="table table-lg">
                            <thead>
                                <tr>
                                    <th>NIS</th>
                                    <th>Nama</th>
                                    <th>No HP</th>
                                    <th>Alamat</th>
                                    <th>Aksi</th>
                                </tr>
                                @foreach ($siswa as $isi)
                                    <tr>
                                        <td>{{ $isi->nis }}</td>
                                        <td>{{ $isi->nama }}</td>
                                        <td>{{ $isi->no_hp }}</td>
                                        <td>{{ $isi->alamat }}</td>
                                        <td>
                                            <a href="/siswa/edit/{{ $isi->nis }}">Edit</a>
                                            |
                                            <a href="/siswa/delete/{{ $isi->nis }}"
                                                onclick="return confirm('Apakah anda yakin?')">Hapus</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
