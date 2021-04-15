<?php

namespace Database\Factories;

use App\Models\Servers;
use Illuminate\Database\Eloquent\Factories\Factory;

class ServersFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Servers::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'city_id' => $this->faker->word,
        'Customer_Name' => $this->faker->word,
        'Server_Password' => $this->faker->word,
        'solution_location_id' => $this->faker->word,
        'solution_type_id' => $this->faker->word,
        'Hardware' => $this->faker->word,
        'Service_Contract' => $this->faker->word,
        'Comment' => $this->faker->word,
        'ISD_Allowed' => $this->faker->word,
        'Failover_IP' => $this->faker->word,
        'Winbox' => $this->faker->word,
        'Secondary_IP' => $this->faker->word,
        'Queue_Stats' => $this->faker->word,
        'Customer_Report' => $this->faker->word,
        'Q_Panel' => $this->faker->word,
        'SSH_PORT' => $this->faker->word,
        'HTTP_PORT' => $this->faker->word,
        'Webmin_PORT' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s'),
        'deleted_at' => $this->faker->date('Y-m-d H:i:s'),
        'IP' => $this->faker->word,
        'Solution_Distro' => $this->faker->word,
        'department_id' => $this->faker->word
        ];
    }
}
