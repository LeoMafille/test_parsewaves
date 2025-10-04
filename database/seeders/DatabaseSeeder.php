<?php

namespace Database\Seeders;

use App\Models\ConstructionSite;
use App\Models\Material;
use App\Models\Measure;
use App\Models\User;
use App\Models\WallFragment;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Material::factory(10)->create();
        ConstructionSite::factory(10)->create();
        Measure::factory(50)->create();
        WallFragment::factory(100)->create();

        User::create([
            'name' => 'TestUser',
            'email' => 'test@test.test',
            'password' => bcrypt('test')
        ]);
    }
}
