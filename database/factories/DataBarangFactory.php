<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DataBarang>
 */
class DataBarangFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_barang' => $this->faker->word,
            'stok' => $this->faker->numberBetween(10, 100),
            'jumlah_terjual' => $this->faker->numberBetween(1, 50),
            'tanggal_transaksi' => $this->faker->date(),
            'jenis_barang' => $this->faker->randomElement(['Konsumsi', 'Pembersih']),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
