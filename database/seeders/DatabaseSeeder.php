<?php

namespace Database\Seeders;

use App\Models\Inspection;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $inspections = Inspection::factory()->count(5)->create();
    }
}
