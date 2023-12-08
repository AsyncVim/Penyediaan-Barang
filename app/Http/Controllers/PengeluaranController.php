<?php

namespace App\Http\Controllers;

use App\Models\KeluarBarang;
use App\Models\Pengeluaran;
use Illuminate\Http\Request;
use Carbon\Carbon;

class PengeluaranController extends Controller
{
    public function index()
    {

        return view('pengeluaran.index', [
            'title' => 'Pengeluaran',
            'data' => Pengeluaran::all()
        ]);
    }
    public function detail(string $kode)
    {
        $data = KeluarBarang::where('KodeKlr', $kode)->first();

        return view('pengeluaran.show', [
            'title' => 'Detail',
            'data' => $data
        ]);
    }

    public function note($data)
    {

        extract($data);

        $now = Carbon::now();
        Pengeluaran::create([
            'KodeKlr' => $kodeKlr,
            'TanggalKlr' => $now,
            'KodeCust' => auth()->user()->kode,
            'NomorBon' => '123' . 'D-' . substr($kodeKlr, 0, 5),
            'TotalMnt' => $minta,
            'TotalKrm' => $kirim
        ]);
    }
}
