<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Guardian;
use App\Models\Student;
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
        // \App\Models\User::factory(10)->create();


        $user = User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
        ]);
        User::factory()->create([
            'name' => 'Nelly',
            'email' => 'nuelagyei992@gmail.com',
        ]);
        $role = Role::create(['name'=> 'Admin']);
        $user ->assignRole($role);
        Guardian::factory(10);
        Student::factory(10)
            ->has(Guardian::factory()->count(3))
            ->create();
       if (!User::where('email', 'admin@example.com')->exists()) {
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('<PASSWORD>'),
        ]);
    };

    }

}
