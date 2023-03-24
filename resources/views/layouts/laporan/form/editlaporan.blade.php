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
                <h1>Ubah Data Laporan</h1>
            </div>
            <div class="card-body">

                @foreach ($data as $j)
                <form action="/laporan/update/" method="HEAD">
                    {{ csrf_field() }}
                    tanggal <input type="date" name="tanggal" value="{{ $data->tanggal}}" required><br>
                    <p></p>
                    kegiatan <input type="text" name="kegiatan" value="{{ $data->kegiatan}}" required><br>
                    <p></p>
                    Foto <input type="file" name="foto" required><br>
                    <p></p>
                    <input class="form-control btn btn-primary" type="submit" value="Simpan">
                </form>
            @endforeach
        </div>
    </div>

</div>
@endsection