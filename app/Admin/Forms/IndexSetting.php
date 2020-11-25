<?php

namespace App\Admin\Forms;

use Dcat\Admin\Widgets\Form;
use Illuminate\Support\Facades\DB;
use App\Models\Category;

class IndexSetting extends Form
{
    /**
     * Handle the form request.
     *
     * @param array $input
     *
     * @return mixed
     */
    public function handle(array $input)
    {
        try {
            if (DB::table('admin_settings')->where('slug', 'web_site_index_setting')->exists()) {
                DB::table('admin_settings')->where('slug', 'web_site_index_setting')->update(['value' => json_encode($input)]);
            } else {
                DB::table('admin_settings')->insert(['slug' => 'web_site_index_setting', 'value' => json_encode($input)]);
            }
        } catch (\Throwable $th) {
            return $this->response()->error('更新失败.');
        }

        return $this
				->response()
				->success('更新成功.')
				->refresh();
    }

    /**
     * Build a form here.
     */
    public function form()
    {
        $this->tab('幻灯片', function () {
            $this->multipleImage('slide_image','幻灯片')->required();
        });
        $this->tab('区块1', function () {
            $this->text('field1_btn1_name','按钮1名称')->required();
            $this->url('field1_btn1_url','按钮1链接')->required();
            $this->text('field1_btn2_name','按钮2名称')->required();
            $this->url('field1_btn2_url','按钮2链接')->required();
            $this->text('field1_btn3_name','按钮3名称')->required();
            $this->url('field1_btn3_url','按钮3链接')->required();
            $this->text('field1_btn4_name','按钮4名称')->required();
            $this->url('field1_btn4_url','按钮4链接')->required();
            $this->text('field1_btn5_name','按钮5名称')->required();
            $this->url('field1_btn5_url','按钮5链接')->required();
        });
        $this->tab('区块2', function () {
            $this->select('field2_category','绑定分类')->options(Category::where('parent_id','<>', 0)->get()->pluck('title', 'id'))->required();
        });
        $this->tab('区块3', function () {
            $this->select('field3_category','绑定分类')->options(Category::where('parent_id', 0)->get()->pluck('title', 'id'))->required();
        });
        $this->tab('区块4', function () {
            $this->select('field4_category','绑定分类')->options(Category::where('parent_id', 0)->get()->pluck('title', 'id'))->required();
        });
        $this->tab('区块5', function () {
            $this->select('field5_category','绑定分类')->options(Category::where('parent_id', 0)->get()->pluck('title', 'id'))->required();
        });
        $this->tab('区块6', function () {
            $this->image('field6_image','图片')->required();
            $this->select('field6_category','绑定分类')->options(Category::where('parent_id', 0)->get()->pluck('title', 'id'))->required();
        });
    }

    /**
     * The data of the form.
     *
     * @return array
     */
    public function default()
    {
        $set = DB::table('admin_settings')->where('slug', 'web_site_index_setting')->first();

        // dd(json_decode($set->value, true));
        return $set?json_decode($set->value, true):[];
    }
}
