<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBranchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('branches', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 50)->unique();
            $table->string('avatar');
            $table->enum('type', ["学生党支部", "教师党支部"]);
            $table->string('university');
            $table->string('tel',11)->unique();
            $table->boolean('verification')->default(0);
            $table->string('address');
            $table->string('summary', 300);
            $table->text('detail');
            $table->unsignedInteger('total_membership');
            $table->unsignedInteger('secretary');
            $table->string('secretary_summary', 100);
            $table->string('apply_img', 50);
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
        Schema::drop('branches');
    }
}
