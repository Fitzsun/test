<?php

namespace App\Providers;

use App\Links;
use App\Category;
use Encore\Admin\Config\Config;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Config::load();

        $links = Links::all();
        view()->share('links',$links);

        
        // $categories =Category::with('allChildCategories')->first(); 使用first未取到数据时会出现
        $categories =Category::with('allChildrenCategories')->get();
        view()->share('categories',$categories);
        // 出现长度错误时使用
        Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
