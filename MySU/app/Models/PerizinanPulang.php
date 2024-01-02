<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PerizinanPulang extends Model
{
    use HasFactory;
    protected $fillable = ['nama', 'alamat', 'alasan', 'jam_pulang'];
}
