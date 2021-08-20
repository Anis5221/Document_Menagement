<?php

namespace Database\Factories;

use App\Models\Complain;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ComplainFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Complain::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $rendomId = "PR-UDPS-".STR::random(6);
        return [
            'user_id' => $this->faker->id,
            'request_id' => $this->faker->rendomId,
            'head_line' => $this->faker->title,
            'details' => $this->faker->text,
            'branch_name' => $this->faker->title,
            'branch_code' => $this->faker->STR::random(6),
            'occur_time' => $this->faker->now(),
            // 'file' => $this->faker->title(),
            'request_type' => $this->faker->STR::random('pending', 'inProccess', 'resolved'),
            'priority' => $this->faker->STR::random('argent', 'deleay', 'notArgent'),
            'problem_url' => Str::slug($this->faker->title),
            'contact_persone'=> $this->faker->STR::random(6),
            'phone' => $this->faker->STR::random(6),
            // 'status' => boolean($this->faker->),
        ];
    }
}
