<?php

declare(strict_types = 1);

namespace Database\Factories;

use App\Models\{Contact, Customer};
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class ContactFactory extends Factory
{
    protected $model = Contact::class;

    public function definition(): array
    {
        return [
            'name'       => $this->faker->name(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

            'customer_id' => Customer::factory(),
        ];
    }
}
