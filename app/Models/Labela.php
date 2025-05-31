<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Labela extends Model
{
    use HasFactory;

    protected $fillable = ['nospk', 'kepada', 'jenisrepair', 'keterangan', 'estimasi', 'sinput1'];
}
