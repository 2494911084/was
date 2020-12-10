<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('arts', function (Blueprint $table) {
            $table->id();
            $table->string('title')->comment('标题');
            $table->integer('category_id_sub')->unsigned()->default(0)->comment('上级分类');
            $table->integer('category_id')->unsigned()->default(0)->comment('分类');
            $table->integer('is_tuijian')->unsigned()->default(0)->comment('推荐');
            $table->integer('is_huandengpian')->unsigned()->default(0)->comment('幻灯片');
            $table->integer('view_count')->unsigned()->default(0)->comment('浏览量');
            $table->string('cre_time')->nullable()->default(null)->comment('发布时间');
            $table->string('jiesao')->nullable()->default(null)->comment('介绍');
            $table->string('xxly')->nullable()->default(null)->comment('信息来源');
            $table->string('image')->nullable()->default(null)->comment('主图');
            $table->text('content')->comment('内容');
            $table->text('excerpt')->nullable()->default(null)->comment('文章摘要');
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
        Schema::dropIfExists('arts');
    }
}
