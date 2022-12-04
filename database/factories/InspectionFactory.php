<?php

namespace Database\Factories;

use App\Models\Pilot;
use App\Models\Turbine;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Inspection>
 */
class InspectionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'date_time' => Carbon::today()->subDays(rand(0, 365)),
            'turbine_id' => Turbine::factory(),
            'pilot_id' => Pilot::factory()
        ];
    }
}
