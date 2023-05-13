<?php

namespace Database\Factories;

use App\Models\AverageBulan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AverageBulan>
 */
class AverageBulanFactory extends Factory
{

    public $model = AverageBulan::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public $bulan = 1;
    public function definition(): array
    {
        return [
            'tanggal' => '2023-'.$this->bulan++,
            'avgBulan' => $this->faker->randomFloat(2, 0, 100),
        ];
    }
}
