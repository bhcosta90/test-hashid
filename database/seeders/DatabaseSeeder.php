<?php

declare(strict_types = 1);

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        DB::transaction(function () {
            if (User::whereEmail($email = 'test@example.com')->doesntExist()) {
                User::factory()->create([
                    'name'  => 'Test User',
                    'email' => $email,
                ]);
            }

            User::factory(10)->create();
        });
    }
}
