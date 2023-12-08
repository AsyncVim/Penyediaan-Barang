<?php

namespace App\Http\Controllers;

use App\Models\Detail;
use App\Models\DetailPenerimaan;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class DetailPenerimaanController extends Controller
{
    public function index(Request $request)
    {

        $validatedData = $request->validate([
            'KodeBrg' => 'required',
            'NamaBrg' => 'required',
            'JumlahBrg' => 'required'
        ]);

        // Menambah stok bila barang sudah ada

        $barang = Detail::where('KodeBrg', $request->KodeBrg)->first();
        if ($barang) {
            Detail::where('kodeBrg', $request->KodeBrg)->update([
                'KodeBrg' => $barang->KodeBrg,
                'NamaBrg' => $barang->NamaBrg,
                'JumlahBrg' => $barang->JumlahBrg + $request->JumlahBrg
            ]);
        } else {

            Detail::create([
                'KodeBrg' => $request->KodeBrg,
                'NamaBrg' => $request->NamaBrg,
                'JumlahBrg' => $request->JumlahBrg
            ]);
        }


        $this->note($request->KodeBrg, $request->JumlahBrg);

        return redirect('/barang')->with('success', 'Barang Berhasil dimasukan');
    }
    public function note(string $kode, int $jumlah)
    {

        $kodeTrm = Str::uuid()->toString();
        $kodeTrm = Str::upper(substr($kodeTrm, 0, 13));

        DetailPenerimaan::create([
            'KodeTrm' => $kodeTrm,
            'KodeBrg' => $kode,
            'Jumlah' => $jumlah
        ]);

        $controller = app('App\Http\Controllers\PenerimaanController');
        $controller->note($kodeTrm, $jumlah);
    }
}
