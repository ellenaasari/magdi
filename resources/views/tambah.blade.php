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
                <h1>Tambah Data Absensi</h1>
            </div>
            <div class="card-body">

                <form action="/absen/simpan" method="POST">
                    @csrf
                    NIS:
                    <input class="form-control" type="text" name="nis">
                    Tanggal:
                    <input class="form-control" type="text" value={{ date('Y-d-m') }} name="tanggal" readonly>
                    Status:
                    {{--  <input class="form-control" type="text" name="status">  --}}
                    <select class="form-control" name="status" id="status">
                        <option value="Masuk">Masuk</option>
                        <option value="Sakit">Sakit</option>
                        <option value="Ijin">Ijin</option>
                        <option value="Alpha">Alpha</option>
                    </select>
                    keterangan:
                    <input class="form-control" type="text" name="keterangan">
                    <input type="submit" class="btn btn-primary mt-3 w-100" value="simpan">

                </form>

                </body>

                </html>


                {{--  <form action="/absen/simpan" method= "POST">
    @csrf
    nis:
    <input type="text" name= "nis"><br>
    tanggal:
    <input type="text" value={{date("Y-d-m")}} name= "tanggal" readonly><br>
    status:
    <input type="text" name="status"><br>
                <select name="status" id="status">
                    <option value="MASUK">MASUK</option>
                    <option value="SAKIT">SAKIT</option>
                    <option value="IJIN">IJIN</option>
                    <option value="ALPHA">ALPHA</option>

                </select><br>
                keterangan:
                <input type="text" name="keterangan"><br>
                <input type="submit" value="simpan">

                </form> --}}
