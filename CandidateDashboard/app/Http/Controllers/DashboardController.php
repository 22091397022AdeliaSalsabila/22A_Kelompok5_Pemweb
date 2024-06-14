<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard1()
    {
        // Data partai (dapat disesuaikan dengan data nyata)
        $parties = [
            ['name' => 'PAN', 'logo' => 'https://infopemilu.kpu.go.id/berkas-sipol/parpol/profil/gambar_parpol/1656404797_LOGO%20PAN.png'],
            ['name' => 'PKB', 'logo' => 'https://infopemilu.kpu.go.id/berkas-sipol/parpol/profil/gambar_parpol/1656538128_Logo%20PKB.png'],
            ['name' => 'PDI-P', 'logo' => 'https://infopemilu.kpu.go.id/berkas-sipol/parpol/profil/gambar_parpol/1656305039_LOGO%20PDI%20PERJUANGAN.png'],
            ['name' => 'PSI', 'logo' => 'https://infopemilu.kpu.go.id/berkas-sipol/parpol/profil/gambar_parpol/1656419883_logo-10x10.png'],
            ['name' => 'GOLKAR', 'logo' => 'https://infopemilu.kpu.go.id/berkas-sipol/parpol/profil/gambar_parpol/1656586681_Logo%20Golkar.png'],
            ['name' => 'NasDem', 'logo' => 'https://infopemilu.kpu.go.id/berkas-sipol/parpol/profil/gambar_parpol/1656224727_Logo%20NasDem%20KPU.png'],
            ['name' => 'GERINDRA', 'logo' => 'https://infopemilu.kpu.go.id/berkas-sipol/parpol/profil/gambar_parpol/1657710596_Logo%20GERINDRA%2010x10.png'],
        ];

        return view('candidates.dashboard', compact('parties'));
    }
}
