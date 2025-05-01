<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Plabela extends Model
{
    use HasFactory;

    protected $fillable = ['namasa', 'warna', 'jumlah', 'mesin', 'batch', 'tanggal', 'shift', 'namainput', 'baris3'];
}
