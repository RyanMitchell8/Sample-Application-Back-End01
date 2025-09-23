<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class SupplierFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = $this->faker->company();
        $email = $this->faker->userName . '@' . \Illuminate\Support\Str::slug($name) . '.com';

        return [
            'name' => $name,
            'address' => $this->faker->address,
            'phone' => $this->faker->phoneNumber,
            'email' => $email,
        ];
    }
}
