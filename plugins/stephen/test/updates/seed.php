<?php namespace Stephen\Test\Updates;

use Seeder;
use Stephen\Test\Models\Person;
use Faker;

class SeedUsersTable extends Seeder
{
    
    public function run()
    {
        $faker = Faker\Factory::create();

        foreach (range(0, 50) as $number) {

            $person = Person::create([
                'first_name'   => $faker->firstNameFemale,
                'last_name'    => $faker->lastName,
                'occupation'   => $faker->jobTitle,
                'age'          => rand ( 18 , 69 ),
                ]);

        }
    }
}