<?php

namespace Database\Factories\Models;

use App\Models\Models\OpportunityDetail;
use Illuminate\Database\Eloquent\Factories\Factory;

class OpportunityDetailFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = OpportunityDetail::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
          'benefits'=>$this->fake->text(600),
          'application_process'=>$this->faker->text(400),
          'further_queries'=>$this->faker->text(400),
          'eligibilites'=>$this->faker->text(600),
          'start_date'=>$this->faker->dateTime(),
          'end_date'=>$this->faker->dateTime(),
           'offical_link'=>$this->faker->url,




        ];
    }
}
