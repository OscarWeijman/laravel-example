<?php

namespace OscarWeijman\LaravelExample\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use OscarWeijman\LaravelExample\Models\MyModel;

class MyModelFactory extends Factory
{
    protected $model = MyModel::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
        ];
    }
}
