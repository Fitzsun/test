<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ProductNavsTableSeeder extends Seeder
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
                'label'=>'one',
                'parent_id'=>0,
                'name'=>'新风系统',
                'product_path'=>'/product/air',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'id'=>2,
                'label'=>null,
                'parent_id'=>1,
                'name'=>'家用新风系统',
                'product_path'=>'/product/air/home',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'id'=>3,
                'label'=>null,
                'parent_id'=>1,
                'name'=>'别墅新风系统',
                'product_path'=>'/product/air/villa',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'id'=>4,
                'label'=>null,
                'parent_id'=>1,
                'name'=>'商用新风系统',
                'product_path'=>'/product/air/commerce',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'id'=>5,
                'label'=>null,
                'parent_id'=>1,
                'name'=>'配件系列',
                'product_path'=>'/product/air/parts',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'id'=>6,
                'label'=>'two',
                'parent_id'=>0,
                'name'=>'除甲醛试剂',
                'product_path'=>'/product/reagent',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'id'=>7,
                'label'=>null,
                'parent_id'=>6,
                'name'=>'item one',
                'product_path'=>'/product/reagent/one',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'id'=>8,
                'label'=>null,
                'parent_id'=>6,
                'name'=>'item two',
                'product_path'=>'/product/reagent/two',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'id'=>9,
                'label'=>'three',
                'parent_id'=>0,
                'name'=>'除甲醛设备',
                'product_path'=>'/product/equipment',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'id'=>10,
                'label'=>null,
                'parent_id'=>9,
                'name'=>'item one',
                'product_path'=>'/product/equipment/one',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'id'=>11,
                'label'=>null,
                'parent_id'=>9,
                'name'=>'item two',
                'product_path'=>'/product/equipment/two',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ]
        ];
        DB::table('product_navs')->insert($nav);
    }
}
