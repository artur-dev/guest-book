<?php

use Illuminate\Database\Seeder;

class EntriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Entries::truncate();

        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 50; $i++) {
            App\Entries::create([
                'guest_name' => $faker->name,
                'guest_email' => $faker->email,
                'comment' => $faker->sentence
            ]);
        }
    }
}
