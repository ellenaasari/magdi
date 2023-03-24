<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index(){
        $siswa = Siswa::all();
        return view('siswa',['siswa'=>$siswa]);
    }

    public function tambahSiswa(){
        return view('tambahSiswa');
    }

    public function simpanSiswa(Request $request){
        $nis=$request->nis;
        $nama=$request->nama;
        $no_hp=$request->no_hp;
        $alamat=$request->alamat;

        Siswa::create([
            'nis'=>$nis,
            'nama'=>$nama,
            'no_hp'=>$no_hp,
            'alamat'=>$alamat
        ]);

        return redirect('/siswa');
    }

    public function editSiswa($nis){
        $siswa = Siswa::where('nis', $nis)->first();
        return view('editsiswa',['isi' => $siswa]);
    }

    public function updateSiswa(Request $request, $nis){
        // return $request->all();
       $siswa = Siswa::where('nis',$nis)->update([
        'nis'=>$nis,
        'nama'=>$request->nama,
        'no_hp'=>$request->no_hp,
        'alamat'=>$request->alamat,
    ]);
         return redirect('/siswa');
    }

    public function hapusSiswa($nis){
            $siswa = Siswa::where('nis',$nis)->delete();
            return redirect('/siswa');

    }
}
