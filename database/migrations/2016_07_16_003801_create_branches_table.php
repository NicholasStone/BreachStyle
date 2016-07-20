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
            $table->string('avatar', 32);
            $table->enum('type', ["学生党支部", "教师党支部"]);
            $table->boolean('verification')->default(0);
            $table->string('address');
            $table->string('summary', 300);
            $table->unsignedInteger('total_membership');
            $table->string('secretary', 50);
            $table->string('secretary_summary', 100);
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
