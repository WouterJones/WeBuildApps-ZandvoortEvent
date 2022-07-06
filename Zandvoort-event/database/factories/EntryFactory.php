<?php

namespace Database\Factories;

use App\Http\Controllers\RdwController;
use Illuminate\Database\Eloquent\Factories\Factory;

// Creates dummy data for mySQL database

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Register>
 */
class EntryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $getNumPlate = new RdwController;

        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->companyEmail(),
            'numberplate' => json_encode($getNumPlate->fetchNumberPlate())
        ];
    }
}
