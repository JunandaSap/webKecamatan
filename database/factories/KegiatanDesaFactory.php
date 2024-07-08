<?php

namespace Database\Factories;

use App\Models\KegiatanDesa;
use Illuminate\Database\Eloquent\Factories\Factory;

class KegiatanDesaFactory extends Factory
{
    protected $model = KegiatanDesa::class;

    public function definition()
    {
        return [
            'judul' => $this->faker->sentence,
            'deskripsi' => $this->faker->paragraph,
            'tanggal' => $this->faker->date,
            'gambar' => null,
        ];
    }
}
