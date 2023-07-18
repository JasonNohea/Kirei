<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\CitiesSeeder; //call the seeder
use Database\Seeders\ProvinceSeeder;
use Database\Seeders\SkillsSeeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ProvinceSeeder::class); 
        $this->call(CitiesSeeder::class); //run CitiesSeeder when using 'php artisan db:seed'
        $this->call(SkillsSeeder::class); 
        // Add more seeders as needed
    }
}
