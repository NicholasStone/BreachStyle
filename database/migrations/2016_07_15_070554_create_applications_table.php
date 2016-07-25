<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->enum('type', ['工作案例', '微党课', '教师党支部推荐展示', '学生党支部推荐展示']);
            $table->string('summary');
            $table->text('detail')->nullable();
            $table->boolean('verification')->default(0);
            $table->unsignedInteger('branch_id');
            $table->string('img_hash')->nullable();
            $table->string('apply_hash');
            $table->string('video_hash')->nullable();
            $table->string('course_lecturer',20)->nullable();
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
        Schema::drop('applications');
    }
}
