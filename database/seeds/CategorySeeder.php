<?php

use Illuminate\Database\Seeder;
use App\Category; // įdeda modelį kaip klasę
use Faker\Factory as Faker; // "as" pervadina klasės pavadinimą


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker::create();

        foreach(range(1, 10) as $x) {
            $category = new Category();
            $category->title = $faker->colorName;
            $category->save();
        }

    }
}
