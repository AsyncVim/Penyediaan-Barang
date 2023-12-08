<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengeluaran extends Model
{
    use HasFactory;
    protected $table = 'pengeluaran';
    protected $fillable = ['KodeKlr', 'TanggalKlr', 'KodeCust', 'NomorBon', 'TotalMnt', 'TotalKrm'];
    public $timestamps = false;

    public function keluarBarang()
    {
        return $this->belongsTo(KeluarBarang::class);
    }
}
