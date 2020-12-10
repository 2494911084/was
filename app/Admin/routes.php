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

    $router->get('/', 'SettingController@setting');

    ## 文章分类
    $router->resource('category', 'CategoryController');
    ## 文章
    $router->resource('art', 'ArtController');
    ## 站点设置
    $router->get('setting', 'SettingController@setting');
    ## 前台菜单
    $router->resource('site-menu', 'SiteMenuController');
    ## 首页设置
    $router->get('index-setting', 'SettingController@index_setting');



    ## 二级分类联动查询
    $router->get('rel_category','CategoryController@relCategory');
});
