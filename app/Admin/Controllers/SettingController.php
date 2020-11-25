<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Dcat\Admin\Widgets\Card;
use Dcat\Admin\Layout\Content;
use App\Admin\Forms\Setting;
use App\Admin\Forms\IndexSetting;

class SettingController extends Controller
{
    public function setting(Content $content)
    {
        return $content
            ->title('站点设置')
            ->body(new Card(new Setting()));
    }

    public function index_setting(Content $content)
    {
        return $content
            ->title('首页设置')
            ->body(new Card(new IndexSetting()));
    }
}
