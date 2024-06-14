<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function showCampaign($id)
    {
        // Contoh data statis
        $candidate = (object)[
            'id' => $id,
            'title' => 'DPD',
            'name' => 'Adelia Salsabila',
            'photo' => 'https://infopemilu.kpu.go.id/berkas-dpd-dct/35/35_10_KONDANG%20KUSUMANING%20AYU.jpg', 
            'visi_misi' => 'Visi "Menjadi organisasi yang unggul dan inovatif dalam memberikan kontribusi positif bagi masyarakat dan lingkungan melalui dedikasi, integritas, dan kolaborasi." 
            Misi Memberikan Pelayanan Berkualitas: Mewujudkan pelayanan yang profesional, responsif, dan berorientasi pada kebutuhan pelanggan dengan standar kualitas tinggi. 
            Inovasi Berkelanjutan: Mendorong budaya inovasi dan kreativitas untuk mengembangkan solusi baru yang efektif dan efisien. 
            Pengembangan Sumber Daya Manusia: Membina dan mengembangkan talenta dengan pelatihan dan pendidikan berkelanjutan untuk mencapai potensi maksimal.'
        ];

        return view('candidates.detailkampanye', compact('candidate'));
    }
}
