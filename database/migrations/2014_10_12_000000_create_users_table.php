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
            $table->char('id_number',18);
            $table->enum('type', ['学生', '教师']);
            $table->string('university', 30);
            $table->string('avatar');
            $table->string('email')->unique();
            $table->string('tel_work', 11)->unique();
            $table->string('tel', 11)->unique();
            $table->string('branch_name', 20);
            $table->string('province',15);
            $table->string('city',20);
            $table->string('confirmation_code');
            $table->string('password')->nullable();
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
