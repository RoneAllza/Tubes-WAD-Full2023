<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AktivitasPembinaan extends Model
{
    use HasFactory;
    protected $fillable = ['nama_pembina', 'judul', 'konten_pembinaan'];
}

