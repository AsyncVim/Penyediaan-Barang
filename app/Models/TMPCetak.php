<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TMPCetak extends Model
{
    use HasFactory;
    protected $fillable = ['NomorPermintaan', 'KodeBrg', 'Stok', 'Jumlah', 'Dikirim', 'Keterangan'];
    protected $table = 'TMPCetak';
    public $timestamps = false;
}
