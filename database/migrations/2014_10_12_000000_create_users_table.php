<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('id_number');
            $table->enum('type', ['学生', '教师']);
            $table->string('school_name', 30);
            $table->string('avatar');
            $table->string('email')->unique();
            $table->string('tel_work', 11)->unique();
            $table->string('tel', 11)->unique();
            $table->string('password')->nullable();
            $table->string('confirmation_code');
            $table->boolean('confirmed')->default(config('access.users.confirm_email') ? false : true);
            $table->rememberToken();
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at');
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
