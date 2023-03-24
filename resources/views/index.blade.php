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
                    <h2 class="card-title mb-0">Table Data Absensi</h2>
                </div>
                <div class="card-body">
                    <!-- Table with outer spacing -->
                    <div class="table-responsive">
                        <table class="table table-lg">
                            <tr>
                                <th>ID</th>
                                <th>NIS</th>
                                <th>Tanggal</th>
                                <th>Status</th>
                                <th>Keterangan</th>
                                {{-- <th>Action</th> --}}
                            </tr>
                            @foreach ($absen as $absen)
                                <tr>
                                    <td>{{ $absen->id }}</td>
                                    <td>{{ $absen->nis }}</td>
                                    <td>{{ $absen->tanggal }}</td>
                                    <td>{{ $absen->status }}</td>
                                    <td>{{ $absen->keterangan }}</td>
                                    {{-- <td>
                                        <a href="/absen/edit/{{ $absen->id }}">Edit</a>
                                        |
                                        <a href="/absen/delete/{{ $absen->id }}">Delete</a>
                                    </td> --}}

                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </section>
