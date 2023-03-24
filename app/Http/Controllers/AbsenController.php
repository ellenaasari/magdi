<?php

namespace App\Http\Controllers;

use App\Models\Absen;
use Illuminate\Http\Request;

class AbsenController extends Controller
{
    public function index()
    {
        $absen = Absen::all();
        return view('index', ['absen'=>$absen]);
    }

    public function tambah()
    {
        return view ('tambah');
    }

    public function simpan(Request $request)
    {
       $absen = Absen::create([
        'nis'=>$request->nis,
        'tanggal'=>$request->tanggal,
        'status'=>$request->status,
        'keterangan'=>$request->keterangan
         ]);

        return redirect('/absen');
    }

    public function edit($id)
    {
        $absen = Absen::find($id);
        // return $absen;
        return view ('edit',['absen'=>$absen]);

    }

        public function update($id, Request $request)
        {
        $absen = Absen::find($id);
        $absen->update($request->except(['_token','submit']));
        return redirect('/absen');

    }
    public function hapus($id)
    {
        $absen = Absen::findOrfail($id);
        $absen->delete();
        return redirect('/absen');
    }
}
