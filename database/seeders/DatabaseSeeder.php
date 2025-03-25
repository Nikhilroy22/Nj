<?php

namespace Database\Seeders;
use Database\Seeders\UserSeeder;
use App\Models\postmodel;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         //categorys::factory(10)->create();

       postmodel::factory(20)->create();
  //  $this->call([uploads::class,]);
    }
}
