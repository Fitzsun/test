<?php

use Illuminate\Database\Seeder;

class StandardTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Standard::class,20)->create();
    }
}
