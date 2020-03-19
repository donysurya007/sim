<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Collection;


class MahasiswaController extends Controller
{
    public function index()
    {
 //       $data_mahasiswa = \App\mahasiswa::all()->take(10);
          $data_mahasiswa = DB::table('mahasiswa')->paginate(10);
        return view('mahasiswa.index',['data_mahasiswa' => $data_mahasiswa]);

    }

    public function create(Request $request)
    {
        \App\mahasiswa::create($request->all());

        Return redirect('/mahasiswa')->with('sukses','Data mahasiswa berhasil di input');
    }

    public function edit($id)
    {
        $mahasiswa = \App\mahasiswa::find($id);
        return view('mahasiswa/edit',['mahasiswa' => $mahasiswa] );
    }
    public function update(Request $request,$id)
    {
        $mahasiswa = \App\mahasiswa::find($id);
        $mahasiswa->update($request->all());
        return redirect('/mahasiswa')->with('sukses', 'Data Berhasil di Update');
    }

    public function delete($id)
    {
        $mahasiswa = \App\mahasiswa::find($id);
        $mahasiswa->delete();
        return redirect('/mahasiswa')->with('sukses', 'Data Berhasil di Hapus');
    }
}
