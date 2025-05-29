<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['nospk', 'tanggal1', 'pemohon', 'dept', 'nomesin', 'uraianbag1', 'tanggal2', 'tanggal3', 'pekerja', 'tanggal4', 'mouldgiver', 'tindakperbaikan', 'penerimabagus', 'tanggal5', 'ok', 'gkok', 'catatan', 'sinput1', 'sinput2', 'sinput3'];
}
