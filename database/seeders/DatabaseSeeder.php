<?php

namespace Database\Seeders;

use App\Models\Company;
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
        $this->call(RolesSeeder::class);

        Company::factory(20)->create();
        Material::factory(100)->create();
        ConstructionSite::factory(10)->create();
        Measure::factory(50)->create();
        WallFragment::factory(100)->create();

        User::create([
            'name' => 'Test Administrateur ParseWaves',
            'email' => 'adminp@test.test',
            'password' => bcrypt('test'),
            'role_id' => 1
        ]);
        User::create([
            'name' => 'Test Administrateur Entreprise',
            'email' => 'admine@test.test',
            'password' => bcrypt('test'),
            'role_id' => 2
        ]);
        User::create([
            'name' => 'Test Utilisateur',
            'email' => 'user@test.test',
            'password' => bcrypt('test'),
            'role_id' => 3
        ]);
    }
}
