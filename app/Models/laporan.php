<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class laporan extends Model
{
    use HasFactory;
    protected $fillable = ['nik', 'nama_pelapor', 'jl', 'judul_laporan', 'tgl_kejadian', 'isi_laporan'];
    protected $table = 'laporan';
}
