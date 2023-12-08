<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPenerimaan extends Model
{
    use HasFactory;
    protected $table = 'detail_penerimaan';
    protected $fillable = ['KodeTrm', 'KodeBrg', 'Jumlah'];
    public $timestamps = false;
}
