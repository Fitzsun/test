<?php

use Illuminate\Database\Seeder;

class LinksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // php artisan db:seed --class=UserTableSeeder  填充数据  不加--class填充所有的表
        factory(App\Links::class,12)->create();
    }
}
