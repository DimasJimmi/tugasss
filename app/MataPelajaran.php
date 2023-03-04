<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MataPelajaran extends Model
{
    protected $table = 'jurusan';

    protected $fillable = [
        'id_jurusan',
        'nama',
        'deskripsi',
    ];
public function jurusan()
{
    return $this->belongsTo('App\Jurusan', 'id_jurusan');
}
}
