<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InformasiPelayanan extends Model
{
    protected $fillable = ['judul', 'deskripsi_singkat', 'konten'];
}
