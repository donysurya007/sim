<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;

class mahasiswa extends Model
{
    protected $table = 'mahasiswa';
    protected $fillable = ['nim','nama','jenis_kelamin','agama','tgl_lahir','email','alamat'];

}
