<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Data_ktp extends Model
{
    protected $table = 'data_ktp';
    protected $fillable = ['nik', 'nama', 'kota_lahir', 'tanggal_lahir', 'jenis_kelamin', 'agama', 'alamat', 'status_pekerjaan', 'kewarganegaraan', 'email', 'status_ektp'];
}
