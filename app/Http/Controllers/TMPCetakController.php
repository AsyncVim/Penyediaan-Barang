<?php

namespace App\Http\Controllers;

use App\Models\DetailPenerimaan;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class TMPCetakController extends Controller
{
    public function index()
    {

        return view('cetak.index', [
            'title' => 'Cetak Data',
            'data' => DetailPenerimaan::all()
        ]);
    }
    public function cetak(Request $request)
    {

        return view('cetak.cetak', [
            'title' => 'Mencetak..',
            'data' => DetailPenerimaan::where('KodeTrm', $request->KodeTrm)->get()
        ]);
    }
}
