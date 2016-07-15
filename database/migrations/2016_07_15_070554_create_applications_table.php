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
            $table->enum('type', ['工作案例','微党课','教师党支部推荐展示','学生党支部推荐展示']);
            $table->unsignedInteger('user_id');
            $table->string('commons');
            $table->text('summary');
            $table->boolean('verification')->default(0);
            $table->string('img_hash');
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
