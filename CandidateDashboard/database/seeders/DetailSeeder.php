<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('details')->insert([
            'name' => 'Adelia Salsabila',
            'visiMisi' => 'Menjadi organisasi yang unggul dan inovatif dalam memberikan kontribusi positif bagi masyarakat dan lingkungan melalui dedikasi, integritas, dan kolaborasi. Misi Memberikan Pelayanan Berkualitas: Mewujudkan pelayanan yang profesional, responsif, dan berorientasi pada kebutuhan pelanggan dengan standar kualitas tinggi. Inovasi Berkelanjutan: Mendorong budaya inovasi dan kreativitas untuk mengembangkan solusi baru yang efektif dan efisien. Pengembangan Sumber Daya Manusia: Membina dan mengembangkan talenta dengan pelatihan dan pendidikan berkelanjutan untuk mencapai potensi maksimal.',
            'photo' => 'https://infopemilu.kpu.go.id/berkas-dpd-dct/35/35_10_KONDANG%20KUSUMANING%20AYU.jpg',
            'title' => 'DPD'
        ]);
    }
}