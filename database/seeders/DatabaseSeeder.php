<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Tenant;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Tenant::factory()->create([
            'id' => 'empresa1',
        ]);

        Tenant::factory()->create([
            'id' => 'empresa2',
        ]);

        Tenant::factory()->create([
            'id' => 'empresa3',
        ]);

        Comment::factory(20)->create();

//        User::factory()->create([
//            'name' => 'Test User',
//            'email' => 'test@example.com',
//        ]);
    }
}
