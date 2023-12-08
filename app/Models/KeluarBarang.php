<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KeluarBarang extends Model
{
    use HasFactory;
    protected $table = 'keluar_barang';
    protected $fillable = ['KodeKlr', 'KodeBrg', 'Dikirim', 'Jumlah', 'Ket', 'Stock'];
    public $timestamps = false;

    public function pengeluaran()
    {
        return $this->hasOne(Pengeluaran::class);
    }
}
