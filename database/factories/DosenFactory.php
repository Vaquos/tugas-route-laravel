<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Dosen>
 */
class DosenFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = \Faker\Factory::create('id_ID');
        $keahlian = ['Pemrograman Web', 'Struktur Data', 'Basis Data'];
        return [
            'name' => $faker->name(),
            'nik'   => $faker->nik(),
            'email' => $faker->email(),
            'nohp'  => $faker->phoneNumber(),
            'alamat'    => $faker->address(),
            'keahlian'  => $keahlian[$faker->numberBetween(0, 2)]
        ];
    }
}
