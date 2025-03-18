<?php

declare(strict_types = 1);

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    public function run(): void
    {
        DB::transaction(function () {
            Customer::factory()
                ->hasContacts(rand(0, 3))
                ->create();
        });
    }
}
