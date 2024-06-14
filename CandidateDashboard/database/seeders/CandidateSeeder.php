<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Candidate;

class CandidateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Candidate::create(['type' => 'dpr', 'count' => 580]);
        Candidate::create(['type' => 'dprd_provinsi', 'count' => 2367]);
        Candidate::create(['type' => 'dprd_kabupaten', 'count' => 17195]);
    }
}