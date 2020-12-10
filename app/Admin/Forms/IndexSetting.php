<?php

namespace App\Admin\Forms;

use Dcat\Admin\Widgets\Form;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use Illuminate\Support\Facades\Cache;

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
            $input = json_encode($input);
            if (DB::table('admin_settings')->where('slug', 'web_site_index_setting')->exists()) {
                DB::table('admin_settings')->where('slug', 'web_site_index_setting')->update(['value' => $input]);
            } else {
                DB::table('admin_settings')->insert(['slug' => 'web_site_index_setting', 'value' => $input]);
            }
        } catch (\Throwable $th) {
            return $this->response()->error('更新失败.');
        }
        $input = DB::table('admin_settings')->where('slug', 'web_site_index_setting')->first();
        $data = json_decode($input->value, true);

        ## 展示区1内容查询出来再放入缓存
        $data['field2_category'] = Category::with('tj_arts')->find($data['field2_category']);
        ## 展示区2内容查询出来及下级分类并放入缓存
        $data['field3_category'] = Category::with('arts')->find($data['field3_category']);
        $data['field3_category']['childCate'] = Category::where('parent_id', $data['field3_category']['id'])->orderBy('order')->get();
        ## 展示区3内容查询出来及下级分类及下级分类的文章放入缓存
        $data['field4_category'] = Category::find($data['field4_category']);
        $data['field4_category']['childCate'] = Category::where('parent_id', $data['field4_category']['id'])->orderBy('order')->with('tj_arts')->get();
        ## 展示区4内容查询出来及下级分类及下级分类的文章放入缓存
        $data['field5_category'] = Category::find($data['field5_category']);
        $data['field5_category']['childCate'] = Category::where('parent_id', $data['field5_category']['id'])->orderBy('order')->with('tj_arts')->get();
        ## 展示区5查询下级分类
        $data['field6_category'] = Category::with('tj_arts')->find($data['field6_category']);
        Cache::forever('was_web_site_index_setting', json_encode($data));
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
        $this->tab('快捷按钮', function () {
            $this->text('field1_btn1_name','按钮名称')->required();
            $this->select('field1_btn1_sub','上级分类')->options(Category::where('parent_id', 0)->get()->pluck('title', 'id'))->load('field1_btn1_id', 'rel_category');
            $this->select('field1_btn1_id','按钮1')->required();
            $this->text('field1_btn2_name','按钮名称')->required();
            $this->select('field1_btn2_sub','上级分类')->options(Category::where('parent_id', 0)->get()->pluck('title', 'id'))->load('field1_btn2_id', 'rel_category');
            $this->select('field1_btn2_id','按钮2')->required();
            $this->text('field1_btn3_name','按钮名称')->required();
            $this->select('field1_btn3_sub','上级分类')->options(Category::where('parent_id', 0)->get()->pluck('title', 'id'))->load('field1_btn3_id', 'rel_category');
            $this->select('field1_btn3_id','按钮3')->required();
            $this->text('field1_btn4_name','按钮名称')->required();
            $this->select('field1_btn4_sub','上级分类')->options(Category::where('parent_id', 0)->get()->pluck('title', 'id'))->load('field1_btn4_id', 'rel_category');
            $this->select('field1_btn4_id','按钮4')->required();
            $this->text('field1_btn5_name','按钮名称')->required();
            $this->select('field1_btn5_sub','上级分类')->options(Category::where('parent_id', 0)->get()->pluck('title', 'id'))->load('field1_btn5_id', 'rel_category');
            $this->select('field1_btn5_id','按钮5')->required();
        });
        $this->tab('推荐区1', function () {
            $this->select('field2_category_sub','上级分类')->options(Category::where('parent_id', 0)->get()->pluck('title', 'id'))->load('field2_category', 'rel_category');
            $this->select('field2_category','绑定分类')->required();
        });
        $this->tab('推荐区2', function () {
            $this->select('field3_category','绑定分类')->options(Category::where('parent_id', 0)->get()->pluck('title', 'id'))->required();
        });
        $this->tab('推荐区3', function () {
            $this->select('field4_category','绑定分类')->options(Category::where('parent_id', 0)->get()->pluck('title', 'id'))->required();
        });
        $this->tab('推荐区4', function () {
            $this->select('field5_category','绑定分类')->options(Category::where('parent_id', 0)->get()->pluck('title', 'id'))->required();
        });
        $this->tab('推荐区5', function () {
            $this->image('field6_image','图片')->required();
            $this->select('field6_category_sub','上级分类')->options(Category::where('parent_id', 0)->get()->pluck('title', 'id'))->load('field6_category', 'rel_category');
            $this->select('field6_category','绑定分类')->required();
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
