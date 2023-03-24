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
                <h1>Ubah Data Absensi</h1>
            </div>
            <div class="card-body">


                <form action="/absen/update/{{ $absen->id }}" method="POST">
                    @csrf
                    Nis:
                    <input class="form-control" type="text" name="nis" value="{{ $absen->nis }}"><br>
                    Tanggal:
                    <input class="form-control" type="date" name="tanggal" value="{{ $absen->tanggal }}"><br>
                    Status:
                    <input class="form-control" type="text" name="status" value="{{ $absen->status }}"><br>
                    Keterangan:
                    <input class="form-control" type="text" name="keterangan" value="{{ $absen->keterangan }}"><br>
                    <input class="btn btn-primary w-100" type="submit" value="simpan">

                </form>
            </div>
        </div>

    </div>
@endsection


{{--
<form action="/absen/update/{{$absen->id}}" method= "POST">
    @csrf
    Nis:
    <input type="text" name= "nis" value="{{$absen->nis}}"><br>
    Tanggal:
    <input type="date" name="tanggal" value="{{$absen->tanggal}}"><br>
    Status:
    <input type="text" name="status" value="{{$absen->status}}"><br>
    Keterangan:
    <input type="text" name="keterangan" value="{{$absen->keterangan}}"><br>
<input type="submit" value="simpan">

</form>  --}}
