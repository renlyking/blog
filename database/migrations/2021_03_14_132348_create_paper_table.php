<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaperTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void 上（创建数据表）
     */
    public function up()
    {
            //create参数  表明+命名函数
        Schema::create('paper', function (Blueprint $table) {
            //表的主键，自增
            $table->increments('id');
            //试卷名称，唯一，varchar(100),不为空
            $table->string('paper_name','100')->noNull()->unique();
            //试卷总分，整型数字，tinyint，默认为100
            $table->tinyInteger('total_score')->default(100);
            $table->integer('start_time')->nullable();
            //考试时间长度，单位分钟，整形（tinyint）
            $table->tinyInteger('duration');
            //试卷是否启用的状态，1表示启用，2表示禁用，默认为1
            $table->tinyInteger('status')->default(1);
            // $table->tinyInteger('status')->default('1');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void 下（删除数据表、创建数据表的撤销操作）
     */
    public function down()
    {
        Schema::dropIfExists('paper');
    }
}
