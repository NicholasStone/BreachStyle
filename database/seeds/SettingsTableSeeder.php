<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->truncate();

        DB::table('settings')->insert([
            [
                'item' => 'enroll',
                'value' => 'http://upload.univs.cn/2016/0708/1467957369550.docx',
                'comment' => '报名表下载'
            ],[
                'item' => 'notice',
                'value' => 'http://www.univs.cn/ulive/hdgg/2016/0708/1139257.shtml',
                'comment' => '活动通知下载'
            ],[
                'item' => 'verification',
                'value' => null,
                'comment' => '党支部认证表'
            ]
        ]);
    }
}
