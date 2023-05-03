<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\produk>
 */
class ProdukFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'namaproduk' => fake()->name(),
            'harga' => fake()->randomDigit,
            'img' => fake()->name(),
            'deskripsi' => fake()->paragraph(mt_rand(1,2)),
            // 'id_kategori' => 1
        ];
    }
}
