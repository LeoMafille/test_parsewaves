<?php

namespace Database\Factories;

use App\Models\ConstructionSite;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Measure>
 */
class MeasureFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'site_id' => ConstructionSite::inRandomOrder()->first()?->id ?? ConstructionSite::factory(),
        ];
    }
}
