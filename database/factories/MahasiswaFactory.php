<?php

namespace Database\Factories;

use App\Models\Mahasiswa;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mahasiswa>
 */
class MahasiswaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Mahasiswa::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = \Faker\Factory::create('id_ID');
        return [
            'name'  => $faker->name(),
            'nobp'  => $faker->bothify('#########'),
            'jurusan' => $faker->randomElement(['Teknologi Informasi', 'Elektro', 'Mesin', 'Akuntansi']),
            'prodi' => $faker->randomElement(['TRPL', 'MI', 'TEKOM']),
            'tgllahir' => $faker->date('Y-m-d'),
            'email' => $faker->unique()->safeEmail(),
            'nohp'  => $faker->phoneNumber()
        ];
    }
}
