@extends('layouts.master')
@section('content')

        <h1 class=" pt-4">EDIT NAMA MAHASISWA</h1>
        @if (session('sukses'))
        <div class="alert alert-success" role="alert">
            {{session('sukses')}}
          </div>
        @endif
        <div class="row">
            <div class="col-lg-12">
        <form action="/mahasiswa/{{$mahasiswa->id}}/update" method="POST">
                {{ csrf_field() }}
                  <div class="form-group">
                    <label for="nim">NIM</label>
                  <input type="text2" name="nim" class="form-control" id="nim" placeholder="NIM" value="{{$mahasiswa->nim}}">
                  </div>
                  <div class="form-group">
                    <label for="nama">NAMA</label>
                    <input type="text2" name="nama" class="form-control" id="nama" placeholder="Nama Mahasiswa" value="{{$mahasiswa->nama}}">
                  </div>
                  <div class="form-group">
                    <label for="kelamin">Jenis Kelamin</label>
                    <select name="jenis_kelamin" class="form-control" id="kelamin">
                      <option value="L" @if ($mahasiswa->jenis_kelamin == 'L') selected @endif >Laki-Laki</option>
                      <option value="P" @if ($mahasiswa->jenis_kelamin == 'P') selected @endif >Perempuan</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="agama">AGAMA</label>
                    <input type="text2" name="agama" class="form-control" id="agama" placeholder="agama" value="{{$mahasiswa->agama}}">
                  </div>
                  <div class="form-group">
                    <label for="tgl_lahir">TANGGAL LAHIR</label>
                    <input type="date" name="tgl_lahir" class="form-control" id="tgl_lahir" placeholder="Tanggal lahir" value="{{$mahasiswa->tgl_lahir}}">
                  </div>
                  <div class="form-group">
                      <label for="email">EMAIL</label>
                      <input type="email" name="email" class="form-control" id="agama" placeholder="email" value="{{$mahasiswa->email}}">
                    </div>
                    <div class="form-group">
                      <label for="agama">ALAMAT</label>
                      <input type="text2" name="alamat" class="form-control" id="agama" placeholder="alamat" value="{{$mahasiswa->alamat}}">
                    </div>

                  <button type="submit" class="btn btn-edit float-right">Update</button>

              </form>
            </div>
        </div>

 @endsection
