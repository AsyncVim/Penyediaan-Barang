<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PermintaanBeli extends Model
{
    use HasFactory;
    protected $table = 'permintaan_beli';
    protected $fillable = ['TanggalMnt', 'TotalMnt'];
    public $timestamps = false;

    
}
