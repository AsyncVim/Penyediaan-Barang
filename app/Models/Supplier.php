<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;
    protected $fillable = ['KodeSupl', 'NamaSupl', 'AlamatSupl', 'TeleponSupl', 'EmailSupl'];
    protected $table = 'supplier';
    public $timestamps = false;
}
