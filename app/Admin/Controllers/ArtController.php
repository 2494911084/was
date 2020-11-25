<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Art;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;
use App\Models\Category;
use Illuminate\Http\Request;
use DB;

class ArtController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Art('category'), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('title');
            $grid->column('category.title','分类');
            $grid->column('view_count');
            $grid->column('cre_time');
            $grid->column('xxly');
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
        return Show::make($id, new Art(), function (Show $show) {
            $show->field('id');
            $show->field('title');
            $show->field('category_id');
            $show->field('view_count');
            $show->field('cre_time');
            $show->field('xxly');
            $show->field('image');
            $show->field('content');
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
        return Form::make(new Art(), function (Form $form) {
            $form->display('id');
            $form->text('title')->required();
            $form->select('category_id')->options(Category::all()->pluck('title', 'id'))->required();

            $form->number('view_count')->default(0);
            $form->date('cre_time');
            $form->text('xxly');
            $form->image('image');
            $form->editor('content')->required();

            $form->display('created_at');
            $form->display('updated_at');

            // 删除用户提交的数据
            $form->deleteInput('category_p_id');

        });
    }
}
