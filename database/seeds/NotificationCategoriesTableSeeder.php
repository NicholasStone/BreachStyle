<?php

use Illuminate\Database\Seeder;

class NotificationCategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('notification_categories')->delete();
        
        \DB::table('notification_categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'application.granted',
                'text' => '您提交的文章《{extra.application_name}》已通过审核',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'application.denied',
                'text' => '您提交的文章《{extra.application_name}》已被驳回，原因是{extra.reason},请点击以编辑',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'application.delete',
                'text' => '您提交的文章《{extra.application_name}》已被管理员删除，原因是{extra.reason}',
            ),
        ));
        
        
    }
}
