<?php

// Composer: "fzaninotto/faker": "v1.4.0"
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class StatementsTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1, 10) as $index) {
            $statements[] = ['content' => $faker->text];
        }
        DB::table('Statements')->insert($statements);
    }
}
