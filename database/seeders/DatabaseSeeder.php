<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $faker = Faker::create();

        DB::table('users')->insert([
            'name' => 'Bebras',
            'email' => 'bebras@gmail.com',
            'password' => Hash::make('123456'),
        ]);

        $zodiacs = [
            'Aries',
            'Taurus',
            'Gemini',
            'Cancer',
            'Leo',
            'Virgo',
            'Libra',
            'Scorpio',
            'Sagittarius',
            'Capricorn',
            'Aquarius',
            'Pisces'
        ];

        foreach ($zodiacs as $zodiac) {



            DB::table('zodiacs')->insert([
                'name' => $zodiac


            ]);
        }
        $num = 0;
        foreach (range(1, 4380) as $_) {

            $num++;
            switch ($num) {
                case $num < 366:
                    DB::table('ratings')->insert([
                        'zodiac_id' => 1,
                        'rating' => rand(1, 10),
                        'day' => $num

                    ]);
                    break;
                case $num < 731:
                    DB::table('ratings')->insert([
                        'zodiac_id' => 2,
                        'rating' => rand(1, 10),
                        'day' => $num - 365

                    ]);
                    break;
                case $num < 1096:
                    DB::table('ratings')->insert([
                        'zodiac_id' => 3,
                        'rating' => rand(1, 10),
                        'day' => $num - 730

                    ]);
                    break;
                case $num < 1461:
                    DB::table('ratings')->insert([
                        'zodiac_id' => 4,
                        'rating' => rand(1, 10),
                        'day' => $num - 1090

                    ]);
                    break;
                case $num < 1826:
                    DB::table('ratings')->insert([
                        'zodiac_id' => 5,
                        'rating' => rand(1, 10),
                        'day' => $num - 1460

                    ]);
                    break;
                case $num < 2191:
                    DB::table('ratings')->insert([
                        'zodiac_id' => 6,
                        'rating' => rand(1, 10),
                        'day' => $num - 1825

                    ]);
                    break;
                case $num < 2556:
                    DB::table('ratings')->insert([
                        'zodiac_id' => 7,
                        'rating' => rand(1, 10),
                        'day' => $num - 2190

                    ]);
                    break;
                case $num < 2921:
                    DB::table('ratings')->insert([
                        'zodiac_id' => 8,
                        'rating' => rand(1, 10),
                        'day' => $num - 2555

                    ]);
                    break;
                case $num < 3286:
                    DB::table('ratings')->insert([
                        'zodiac_id' => 9,
                        'rating' => rand(1, 10),
                        'day' => $num - 2920

                    ]);
                    break;
                case $num < 3651:
                    DB::table('ratings')->insert([
                        'zodiac_id' => 10,
                        'rating' => rand(1, 10),
                        'day' => $num - 3285

                    ]);
                    break;
                case $num < 4016:
                    DB::table('ratings')->insert([
                        'zodiac_id' => 11,
                        'rating' => rand(1, 10),
                        'day' => $num - 3650

                    ]);
                    break;
                case $num < 4381:
                    DB::table('ratings')->insert([
                        'zodiac_id' => 12,
                        'rating' => rand(1, 10),
                        'day' => $num - 4015

                    ]);
                    break;
            }
        }
    }
}
