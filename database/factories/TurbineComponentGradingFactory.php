<?php

namespace Database\Factories;

use App\Models\Inspection;
use Illuminate\Support\Carbon;
use App\Models\TurbineComponent;
use App\ValueObjects\TurbineComponentGrade;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TurbineComponentGrading>
 */
class TurbineComponentGradingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $grades = TurbineComponentGrade::values();

        return [
            'date_time' => Carbon::today()->subDays(rand(0, 365)),
            'grade' => $grades[array_rand($grades)],
            'turbine_component_id' => TurbineComponent::factory(),
            'inspection_id' => Inspection::factory()
        ];
    }
}
