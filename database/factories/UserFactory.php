<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'uye_adsoyad' => "Yasin Kır",
            'uye_eposta' => "yazilim@jbm.com.tr",
            'email_verified_at' => now(),
            'password' => bcrypt("Jbm2022*-!"),
            'uye_aktivasyon_kod'=>'',
            'remember_token' => Str::random(10),

            //'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'
        ];

        /*
         *         'firma_ad' => "Jbm Interactive",
            'firma_adres' => "Pendik/İstanbul",
            'firma_eposta' => "yazilim@jbm.com.tr",
            'firma_gsm' => "216 444 12 23 ",
            'firma_tel' => "555 105 55 55",
            'firma_website' => "jbm.com.tr",
            'firma_logo' => "logo.png",
         *
         *
                  $table->string('firma_ad')->nullable();
            $table->string('firma_adres')->nullable();
            $table->string('firma_eposta')->nullable();
            $table->string('firma_gsm')->nullable();
            $table->string('firma_tel')->nullable();
            $table->string('firma_website')->nullable();
            $table->string('firma_logo')->nullable();
         *
         */
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
