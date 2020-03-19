<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\mahasiswa;


class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function mahasiswa()
    {
        $data_mahasiswa = DB::table('mahasiswa')->paginate(10);

        return view('admin.boardmahasiswa',['data_mahasiswa' => $data_mahasiswa]);
    }
    public function createmhs(Request $request)
    {
        \App\mahasiswa::create($request->all());

        Return redirect('boardmahasiswa')->with('sukses','Data mahasiswa berhasil di input');
    }


    public function editmhs($id)
    {
        $mahasiswa = \App\mahasiswa::find($id);
        return view('admin.editmhs',['mahasiswa' => $mahasiswa] );
    }
    public function updatemhs(Request $request,$id)
    {
        $mahasiswa = \App\mahasiswa::find($id);
        $mahasiswa->update($request->all());
        return redirect('boardmahasiswa')->with('sukses', 'Data Berhasil di Update');
    }

    public function deletemhs($id)
    {
        $mahasiswa = \App\mahasiswa::find($id);
        $mahasiswa->delete();
        return redirect('boardmahasiswa')->with('sukses', 'Data Berhasil di Hapus');
    }


}
