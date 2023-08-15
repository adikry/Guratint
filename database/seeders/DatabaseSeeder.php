<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Berita;
use App\Models\Porto;
use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(3)->create();

        // $user = User::factory()->create([
        //     'name' => 'Admin',
        //     'email' => 'admin@example.com',

        // ]);

        // $role = Role::create(['name' => 'Admin']);
        // $user->assignRole($role);

        // Berita::factory(20)->create();
        Porto::factory(7)->create();
    }
}
