<?php

namespace App\Http\Controllers;

use App\Models\Detail;
use App\Models\KeluarBarang;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

use function Laravel\Prompts\note;

class KeluarBarangController extends Controller
{
    public function index(Request $request)
    {
        $validatedData = $request->validate([
            'jumlah' => 'required'
        ]);

        $barang = Detail::where('KodeBrg',  $request->kode)->get()[0];


        $jumlah = $barang->JumlahBrg - $request->jumlah;
        if ($jumlah < 0) {
            $jumlah = 0;
        }

        $kirim = $barang->JumlahBrg;
        if ($barang->JumlahBrg > $request->jumlah) {
            $kirim = $request->jumlah;
        }


        Detail::where('KodeBrg', $request->kode)->update([
            'JumlahBrg' => $jumlah
        ]);

        $this->note($kirim, $request->jumlah, $barang->JumlahBrg, $barang->KodeBrg, $jumlah);


        return redirect('/barang')->with('success', 'Barang berhasil diambil');
    }

    public function note(int $kirim, int $reqJumlah, int $jumlahAwal, ...$barang)
    {
        $kodeKlr = Str::uuid()->toString();
        $kodeKlr = Str::upper(substr($kodeKlr, 0, 13));


        KeluarBarang::create([
            'KodeKlr' => $kodeKlr,
            'KodeBrg' => $barang[0],
            'Stock' => $jumlahAwal,
            'Jumlah' => $barang[1],
            'Dikirim' => $kirim
        ]);

        $controller = app('App\Http\Controllers\PengeluaranController');
        $controller->note(['kirim' => $kirim, 'minta' => $reqJumlah, 'kodeKlr' => $kodeKlr]);
    }
}
