<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use File;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    //public function tampil(){
        //return view('dashboard');
    //}

    public function index()
    {
        $data = Laporan::all();
        return view('layouts.laporan.siswa')->with([
            'data'=>$data
        ]);
    }
    public function siswaTambah()
    {
        return view('layouts.laporan.form.siswaTambah');
    }
    public function siswaTambahProses(Request $request)
    {
        $request->foto->storeAs('gambar',$request->id.".".$request->foto->getClientOriginalExtension());

        Laporan::insert([
            'tanggal'=>$request->tanggal,
            'kegiatan'=>$request->kegiatan,
            'foto'=>$request->id.".".$request->foto->getClientOriginalExtension()
        ]);

        return redirect('/laporan');
    }
    public function siswaHapus($id)
    {
        $siswa=Laporan::where('id',$id)->first();
        File::delete('storage/gambar/'.$siswa->foto);

        Laporan::where('id',$id)->delete();

        return redirect('/laporan');
    }
    public function siswaUbah($id)
    {
        $dataUbah = Laporan::where('id', $id)->first();
        return view('layouts.laporan.form.siswaUbah', ['data'=>$dataUbah]);
    }
    public function siswaUpdate($id, Request $request)
    {
        $siswa=Laporan::where('id',$id)->first();
        File::delete('storage/gambar/'.$siswa->foto);
        $request->foto->storeAs('gambar',$request->id.".".$request->foto->getClientOriginalExtension());
        $siswa->where('id',$id)
        ->update([
            'tanggal'=>$request->tanggal,
            'kegiatan'=>$request->kegiatan,
            'foto'=>$request->id.".".$request->foto->getClientOriginalExtension()
        ]);
        return redirect('/laporan');
    }

}
