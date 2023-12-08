<?php

namespace App\Http\Controllers;

use App\Models\Detail;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('barangs.index', [
            'title' => 'Barang',
            'barangs' => Detail::all()->sortBy('KodeBrg')
        ]);
    }

    public function keluar(string $kode)
    {

        $barang = Detail::where('KodeBrg', $kode)->get();
        return view('barangs.create', [
            'title' => 'Keluar Barang',
            'barang' =>  $barang[0]
        ]);
    }
}
