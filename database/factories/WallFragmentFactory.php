<?php

namespace Database\Factories;

use App\Models\Material;
use App\Models\Measure;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\WallFragment>
 */
class WallFragmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'measure_id' => Measure::inRandomOrder()->first()?->id ?? Measure::factory()->create(),
            'material_id' => Material::inRandomOrder()->first()?->id ?? Material::factory()->create(),
            'width' => fake()->randomFloat(null, 0, 30)
        ];
    }
}
