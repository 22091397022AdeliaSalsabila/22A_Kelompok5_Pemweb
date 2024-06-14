<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CandidateController extends Controller
{
    public function candidate1(Request $request) {
        // Tetapkan jumlah kandidat langsung di sini
        $dpdCount = 30; // Jumlah kandidat untuk DPD
        $dprCount = 50; // Jumlah kandidat untuk DPR
        $dprdProvinsiCount = 75; // Jumlah kandidat untuk DPRD Provinsi
        $dprdKabupatenCount = 100; // Jumlah kandidat untuk DPRD Kabupaten/Kota

        $data = [
            'dpd' => $dpdCount,
            'dpr' => $dprCount,
            'dprd_provinsi' => $dprdProvinsiCount,
            'dprd_kabupaten' => $dprdKabupatenCount,
        ];

        $partyName = $request->input('party', 'Partai'); // Default to 'Partai' if not provided

        return view('candidates.candidate', compact('data', 'partyName'));
    }
}