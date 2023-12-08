<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use App\Models\Supplier;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use function PHPUnit\Framework\isNull;

class UserController extends Controller
{
    public function index()
    {
    }
    public function create()
    {
        return view('auth.register');
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'email' => 'required|unique:users',
            'alamat' => 'required',
            'noTelp' => 'required',
            'password' => 'required|min:8',
        ]);

        if ($request->is_supplier == null) {
            $isSupplier = false;
        } else {
            $isSupplier = true;
        }
        $kodeUser = Str::uuid()->toString();
        $kodeUser = Str::upper(substr($kodeUser, 0, 10));

        // dd($request->is_supplier == null);
        User::create([
            'kode' => $kodeUser,
            'password' => $request->password,
            'is_supplier' => $isSupplier,
            'email' => $request->email
        ]);

        if ($isSupplier) {
            Supplier::create([
                'KodeSupl' => $kodeUser,
                'NamaSupl' => $request->nama,
                'AlamatSupl' => $request->alamat,
                'TeleponSupl' => $request->noTelp,
                'EmailSupl' => $request->email
            ]);
        } else {
            Pelanggan::create([
                'KodeCust' => $kodeUser,
                'NamaCust' => $request->nama,
                'AlamatCust' => $request->alamat,
                'TeleponCust' => $request->noTelp,
                'EmailCust' => $request->email
            ]);
        }

        return redirect('login')->with('success', 'Akun Berhasil dibuat');
    }
}
