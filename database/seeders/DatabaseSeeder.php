<?php

namespace Database\Seeders;

use App\Models\Mode;
use App\Models\Type;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // create filament user
        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@mail.com',
            'password' => bcrypt('secret'),
            ]);

        // create 10 users
        $users = User::factory()->count(10)->create();

        // create 5 types and 5 modes
        for($i = 0; $i < 5; $i++) {
            Type::create(['name' => ['en' => 'Type ' . $i, 'es' => 'Tipo ' . $i]]);
            Mode::create(['name' => ['en' => 'Mode ' . $i, 'es' => 'Modo ' . $i]]);
        }

        // assign types and modes to users
        foreach ($users as $user) {
            $user->types()->attach(Type::inRandomOrder()->take(rand(1, 5))->pluck('id')->toArray());
            $user->modes()->attach(Mode::inRandomOrder()->take(1)->pluck('id')->toArray());
        }
    }
}
