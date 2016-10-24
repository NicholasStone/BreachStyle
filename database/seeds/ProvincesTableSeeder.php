<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvincesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('provinces')->truncate();

        DB::table('provinces')->insert(array(
            0  =>
                array(
                    'id'   => 1,
                    'name' => '安徽省',
                ),
            1  =>
                array(
                    'id'   => 2,
                    'name' => '北京市',
                ),
            2  =>
                array(
                    'id'   => 3,
                    'name' => '福建省',
                ),
            3  =>
                array(
                    'id'   => 4,
                    'name' => '甘肃省',
                ),
            4  =>
                array(
                    'id'   => 5,
                    'name' => '广东省',
                ),
            5  =>
                array(
                    'id'   => 6,
                    'name' => '广西壮族自治区',
                ),
            6  =>
                array(
                    'id'   => 7,
                    'name' => '贵州省',
                ),
            7  =>
                array(
                    'id'   => 8,
                    'name' => '海南省',
                ),
            8  =>
                array(
                    'id'   => 9,
                    'name' => '河北省',
                ),
            9  =>
                array(
                    'id'   => 10,
                    'name' => '河南省',
                ),
            10 =>
                array(
                    'id'   => 11,
                    'name' => '黑龙江省',
                ),
            11 =>
                array(
                    'id'   => 12,
                    'name' => '湖北省',
                ),
            12 =>
                array(
                    'id'   => 13,
                    'name' => '湖南省',
                ),
            13 =>
                array(
                    'id'   => 14,
                    'name' => '吉林省',
                ),
            14 =>
                array(
                    'id'   => 15,
                    'name' => '江苏省',
                ),
            15 =>
                array(
                    'id'   => 16,
                    'name' => '江西省',
                ),
            16 =>
                array(
                    'id'   => 17,
                    'name' => '辽宁省',
                ),
            17 =>
                array(
                    'id'   => 18,
                    'name' => '内蒙古自治区',
                ),
            18 =>
                array(
                    'id'   => 19,
                    'name' => '宁夏回族自治区',
                ),
            19 =>
                array(
                    'id'   => 20,
                    'name' => '青海省',
                ),
            20 =>
                array(
                    'id'   => 21,
                    'name' => '山东省',
                ),
            21 =>
                array(
                    'id'   => 22,
                    'name' => '山西省',
                ),
            22 =>
                array(
                    'id'   => 23,
                    'name' => '陕西省',
                ),
            23 =>
                array(
                    'id'   => 24,
                    'name' => '上海市',
                ),
            24 =>
                array(
                    'id'   => 25,
                    'name' => '四川省',
                ),
            25 =>
                array(
                    'id'   => 26,
                    'name' => '台湾省',
                ),
            26 =>
                array(
                    'id'   => 27,
                    'name' => '天津市',
                ),
            27 =>
                array(
                    'id'   => 28,
                    'name' => '西藏自治区',
                ),
            28 =>
                array(
                    'id'   => 29,
                    'name' => '新疆维吾尔自治区',
                ),
            29 =>
                array(
                    'id'   => 30,
                    'name' => '云南省',
                ),
            30 =>
                array(
                    'id'   => 31,
                    'name' => '浙江省',
                ),
            31 =>
                array(
                    'id'   => 32,
                    'name' => '重庆市',
                ),
            32 =>
                array(
                    'id'   => 33,
                    'name' => '香港特别行政区',
                ),
            33 =>
                array(
                    'id'   => 34,
                    'name' => '澳门特别行政区',
                ),
        ));
    }
}
