<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Laporan>
 */
class LaporanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'jumlah_pengunjung_dewasa' => fake()->numberBetween(0, 100),
            'jumlah_pengunjung_anak' => fake()->numberBetween(0, 100),
            'tanggal' => fake()->date(),
        ];
    }
}
