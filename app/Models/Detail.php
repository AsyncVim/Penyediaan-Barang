<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    use HasFactory;
    protected $table = 'detail';
    // protected $primaryKey = 'KodeBrg';
    // protected $visible = ['KodeBrg'];
    protected $fillable = ['KodeBrg', 'NamaBrg', 'JumlahBrg'];
    public $timestamps = false;
}
