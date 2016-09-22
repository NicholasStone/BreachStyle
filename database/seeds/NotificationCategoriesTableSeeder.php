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
            3 => 
            array (
                'id' => 4,
                'name' => 'application.restore',
                'text' => '您提交的文章《{extra.application_name}》已被管理员恢复。',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'comment.denied',
                'text' => '您的评论“{extra.comment}”已被管理员删除',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'branch.granted',
                'text' => '您提交的支部申请已审核通过',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'branch.denied',
                'text' => '您提交的支部申请已被管理员驳回，理由是 {extra.reason}',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'branch.delete',
                'text' => '您的支部已被管理员删除，理由是 {extra.reason}',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'branch.restore',
                'text' => '您的支部已被管理员恢复',
            ),
        ));
        
        
    }
}
