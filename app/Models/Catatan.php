<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catatan extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'tanggal', 'gula_darah', 'tensi', 'pesan_dokter'];

}
