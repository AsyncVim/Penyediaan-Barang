<?php

namespace App\Http\Controllers;

use App\Models\Penerimaan;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Str;

class PenerimaanController extends Controller
{
    public function index()
    {
        return view('penerimaan.index', [
            'title' => 'Penerimaan',
            'data' => Penerimaan::all()
        ]);
    }
    public function create()
    {
        return view('penerimaan.create', [
            'title' => 'Pemasukkan Barang'
        ]);
    }
    public function detail(string $kode)
    {
        $data = Penerimaan::where('KodeTrm', $kode)->first();

        return view('penerimaan.show', [
            'title' => 'Detail Penerimaan',
            'data' => $data
        ]);
    }
    public function note(string $kode, int $jumlah)
    {
        Penerimaan::create([
            'KodeTrm' => $kode,
            'TanggalTrm' => Carbon::now(),
            'KodeSupl' => auth()->user()->kode,
            'NomorBon' => 'Asd' . 'D-' . substr($kode, 0, 5),
            'TotalTrm' => $jumlah
        ]);
    }
}
