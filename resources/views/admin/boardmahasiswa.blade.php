<style type="text/css">
    .pagination li{
        float: left;
        list-style-type: none;
        margin:5px;
    }
</style>

@extends('layouts.master')
@section('content')

<section class="content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-heading">
                            <h3 class="panel-tittle">    Data Mahasiswa</h3>
                            <div class="right">
                            <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"><i class="lnr lnr-plus-circle"></i>
                            </button></div>
                            </div></div></div></div>

                            <div class="container-fluid">
    @if (session('sukses'))
    <div class="alert alert-success" role="alert">
        {{session('sukses')}}
    </div>
    @endif
<div class="row">
<div class="col-6">
</div>

<table class="table table-hover table-striped" style="width: 100%">
<tr>
    <th>No</th>
    <th>NIM</th>
    <th>NAMA</th>
    <th>JENIS KELAMIN</th>
    <th>AGAMA</th>
    <th>TANGGAL LAHIR</th>
    <th>EMAIL</th>
    <th>ALAMAT</th>
    <th width = '140px;'>AKSI</th>
</tr>
<?php $no = 0;?>
@foreach ($data_mahasiswa as $no =>$mahasiswa)
<?php $no++ ;?>
<tr>
<td>{{ $no + ($data_mahasiswa->currentPage()-1) * $data_mahasiswa->perPage() }}</td>
<td>{{$mahasiswa->nim}}</td>
<td>{{$mahasiswa->nama}}</td>
@if ($mahasiswa->jenis_kelamin == 'L') <td>Laki-Laki</td>
@else
<td>Perempuan</td>
@endif
<td>{{$mahasiswa->agama}}</td>
<td>{{$mahasiswa->tgl_lahir}}</td>
<td>{{$mahasiswa->email}}</td>
<td>{{$mahasiswa->alamat}}</td>
<td><a href ='/boardmahasiswa/{{$mahasiswa->id}}/editmhs' class="btn btn-warning btn-sm">Edit</a>
    <a href='/boardmahasiswa/{{$mahasiswa->id}}/deletemhs' class="btn btn-danger btn-sm" onclick="return confirm('Yakin dihapus ?')">Delete</a></td>
</tr>
@endforeach
</table>
<br/>
<div class="justify-content-center" style="margin-left: 20%;">
{{ $data_mahasiswa->links() }}</div>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
  <h5 class="modal-title" id="exampleModalLabel">DATA MAHASISWA</h5>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<div class="modal-body">
    <form action="/boardmahasiswa/create" method="POST">
      {{ csrf_field() }}
        <div class="form-group">
          <label for="nim">NIM</label>
          <input type="text2" name="nim" class="form-control" id="nim" placeholder="NIM">
        </div>
        <div class="form-group">
          <label for="nama">NAMA</label>
          <input type="text2" name="nama" class="form-control" id="nama" placeholder="Nama Mahasiswa">
        </div>
        <div class="form-group">
          <label for="kelamin">Jenis Kelamin</label>
          <select name="jenis_kelamin" class="form-control" id="kelamin">
            <option value="L">Laki-Laki</option>
            <option value="P">Perempuan</option>
          </select>
        </div>
        <div class="form-group">
          <label for="agama">AGAMA</label>
          <input type="text2" name="agama" class="form-control" id="agama" placeholder="agama">
        </div>
        <div class="form-group">
          <label for="tgl_lahir">TANGGAL LAHIR</label>
          <input type="date" name="tgl_lahir" class="form-control" id="tgl_lahir" placeholder="Tanggal lahir">
        </div>
        <div class="form-group">
            <label for="email">EMAIL</label>
            <input type="email" name="email" class="form-control" id="agama" placeholder="email">
          </div>
          <div class="form-group">
            <label for="agama">ALAMAT</label>
            <input type="text2" name="alamat" class="form-control" id="agama" placeholder="alamat">
          </div>

        <div class="modal-footer">
        <button type="submit" class="btn btn-primary float-right">Submit</button>

    </form>
</div>
</div>
</div>
</div>



    <!-- ./col -->
  </div>
  <!-- /.row -->
    </div>


</section>
@endsection
