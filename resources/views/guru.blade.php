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
                    <h2 class="card-title mb-0">Table Data Guru</h2>
                </div>
                <div class="card-body">
                    <!-- Table with outer spacing -->
                    <div class="table-responsive">
                        <table class="table table-lg">
                            <thead>
                                <tr>
                                    <th>ID Guru</th>
                                    <th>NIP</th>
                                    <th>Nama</th>
                                    <th>No. Hp</th>
                                    <th>Jenis kelamin</th>
                                    <th>Alamat</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($guru as $j)
                                    <tr>
                                        <td>{{ $j->id_guru }}</td>
                                        <td>{{ $j->nip }}</td>
                                        <td>{{ $j->nama_guru }}</td>
                                        <td>{{ $j->no_hp }}</td>
                                        <td>{{ $j->jenis_kelamin }}</td>
                                        <td>{{ $j->alamat }}</td>
                                        <td>
                                            <a href="/guru/edit/{{ $j->id_guru }}">Edit</a>
                                            |
                                            <a href="/guru/hapus/{{ $j->id_guru }}"
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

        {{-- <table border="1">
    <tr>
        <th>id_guru</th>
        <th>nip</th>
        <th>nama_guru</th>
        <th>no_hp</th>
        <th>jenis_kelamin</th>
        <th>alamat</th>
        <th>Opsi</th>
    </tr>
    @foreach ($guru as $j)
    <tr>
        <td>{{ $j->id_guru }}</td>
        <td>{{ $j->nip }}</td>
        <td>{{ $j->nama_guru }}</td>
        <td>{{ $j->no_hp }}</td>
        <td>{{ $j->jenis_kelamin }}</td>
        <td>{{ $j->alamat }}</td>
        <td>
            <a href="/guru/edit/{{ $j->id_guru }}">Edit</a>
            |
            <a href="/guru/hapus/{{ $j->id_guru }}" onclick="return confirm('Apakah anda yakin?')">Hapus</a>
        </td>
    </tr>
    @endforeach
</table> --}}
    </div>
    <script>
        // @if(Session::has('created'))

            // Toastify({
            // text: "Data guru berhasil dibuat",
            // duration: 3000,
            // close: true,
            // gravity: "top",
            // position: "right",
            // backgroundColor: "#4fbe87",
            // }).showToast()

        // @endif
    </script>
@endsection
