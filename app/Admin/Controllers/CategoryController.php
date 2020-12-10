<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Category;
use App\Models\Category as CategoryModel;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Layout\Row;
use Dcat\Admin\Layout\Content;
use Dcat\Admin\Tree;
use Dcat\Admin\Http\Controllers\AdminController;
use Symfony\Component\HttpFoundation\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends AdminController
{
    ## 模型树
    public function index(Content $content)
    {
        return $content->header('文章分类')
            ->body(function (Row $row) {
                $tree = new Tree(new Category);
                $tree->branch(function ($branch) {
                    $return = $branch['title'];
                    switch ($branch['type']) {
                        case '0':
                            $type = "";
                            break;
                        case '1':
                            $type = "唯一";
                            break;
                        case '2':
                            $type = "图文";
                            break;
                        case '3':
                            $type = "2*4图片";
                            break;
                        case '4':
                            $type = "4*4图片";
                            break;
                    }
                    if ($type) {
                        $return = $return . ' - ' . $type;
                    }
                    return $return;
                });
                $row->column(12, $tree);
            });
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Category(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('title');
            $grid->column('sim_name');
            $grid->column('parent_id');
            $grid->column('order');
            $grid->column('type');
            $grid->column('image');
            $grid->column('instroduction');
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
        return Show::make($id, new Category(), function (Show $show) {
            $show->field('id');
            $show->field('title');
            $show->field('sim_name');
            $show->field('parent_id');
            $show->field('order');
            $show->field('type');
            $show->field('image');
            $show->field('instroduction');
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
        return Form::make(new Category(), function (Form $form) {
            $form->display('id');
            $form->text('title')->required();
            $form->text('sim_name');
            $form->select('parent_id')->options(CategoryModel::where('parent_id', 0)->pluck('title', 'id'));
            $form->text('order')->default(0)->required();
            $form->radio('type')->options(['0' => '主分类', '2'=> '图文', '3'=> '2*4图片', '4'=> '4*4图片', '1' => '唯一'])->default('0')->required();
            $form->image('image');
            $form->textarea('instroduction');

            $form->display('created_at');
            $form->display('updated_at');

            $form->saving(function (Form $form) {
                if (!$form->parent_id) {
                    $form->parent_id = 0;
                }

                if ($form->parent_id == 0 || $form->type == 0) {
                    $form->parent_id = 0;
                    $form->type = 0;
                }
            });
        });
    }

    public function relCategory(Request $request)
    {
        $provinceId = $request->get('q');

        return CategoryModel::where('parent_id', $provinceId)->get(['id', DB::raw('title as text')]);
    }
}
