<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ProductNavTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nav = [
            [
                'id'=>1,
                'parent_id'=>0,
                'name'=>'新风系统',
                'path'=>'/product/air',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'id'=>2,
                'parent_id'=>1,
                'name'=>'家用新风系统',
                'path'=>'/product/air/home',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'id'=>3,
                'parent_id'=>1,
                'name'=>'别墅新风系统',
                'path'=>'/product/air/villa',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'id'=>4,
                'parent_id'=>1,
                'name'=>'商用新风系统',
                'path'=>'/product/air/commerce',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'id'=>5,
                'parent_id'=>1,
                'name'=>'配件系列',
                'path'=>'/product/air/parts',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'id'=>6,
                'parent_id'=>0,
                'name'=>'除甲醛试剂',
                'path'=>'/product/reagent',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'id'=>7,
                'parent_id'=>6,
                'name'=>'item one',
                'path'=>'/product/reagent/one',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'id'=>8,
                'parent_id'=>6,
                'name'=>'item two',
                'path'=>'/product/reagent/two',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'id'=>9,
                'parent_id'=>0,
                'name'=>'除甲醛设备',
                'path'=>'/product/equipment',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'id'=>10,
                'parent_id'=>9,
                'name'=>'item one',
                'path'=>'/product/equipment/one',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'id'=>11,
                'parent_id'=>9,
                'name'=>'item two',
                'path'=>'/product/equipment/two',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ]
        ];
        DB::table('product_navs')->insert($nav);
    }
}
