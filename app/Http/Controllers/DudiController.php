<?php

namespace App\Http\Controllers;

use App\Models\Dudi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DudiController extends Controller
{
    public function index()
    {
        $dudi=Dudi::all();

        return view('dudi',['dudi'=>$dudi]);
    }

    public function tambah   ()
    {
        return view('tambahdudi');
    }

    public function input(Request $request)
    {

        $dudi=$request->except(['_token']);
        Dudi::insert($dudi);

            return redirect('/dudi');
    }

    public function hapus($id)
    {
        DB::table('dudis')->where('id_dudi',$id)->delete();

            return redirect('/dudi');
    }

    public function edit($id)
    {
        $dudi=DB::table('dudis')->where('id_dudi',$id)->get();
            return view('editdudi',['dudi'=>$dudi]);
    }

    public function update(Request $request)
    {
        DB::table('dudis')->where('id_dudi',$request->id_dudi)->update([
            'id_dudi' => $request->id_dudi,
            'nama_dudi' => $request->nama_dudi,
            'no_hp' => $request->no_hp,
            'alamat' => $request->alamat,

        ]);
        return redirect('/dudi');
    }
}
