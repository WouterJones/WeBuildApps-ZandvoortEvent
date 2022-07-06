<?php

namespace Database\Seeders;

use App\Models\Entry;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Voorziet de database van dummy data
        Entry::factory(10)->create();
    }
}
