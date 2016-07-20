<?php

use Illuminate\Database\Seeder;

class ProvincesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('provinces')->delete();
        
        \DB::table('provinces')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => '安徽',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => '北京',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => '福建',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => '甘肃',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => '广东',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => '广西',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => '贵州',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => '海南',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => '河北',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => '河南',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => '黑龙江',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => '湖北',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => '湖南',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => '吉林',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => '江苏',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => '江西',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => '辽宁',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => '内蒙古',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => '宁夏',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => '青海',
            ),
            20 => 
            array (
                'id' => 21,
                'name' => '山东',
            ),
            21 => 
            array (
                'id' => 22,
                'name' => '山西',
            ),
            22 => 
            array (
                'id' => 23,
                'name' => '陕西',
            ),
            23 => 
            array (
                'id' => 24,
                'name' => '上海',
            ),
            24 => 
            array (
                'id' => 25,
                'name' => '四川',
            ),
            25 => 
            array (
                'id' => 26,
                'name' => '台湾',
            ),
            26 => 
            array (
                'id' => 27,
                'name' => '天津',
            ),
            27 => 
            array (
                'id' => 28,
                'name' => '西藏',
            ),
            28 => 
            array (
                'id' => 29,
                'name' => '新疆',
            ),
            29 => 
            array (
                'id' => 30,
                'name' => '云南',
            ),
            30 => 
            array (
                'id' => 31,
                'name' => '浙江',
            ),
            31 => 
            array (
                'id' => 32,
                'name' => '重庆',
            ),
            32 => 
            array (
                'id' => 33,
                'name' => '香港',
            ),
            33 => 
            array (
                'id' => 34,
                'name' => '澳门',
            ),
            34 => 
            array (
                'id' => 35,
                'name' => '其它',
            ),
        ));
        
        
    }
}
