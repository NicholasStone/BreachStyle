<?php

use Carbon\Carbon as Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

/**
 * Class UserTableSeeder
 */
class UserTableSeeder extends Seeder
{
    public function run()
    {
        if (DB::connection()->getDriverName() == 'mysql') {
            DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        }

        if (DB::connection()->getDriverName() == 'mysql') {
            DB::table(config('access.users_table'))->truncate();
        } elseif (DB::connection()->getDriverName() == 'sqlite') {
            DB::statement('DELETE FROM ' . config('access.users_table'));
        } else {
            //For PostgreSQL or anything else
            DB::statement('TRUNCATE TABLE ' . config('access.users_table') . ' CASCADE');
        }

        //Add the master administrator, user id of 1
        $users = [
            [
                'name'              => 'Admin',
                'email'             => 'admin@admin.com',
                'password'          => bcrypt('1234'),
                'confirmation_code' => md5(uniqid(mt_rand(), true)),
                'confirmed'         => true,
                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now(),
                'tel'               => '12345678901',
                'tel_work'          => '12345678901'
            ],
            [
                'name'              => 'Backend User',
                'email'             => 'executive@executive.com',
                'password'          => bcrypt('1234'),
                'confirmation_code' => md5(uniqid(mt_rand(), true)),
                'confirmed'         => true,
                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now(),
                'tel'               => '12345678902',
                'tel_work'          => '12345678902'
            ],
            [
                'name'              => 'Default User',
                'email'             => 'user@user.com',
                'password'          => bcrypt('1234'),
                'confirmation_code' => md5(uniqid(mt_rand(), true)),
                'confirmed'         => true,
                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now(),
                'tel'               => '12345678903',
                'tel_work'          => '12345678903'
            ],
        ];

        DB::table(config('access.users_table'))->insert($users);

        if (DB::connection()->getDriverName() == 'mysql') {
            DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        }
    }
}