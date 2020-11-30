<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kampus extends Model
{
    use HasFactory;
    protected $fillable = ['nama_kampus', 'akronim', 'akreditasi',
    'status','peringkat_asia','peringkat_lokal','lokasi' ];
}
