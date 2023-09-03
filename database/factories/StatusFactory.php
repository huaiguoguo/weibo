<?php

namespace Database\Factories;

use App\Models\Status;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Status>
 */
class StatusFactory extends Factory
{

    protected $model = Status::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $data_time = $this->faker->date. ''.$this->faker->time;
        return [
            'user_id'=>$this->faker->randomElement(['1', '2', '3']),
            'content'=>$this->faker->text(),
            'created_at'=>$data_time,
            'updated_at'=>$data_time
        ];
    }
}
