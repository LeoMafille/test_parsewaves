<?php

namespace Database\Seeders;

use App\Models\UserRole;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    private $roles = [
        'Administrateur Parsewaves',
        'Administrateur entreprise',
        'Utilisateur',
    ];
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->roles as $role_name) {
            UserRole::create([
                'name' => $role_name
            ]);
        }
    }
}
