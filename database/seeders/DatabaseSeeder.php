<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Detail;
use App\Models\KeluarBarang;
use App\Models\Pengeluaran;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Detail::create([
            'KodeBrg' => "A001",
            "NamaBrg" => "Apel",
            "JumlahBrg" => "10"
        ]);
        Detail::create([
            'KodeBrg' => "A002",
            "NamaBrg" => "Mangga",
            "JumlahBrg" => "20"
        ]);
        Detail::create([
            'KodeBrg' => "A003",
            "NamaBrg" => "Jeruk",
            "JumlahBrg" => "13"
        ]);
        Detail::create([
            'KodeBrg' => "A004",
            "NamaBrg" => "Pisang",
            "JumlahBrg" => "43"
        ]);

        // KeluarBarang::create([
        //     'KodeKlr' => 'A',
        //     'KodeBrg' => 'B',
        //     'Stock' => 2,
        //     'Jumlah' => 12,
        //     'Dikirim' => 2
        // ]);

        // $now = Carbon::now();
        // Pengeluaran::create([
        //     'KodeKlr' => 'A',
        //     'TanggalKlr' => $now,
        //     'KodeCust' => '1291',
        //     'NomorBon' => 'KS',
        //     'TotalMnt' => 2,
        //     'TotalKrm' => 3
        // ]);
    }
}
