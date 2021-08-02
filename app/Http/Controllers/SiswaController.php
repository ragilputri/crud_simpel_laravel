<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;

class SiswaController extends Controller
{
    public function tambah(){
        return view("tambah_data");
    }

    public function save(Request $request){
        $data_siswa = Siswa::create([
            "siswa"=>$request->input("nama"),
            "kelas"=>$request->input("kelas"),
        ]);

        return redirect(url('/'))
            ->with("data_siswa", $data_siswa);
    }

    public function delete($id, Request $request){
        $data_siswa = Siswa::find($id);
        $data_siswa -> delete();

        return redirect(url('/'));
    }

    public function edit($id, Request $request){
        $data_siswa = Siswa::find($id);

        return view('edit_data')
        ->with('data_siswa', $data_siswa);
    }

    public function update($id, Request $request){
        $data_siswa = Siswa::find($id);

        $data_siswa->siswa = $request->input("nama");
        $data_siswa->kelas = $request->input("kelas");

        $data_siswa->save();

        return redirect(url('/'));
    }
}
