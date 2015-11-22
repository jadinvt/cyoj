<?php

// Composer: "fzaninotto/faker": "v1.4.0"
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class ChoicesTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1, 100) as $index) {
            $from = rand(1, 10);
            $to = rand(1, 10);
            $choices[] = ['content' => $faker->text, 'statementFrom_id' => $from, 'statementTo_id' => $to];
        }
        DB::table('choices')->insert($choices);
    }
}
