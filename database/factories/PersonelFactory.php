<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Personel>
 */
class PersonelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'personel_adsoyad' => "Yasin Kır",
            'personel_eposta' => "yasin@jbm.com.tr",
            'personel_tel' => "555 105 55 55",
            'personel_unvan' => "Developer",
            'personel_firma_id' => 5,
        ];
    }
}
