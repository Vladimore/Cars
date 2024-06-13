<?php

namespace Database\Factories;

use App\Models\Mark;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    private array $images = [
        '1'=>'https://avtosreda.ru/upload/iblock/ad5/lada-_2_.jpg',
        '2'=>'https://www.unitauto.ru/media/k2/items/cache/5b98a51d844cf083418c7193dcee292b_XL.jpg',
        '3'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTO_n0NfUbLg1JsrNkzwqeLjtJy0-6X_V7BsA&s'
    ];

    private array $models = [
        '1' => [
            'Granta', 'Vesta', 'Xray'
        ],
        '2' => [
            'X3', 'X5', 'X7'
        ],
        '3' => [
            'Focus', 'Fiesta', 'Mustang'
        ]
    ];
    public function definition(): array
    {
        $randomID = Mark::get()->random()->id;
        return [
            'mark_id' => $randomID,
            'model' => $this->models[$randomID][rand(0, count($this->models) - 1)],
            'description' => $this->faker->text,
            'year' => random_int(2000, 2024),
            'price' => random_int(100000, 1000000),
            'image' => $this->images[$randomID]
        ];
    }
}
