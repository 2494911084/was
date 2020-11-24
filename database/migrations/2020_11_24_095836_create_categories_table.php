<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        ## 文章类别表
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('title')->comment('名称');
            $table->string('sim_name')->nullable()->default(null)->comment('简称');
            $table->string('instroduction')->nullable()->default(null)->comment('简介');
            $table->string('image')->nullable()->default(null)->comment('主图');
            $table->integer('parent_id')->default(0)->comment('上级分类');
            $table->integer('order')->default(0)->comment('排序');
            $table->integer('type')->comment('类型1唯一2图文32*4图片44*4图片');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
