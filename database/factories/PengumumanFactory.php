<?php

namespace Database\Factories;

use App\Models\Pengumuman;
use Illuminate\Database\Eloquent\Factories\Factory;

class PengumumanFactory extends Factory
{
    protected $model = Pengumuman::class;

    public function definition()
    {
        return [
            'judul' => $this->faker->sentence,
            'isi' => $this->faker->paragraph,
        ];
    }
}

