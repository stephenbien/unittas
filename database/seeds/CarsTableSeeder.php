<?php

use App\car;
use Illuminate\Database\Seeder;

class CarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\car::class, 50)->create()->each(function ($car) {
            //$user->posts()->save(factory(App\Post::class)->make());
        });
    }
}
