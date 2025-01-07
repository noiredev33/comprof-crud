<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Berkas extends Model
{
    protected $table = 'berkas'; // Nama tabel yang sesuai di database
    protected $fillable = ['kantor', 'nomor_berkas', 'tahun', 'status'];
}
