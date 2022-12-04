<?php

namespace Database\Factories;

use App\Models\Turbine;
use App\ValueObjects\TurbineComponentType;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TurbineComponent>
 */
class TurbineComponentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $types = TurbineComponentType::values();

        return [
            'type' => $types[array_rand($types)],
            'turbine_id' => Turbine::factory()
        ];
    }
}
