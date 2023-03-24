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
                <h1>Ubah Data Guru</h1>
            </div>
            <div class="card-body">


                @foreach ($guru as $j)
                    <form action="/guru/update" method="HEAD">
                        {{ csrf_field() }}
                        id_guru <input class="form-control " type="text" name="id_guru" value="{{ $j->id_guru }}"><br>
                        nip <input class="form-control " type="text" name="nip" value="{{ $j->nip }}" required><br>
                        nama_guru <input class="form-control " type="text" name="nama_guru" value="{{ $j->nama_guru }}" required><br>
                        no_hp <input class="form-control " type="text" name="no_hp" value="{{ $j->no_hp }}" required><br>
                        jenis_kelamin <input class="form-control " type="text" name="jenis_kelamin" value="{{ $j->jenis_kelamin }}"
                            required><br>
                        alamat <input class="form-control " type="text" name="alamat" value="{{ $j->alamat }}" required><br>
                        <input class="form-control btn btn-primary" type="submit" value="Simpan">
                    </form>
                @endforeach
            </div>
        </div>

    </div>
@endsection
