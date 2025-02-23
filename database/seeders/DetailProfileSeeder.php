<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Tambahkan ini

class DetailProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Insert data ke tabel detail_profile_tabel
        DB::table('detail_profile_tabel')->insert([
            'address' => 'Nganjuk',
            'nomor_tlp' => '0857xxxxxx',
            'ttl' => '2004-04-28',
            'foto' => 'profile.png'
        ]);
    }
}
