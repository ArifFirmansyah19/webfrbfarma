<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\kategori;

class kategoriTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        kategori::create(['nama'=>'Obat Genetik', 'slug'=>'Obat-Genetik']);
        kategori::create(['nama'=>'Ibu dan Anak', 'slug'=>'Ibu-dan-Anak']);
        kategori::create(['nama'=>'Suplemen', 'slug'=>'Suplemen']);
        kategori::create(['nama'=>'Perawatan', 'slug'=>'Perawatan']);
        kategori::create(['nama'=>'Alat Kesehatan', 'slug'=>'Alat-Kesehatan']);
    }
}
