<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\SiteMenu;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;
use App\Models\Category;

class SiteMenuController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new SiteMenu('category'), function (Grid $grid) {
            $grid->model()->orderBy('order');
            $grid->column('id')->sortable();
            $grid->column('category.title', '绑定分类');
            $grid->column('order');
            $grid->column('created_at');
            $grid->column('updated_at')->sortable();

            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('id');

            });
        });
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     *
     * @return Show
     */
    protected function detail($id)
    {
        return Show::make($id, new SiteMenu(), function (Show $show) {
            $show->field('id');
            $show->field('category_id');
            $show->field('created_at');
            $show->field('updated_at');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Form::make(new SiteMenu(), function (Form $form) {
            $form->display('id');
            $form->select('category_id')->options(Category::where('parent_id',0)->get()->pluck('title', 'id'))->required();
            $form->number('order')->default(0)->required();
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
