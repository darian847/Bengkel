<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Input extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'warna', 'jumlah', 'mesin', 'batch', 'tanggal', 'shift', 'namainput'];
}
