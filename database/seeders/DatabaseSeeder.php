<?php

namespace Database\Seeders;

use App\Models\Note;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $users = User::factory(10)->create();

        User::factory()->create([
            'name' => 'Pepito Trillo',
            'email' => 'pepe@admin.com',
        ]);

        $users->each(function ($user){
            Note::factory(5)->create([
                'user_id' => $user->id
            ]);
        });

    }
}
