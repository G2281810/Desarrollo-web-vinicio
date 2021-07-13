<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
    $faker = Faker::create();
        $gender = $faker->randomElement(['male','female']);
        foreach (range(1,100) as $index){
            DB::table('Alumnos')->insert([
                'matricula' => $faker->numberBetween($min = 2110000, $max = 2210000),
                //nombre => $faker->name($gender),
                'nombre' => $faker->firstName($gender = 'male'|'female'),
                'app' => $faker->lastName,
                'gen' => $faker->randomElement($array = array('Femenino', 'Masculino')),
                'fn' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'email' =>$faker->email,
                'pass'=> $faker->bothify('utvt##??'), 
                'created_at'=> $faker->dateTime($max='now', $timezone=null),                   
                'updated_at'=> $faker->dateTime($max='now', $timezone=null),                   
            ]);
        }
    }
}
