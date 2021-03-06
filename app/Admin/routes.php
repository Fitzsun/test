<?php

use Illuminate\Routing\Router;

Admin::registerAuthRoutes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index');
    $router->resource('slides', SlidesController::class);
    $router->resource('links', LinksController::class);
    $router->resource('contact', ContactController::class);
    $router->resource('list', NewsController::class);
    $router->resource('product', ProductController::class);
    $router->resource('success', SuccessController::class);
    $router->resource('feedback', FeedbackController::class);

});

