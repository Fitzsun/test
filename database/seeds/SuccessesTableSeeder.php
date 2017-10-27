<?php

use Illuminate\Database\Seeder;

class SuccessesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Success::class,20)->create();
    }
}
