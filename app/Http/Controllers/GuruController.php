<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GuruController extends Controller
{


    public function index()
    {
        $guru=Guru::all();

        return view('guru',['guru'=>$guru]);
    }

    public function tambah   ()
    {
        return view('tambahguru');
    }

    public function input(Request $request)
    {

        $guru=$request->except(['_token']);
        Guru::insert($guru);

            return redirect('/guru')->with('created', 'done');
    }

    public function hapus($id)
    {
        DB::table('guru')->where('id_guru',$id)->delete();

            return redirect('/guru');
    }

    public function edit($id)
    {
        $guru=DB::table('guru')->where('id_guru',$id)->get();
            return view('editguru',['guru'=>$guru]);
    }

    public function update(Request $request)
    {
        DB::table('guru')->where('id_guru',$request->id_guru)->update([
            'id_guru' => $request->id_guru,
            'nip' => $request->nip,
            'nama_guru' => $request->nama_guru,
            'no_hp' => $request->no_hp,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat' => $request->alamat,

        ]);
        return redirect('/guru');
    }



}


