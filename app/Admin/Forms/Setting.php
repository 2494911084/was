<?php

namespace App\Admin\Forms;

use Dcat\Admin\Widgets\Form;
use Illuminate\Support\Facades\DB;

class Setting extends Form
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
        // dump($input);
        try {
            if (DB::table('admin_settings')->where('slug', 'web_site_setting')->exists()) {
                DB::table('admin_settings')->where('slug', 'web_site_setting')->update(['value' => json_encode($input)]);
            } else {
                DB::table('admin_settings')->insert(['slug' => 'web_site_setting', 'value' => json_encode($input)]);
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
        $this->text('title','站点名称')->required();
        $this->image('logo')->required();
        $this->mobile('kefu_mobile', '客服电话')->required();
        $this->mobile('tous_mobile', '投诉电话')->required();
        $this->mobile('baoxiu_mobile', '保修电话')->required();
        $this->image('dyh_wechat', '订阅号')->required();
        $this->image('fwh_wechat', '服务号')->required();
    }

    /**
     * The data of the form.
     *
     * @return array
     */
    public function default()
    {
        $set = DB::table('admin_settings')->where('slug', 'web_site_setting')->first();

        // dd(json_decode($set->value, true));
        return $set?json_decode($set->value, true):[];
    }
}