<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class FirmaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id'=>'1',
            'firma_ad' => "Jbm Interactive",
            'firma_adres' => "Pendik/İstanbul",
            'firma_eposta' => "yazilim@jbm.com.tr",
            'firma_gsm' => "216 444 12 23 ",
            'firma_tel' => "555 105 55 55",
            'firma_website' => "jbm.com.tr",
            'firma_logo' => "logo.png",

        ];
    }
}
