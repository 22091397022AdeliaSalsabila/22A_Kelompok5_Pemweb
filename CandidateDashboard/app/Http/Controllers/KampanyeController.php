<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KampanyeController extends Controller
{
    public function show()
    {
        // Static data for demonstration
        $data = [
            [
                'id' => 1,
                'provinsi' => 'ACEH',
                'nomor_urut' => 1,
                'nama_calon' => 'Ainul Mufidh',
                'photo' => 'https://infopemilu.kpu.go.id/berkas-dpd-dct/35/35_1_AA.%20AHMAD%20NAWARDI.jpg',
                'details' => 'Detailed information about the candidate'
            ],
            [
                'id' => 2,
                'provinsi' => 'JAWA TIMUR',
                'nomor_urut' => 2,
                'nama_calon' => 'Adelia Salsabila',
                'photo' => 'https://infopemilu.kpu.go.id/berkas-dpd-dct/35/35_10_KONDANG%20KUSUMANING%20AYU.jpg',
                'details' => 'Detailed information about the candidate'
            ],
            [
                'id' => 3,
                'provinsi' => 'BALI',
                'nomor_urut' => 3,
                'nama_calon' => 'Ainul Mufidh',
                'photo' => 'https://infopemilu.kpu.go.id/berkas-dpd-dct/35/35_1_AA.%20AHMAD%20NAWARDI.jpg',
                'details' => 'Detailed information about the candidate'
            ],
            [
                'id' => 4,
                'provinsi' => 'KALIMANTAN TIMUR',
                'nomor_urut' => 4,
                'nama_calon' => 'Adelia Salsabila',
                'photo' => 'https://infopemilu.kpu.go.id/berkas-dpd-dct/35/35_10_KONDANG%20KUSUMANING%20AYU.jpg',
                'details' => 'Detailed information about the candidate'
            ],
        ];

        return view('candidates.kampanye', ['candidates' => $data]);
    }

    public function detail($id)
    {
        // Ambil data kandidat berdasarkan ID
        $candidate = Details::find($id);

        // Jika kandidat tidak ditemukan, bisa ditangani di sini sesuai kebutuhan

        return view('candidates.detail', compact('candidate'));
    }
}
