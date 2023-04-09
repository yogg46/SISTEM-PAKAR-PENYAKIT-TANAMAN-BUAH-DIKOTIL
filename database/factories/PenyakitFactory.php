<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Penyakit>
 */
class PenyakitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'namaPenyakit' => $this->faker->name(),
            'keterangan' => $this->faker->sentence() ,
            'solusi'  => $this->faker->sentence(),
            'gambar'  => $this->faker->sentence(),
            'key' => $this->faker->bothify('?????-#####'),
        ];
    }
}
