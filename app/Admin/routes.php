<?php

use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
use Dcat\Admin\Admin;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index');

    ## 文章分类
    $router->resource('category', 'CategoryController');
    ## 文章
    $router->resource('art', 'ArtController');
    ## 站点设置
    $router->get('setting', 'SettingController@setting');
});
