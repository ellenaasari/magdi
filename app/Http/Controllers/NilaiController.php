<?php

namespace App\Http\Controllers;

use App\Models\Nilai;
use Illuminate\Http\Request;

class NilaiController extends Controller
{
    public function index()
    {
        $nilai=Nilai::all();
        return view('layouts.nilai.nilai',['nilai'=>$nilai]);
    }
    public function tambah()
    {
        return view('layouts.nilai.form.tambahnilai');
    }
    public function input(Request $request)
    {
        $nilai=$request->except(['_token']);
        Nilai::insert($nilai);

            return redirect('/nilai');
    }
    public function hapus($id)
    {
        Nilai::where('id_nilai',$id)->delete();

            return redirect('/nilai');
    }

    public function edit($id)
    {
        $nilai = Nilai::where('id_nilai',$id)->get();
            return view('layouts.nilai.form.editnilai',['nilai'=>$nilai]);
    }

    public function update(Request $request)
    {
        // return $request;
        Nilai::where('id_nilai',$request->id_nilai)->update([
            'id_nilai' => $request->id_nilai,
            'nis' => $request->nis,
            'nama' => $request->nama,
            'nilai' => $request->nilai,
        ]);
        return redirect('/nilai');
    }

}
