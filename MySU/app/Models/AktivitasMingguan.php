<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AktivitasMingguan extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'tilawah', 'murajaah', 'puasa', 'tahajud', 'dhuha', 'infaq', 'wirid', 'olahraga', 'telp', 'hafalan'];
}
