<?php

use Dcat\Admin\Admin;
use Dcat\Admin\Grid;
use Dcat\Admin\Form;
use Dcat\Admin\Grid\Filter;
use Dcat\Admin\Show;
use Dcat\Admin\Layout\Menu;

/**
 * Dcat-admin - admin builder based on Laravel.
 * @author jqh <https://github.com/jqhph>
 *
 * Bootstraper for Admin.
 *
 * Here you can remove builtin form field:
 *
 * extend custom field:
 * Dcat\Admin\Form::extend('php', PHPEditor::class);
 * Dcat\Admin\Grid\Column::extend('php', PHPEditor::class);
 * Dcat\Admin\Grid\Filter::extend('php', PHPEditor::class);
 *
 * Or require js and css assets:
 * Admin::css('/packages/prettydocs/css/styles.css');
 * Admin::js('/packages/prettydocs/js/main.js');
 *
 */

Admin::menu(function (Menu $menu) {
    $menu->add([
        [
            'id'            => '1', // 此id只要保证当前的数组中是唯一的即可
            'title'         => '站点设置',
            'icon'          => 'fa-file-text-o',
            'uri'           => '',
            'parent_id'     => 0,
            'permission_id' => '', // 与权限绑定
            'roles'         => '', // 与角色绑定
        ],
        [
            'id'            => '2', // 此id只要保证当前的数组中是唯一的即可
            'title'         => '菜单设置',
            'icon'          => 'fa-file-text-o',
            'uri'           => '',
            'parent_id'     => 0,
            'permission_id' => '', // 与权限绑定
            'roles'         => '', // 与角色绑定
        ],
        [
            'id'            => '3', // 此id只要保证当前的数组中是唯一的即可
            'title'         => '首页设置',
            'icon'          => 'fa-file-text-o',
            'uri'           => '',
            'parent_id'     => 0,
            'permission_id' => '', // 与权限绑定
            'roles'         => '', // 与角色绑定
        ],
        [
            'id'            => '4', // 此id只要保证当前的数组中是唯一的即可
            'title'         => '分类',
            'icon'          => 'fa-file-text-o',
            'uri'           => 'category',
            'parent_id'     => 0,
            'permission_id' => '', // 与权限绑定
            'roles'         => '', // 与角色绑定
        ],
        [
            'id'            => '5', // 此id只要保证当前的数组中是唯一的即可
            'title'         => '文章',
            'icon'          => 'fa-file-text-o',
            'uri'           => '',
            'parent_id'     => 0,
            'permission_id' => '', // 与权限绑定
            'roles'         => '', // 与角色绑定
        ],
    ]);
});
