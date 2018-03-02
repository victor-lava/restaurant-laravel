<?php

use Illuminate\Database\Seeder;
use App\Manufacturer;
use Faker\Factory as Faker;

class ManufacturerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('lt_LT');

        foreach(range(1,10) as $x) {
            $manufacturer = new Manufacturer();
            $manufacturer->title = $faker->company;
            $manufacturer->website = $faker->url;
            $manufacturer->country = $faker->country;
            $manufacturer->save();
        }


    }
}
