<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPermintaanBeli extends Model
{
    use HasFactory;
    protected $table = 'detail_permintaan_beli';
    protected $fillable = ['KodeBrg', 'NamaBrg', 'JumlahBrg'];
    public $timestamps = false;

    public function detail()
    {
        return $this->belongsTo(Detail::class);
    }
}
