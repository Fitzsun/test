<?php

namespace App\Providers;

use App\Link;
use App\Contact;
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

        // 底部公用的友情链接部分
        $links = Link::take(12)->get();
        view()->share('links',$links);

        
        // $categories =Category::with('allChildCategories')->first(); 使用first未取到数据时会出现
        // 导航用
        $categories =Category::with('allChildrenCategories')->get();
        view()->share('categories',$categories);

        // footer联系我们用
        $contact = Contact::all()->first();
        view()->share('contact',$contact);

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
