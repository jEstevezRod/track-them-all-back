<?php

namespace Database\Factories;

use App\Models\Transaction;
use Illuminate\Database\Eloquent\Factories\Factory;

class TransactionFactory extends Factory
{
    protected $model = Transaction::class;

    public function definition()
    {
        return [
            'amount' => $this->faker->numberBetween(0, 400),
            'issued_at' => $this->faker->dateTimeInInterval('-2 years', '+1 years'),
            'account_id' => 1,
            'category_id' => $this->faker->numberBetween(1, 13)
        ];
    }
}
