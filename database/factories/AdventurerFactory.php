<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Adventurer>
 */
class AdventurerFactory extends Factory
{
     /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = \App\Adventurer::class;

    public function definition(): array
    {
        return [
            'charName' => $this->faker->word(),
            // 'role'   => $this->faker->word(),
            // 'race'        => $this->faker->word(),
            // 'rank'    => 'A',
            'portrait'        => 'https://icons.veryicon.com/png/o/miscellaneous/rookie-official-icon-gallery/225-default-avatar.png',
            'sprites'  => 'https://icons.veryicon.com/png/o/miscellaneous/rookie-official-icon-gallery/225-default-avatar.png',
            'description'       => $this->faker->word(),
        ];
    }
}
