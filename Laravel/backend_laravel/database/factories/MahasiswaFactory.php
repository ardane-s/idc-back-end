<?php

namespace Database\Factories;

use App\Models\Mahasiswa;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class MahasiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Mahasiswa::class;
    public function definition(): array
    {
        return [
            'nama_mahasiswa' => $this->faker->name(),
            'nim' => $this->faker->numerify('############'), // Contoh format NIM, sesuaikan dengan kebutuhan
            'alamat' => $this->faker->sentence(), // Contoh format kelas, sesuaikan dengan kebutuhan
            'status_mahasiswa' => $this->faker->boolean(1), // Contoh format kelas, sesuaikan dengan kebutuhan
        ];
    }
}
