<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\categori;
use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use App\Models\kategori;
use App\Models\produk;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(5)->create();
        produk::factory(2)->create();
        kategori::factory(2)->create();
    }
}
