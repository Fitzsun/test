<?php

use Illuminate\Database\Seeder;

class NewsesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\News::class,12)->create();
    }
}
