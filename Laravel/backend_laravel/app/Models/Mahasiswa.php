<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $guarded = [];
    // protected $fillable = ['nama_mahasiswa', 'nim'];
    use HasFactory;
}
