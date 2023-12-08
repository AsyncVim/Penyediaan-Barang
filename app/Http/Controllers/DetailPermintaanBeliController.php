<?php

namespace App\Http\Controllers;

use App\Models\DetailPermintaanBeli;
use Illuminate\Http\Request;

class DetailPermintaanBeliController extends Controller
{
    public function index(Request $request)
    {
        $validatedData = $request->validate([
            'jumlah' => 'required'
        ]);

        DetailPermintaanBeli::create([
            'KodeBrg' => $request->kode,
            'JumlahBrg' => $request->jumlah
        ]);

        $controller = app('App\Http\Controllers\PermintaanBeliController');
        $controller->note($request->jumlah);

        return redirect('/barang')->with('success', 'Permintaan berhasil dibuat');
    }
}
