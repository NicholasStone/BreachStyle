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
                'item' => 'exhibition',
                'value' => 0,
                'comment' => '首页展示'
            ],[
                'item' => 'map',
                'value' => 0,
                'comment' => '热度排行'
            ],[
                'item' => 'slider',
                'value' => 0,
                'comment' => '移动端热点图'
            ]
        ]);
    }
}
