<?php

use Illuminate\Database\Seeder;

class TaskTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        $limit = 30;

        for ($i = 0; $i < $limit; $i++) {
            DB::table('tasks')->insert([ 
                'task' => $faker->unique()->task,
                'done' => $faker->done,
                'description' => $faker->description,
            ]);
        }
    }
}
