<?php

namespace App\Http\Controllers;

use App\Models\Detail;
use App\Models\DetailPermintaanBeli;
use App\Models\PermintaanBeli;
use Illuminate\Http\Request;
use Carbon\Carbon;

class PermintaanBeliController extends Controller
{
    public function index()
    {
        return view('permintaan.index', [
            'title' => 'Permintaan',
            'data' => PermintaanBeli::all()
        ]);
    }
    public function note($jumlah)
    {
        PermintaanBeli::create([
            'TanggalMnt' => Carbon::now(),
            'TotalMnt' => $jumlah
        ]);
    }
    public function detail($data)
    {
        $req = DetailPermintaanBeli::where('NomorPermintaan', $data)->get()[0];
        $barang = Detail::where('KodeBrg', $req->KodeBrg)->get()[0];

        return view('permintaan.show', [
            'title' => 'Detail Permintaan',
            'req' => $req,
            'barang' => $barang
        ]);
    }
}
