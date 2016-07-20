<?php

use Illuminate\Database\Seeder;

class UniversitiesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('universities')->delete();
        
        \DB::table('universities')->insert(array (
            0 => 
            array (
                'id' => 1,
                'province_id' => 1,
                'name' => '合肥工业大学',
            ),
            1 => 
            array (
                'id' => 2,
                'province_id' => 1,
                'name' => '中国科学技术大学',
            ),
            2 => 
            array (
                'id' => 3,
                'province_id' => 1,
                'name' => '安徽大学',
            ),
            3 => 
            array (
                'id' => 4,
                'province_id' => 1,
                'name' => '安徽理工大学',
            ),
            4 => 
            array (
                'id' => 5,
                'province_id' => 1,
                'name' => '安徽工业大学',
            ),
            5 => 
            array (
                'id' => 6,
                'province_id' => 1,
                'name' => '安徽农业大学',
            ),
            6 => 
            array (
                'id' => 7,
                'province_id' => 1,
                'name' => '安徽医科大学',
            ),
            7 => 
            array (
                'id' => 8,
                'province_id' => 1,
                'name' => '安徽师范大学',
            ),
            8 => 
            array (
                'id' => 9,
                'province_id' => 1,
                'name' => '安徽建筑大学',
            ),
            9 => 
            array (
                'id' => 10,
                'province_id' => 1,
                'name' => '安徽工程大学',
            ),
            10 => 
            array (
                'id' => 11,
                'province_id' => 1,
                'name' => '安徽中医药大学',
            ),
            11 => 
            array (
                'id' => 12,
                'province_id' => 1,
                'name' => '皖南医学院',
            ),
            12 => 
            array (
                'id' => 13,
                'province_id' => 1,
                'name' => '蚌埠医学院',
            ),
            13 => 
            array (
                'id' => 14,
                'province_id' => 1,
                'name' => '阜阳师范学院',
            ),
            14 => 
            array (
                'id' => 15,
                'province_id' => 1,
                'name' => '安庆师范学院',
            ),
            15 => 
            array (
                'id' => 16,
                'province_id' => 1,
                'name' => '淮北师范大学',
            ),
            16 => 
            array (
                'id' => 17,
                'province_id' => 1,
                'name' => '淮南师范学院',
            ),
            17 => 
            array (
                'id' => 18,
                'province_id' => 1,
                'name' => '安徽财经大学',
            ),
            18 => 
            array (
                'id' => 19,
                'province_id' => 1,
                'name' => '铜陵学院',
            ),
            19 => 
            array (
                'id' => 20,
                'province_id' => 1,
                'name' => '合肥学院',
            ),
            20 => 
            array (
                'id' => 21,
                'province_id' => 1,
                'name' => '皖西学院',
            ),
            21 => 
            array (
                'id' => 22,
                'province_id' => 1,
                'name' => '巢湖学院',
            ),
            22 => 
            array (
                'id' => 23,
                'province_id' => 1,
                'name' => '黄山学院',
            ),
            23 => 
            array (
                'id' => 24,
                'province_id' => 1,
                'name' => '安徽科技学院',
            ),
            24 => 
            array (
                'id' => 25,
                'province_id' => 1,
                'name' => '安徽新华学院',
            ),
            25 => 
            array (
                'id' => 26,
                'province_id' => 1,
                'name' => '滁州学院',
            ),
            26 => 
            array (
                'id' => 27,
                'province_id' => 1,
                'name' => '宿州学院',
            ),
            27 => 
            array (
                'id' => 28,
                'province_id' => 1,
                'name' => '淮南联合大学',
            ),
            28 => 
            array (
                'id' => 29,
                'province_id' => 1,
                'name' => '蚌埠学院',
            ),
            29 => 
            array (
                'id' => 30,
                'province_id' => 1,
                'name' => '安徽医学高等专科学校',
            ),
            30 => 
            array (
                'id' => 31,
                'province_id' => 1,
                'name' => '安徽中医药高等专科学校',
            ),
            31 => 
            array (
                'id' => 32,
                'province_id' => 1,
                'name' => '池州学院',
            ),
            32 => 
            array (
                'id' => 33,
                'province_id' => 1,
                'name' => '亳州师范高等专科学校',
            ),
            33 => 
            array (
                'id' => 34,
                'province_id' => 1,
                'name' => '芜湖职业技术学院',
            ),
            34 => 
            array (
                'id' => 35,
                'province_id' => 1,
                'name' => '安徽水利水电职业技术学院',
            ),
            35 => 
            array (
                'id' => 36,
                'province_id' => 1,
                'name' => '安徽商贸职业技术学院',
            ),
            36 => 
            array (
                'id' => 38,
                'province_id' => 1,
                'name' => '民办三联职业技术学院',
            ),
            37 => 
            array (
                'id' => 39,
                'province_id' => 1,
                'name' => '安徽警官职业学院',
            ),
            38 => 
            array (
                'id' => 40,
                'province_id' => 1,
                'name' => '淮北职业技术学院',
            ),
            39 => 
            array (
                'id' => 41,
                'province_id' => 1,
                'name' => '淮南职业技术学院',
            ),
            40 => 
            array (
                'id' => 42,
                'province_id' => 1,
                'name' => '民办万博科技职业学院',
            ),
            41 => 
            array (
                'id' => 43,
                'province_id' => 1,
                'name' => '安徽职业技术学院',
            ),
            42 => 
            array (
                'id' => 44,
                'province_id' => 1,
                'name' => '铜陵职业技术学院',
            ),
            43 => 
            array (
                'id' => 45,
                'province_id' => 1,
                'name' => '宿州职业技术学院',
            ),
            44 => 
            array (
                'id' => 46,
                'province_id' => 1,
                'name' => '阜阳职业技术学院',
            ),
            45 => 
            array (
                'id' => 47,
                'province_id' => 1,
                'name' => '安徽工贸职业技术学院',
            ),
            46 => 
            array (
                'id' => 48,
                'province_id' => 1,
                'name' => '安徽工业经济职业技术学院',
            ),
            47 => 
            array (
                'id' => 49,
                'province_id' => 1,
                'name' => '安徽交通职业技术学院',
            ),
            48 => 
            array (
                'id' => 50,
                'province_id' => 1,
                'name' => '安徽电子信息职业技术学院',
            ),
            49 => 
            array (
                'id' => 51,
                'province_id' => 1,
                'name' => '合肥通用职业技术学院',
            ),
            50 => 
            array (
                'id' => 52,
                'province_id' => 1,
                'name' => '安徽体育运动职业技术学院',
            ),
            51 => 
            array (
                'id' => 53,
                'province_id' => 1,
                'name' => '民办安徽文达信息技术职业学院',
            ),
            52 => 
            array (
                'id' => 54,
                'province_id' => 1,
                'name' => '民办合肥经济技术职业学院',
            ),
            53 => 
            array (
                'id' => 55,
                'province_id' => 1,
                'name' => '安徽外国语学院',
            ),
            54 => 
            array (
                'id' => 56,
                'province_id' => 1,
                'name' => '宣城职业技术学院',
            ),
            55 => 
            array (
                'id' => 57,
                'province_id' => 1,
                'name' => '安徽广播影视职业技术学院',
            ),
            56 => 
            array (
                'id' => 58,
                'province_id' => 1,
                'name' => '民办安徽明星科技职业学院',
            ),
            57 => 
            array (
                'id' => 59,
                'province_id' => 1,
                'name' => '六安职业技术学院',
            ),
            58 => 
            array (
                'id' => 60,
                'province_id' => 1,
                'name' => '池州职业技术学院',
            ),
            59 => 
            array (
                'id' => 61,
                'province_id' => 1,
                'name' => '滁州职业技术学院',
            ),
            60 => 
            array (
                'id' => 62,
                'province_id' => 1,
                'name' => '巢湖职业技术学院',
            ),
            61 => 
            array (
                'id' => 63,
                'province_id' => 1,
                'name' => '安徽工业职业技术学院',
            ),
            62 => 
            array (
                'id' => 64,
                'province_id' => 1,
                'name' => '亳州职业技术学院',
            ),
            63 => 
            array (
                'id' => 65,
                'province_id' => 1,
                'name' => '安庆职业技术学院',
            ),
            64 => 
            array (
                'id' => 66,
                'province_id' => 1,
                'name' => '安徽艺术职业学院',
            ),
            65 => 
            array (
                'id' => 67,
                'province_id' => 1,
                'name' => '安徽国防科技职业学院',
            ),
            66 => 
            array (
                'id' => 68,
                'province_id' => 1,
                'name' => '安徽城市管理职业学院',
            ),
            67 => 
            array (
                'id' => 69,
                'province_id' => 1,
                'name' => '安徽中澳科技职业学院',
            ),
            68 => 
            array (
                'id' => 70,
                'province_id' => 1,
                'name' => '安徽工商职业学院',
            ),
            69 => 
            array (
                'id' => 71,
                'province_id' => 1,
                'name' => '安徽机电职业技术学院',
            ),
            70 => 
            array (
                'id' => 72,
                'province_id' => 1,
                'name' => '安徽电气工程职业技术学院',
            ),
            71 => 
            array (
                'id' => 73,
                'province_id' => 1,
                'name' => '安徽冶金科技职业学院',
            ),
            72 => 
            array (
                'id' => 74,
                'province_id' => 1,
                'name' => '阜阳科技职业学院',
            ),
            73 => 
            array (
                'id' => 75,
                'province_id' => 1,
                'name' => '安徽国际商务职业学院',
            ),
            74 => 
            array (
                'id' => 76,
                'province_id' => 1,
                'name' => '安徽财贸职业学院',
            ),
            75 => 
            array (
                'id' => 77,
                'province_id' => 1,
                'name' => '安徽林业职业技术学院',
            ),
            76 => 
            array (
                'id' => 78,
                'province_id' => 1,
                'name' => '安徽审计职业学院',
            ),
            77 => 
            array (
                'id' => 79,
                'province_id' => 1,
                'name' => '安徽新闻出版职业技术学院',
            ),
            78 => 
            array (
                'id' => 80,
                'province_id' => 1,
                'name' => '安徽邮电职业技术学院',
            ),
            79 => 
            array (
                'id' => 81,
                'province_id' => 2,
                'name' => '北京信息职业技术学院',
            ),
            80 => 
            array (
                'id' => 82,
                'province_id' => 2,
                'name' => '北京交通职业技术学院',
            ),
            81 => 
            array (
                'id' => 83,
                'province_id' => 2,
                'name' => '北京工业职业技术学院',
            ),
            82 => 
            array (
                'id' => 84,
                'province_id' => 2,
                'name' => '北京科技经营管理学院',
            ),
            83 => 
            array (
                'id' => 85,
                'province_id' => 2,
                'name' => '北京农业职业学院',
            ),
            84 => 
            array (
                'id' => 86,
                'province_id' => 2,
                'name' => '北京戏曲艺术职业学院',
            ),
            85 => 
            array (
                'id' => 87,
                'province_id' => 2,
                'name' => '北京培黎职业学院',
            ),
            86 => 
            array (
                'id' => 88,
                'province_id' => 2,
                'name' => '北京京北职业技术学院',
            ),
            87 => 
            array (
                'id' => 89,
                'province_id' => 2,
                'name' => '北京财贸职业学院',
            ),
            88 => 
            array (
                'id' => 90,
                'province_id' => 2,
                'name' => '北京政法职业学院',
            ),
            89 => 
            array (
                'id' => 91,
                'province_id' => 2,
                'name' => '北京经贸职业学院',
            ),
            90 => 
            array (
                'id' => 92,
                'province_id' => 2,
                'name' => '北京北大方正软件职业技术学院',
            ),
            91 => 
            array (
                'id' => 93,
                'province_id' => 2,
                'name' => '北京经济技术职业学院',
            ),
            92 => 
            array (
                'id' => 94,
                'province_id' => 2,
                'name' => '北京汇佳职业学院',
            ),
            93 => 
            array (
                'id' => 95,
                'province_id' => 2,
                'name' => '北京科技职业',
            ),
            94 => 
            array (
                'id' => 96,
                'province_id' => 2,
                'name' => '燕京华侨职业学院',
            ),
            95 => 
            array (
                'id' => 97,
                'province_id' => 2,
                'name' => '北京锡华国际经贸职业学院',
            ),
            96 => 
            array (
                'id' => 98,
                'province_id' => 2,
                'name' => '北京电子科技职业学院',
            ),
            97 => 
            array (
                'id' => 99,
                'province_id' => 2,
                'name' => '北京大学',
            ),
            98 => 
            array (
                'id' => 100,
                'province_id' => 2,
                'name' => '中国人民大学',
            ),
            99 => 
            array (
                'id' => 101,
                'province_id' => 2,
                'name' => '清华大学',
            ),
            100 => 
            array (
                'id' => 102,
                'province_id' => 2,
                'name' => '北京交通大学',
            ),
            101 => 
            array (
                'id' => 103,
                'province_id' => 2,
                'name' => '北京科技大学',
            ),
            102 => 
            array (
                'id' => 104,
                'province_id' => 2,
                'name' => '中国石油大学（北京）',
            ),
            103 => 
            array (
                'id' => 105,
                'province_id' => 2,
                'name' => '北京邮电大学',
            ),
            104 => 
            array (
                'id' => 106,
                'province_id' => 2,
                'name' => '北京化工大学',
            ),
            105 => 
            array (
                'id' => 107,
                'province_id' => 2,
                'name' => '中国农业大学',
            ),
            106 => 
            array (
                'id' => 108,
                'province_id' => 2,
                'name' => '北京林业大学',
            ),
            107 => 
            array (
                'id' => 109,
                'province_id' => 2,
                'name' => '北京中医药大学',
            ),
            108 => 
            array (
                'id' => 110,
                'province_id' => 2,
                'name' => '北京师范大学',
            ),
            109 => 
            array (
                'id' => 111,
                'province_id' => 2,
                'name' => '北京外国语大学',
            ),
            110 => 
            array (
                'id' => 112,
                'province_id' => 2,
                'name' => '北京语言大学',
            ),
            111 => 
            array (
                'id' => 113,
                'province_id' => 2,
                'name' => '对外经济贸易大学',
            ),
            112 => 
            array (
                'id' => 114,
                'province_id' => 2,
                'name' => '【财经你我】中央财经大学',
            ),
            113 => 
            array (
                'id' => 115,
                'province_id' => 2,
                'name' => '中国政法大学',
            ),
            114 => 
            array (
                'id' => 116,
                'province_id' => 2,
                'name' => '中央民族大学',
            ),
            115 => 
            array (
                'id' => 117,
                'province_id' => 2,
                'name' => '中国人民公安大学',
            ),
            116 => 
            array (
                'id' => 118,
                'province_id' => 2,
                'name' => '北京协和医学院',
            ),
            117 => 
            array (
                'id' => 119,
                'province_id' => 2,
                'name' => '北京体育大学',
            ),
            118 => 
            array (
                'id' => 120,
                'province_id' => 2,
                'name' => '北京理工大学',
            ),
            119 => 
            array (
                'id' => 121,
                'province_id' => 2,
                'name' => '北京航空航天大学',
            ),
            120 => 
            array (
                'id' => 122,
                'province_id' => 2,
                'name' => '北京工商大学',
            ),
            121 => 
            array (
                'id' => 123,
                'province_id' => 2,
                'name' => '北京联合大学',
            ),
            122 => 
            array (
                'id' => 124,
                'province_id' => 2,
                'name' => '北京工业大学',
            ),
            123 => 
            array (
                'id' => 125,
                'province_id' => 2,
                'name' => '北方工业大学',
            ),
            124 => 
            array (
                'id' => 126,
                'province_id' => 2,
                'name' => '首都医科大学',
            ),
            125 => 
            array (
                'id' => 127,
                'province_id' => 2,
                'name' => '首都师范大学',
            ),
            126 => 
            array (
                'id' => 128,
                'province_id' => 2,
                'name' => '首都经济贸易大学',
            ),
            127 => 
            array (
                'id' => 129,
                'province_id' => 2,
                'name' => '中国传媒大学',
            ),
            128 => 
            array (
                'id' => 130,
                'province_id' => 2,
                'name' => '国际关系学院',
            ),
            129 => 
            array (
                'id' => 131,
                'province_id' => 2,
                'name' => '中央美术学院',
            ),
            130 => 
            array (
                'id' => 132,
                'province_id' => 2,
                'name' => '中央戏剧学院',
            ),
            131 => 
            array (
                'id' => 133,
                'province_id' => 2,
                'name' => '中央音乐学院',
            ),
            132 => 
            array (
                'id' => 134,
                'province_id' => 2,
                'name' => '北京电子科技学院',
            ),
            133 => 
            array (
                'id' => 135,
                'province_id' => 2,
                'name' => '外交学院',
            ),
            134 => 
            array (
                'id' => 136,
                'province_id' => 2,
                'name' => '中国劳动关系学院',
            ),
            135 => 
            array (
                'id' => 137,
                'province_id' => 2,
                'name' => '中国青年政治学院',
            ),
            136 => 
            array (
                'id' => 138,
                'province_id' => 2,
                'name' => '中华女子学院',
            ),
            137 => 
            array (
                'id' => 139,
                'province_id' => 2,
                'name' => '北京机械工业学院',
            ),
            138 => 
            array (
                'id' => 140,
                'province_id' => 2,
                'name' => '北京建筑大学',
            ),
            139 => 
            array (
                'id' => 141,
                'province_id' => 2,
                'name' => '北京服装学院',
            ),
            140 => 
            array (
                'id' => 142,
                'province_id' => 2,
                'name' => '【争流】华北电力大学',
            ),
            141 => 
            array (
                'id' => 143,
                'province_id' => 2,
                'name' => '北京印刷学院',
            ),
            142 => 
            array (
                'id' => 144,
                'province_id' => 2,
                'name' => '北京信息科技大学',
            ),
            143 => 
            array (
                'id' => 145,
                'province_id' => 2,
                'name' => '北京石油化工学院',
            ),
            144 => 
            array (
                'id' => 146,
                'province_id' => 2,
                'name' => '首钢工学院',
            ),
            145 => 
            array (
                'id' => 147,
                'province_id' => 2,
                'name' => '北京农学院',
            ),
            146 => 
            array (
                'id' => 148,
                'province_id' => 2,
                'name' => '首都体育学院',
            ),
            147 => 
            array (
                'id' => 149,
                'province_id' => 2,
                'name' => '北京第二外国语学院',
            ),
            148 => 
            array (
                'id' => 150,
                'province_id' => 2,
                'name' => '北京物资学院',
            ),
            149 => 
            array (
                'id' => 151,
                'province_id' => 2,
                'name' => '中国音乐学院',
            ),
            150 => 
            array (
                'id' => 152,
                'province_id' => 2,
                'name' => '北京舞蹈学院',
            ),
            151 => 
            array (
                'id' => 153,
                'province_id' => 2,
                'name' => '北京电影学院',
            ),
            152 => 
            array (
                'id' => 154,
                'province_id' => 2,
                'name' => '中国戏曲学院',
            ),
            153 => 
            array (
                'id' => 155,
                'province_id' => 2,
                'name' => '北京青年政治学院',
            ),
            154 => 
            array (
                'id' => 156,
                'province_id' => 2,
                'name' => '北京城市学院',
            ),
            155 => 
            array (
                'id' => 157,
                'province_id' => 2,
                'name' => '北京警察学院',
            ),
            156 => 
            array (
                'id' => 158,
                'province_id' => 2,
                'name' => '北京吉利学院',
            ),
            157 => 
            array (
                'id' => 159,
                'province_id' => 3,
                'name' => '厦门大学',
            ),
            158 => 
            array (
                'id' => 160,
                'province_id' => 3,
                'name' => '华侨大学',
            ),
            159 => 
            array (
                'id' => 161,
                'province_id' => 3,
                'name' => '福建农林大学',
            ),
            160 => 
            array (
                'id' => 162,
                'province_id' => 3,
                'name' => '集美大学',
            ),
            161 => 
            array (
                'id' => 163,
                'province_id' => 3,
                'name' => '福州大学',
            ),
            162 => 
            array (
                'id' => 164,
                'province_id' => 3,
                'name' => '仰恩大学',
            ),
            163 => 
            array (
                'id' => 165,
                'province_id' => 3,
                'name' => '福建医科大学',
            ),
            164 => 
            array (
                'id' => 166,
                'province_id' => 3,
                'name' => '福建师范大学',
            ),
            165 => 
            array (
                'id' => 167,
                'province_id' => 3,
                'name' => '福建工程学院',
            ),
            166 => 
            array (
                'id' => 168,
                'province_id' => 3,
                'name' => '福建中医药大学',
            ),
            167 => 
            array (
                'id' => 169,
                'province_id' => 3,
                'name' => '泉州师范学院',
            ),
            168 => 
            array (
                'id' => 170,
                'province_id' => 3,
                'name' => '闽南师范大学',
            ),
            169 => 
            array (
                'id' => 171,
                'province_id' => 3,
                'name' => '闽江学院',
            ),
            170 => 
            array (
                'id' => 172,
                'province_id' => 3,
                'name' => '莆田学院',
            ),
            171 => 
            array (
                'id' => 173,
                'province_id' => 3,
                'name' => '龙岩学院',
            ),
            172 => 
            array (
                'id' => 174,
                'province_id' => 3,
                'name' => '三明学院',
            ),
            173 => 
            array (
                'id' => 175,
                'province_id' => 3,
                'name' => '武夷学院',
            ),
            174 => 
            array (
                'id' => 176,
                'province_id' => 3,
                'name' => '福建公安学院',
            ),
            175 => 
            array (
                'id' => 177,
                'province_id' => 3,
                'name' => '宁德师范学院',
            ),
            176 => 
            array (
                'id' => 178,
                'province_id' => 3,
                'name' => '福建商业高等专科学校',
            ),
            177 => 
            array (
                'id' => 179,
                'province_id' => 3,
                'name' => '泉州医学高等专科学校',
            ),
            178 => 
            array (
                'id' => 180,
                'province_id' => 3,
                'name' => '福建华南女子职业学院',
            ),
            179 => 
            array (
                'id' => 181,
                'province_id' => 3,
                'name' => '黎明职业大学',
            ),
            180 => 
            array (
                'id' => 182,
                'province_id' => 3,
                'name' => '闽西职业技术学院',
            ),
            181 => 
            array (
                'id' => 183,
                'province_id' => 3,
                'name' => '漳州职业技术学院',
            ),
            182 => 
            array (
                'id' => 184,
                'province_id' => 3,
                'name' => '福建交通职业技术学院',
            ),
            183 => 
            array (
                'id' => 185,
                'province_id' => 3,
                'name' => '泉州育青职业技术学院',
            ),
            184 => 
            array (
                'id' => 186,
                'province_id' => 3,
                'name' => '闽南理工学院',
            ),
            185 => 
            array (
                'id' => 187,
                'province_id' => 3,
                'name' => '厦门华夏学院',
            ),
            186 => 
            array (
                'id' => 188,
                'province_id' => 3,
                'name' => '福州英华职业学院',
            ),
            187 => 
            array (
                'id' => 189,
                'province_id' => 3,
                'name' => '泉州理工学院',
            ),
            188 => 
            array (
                'id' => 190,
                'province_id' => 3,
                'name' => '泉州华光职业学院',
            ),
            189 => 
            array (
                'id' => 191,
                'province_id' => 3,
                'name' => '福州职业技术学院',
            ),
            190 => 
            array (
                'id' => 192,
                'province_id' => 3,
                'name' => '福建信息职业技术学院',
            ),
            191 => 
            array (
                'id' => 193,
                'province_id' => 3,
                'name' => '福建水利电力职业技术学院',
            ),
            192 => 
            array (
                'id' => 194,
                'province_id' => 3,
                'name' => '福建电力职业技术学院',
            ),
            193 => 
            array (
                'id' => 195,
                'province_id' => 3,
                'name' => '福建林业职业技术学院',
            ),
            194 => 
            array (
                'id' => 196,
                'province_id' => 3,
                'name' => '福建农业职业技术学院',
            ),
            195 => 
            array (
                'id' => 197,
                'province_id' => 3,
                'name' => '厦门海洋职业技术学院',
            ),
            196 => 
            array (
                'id' => 198,
                'province_id' => 3,
                'name' => '湄洲湾职业技术学院',
            ),
            197 => 
            array (
                'id' => 199,
                'province_id' => 3,
                'name' => '闽北职业技术学院',
            ),
            198 => 
            array (
                'id' => 200,
                'province_id' => 3,
                'name' => '福州软件职业技术学院',
            ),
            199 => 
            array (
                'id' => 201,
                'province_id' => 3,
                'name' => '泉州纺织服装职业学院',
            ),
            200 => 
            array (
                'id' => 202,
                'province_id' => 3,
                'name' => '三明职业技术学院',
            ),
            201 => 
            array (
                'id' => 203,
                'province_id' => 3,
                'name' => '厦门理工学院',
            ),
            202 => 
            array (
                'id' => 204,
                'province_id' => 3,
                'name' => '厦门华天涉外职业技术学院',
            ),
            203 => 
            array (
                'id' => 205,
                'province_id' => 3,
                'name' => '厦门演艺职业学院',
            ),
            204 => 
            array (
                'id' => 206,
                'province_id' => 3,
                'name' => '泉州信息工程学院',
            ),
            205 => 
            array (
                'id' => 207,
                'province_id' => 3,
                'name' => '泉州经贸职业技术学院',
            ),
            206 => 
            array (
                'id' => 208,
                'province_id' => 3,
                'name' => '福州海理工学院',
            ),
            207 => 
            array (
                'id' => 209,
                'province_id' => 3,
                'name' => '福州科技职业技术学院',
            ),
            208 => 
            array (
                'id' => 210,
                'province_id' => 3,
                'name' => '福州黎明职业技术学院',
            ),
            209 => 
            array (
                'id' => 211,
                'province_id' => 3,
                'name' => '福州外语外贸学院',
            ),
            210 => 
            array (
                'id' => 212,
                'province_id' => 3,
                'name' => '福建警官职业学院',
            ),
            211 => 
            array (
                'id' => 213,
                'province_id' => 3,
                'name' => '福建对外经济贸易职业技术学院',
            ),
            212 => 
            array (
                'id' => 214,
                'province_id' => 3,
                'name' => '厦门兴才职业技术学院',
            ),
            213 => 
            array (
                'id' => 215,
                'province_id' => 4,
                'name' => '兰州大学',
            ),
            214 => 
            array (
                'id' => 216,
                'province_id' => 4,
                'name' => '兰州理工大学',
            ),
            215 => 
            array (
                'id' => 217,
                'province_id' => 4,
                'name' => '甘肃农业大学',
            ),
            216 => 
            array (
                'id' => 218,
                'province_id' => 4,
                'name' => '西北师范大学',
            ),
            217 => 
            array (
                'id' => 219,
                'province_id' => 4,
                'name' => '兰州交通大学',
            ),
            218 => 
            array (
                'id' => 220,
                'province_id' => 4,
                'name' => '西北民族大学',
            ),
            219 => 
            array (
                'id' => 221,
                'province_id' => 4,
                'name' => '河西学院',
            ),
            220 => 
            array (
                'id' => 222,
                'province_id' => 4,
                'name' => '甘肃中医药大学',
            ),
            221 => 
            array (
                'id' => 223,
                'province_id' => 4,
                'name' => '天水师范学院',
            ),
            222 => 
            array (
                'id' => 224,
                'province_id' => 4,
                'name' => '陇东学院',
            ),
            223 => 
            array (
                'id' => 225,
                'province_id' => 4,
                'name' => '兰州财经大学',
            ),
            224 => 
            array (
                'id' => 226,
                'province_id' => 4,
                'name' => '甘肃政法学院',
            ),
            225 => 
            array (
                'id' => 227,
                'province_id' => 4,
                'name' => '兰州城市学院',
            ),
            226 => 
            array (
                'id' => 228,
                'province_id' => 4,
                'name' => '兰州文理学院',
            ),
            227 => 
            array (
                'id' => 229,
                'province_id' => 4,
                'name' => '兰州工业学院',
            ),
            228 => 
            array (
                'id' => 230,
                'province_id' => 4,
                'name' => '庆阳师范高等专科学校',
            ),
            229 => 
            array (
                'id' => 231,
                'province_id' => 4,
                'name' => '甘肃民族师范学院',
            ),
            230 => 
            array (
                'id' => 232,
                'province_id' => 4,
                'name' => '兰州石化职业技术学院',
            ),
            231 => 
            array (
                'id' => 233,
                'province_id' => 4,
                'name' => '兰州职业技术学院',
            ),
            232 => 
            array (
                'id' => 234,
                'province_id' => 4,
                'name' => '甘肃林业职业技术学院',
            ),
            233 => 
            array (
                'id' => 235,
                'province_id' => 4,
                'name' => '甘肃建筑职业技术学院',
            ),
            234 => 
            array (
                'id' => 236,
                'province_id' => 4,
                'name' => '兰州外语职业学院',
            ),
            235 => 
            array (
                'id' => 237,
                'province_id' => 4,
                'name' => '兰州资源环境职业技术学院',
            ),
            236 => 
            array (
                'id' => 238,
                'province_id' => 4,
                'name' => '甘肃农业职业技术学院',
            ),
            237 => 
            array (
                'id' => 239,
                'province_id' => 4,
                'name' => '甘肃畜牧业工程职业技术学院',
            ),
            238 => 
            array (
                'id' => 240,
                'province_id' => 4,
                'name' => '酒泉职业技术学院',
            ),
            239 => 
            array (
                'id' => 241,
                'province_id' => 4,
                'name' => '甘肃警察职业学院',
            ),
            240 => 
            array (
                'id' => 242,
                'province_id' => 4,
                'name' => '甘肃工业职业技术学院',
            ),
            241 => 
            array (
                'id' => 243,
                'province_id' => 4,
                'name' => '甘肃交通职业技术学院',
            ),
            242 => 
            array (
                'id' => 244,
                'province_id' => 4,
                'name' => '定西师范高等专科学校',
            ),
            243 => 
            array (
                'id' => 245,
                'province_id' => 4,
                'name' => '陇南师范高等专科学校',
            ),
            244 => 
            array (
                'id' => 246,
                'province_id' => 4,
                'name' => '甘肃医学院',
            ),
            245 => 
            array (
                'id' => 247,
                'province_id' => 4,
                'name' => '武威职业学院',
            ),
            246 => 
            array (
                'id' => 248,
                'province_id' => 4,
                'name' => '张掖医学高等专科学校',
            ),
            247 => 
            array (
                'id' => 249,
                'province_id' => 5,
                'name' => '广州航海学院',
            ),
            248 => 
            array (
                'id' => 250,
                'province_id' => 5,
                'name' => '民办南华工商学院',
            ),
            249 => 
            array (
                'id' => 251,
                'province_id' => 5,
                'name' => '广州民航职业技术学院',
            ),
            250 => 
            array (
                'id' => 252,
                'province_id' => 5,
                'name' => '广东水利电力职业技术学院',
            ),
            251 => 
            array (
                'id' => 253,
                'province_id' => 5,
                'name' => '广东轻工职业技术学院',
            ),
            252 => 
            array (
                'id' => 254,
                'province_id' => 5,
                'name' => '佛山职业技术学院',
            ),
            253 => 
            array (
                'id' => 255,
                'province_id' => 5,
                'name' => '广东交通职业技术学院',
            ),
            254 => 
            array (
                'id' => 256,
                'province_id' => 5,
                'name' => '广东农工商职业技术学院',
            ),
            255 => 
            array (
                'id' => 257,
                'province_id' => 5,
                'name' => '广东新安职业技术学院',
            ),
            256 => 
            array (
                'id' => 258,
                'province_id' => 5,
                'name' => '顺德职业技术学院',
            ),
            257 => 
            array (
                'id' => 260,
                'province_id' => 5,
                'name' => '深圳职业技术学院',
            ),
            258 => 
            array (
                'id' => 261,
                'province_id' => 5,
                'name' => '广东松山职业技术学院',
            ),
            259 => 
            array (
                'id' => 262,
                'province_id' => 5,
                'name' => '番禺职业技术学院',
            ),
            260 => 
            array (
                'id' => 263,
                'province_id' => 5,
                'name' => '广东工程职业技术学院',
            ),
            261 => 
            array (
                'id' => 264,
                'province_id' => 5,
                'name' => '广州现代信息工程职业技术学院',
            ),
            262 => 
            array (
                'id' => 265,
                'province_id' => 5,
                'name' => '广东理工职业学院',
            ),
            263 => 
            array (
                'id' => 266,
                'province_id' => 5,
                'name' => '广州华立科技职业学院',
            ),
            264 => 
            array (
                'id' => 267,
                'province_id' => 5,
                'name' => '广州城市职业学院',
            ),
            265 => 
            array (
                'id' => 268,
                'province_id' => 5,
                'name' => '广州华南商贸职业学院',
            ),
            266 => 
            array (
                'id' => 269,
                'province_id' => 5,
                'name' => '汕尾职业技术学院',
            ),
            267 => 
            array (
                'id' => 270,
                'province_id' => 5,
                'name' => '广东财经职业学院',
            ),
            268 => 
            array (
                'id' => 271,
                'province_id' => 5,
                'name' => '广东机电职业技术学院',
            ),
            269 => 
            array (
                'id' => 272,
                'province_id' => 5,
                'name' => '广东建设职业技术学院',
            ),
            270 => 
            array (
                'id' => 273,
                'province_id' => 5,
                'name' => '揭阳职业技术学院',
            ),
            271 => 
            array (
                'id' => 274,
                'province_id' => 5,
                'name' => '广东司法警官职业学院',
            ),
            272 => 
            array (
                'id' => 275,
                'province_id' => 5,
                'name' => '广东建华职业学院',
            ),
            273 => 
            array (
                'id' => 276,
                'province_id' => 5,
                'name' => '广东工贸职业技术学院',
            ),
            274 => 
            array (
                'id' => 277,
                'province_id' => 5,
                'name' => '广东亚视演艺职业学院',
            ),
            275 => 
            array (
                'id' => 278,
                'province_id' => 5,
                'name' => '清远职业技术学院',
            ),
            276 => 
            array (
                'id' => 279,
                'province_id' => 5,
                'name' => '广东女子职业技术学院',
            ),
            277 => 
            array (
                'id' => 280,
                'province_id' => 5,
                'name' => '广东邮电职业技术学院',
            ),
            278 => 
            array (
                'id' => 281,
                'province_id' => 5,
                'name' => '广东省岭南职业技术学院',
            ),
            279 => 
            array (
                'id' => 282,
                'province_id' => 5,
                'name' => '广东省外语艺术职业学院',
            ),
            280 => 
            array (
                'id' => 283,
                'province_id' => 5,
                'name' => '广东职业技术学院',
            ),
            281 => 
            array (
                'id' => 284,
                'province_id' => 5,
                'name' => '罗定职业技术学院',
            ),
            282 => 
            array (
                'id' => 285,
                'province_id' => 5,
                'name' => '阳江职业技术学院',
            ),
            283 => 
            array (
                'id' => 286,
                'province_id' => 5,
                'name' => '河源职业技术学院',
            ),
            284 => 
            array (
                'id' => 287,
                'province_id' => 5,
                'name' => '深圳信息职业技术学院',
            ),
            285 => 
            array (
                'id' => 288,
                'province_id' => 5,
                'name' => '汕头职业技术学院',
            ),
            286 => 
            array (
                'id' => 289,
                'province_id' => 5,
                'name' => '广东科学技术职业学院',
            ),
            287 => 
            array (
                'id' => 290,
                'province_id' => 5,
                'name' => '南海东软信息技术职业学院',
            ),
            288 => 
            array (
                'id' => 291,
                'province_id' => 5,
                'name' => '广东体育职业技术学院',
            ),
            289 => 
            array (
                'id' => 292,
                'province_id' => 5,
                'name' => '广东化工制药职业技术学院',
            ),
            290 => 
            array (
                'id' => 293,
                'province_id' => 5,
                'name' => '肇庆医学高等专科学校',
            ),
            291 => 
            array (
                'id' => 294,
                'province_id' => 5,
                'name' => '广东行政职业学院',
            ),
            292 => 
            array (
                'id' => 295,
                'province_id' => 5,
                'name' => '广州康大职业技术学院',
            ),
            293 => 
            array (
                'id' => 296,
                'province_id' => 5,
                'name' => '珠海艺术职业学院',
            ),
            294 => 
            array (
                'id' => 297,
                'province_id' => 5,
                'name' => '茂名职业技术学院',
            ),
            295 => 
            array (
                'id' => 298,
                'province_id' => 5,
                'name' => '肇庆科技职业技术学院',
            ),
            296 => 
            array (
                'id' => 299,
                'province_id' => 5,
                'name' => '肇庆工商职业技术学院',
            ),
            297 => 
            array (
                'id' => 300,
                'province_id' => 5,
                'name' => '惠州经济职业技术学院',
            ),
            298 => 
            array (
                'id' => 301,
                'province_id' => 5,
                'name' => '珠海城市职业技术学院',
            ),
            299 => 
            array (
                'id' => 302,
                'province_id' => 5,
                'name' => '广州科技职业技术学院',
            ),
            300 => 
            array (
                'id' => 303,
                'province_id' => 5,
                'name' => '广州工程技术职业学院',
            ),
            301 => 
            array (
                'id' => 304,
                'province_id' => 5,
                'name' => '广州南洋理工职业学院',
            ),
            302 => 
            array (
                'id' => 305,
                'province_id' => 5,
                'name' => '广东体育职业技术学院',
            ),
            303 => 
            array (
                'id' => 306,
                'province_id' => 5,
                'name' => '广州涉外经济职业技术学院',
            ),
            304 => 
            array (
                'id' => 307,
                'province_id' => 5,
                'name' => '广东文艺职业学院',
            ),
            305 => 
            array (
                'id' => 308,
                'province_id' => 5,
                'name' => '广州体育职业技术学院',
            ),
            306 => 
            array (
                'id' => 309,
                'province_id' => 5,
                'name' => '中山火炬职业技术学院',
            ),
            307 => 
            array (
                'id' => 310,
                'province_id' => 5,
                'name' => '江门职业技术学院',
            ),
            308 => 
            array (
                'id' => 311,
                'province_id' => 5,
                'name' => '广州工商学院',
            ),
            309 => 
            array (
                'id' => 312,
                'province_id' => 5,
                'name' => '广东科技学院',
            ),
            310 => 
            array (
                'id' => 314,
                'province_id' => 5,
                'name' => '广州铁路职业技术学院',
            ),
            311 => 
            array (
                'id' => 315,
                'province_id' => 5,
                'name' => '中山大学',
            ),
            312 => 
            array (
                'id' => 316,
                'province_id' => 5,
                'name' => '华南理工大学',
            ),
            313 => 
            array (
                'id' => 317,
                'province_id' => 5,
                'name' => '暨南大学',
            ),
            314 => 
            array (
                'id' => 318,
                'province_id' => 5,
                'name' => '汕头大学',
            ),
            315 => 
            array (
                'id' => 319,
                'province_id' => 5,
                'name' => '深圳大学',
            ),
            316 => 
            array (
                'id' => 320,
                'province_id' => 5,
                'name' => '五邑大学',
            ),
            317 => 
            array (
                'id' => 321,
                'province_id' => 5,
                'name' => '广东工业大学',
            ),
            318 => 
            array (
                'id' => 322,
                'province_id' => 5,
                'name' => '华南农业大学',
            ),
            319 => 
            array (
                'id' => 323,
                'province_id' => 5,
                'name' => '广东海洋大学',
            ),
            320 => 
            array (
                'id' => 324,
                'province_id' => 5,
                'name' => '广州中医药大学',
            ),
            321 => 
            array (
                'id' => 325,
                'province_id' => 5,
                'name' => '南方医科大学',
            ),
            322 => 
            array (
                'id' => 326,
                'province_id' => 5,
                'name' => '华南师范大学',
            ),
            323 => 
            array (
                'id' => 327,
                'province_id' => 5,
                'name' => '广东外语外贸大学',
            ),
            324 => 
            array (
                'id' => 328,
                'province_id' => 5,
                'name' => '广州大学',
            ),
            325 => 
            array (
                'id' => 329,
                'province_id' => 5,
                'name' => '佛山科学技术学院',
            ),
            326 => 
            array (
                'id' => 330,
                'province_id' => 5,
                'name' => '肇庆学院',
            ),
            327 => 
            array (
                'id' => 331,
                'province_id' => 5,
                'name' => '广东石油化工学院',
            ),
            328 => 
            array (
                'id' => 332,
                'province_id' => 5,
                'name' => '东莞理工学院',
            ),
            329 => 
            array (
                'id' => 333,
                'province_id' => 5,
                'name' => '仲恺农业工程学院',
            ),
            330 => 
            array (
                'id' => 334,
                'province_id' => 5,
                'name' => '广东医学院',
            ),
            331 => 
            array (
                'id' => 335,
                'province_id' => 5,
                'name' => '广州医科大学',
            ),
            332 => 
            array (
                'id' => 336,
                'province_id' => 5,
                'name' => '广东药学院',
            ),
            333 => 
            array (
                'id' => 337,
                'province_id' => 5,
                'name' => '韩山师范学院',
            ),
            334 => 
            array (
                'id' => 338,
                'province_id' => 5,
                'name' => '岭南师范学院',
            ),
            335 => 
            array (
                'id' => 339,
                'province_id' => 5,
                'name' => '惠州学院',
            ),
            336 => 
            array (
                'id' => 340,
                'province_id' => 5,
                'name' => '嘉应学院',
            ),
            337 => 
            array (
                'id' => 341,
                'province_id' => 5,
                'name' => '韶关学院',
            ),
            338 => 
            array (
                'id' => 342,
                'province_id' => 5,
                'name' => '广东财经大学',
            ),
            339 => 
            array (
                'id' => 343,
                'province_id' => 5,
                'name' => '广州体育学院',
            ),
            340 => 
            array (
                'id' => 344,
                'province_id' => 5,
                'name' => '广州美术学院',
            ),
            341 => 
            array (
                'id' => 345,
                'province_id' => 5,
                'name' => '星海音乐学院',
            ),
            342 => 
            array (
                'id' => 346,
                'province_id' => 5,
                'name' => '广东技术师范学院',
            ),
            343 => 
            array (
                'id' => 347,
                'province_id' => 5,
                'name' => '广东培正学院',
            ),
            344 => 
            array (
                'id' => 348,
                'province_id' => 5,
                'name' => '广东白云学院',
            ),
            345 => 
            array (
                'id' => 349,
                'province_id' => 5,
                'name' => '广东金融学院',
            ),
            346 => 
            array (
                'id' => 350,
                'province_id' => 5,
                'name' => '广东警官学院',
            ),
            347 => 
            array (
                'id' => 351,
                'province_id' => 5,
                'name' => '私立华联学院',
            ),
            348 => 
            array (
                'id' => 352,
                'province_id' => 6,
                'name' => '广西大学',
            ),
            349 => 
            array (
                'id' => 353,
                'province_id' => 6,
                'name' => '广西医科大学',
            ),
            350 => 
            array (
                'id' => 354,
                'province_id' => 6,
                'name' => '广西师范大学',
            ),
            351 => 
            array (
                'id' => 355,
                'province_id' => 6,
                'name' => '桂林电子科技大学',
            ),
            352 => 
            array (
                'id' => 356,
                'province_id' => 6,
                'name' => '桂林理工大学',
            ),
            353 => 
            array (
                'id' => 357,
                'province_id' => 6,
                'name' => '广西科技大学',
            ),
            354 => 
            array (
                'id' => 358,
                'province_id' => 6,
                'name' => '广西中医药大学',
            ),
            355 => 
            array (
                'id' => 359,
                'province_id' => 6,
                'name' => '桂林医学院',
            ),
            356 => 
            array (
                'id' => 361,
                'province_id' => 6,
                'name' => '右江民族医学院',
            ),
            357 => 
            array (
                'id' => 362,
                'province_id' => 6,
                'name' => '广西师范学院',
            ),
            358 => 
            array (
                'id' => 363,
                'province_id' => 6,
                'name' => '玉林师范学院',
            ),
            359 => 
            array (
                'id' => 364,
                'province_id' => 6,
                'name' => '河池学院',
            ),
            360 => 
            array (
                'id' => 365,
                'province_id' => 6,
                'name' => '广西艺术学院',
            ),
            361 => 
            array (
                'id' => 366,
                'province_id' => 6,
                'name' => '广西财经学院',
            ),
            362 => 
            array (
                'id' => 367,
                'province_id' => 6,
                'name' => '广西民族大学',
            ),
            363 => 
            array (
                'id' => 368,
                'province_id' => 6,
                'name' => '贺州学院',
            ),
            364 => 
            array (
                'id' => 369,
                'province_id' => 6,
                'name' => '钦州学院',
            ),
            365 => 
            array (
                'id' => 370,
                'province_id' => 6,
                'name' => '百色学院',
            ),
            366 => 
            array (
                'id' => 371,
                'province_id' => 6,
                'name' => '南宁学院',
            ),
            367 => 
            array (
                'id' => 372,
                'province_id' => 6,
                'name' => '桂林航天工业学院',
            ),
            368 => 
            array (
                'id' => 373,
                'province_id' => 6,
                'name' => '桂林师范高等专科学校',
            ),
            369 => 
            array (
                'id' => 374,
                'province_id' => 6,
                'name' => '柳州师范高等专科学校',
            ),
            370 => 
            array (
                'id' => 375,
                'province_id' => 6,
                'name' => '广西民族师范学院',
            ),
            371 => 
            array (
                'id' => 376,
                'province_id' => 6,
                'name' => '桂林旅游高等专科学校',
            ),
            372 => 
            array (
                'id' => 377,
                'province_id' => 6,
                'name' => '广西体育高等专科学校',
            ),
            373 => 
            array (
                'id' => 378,
                'province_id' => 6,
                'name' => '广西机电职业技术学院',
            ),
            374 => 
            array (
                'id' => 379,
                'province_id' => 6,
                'name' => '南宁职业技术学院',
            ),
            375 => 
            array (
                'id' => 380,
                'province_id' => 6,
                'name' => '广西职业技术学院',
            ),
            376 => 
            array (
                'id' => 381,
                'province_id' => 6,
                'name' => '柳州职业技术学院',
            ),
            377 => 
            array (
                'id' => 382,
                'province_id' => 6,
                'name' => '广西国际商务职业技术学院',
            ),
            378 => 
            array (
                'id' => 383,
                'province_id' => 6,
                'name' => '广西水利电力职业技术学院',
            ),
            379 => 
            array (
                'id' => 384,
                'province_id' => 6,
                'name' => '广西交通职业技术学院',
            ),
            380 => 
            array (
                'id' => 385,
                'province_id' => 6,
                'name' => '广西建设职业技术学院',
            ),
            381 => 
            array (
                'id' => 386,
                'province_id' => 6,
                'name' => '广西经贸职业技术学院',
            ),
            382 => 
            array (
                'id' => 387,
                'province_id' => 6,
                'name' => '广西演艺职业学院',
            ),
            383 => 
            array (
                'id' => 388,
                'province_id' => 6,
                'name' => '广西外国语学院',
            ),
            384 => 
            array (
                'id' => 389,
                'province_id' => 6,
                'name' => '广西电力职业技术学院',
            ),
            385 => 
            array (
                'id' => 390,
                'province_id' => 6,
                'name' => '广西工贸职业技术学院',
            ),
            386 => 
            array (
                'id' => 391,
                'province_id' => 6,
                'name' => '广西农业职业技术学院',
            ),
            387 => 
            array (
                'id' => 392,
                'province_id' => 6,
                'name' => '广西生态工程职业技术学院',
            ),
            388 => 
            array (
                'id' => 393,
                'province_id' => 6,
                'name' => '广西警官高等专科学校',
            ),
            389 => 
            array (
                'id' => 394,
                'province_id' => 6,
                'name' => '柳州医学高等专科学校',
            ),
            390 => 
            array (
                'id' => 395,
                'province_id' => 6,
                'name' => '广西工业职业技术学院',
            ),
            391 => 
            array (
                'id' => 396,
                'province_id' => 6,
                'name' => '广西城市职业学院',
            ),
            392 => 
            array (
                'id' => 397,
                'province_id' => 6,
                'name' => '广西现代职业技术学院',
            ),
            393 => 
            array (
                'id' => 398,
                'province_id' => 6,
                'name' => '贵港职业学院',
            ),
            394 => 
            array (
                'id' => 399,
                'province_id' => 6,
                'name' => '北海职业学院',
            ),
            395 => 
            array (
                'id' => 400,
                'province_id' => 6,
                'name' => '北海艺术设计学院',
            ),
            396 => 
            array (
                'id' => 401,
                'province_id' => 6,
                'name' => '桂林山水职业学院',
            ),
            397 => 
            array (
                'id' => 402,
                'province_id' => 6,
                'name' => '北海宏源足球职业学院',
            ),
            398 => 
            array (
                'id' => 403,
                'province_id' => 6,
                'name' => '柳州铁道职业技术学院',
            ),
            399 => 
            array (
                'id' => 404,
                'province_id' => 6,
                'name' => '广西英华国际职业学院',
            ),
            400 => 
            array (
                'id' => 405,
                'province_id' => 7,
                'name' => '遵义医药高等专科学校',
            ),
            401 => 
            array (
                'id' => 406,
                'province_id' => 7,
                'name' => '黔南民族医学高等专科学校',
            ),
            402 => 
            array (
                'id' => 407,
                'province_id' => 7,
                'name' => '兴义民族师范学院',
            ),
            403 => 
            array (
                'id' => 408,
                'province_id' => 7,
                'name' => '六盘水师范学院',
            ),
            404 => 
            array (
                'id' => 409,
                'province_id' => 7,
                'name' => '贵州商学院',
            ),
            405 => 
            array (
                'id' => 410,
                'province_id' => 7,
                'name' => '贵州交通职业技术学院',
            ),
            406 => 
            array (
                'id' => 411,
                'province_id' => 7,
                'name' => '贵州警官职业学院',
            ),
            407 => 
            array (
                'id' => 412,
                'province_id' => 7,
                'name' => '贵州理工职业技术学院',
            ),
            408 => 
            array (
                'id' => 413,
                'province_id' => 7,
                'name' => '贵州航天职业技术学院',
            ),
            409 => 
            array (
                'id' => 414,
                'province_id' => 7,
                'name' => '贵州电子信息职业技术学院',
            ),
            410 => 
            array (
                'id' => 415,
                'province_id' => 7,
                'name' => '安顺职业技术学院',
            ),
            411 => 
            array (
                'id' => 416,
                'province_id' => 7,
                'name' => '贵州工业职业技术学院',
            ),
            412 => 
            array (
                'id' => 417,
                'province_id' => 7,
                'name' => '贵州电力职业技术学院',
            ),
            413 => 
            array (
                'id' => 418,
                'province_id' => 7,
                'name' => '遵义职业技术学院',
            ),
            414 => 
            array (
                'id' => 419,
                'province_id' => 7,
                'name' => '黔东南民族职业技术学院',
            ),
            415 => 
            array (
                'id' => 420,
                'province_id' => 7,
                'name' => '黔南民族职业技术学院',
            ),
            416 => 
            array (
                'id' => 421,
                'province_id' => 7,
                'name' => '贵州城市职业学院',
            ),
            417 => 
            array (
                'id' => 422,
                'province_id' => 7,
                'name' => '六盘水职业技术学院',
            ),
            418 => 
            array (
                'id' => 423,
                'province_id' => 7,
                'name' => '铜仁职业技术学院',
            ),
            419 => 
            array (
                'id' => 425,
                'province_id' => 7,
                'name' => '贵州轻工职业技术学院',
            ),
            420 => 
            array (
                'id' => 426,
                'province_id' => 7,
                'name' => '贵州大学',
            ),
            421 => 
            array (
                'id' => 427,
                'province_id' => 7,
                'name' => '贵州师范大学',
            ),
            422 => 
            array (
                'id' => 428,
                'province_id' => 7,
                'name' => '贵州医科大学',
            ),
            423 => 
            array (
                'id' => 429,
                'province_id' => 7,
                'name' => '遵义医学院',
            ),
            424 => 
            array (
                'id' => 430,
                'province_id' => 7,
                'name' => '贵阳中医学院',
            ),
            425 => 
            array (
                'id' => 431,
                'province_id' => 7,
                'name' => '黔南民族师范学院',
            ),
            426 => 
            array (
                'id' => 432,
                'province_id' => 7,
                'name' => '遵义师范学院',
            ),
            427 => 
            array (
                'id' => 433,
                'province_id' => 7,
                'name' => '贵州工程应用技术学院',
            ),
            428 => 
            array (
                'id' => 434,
                'province_id' => 7,
                'name' => '贵州财经大学',
            ),
            429 => 
            array (
                'id' => 435,
                'province_id' => 7,
                'name' => '贵州民族大学',
            ),
            430 => 
            array (
                'id' => 436,
                'province_id' => 7,
                'name' => '凯里学院',
            ),
            431 => 
            array (
                'id' => 437,
                'province_id' => 7,
                'name' => '贵阳学院',
            ),
            432 => 
            array (
                'id' => 438,
                'province_id' => 7,
                'name' => '安顺学院',
            ),
            433 => 
            array (
                'id' => 439,
                'province_id' => 7,
                'name' => '铜仁学院',
            ),
            434 => 
            array (
                'id' => 440,
                'province_id' => 8,
                'name' => '海南大学',
            ),
            435 => 
            array (
                'id' => 441,
                'province_id' => 8,
                'name' => '华南热带农业大学',
            ),
            436 => 
            array (
                'id' => 442,
                'province_id' => 8,
                'name' => '海南医学院',
            ),
            437 => 
            array (
                'id' => 443,
                'province_id' => 8,
                'name' => '海南师范大学',
            ),
            438 => 
            array (
                'id' => 444,
                'province_id' => 8,
                'name' => '琼州学院',
            ),
            439 => 
            array (
                'id' => 445,
                'province_id' => 8,
                'name' => '三亚卓达旅游职业学院',
            ),
            440 => 
            array (
                'id' => 446,
                'province_id' => 8,
                'name' => '海南职业技术学院',
            ),
            441 => 
            array (
                'id' => 447,
                'province_id' => 8,
                'name' => '海口经济职业技术学院',
            ),
            442 => 
            array (
                'id' => 448,
                'province_id' => 8,
                'name' => '海南万和信息职业技术学院',
            ),
            443 => 
            array (
                'id' => 449,
                'province_id' => 8,
                'name' => '海南经贸职业技术学院',
            ),
            444 => 
            array (
                'id' => 450,
                'province_id' => 8,
                'name' => '海南软件职业技术学院',
            ),
            445 => 
            array (
                'id' => 451,
                'province_id' => 8,
                'name' => '三亚航空旅游职业学院',
            ),
            446 => 
            array (
                'id' => 452,
                'province_id' => 8,
                'name' => '海南外国语职业学院',
            ),
            447 => 
            array (
                'id' => 453,
                'province_id' => 8,
                'name' => '海南政法职业学院',
            ),
            448 => 
            array (
                'id' => 454,
                'province_id' => 8,
                'name' => '琼台师范高等专科学校',
            ),
            449 => 
            array (
                'id' => 455,
                'province_id' => 2,
                'name' => '华北电力大学',
            ),
            450 => 
            array (
                'id' => 456,
                'province_id' => 9,
                'name' => '河北大学',
            ),
            451 => 
            array (
                'id' => 457,
                'province_id' => 27,
                'name' => '河北工业大学',
            ),
            452 => 
            array (
                'id' => 458,
                'province_id' => 9,
                'name' => '燕山大学',
            ),
            453 => 
            array (
                'id' => 459,
                'province_id' => 9,
                'name' => '河北科技大学',
            ),
            454 => 
            array (
                'id' => 460,
                'province_id' => 9,
                'name' => '河北农业大学',
            ),
            455 => 
            array (
                'id' => 461,
                'province_id' => 9,
                'name' => '河北医科大学',
            ),
            456 => 
            array (
                'id' => 462,
                'province_id' => 9,
                'name' => '河北师范大学',
            ),
            457 => 
            array (
                'id' => 463,
                'province_id' => 9,
                'name' => '河北经贸大学',
            ),
            458 => 
            array (
                'id' => 464,
                'province_id' => 9,
                'name' => '中国人民武装警察部队学院',
            ),
            459 => 
            array (
                'id' => 465,
                'province_id' => 9,
                'name' => '中央司法警官学院',
            ),
            460 => 
            array (
                'id' => 466,
                'province_id' => 9,
                'name' => '华北科技学院',
            ),
            461 => 
            array (
                'id' => 467,
                'province_id' => 9,
                'name' => '华北理工大学',
            ),
            462 => 
            array (
                'id' => 468,
                'province_id' => 9,
                'name' => '石家庄铁道大学',
            ),
            463 => 
            array (
                'id' => 469,
                'province_id' => 9,
                'name' => '河北工程大学',
            ),
            464 => 
            array (
                'id' => 470,
                'province_id' => 9,
                'name' => '河北建筑工程学院',
            ),
            465 => 
            array (
                'id' => 471,
                'province_id' => 9,
                'name' => '石家庄经济学院',
            ),
            466 => 
            array (
                'id' => 472,
                'province_id' => 9,
                'name' => '华北煤炭医学院',
            ),
            467 => 
            array (
                'id' => 473,
                'province_id' => 9,
                'name' => '承德医学院',
            ),
            468 => 
            array (
                'id' => 474,
                'province_id' => 9,
                'name' => '河北科技师范大学',
            ),
            469 => 
            array (
                'id' => 475,
                'province_id' => 9,
                'name' => '邢台学院',
            ),
            470 => 
            array (
                'id' => 476,
                'province_id' => 9,
                'name' => '唐山师范学院',
            ),
            471 => 
            array (
                'id' => 477,
                'province_id' => 9,
                'name' => '廊坊师范学院',
            ),
            472 => 
            array (
                'id' => 478,
                'province_id' => 9,
                'name' => '河北体育学院',
            ),
            473 => 
            array (
                'id' => 479,
                'province_id' => 9,
                'name' => '唐山学院',
            ),
            474 => 
            array (
                'id' => 480,
                'province_id' => 9,
                'name' => '邯郸学院',
            ),
            475 => 
            array (
                'id' => 481,
                'province_id' => 9,
                'name' => '石家庄学院',
            ),
            476 => 
            array (
                'id' => 482,
                'province_id' => 9,
                'name' => '河北北方学院',
            ),
            477 => 
            array (
                'id' => 483,
                'province_id' => 9,
                'name' => '衡水学院',
            ),
            478 => 
            array (
                'id' => 484,
                'province_id' => 9,
                'name' => '防灾科技学院',
            ),
            479 => 
            array (
                'id' => 485,
                'province_id' => 9,
                'name' => '北华航天工业学院',
            ),
            480 => 
            array (
                'id' => 486,
                'province_id' => 9,
                'name' => '石家庄医学高等专科学校',
            ),
            481 => 
            array (
                'id' => 487,
                'province_id' => 9,
                'name' => '承德石油高等专科学校',
            ),
            482 => 
            array (
                'id' => 488,
                'province_id' => 9,
                'name' => '河北工程技术高等专科学校',
            ),
            483 => 
            array (
                'id' => 489,
                'province_id' => 9,
                'name' => '邢台医学高等专科学校',
            ),
            484 => 
            array (
                'id' => 490,
                'province_id' => 9,
                'name' => '保定学院',
            ),
            485 => 
            array (
                'id' => 491,
                'province_id' => 9,
                'name' => '承德民族师范高等专科学校',
            ),
            486 => 
            array (
                'id' => 492,
                'province_id' => 9,
                'name' => '沧州师范学院',
            ),
            487 => 
            array (
                'id' => 493,
                'province_id' => 9,
                'name' => '保定金融高等专科学校',
            ),
            488 => 
            array (
                'id' => 494,
                'province_id' => 9,
                'name' => '石家庄职业技术学院',
            ),
            489 => 
            array (
                'id' => 495,
                'province_id' => 9,
                'name' => '邢台职业技术学院',
            ),
            490 => 
            array (
                'id' => 496,
                'province_id' => 9,
                'name' => '保定职业技术学院',
            ),
            491 => 
            array (
                'id' => 497,
                'province_id' => 9,
                'name' => '河北职业技术学院',
            ),
            492 => 
            array (
                'id' => 498,
                'province_id' => 9,
                'name' => '河北工业职业技术学院',
            ),
            493 => 
            array (
                'id' => 499,
                'province_id' => 9,
                'name' => '邯郸职业技术学院',
            ),
            494 => 
            array (
                'id' => 500,
                'province_id' => 9,
                'name' => '张家口职业技术学院',
            ),
            495 => 
            array (
                'id' => 501,
                'province_id' => 9,
                'name' => '石家庄铁路职业技术学院',
            ),
            496 => 
            array (
                'id' => 502,
                'province_id' => 9,
                'name' => '沧州职业技术学院',
            ),
            497 => 
            array (
                'id' => 503,
                'province_id' => 9,
                'name' => '承德职业学院',
            ),
            498 => 
            array (
                'id' => 504,
                'province_id' => 9,
                'name' => '河北能源职业技术学院',
            ),
            499 => 
            array (
                'id' => 505,
                'province_id' => 9,
                'name' => '石家庄外经贸职业学院',
            ),
        ));
        \DB::table('universities')->insert(array (
            0 => 
            array (
                'id' => 506,
                'province_id' => 9,
                'name' => '石家庄东方美术职业学院',
            ),
            1 => 
            array (
                'id' => 507,
                'province_id' => 9,
                'name' => '河北京都高尔夫职业学院',
            ),
            2 => 
            array (
                'id' => 508,
                'province_id' => 9,
                'name' => '石家庄计算机职业学院',
            ),
            3 => 
            array (
                'id' => 509,
                'province_id' => 9,
                'name' => '河北建材职业技术学院',
            ),
            4 => 
            array (
                'id' => 510,
                'province_id' => 9,
                'name' => '河北政法职业学院',
            ),
            5 => 
            array (
                'id' => 511,
                'province_id' => 9,
                'name' => '河北远东职业技术学院',
            ),
            6 => 
            array (
                'id' => 512,
                'province_id' => 9,
                'name' => '石家庄信息工程职业学院',
            ),
            7 => 
            array (
                'id' => 513,
                'province_id' => 9,
                'name' => '河北石油职业技术学院',
            ),
            8 => 
            array (
                'id' => 514,
                'province_id' => 9,
                'name' => '衡水职业技术学院',
            ),
            9 => 
            array (
                'id' => 515,
                'province_id' => 9,
                'name' => '秦皇岛职业技术学院',
            ),
            10 => 
            array (
                'id' => 516,
                'province_id' => 9,
                'name' => '邯郸中原外国语职业学院',
            ),
            11 => 
            array (
                'id' => 517,
                'province_id' => 9,
                'name' => '唐山职业技术学院',
            ),
            12 => 
            array (
                'id' => 518,
                'province_id' => 9,
                'name' => '石家庄法商职业学院',
            ),
            13 => 
            array (
                'id' => 519,
                'province_id' => 9,
                'name' => '河北传媒学院',
            ),
            14 => 
            array (
                'id' => 520,
                'province_id' => 9,
                'name' => '石家庄外国语职业学院',
            ),
            15 => 
            array (
                'id' => 521,
                'province_id' => 9,
                'name' => '唐山工业职业技术学院',
            ),
            16 => 
            array (
                'id' => 522,
                'province_id' => 9,
                'name' => '河北外国语职业学院',
            ),
            17 => 
            array (
                'id' => 523,
                'province_id' => 9,
                'name' => '河北化工医药职业技术学院',
            ),
            18 => 
            array (
                'id' => 524,
                'province_id' => 9,
                'name' => '河北交通职业技术学院',
            ),
            19 => 
            array (
                'id' => 525,
                'province_id' => 9,
                'name' => '河北旅游职业学院',
            ),
            20 => 
            array (
                'id' => 526,
                'province_id' => 9,
                'name' => '河北省艺术职业学院',
            ),
            21 => 
            array (
                'id' => 527,
                'province_id' => 9,
                'name' => '河北软件职业技术学院',
            ),
            22 => 
            array (
                'id' => 528,
                'province_id' => 9,
                'name' => '保定虎振职业技术学院',
            ),
            23 => 
            array (
                'id' => 529,
                'province_id' => 9,
                'name' => '保定电力职业技术学院',
            ),
            24 => 
            array (
                'id' => 530,
                'province_id' => 9,
                'name' => '河北机电职业技术学院',
            ),
            25 => 
            array (
                'id' => 531,
                'province_id' => 9,
                'name' => '渤海石油职业学院',
            ),
            26 => 
            array (
                'id' => 532,
                'province_id' => 9,
                'name' => '沧州医学高等专科学校',
            ),
            27 => 
            array (
                'id' => 533,
                'province_id' => 9,
                'name' => '廊坊职业技术学院',
            ),
            28 => 
            array (
                'id' => 534,
                'province_id' => 9,
                'name' => '唐山科技职业技术学院',
            ),
            29 => 
            array (
                'id' => 535,
                'province_id' => 9,
                'name' => '石家庄邮电职业技术学院',
            ),
            30 => 
            array (
                'id' => 536,
                'province_id' => 9,
                'name' => '河北公安警察职业学院',
            ),
            31 => 
            array (
                'id' => 537,
                'province_id' => 9,
                'name' => '石家庄工商职业学院',
            ),
            32 => 
            array (
                'id' => 539,
                'province_id' => 9,
                'name' => '石家庄外语翻译职业学院',
            ),
            33 => 
            array (
                'id' => 540,
                'province_id' => 9,
                'name' => '河北司法警官职业学院',
            ),
            34 => 
            array (
                'id' => 541,
                'province_id' => 9,
                'name' => '石家庄科技信息职业学院',
            ),
            35 => 
            array (
                'id' => 542,
                'province_id' => 9,
                'name' => '河北通信职业技术学院',
            ),
            36 => 
            array (
                'id' => 543,
                'province_id' => 9,
                'name' => '河北女子职业技术学院',
            ),
            37 => 
            array (
                'id' => 544,
                'province_id' => 10,
                'name' => '铁道警察学院',
            ),
            38 => 
            array (
                'id' => 545,
                'province_id' => 10,
                'name' => '郑州电力高等专科学校',
            ),
            39 => 
            array (
                'id' => 546,
                'province_id' => 10,
                'name' => '河南机电高等专科学校',
            ),
            40 => 
            array (
                'id' => 547,
                'province_id' => 10,
                'name' => '河南工程学院',
            ),
            41 => 
            array (
                'id' => 548,
                'province_id' => 10,
                'name' => '洛阳理工学院',
            ),
            42 => 
            array (
                'id' => 549,
                'province_id' => 10,
                'name' => '河南牧业经济学院',
            ),
            43 => 
            array (
                'id' => 550,
                'province_id' => 10,
                'name' => '信阳农林学院',
            ),
            44 => 
            array (
                'id' => 551,
                'province_id' => 10,
                'name' => '郑州澍青医学高等专科学校',
            ),
            45 => 
            array (
                'id' => 552,
                'province_id' => 10,
                'name' => '南阳医学高等专科学校',
            ),
            46 => 
            array (
                'id' => 553,
                'province_id' => 10,
                'name' => '漯河医学高等专科学校',
            ),
            47 => 
            array (
                'id' => 554,
                'province_id' => 10,
                'name' => '新乡师范高等专科学校',
            ),
            48 => 
            array (
                'id' => 555,
                'province_id' => 10,
                'name' => '商丘医学高等专科学校',
            ),
            49 => 
            array (
                'id' => 556,
                'province_id' => 10,
                'name' => '郑州师范高等专科学校',
            ),
            50 => 
            array (
                'id' => 557,
                'province_id' => 10,
                'name' => '焦作师范高等专科学校',
            ),
            51 => 
            array (
                'id' => 559,
                'province_id' => 10,
                'name' => '河南财政税务高等专科学校',
            ),
            52 => 
            array (
                'id' => 560,
                'province_id' => 10,
                'name' => '河南警察学院',
            ),
            53 => 
            array (
                'id' => 561,
                'province_id' => 10,
                'name' => '三门峡职业技术学院',
            ),
            54 => 
            array (
                'id' => 562,
                'province_id' => 10,
                'name' => '河南职业技术学院',
            ),
            55 => 
            array (
                'id' => 563,
                'province_id' => 10,
                'name' => '郑州铁路职业技术学院',
            ),
            56 => 
            array (
                'id' => 564,
                'province_id' => 10,
                'name' => '黄河水利职业技术学院',
            ),
            57 => 
            array (
                'id' => 565,
                'province_id' => 10,
                'name' => '漯河职业技术学院',
            ),
            58 => 
            array (
                'id' => 566,
                'province_id' => 10,
                'name' => '许昌职业技术学院',
            ),
            59 => 
            array (
                'id' => 567,
                'province_id' => 10,
                'name' => '郑州华信职业技术学院',
            ),
            60 => 
            array (
                'id' => 568,
                'province_id' => 10,
                'name' => '郑州科技学院',
            ),
            61 => 
            array (
                'id' => 569,
                'province_id' => 10,
                'name' => '平顶山工业职业技术学院',
            ),
            62 => 
            array (
                'id' => 570,
                'province_id' => 10,
                'name' => '商丘职业技术学院',
            ),
            63 => 
            array (
                'id' => 571,
                'province_id' => 10,
                'name' => '河南经贸职业学院',
            ),
            64 => 
            array (
                'id' => 572,
                'province_id' => 10,
                'name' => '信阳职业技术学院',
            ),
            65 => 
            array (
                'id' => 573,
                'province_id' => 10,
                'name' => '郑州职业技术学院',
            ),
            66 => 
            array (
                'id' => 574,
                'province_id' => 10,
                'name' => '永城职业学院',
            ),
            67 => 
            array (
                'id' => 575,
                'province_id' => 10,
                'name' => '河南交通职业技术学院',
            ),
            68 => 
            array (
                'id' => 576,
                'province_id' => 10,
                'name' => '郑州电子信息职业技术学院',
            ),
            69 => 
            array (
                'id' => 577,
                'province_id' => 10,
                'name' => '郑州工业安全职业学院',
            ),
            70 => 
            array (
                'id' => 578,
                'province_id' => 10,
                'name' => '嵩山少林武术职业学院',
            ),
            71 => 
            array (
                'id' => 579,
                'province_id' => 10,
                'name' => '郑州旅游职业学院',
            ),
            72 => 
            array (
                'id' => 580,
                'province_id' => 10,
                'name' => '河南农业职业学院',
            ),
            73 => 
            array (
                'id' => 581,
                'province_id' => 10,
                'name' => '河南司法警官职业学院',
            ),
            74 => 
            array (
                'id' => 582,
                'province_id' => 10,
                'name' => '河南工业职业技术学院',
            ),
            75 => 
            array (
                'id' => 583,
                'province_id' => 10,
                'name' => '濮阳职业技术学院',
            ),
            76 => 
            array (
                'id' => 584,
                'province_id' => 10,
                'name' => '鹤壁职业技术学院',
            ),
            77 => 
            array (
                'id' => 585,
                'province_id' => 10,
                'name' => '济源职业技术学院',
            ),
            78 => 
            array (
                'id' => 586,
                'province_id' => 10,
                'name' => '周口职业技术学院',
            ),
            79 => 
            array (
                'id' => 587,
                'province_id' => 10,
                'name' => '郑州财经学院',
            ),
            80 => 
            array (
                'id' => 588,
                'province_id' => 10,
                'name' => '黄河交通学院',
            ),
            81 => 
            array (
                'id' => 589,
                'province_id' => 10,
                'name' => '河南检查职业学院',
            ),
            82 => 
            array (
                'id' => 590,
                'province_id' => 10,
                'name' => '商丘工学院',
            ),
            83 => 
            array (
                'id' => 591,
                'province_id' => 10,
                'name' => '郑州信息科技职业学院',
            ),
            84 => 
            array (
                'id' => 592,
                'province_id' => 10,
                'name' => '河南质量工程职业学院',
            ),
            85 => 
            array (
                'id' => 593,
                'province_id' => 10,
                'name' => '河南工业贸易职业学院',
            ),
            86 => 
            array (
                'id' => 594,
                'province_id' => 10,
                'name' => '郑州大学',
            ),
            87 => 
            array (
                'id' => 595,
                'province_id' => 10,
                'name' => '河南大学',
            ),
            88 => 
            array (
                'id' => 596,
                'province_id' => 10,
                'name' => '河南科技大学',
            ),
            89 => 
            array (
                'id' => 597,
                'province_id' => 10,
                'name' => '河南农业大学',
            ),
            90 => 
            array (
                'id' => 598,
                'province_id' => 10,
                'name' => '河南师范大学',
            ),
            91 => 
            array (
                'id' => 599,
                'province_id' => 10,
                'name' => '河南理工大学',
            ),
            92 => 
            array (
                'id' => 600,
                'province_id' => 10,
                'name' => '河南工业大学',
            ),
            93 => 
            array (
                'id' => 601,
                'province_id' => 10,
                'name' => '华北水利水电大学',
            ),
            94 => 
            array (
                'id' => 602,
                'province_id' => 10,
                'name' => '郑州轻工业学院',
            ),
            95 => 
            array (
                'id' => 603,
                'province_id' => 10,
                'name' => '黄河科技学院',
            ),
            96 => 
            array (
                'id' => 604,
                'province_id' => 10,
                'name' => '河南城建学院',
            ),
            97 => 
            array (
                'id' => 605,
                'province_id' => 10,
                'name' => '中原工学院',
            ),
            98 => 
            array (
                'id' => 606,
                'province_id' => 10,
                'name' => '郑州航空工业管理学院',
            ),
            99 => 
            array (
                'id' => 607,
                'province_id' => 10,
                'name' => '河南中医学院',
            ),
            100 => 
            array (
                'id' => 608,
                'province_id' => 10,
                'name' => '新乡医学院',
            ),
            101 => 
            array (
                'id' => 609,
                'province_id' => 10,
                'name' => '信阳师范学院',
            ),
            102 => 
            array (
                'id' => 610,
                'province_id' => 10,
                'name' => '安阳师范学院',
            ),
            103 => 
            array (
                'id' => 611,
                'province_id' => 10,
                'name' => '商丘师范学院',
            ),
            104 => 
            array (
                'id' => 612,
                'province_id' => 10,
                'name' => '南阳师范学院',
            ),
            105 => 
            array (
                'id' => 613,
                'province_id' => 10,
                'name' => '周口师范学院',
            ),
            106 => 
            array (
                'id' => 614,
                'province_id' => 10,
                'name' => '洛阳师范学院',
            ),
            107 => 
            array (
                'id' => 615,
                'province_id' => 10,
                'name' => '河南财经政法大学',
            ),
            108 => 
            array (
                'id' => 616,
                'province_id' => 10,
                'name' => '黄淮学院',
            ),
            109 => 
            array (
                'id' => 617,
                'province_id' => 10,
                'name' => '河南科技学院',
            ),
            110 => 
            array (
                'id' => 618,
                'province_id' => 10,
                'name' => '许昌学院',
            ),
            111 => 
            array (
                'id' => 619,
                'province_id' => 10,
                'name' => '平顶山学院',
            ),
            112 => 
            array (
                'id' => 620,
                'province_id' => 10,
                'name' => '中州大学',
            ),
            113 => 
            array (
                'id' => 621,
                'province_id' => 10,
                'name' => '焦作大学',
            ),
            114 => 
            array (
                'id' => 622,
                'province_id' => 10,
                'name' => '洛阳大学',
            ),
            115 => 
            array (
                'id' => 623,
                'province_id' => 10,
                'name' => '南阳理工学院',
            ),
            116 => 
            array (
                'id' => 624,
                'province_id' => 10,
                'name' => '平原大学',
            ),
            117 => 
            array (
                'id' => 625,
                'province_id' => 10,
                'name' => '安阳工学院',
            ),
            118 => 
            array (
                'id' => 626,
                'province_id' => 10,
                'name' => '开封大学',
            ),
            119 => 
            array (
                'id' => 627,
                'province_id' => 11,
                'name' => '东北林业大学',
            ),
            120 => 
            array (
                'id' => 628,
                'province_id' => 11,
                'name' => '哈尔滨工业大学',
            ),
            121 => 
            array (
                'id' => 629,
                'province_id' => 11,
                'name' => '哈尔滨工程大学',
            ),
            122 => 
            array (
                'id' => 630,
                'province_id' => 11,
                'name' => '黑龙江大学',
            ),
            123 => 
            array (
                'id' => 631,
                'province_id' => 11,
                'name' => '佳木斯大学',
            ),
            124 => 
            array (
                'id' => 632,
                'province_id' => 11,
                'name' => '齐齐哈尔大学',
            ),
            125 => 
            array (
                'id' => 633,
                'province_id' => 11,
                'name' => '哈尔滨理工大学',
            ),
            126 => 
            array (
                'id' => 634,
                'province_id' => 11,
                'name' => '东北农业大学',
            ),
            127 => 
            array (
                'id' => 635,
                'province_id' => 11,
                'name' => '黑龙江八一农垦大学',
            ),
            128 => 
            array (
                'id' => 636,
                'province_id' => 11,
                'name' => '哈尔滨医科大学',
            ),
            129 => 
            array (
                'id' => 637,
                'province_id' => 11,
                'name' => '黑龙江中医药大学',
            ),
            130 => 
            array (
                'id' => 638,
                'province_id' => 11,
                'name' => '哈尔滨师范大学',
            ),
            131 => 
            array (
                'id' => 639,
                'province_id' => 11,
                'name' => '哈尔滨商业大学',
            ),
            132 => 
            array (
                'id' => 640,
                'province_id' => 11,
                'name' => '东北石油大学',
            ),
            133 => 
            array (
                'id' => 641,
                'province_id' => 11,
                'name' => '黑龙江科技大学',
            ),
            134 => 
            array (
                'id' => 642,
                'province_id' => 11,
                'name' => '黑龙江工程学院',
            ),
            135 => 
            array (
                'id' => 643,
                'province_id' => 11,
                'name' => '哈尔滨学院',
            ),
            136 => 
            array (
                'id' => 644,
                'province_id' => 11,
                'name' => '黑龙江东方学院',
            ),
            137 => 
            array (
                'id' => 645,
                'province_id' => 11,
                'name' => '齐齐哈尔医学院',
            ),
            138 => 
            array (
                'id' => 646,
                'province_id' => 11,
                'name' => '牡丹江大学',
            ),
            139 => 
            array (
                'id' => 647,
                'province_id' => 11,
                'name' => '牡丹江医学院',
            ),
            140 => 
            array (
                'id' => 648,
                'province_id' => 11,
                'name' => '牡丹江师范学院',
            ),
            141 => 
            array (
                'id' => 649,
                'province_id' => 11,
                'name' => '哈尔滨体育学院',
            ),
            142 => 
            array (
                'id' => 650,
                'province_id' => 11,
                'name' => '大庆师范学院',
            ),
            143 => 
            array (
                'id' => 651,
                'province_id' => 11,
                'name' => '绥化学院',
            ),
            144 => 
            array (
                'id' => 652,
                'province_id' => 11,
                'name' => '黑龙江工业学院',
            ),
            145 => 
            array (
                'id' => 653,
                'province_id' => 11,
                'name' => '黑河学院',
            ),
            146 => 
            array (
                'id' => 654,
                'province_id' => 11,
                'name' => '鹤岗师范高等专科学校',
            ),
            147 => 
            array (
                'id' => 655,
                'province_id' => 11,
                'name' => '哈尔滨金融学院 ',
            ),
            148 => 
            array (
                'id' => 656,
                'province_id' => 11,
                'name' => '齐齐哈尔高等师范专科学校',
            ),
            149 => 
            array (
                'id' => 657,
                'province_id' => 11,
                'name' => '大庆医学高等专科学校',
            ),
            150 => 
            array (
                'id' => 658,
                'province_id' => 11,
                'name' => '伊春职业学院',
            ),
            151 => 
            array (
                'id' => 659,
                'province_id' => 11,
                'name' => '黑龙江农业职业技术学院',
            ),
            152 => 
            array (
                'id' => 660,
                'province_id' => 11,
                'name' => '黑龙江建筑职业技术学院',
            ),
            153 => 
            array (
                'id' => 661,
                'province_id' => 11,
                'name' => '大庆职业学院',
            ),
            154 => 
            array (
                'id' => 662,
                'province_id' => 11,
                'name' => '齐齐哈尔工程学院',
            ),
            155 => 
            array (
                'id' => 663,
                'province_id' => 11,
                'name' => '黑龙江农业工程职业学院',
            ),
            156 => 
            array (
                'id' => 664,
                'province_id' => 11,
                'name' => '黑龙江林业职业技术学院',
            ),
            157 => 
            array (
                'id' => 665,
                'province_id' => 11,
                'name' => '黑龙江司法警官职业学院',
            ),
            158 => 
            array (
                'id' => 666,
                'province_id' => 11,
                'name' => '黑龙江农垦职业学院',
            ),
            159 => 
            array (
                'id' => 667,
                'province_id' => 11,
                'name' => '哈尔滨电力职业技术学院',
            ),
            160 => 
            array (
                'id' => 668,
                'province_id' => 11,
                'name' => '哈尔滨铁道职业技术学院',
            ),
            161 => 
            array (
                'id' => 669,
                'province_id' => 11,
                'name' => '大兴安岭职业学院',
            ),
            162 => 
            array (
                'id' => 670,
                'province_id' => 11,
                'name' => '黑龙江畜牧兽医职业学院',
            ),
            163 => 
            array (
                'id' => 671,
                'province_id' => 11,
                'name' => '黑龙江农业经济职业学院',
            ),
            164 => 
            array (
                'id' => 672,
                'province_id' => 11,
                'name' => '哈尔滨职业技术学院',
            ),
            165 => 
            array (
                'id' => 673,
                'province_id' => 11,
                'name' => '哈尔滨信息工程学院',
            ),
            166 => 
            array (
                'id' => 674,
                'province_id' => 11,
                'name' => '黑龙江艺术职业学院',
            ),
            167 => 
            array (
                'id' => 675,
                'province_id' => 11,
                'name' => '黑龙江工商职业技术学院',
            ),
            168 => 
            array (
                'id' => 676,
                'province_id' => 11,
                'name' => '黑龙江信息技术职业学院',
            ),
            169 => 
            array (
                'id' => 677,
                'province_id' => 11,
                'name' => '黑龙江农垦林业职业技术学院',
            ),
            170 => 
            array (
                'id' => 678,
                'province_id' => 11,
                'name' => '黑龙江公安警官职业学院',
            ),
            171 => 
            array (
                'id' => 679,
                'province_id' => 11,
                'name' => '哈尔滨传媒职业学院',
            ),
            172 => 
            array (
                'id' => 680,
                'province_id' => 11,
                'name' => '黑龙江生物科技职业学院',
            ),
            173 => 
            array (
                'id' => 681,
                'province_id' => 11,
                'name' => '黑龙江农垦农业职业技术学院',
            ),
            174 => 
            array (
                'id' => 682,
                'province_id' => 11,
                'name' => '黑龙江北开职业技术学院',
            ),
            175 => 
            array (
                'id' => 683,
                'province_id' => 11,
                'name' => '黑龙江旅游职业技术学院',
            ),
            176 => 
            array (
                'id' => 684,
                'province_id' => 11,
                'name' => '黑龙江三江美术职业学院',
            ),
            177 => 
            array (
                'id' => 685,
                'province_id' => 11,
                'name' => '黑龙江生态工程职业学院',
            ),
            178 => 
            array (
                'id' => 686,
                'province_id' => 11,
                'name' => '黑龙江煤炭职业技术学院',
            ),
            179 => 
            array (
                'id' => 687,
                'province_id' => 11,
                'name' => '七台河职业学院',
            ),
            180 => 
            array (
                'id' => 688,
                'province_id' => 11,
                'name' => '黑龙江民族职业学院',
            ),
            181 => 
            array (
                'id' => 689,
                'province_id' => 12,
                'name' => '湖北中医药高等专科学校',
            ),
            182 => 
            array (
                'id' => 690,
                'province_id' => 12,
                'name' => '沙洋师范高等专科学校',
            ),
            183 => 
            array (
                'id' => 691,
                'province_id' => 12,
                'name' => '郧阳师范高等专科学校',
            ),
            184 => 
            array (
                'id' => 692,
                'province_id' => 12,
                'name' => '湖北财经高等专科学校',
            ),
            185 => 
            array (
                'id' => 693,
                'province_id' => 12,
                'name' => '黄冈职业技术学院',
            ),
            186 => 
            array (
                'id' => 694,
                'province_id' => 12,
                'name' => '荆门职业技术学院',
            ),
            187 => 
            array (
                'id' => 695,
                'province_id' => 12,
                'name' => '武汉工贸职业学院',
            ),
            188 => 
            array (
                'id' => 696,
                'province_id' => 12,
                'name' => '湖北工业职业技术学院',
            ),
            189 => 
            array (
                'id' => 697,
                'province_id' => 12,
                'name' => '湖北职业技术学院',
            ),
            190 => 
            array (
                'id' => 698,
                'province_id' => 12,
                'name' => '恩施职业技术学院',
            ),
            191 => 
            array (
                'id' => 699,
                'province_id' => 12,
                'name' => '鄂州职业大学',
            ),
            192 => 
            array (
                'id' => 700,
                'province_id' => 12,
                'name' => '荆州理工职业学院',
            ),
            193 => 
            array (
                'id' => 701,
                'province_id' => 12,
                'name' => '武汉商学院',
            ),
            194 => 
            array (
                'id' => 702,
                'province_id' => 12,
                'name' => '长江职业学院',
            ),
            195 => 
            array (
                'id' => 703,
                'province_id' => 12,
                'name' => '武汉船舶职业技术学院',
            ),
            196 => 
            array (
                'id' => 704,
                'province_id' => 12,
                'name' => '武汉职业技术学院',
            ),
            197 => 
            array (
                'id' => 705,
                'province_id' => 12,
                'name' => '襄阳职业技术学院',
            ),
            198 => 
            array (
                'id' => 706,
                'province_id' => 12,
                'name' => '湖北开放职业学院',
            ),
            199 => 
            array (
                'id' => 707,
                'province_id' => 12,
                'name' => '湖北水利水电职业技术学院',
            ),
            200 => 
            array (
                'id' => 708,
                'province_id' => 12,
                'name' => '武汉工交职业学院',
            ),
            201 => 
            array (
                'id' => 709,
                'province_id' => 12,
                'name' => '武汉电力职业技术学院',
            ),
            202 => 
            array (
                'id' => 710,
                'province_id' => 12,
                'name' => '湖北城市建设职业技术学院',
            ),
            203 => 
            array (
                'id' => 711,
                'province_id' => 12,
                'name' => '武汉外语外事职业学院',
            ),
            204 => 
            array (
                'id' => 712,
                'province_id' => 12,
                'name' => '武汉商贸职业学院',
            ),
            205 => 
            array (
                'id' => 713,
                'province_id' => 12,
                'name' => '武昌职业学院',
            ),
            206 => 
            array (
                'id' => 714,
                'province_id' => 12,
                'name' => '武汉信息传播职业技术学院',
            ),
            207 => 
            array (
                'id' => 715,
                'province_id' => 12,
                'name' => '武汉警官职业学院',
            ),
            208 => 
            array (
                'id' => 716,
                'province_id' => 12,
                'name' => '湖北生物生态职业技术学院',
            ),
            209 => 
            array (
                'id' => 717,
                'province_id' => 12,
                'name' => '湖北生态工程职业技术学院',
            ),
            210 => 
            array (
                'id' => 718,
                'province_id' => 12,
                'name' => '武汉科技职业学院',
            ),
            211 => 
            array (
                'id' => 719,
                'province_id' => 12,
                'name' => '仙桃职业学院',
            ),
            212 => 
            array (
                'id' => 720,
                'province_id' => 12,
                'name' => '武汉铁路职业技术学院',
            ),
            213 => 
            array (
                'id' => 721,
                'province_id' => 12,
                'name' => '湖北三峡职业技术学院',
            ),
            214 => 
            array (
                'id' => 722,
                'province_id' => 12,
                'name' => '黄石职业技术学院',
            ),
            215 => 
            array (
                'id' => 723,
                'province_id' => 12,
                'name' => '江汉艺术职业学院',
            ),
            216 => 
            array (
                'id' => 724,
                'province_id' => 12,
                'name' => '楚天欧亚职业学院',
            ),
            217 => 
            array (
                'id' => 725,
                'province_id' => 12,
                'name' => '湖北生物科技职业学院',
            ),
            218 => 
            array (
                'id' => 726,
                'province_id' => 12,
                'name' => '湖北财税职业学院',
            ),
            219 => 
            array (
                'id' => 727,
                'province_id' => 12,
                'name' => '鄂东职业技术学院',
            ),
            220 => 
            array (
                'id' => 728,
                'province_id' => 12,
                'name' => '武汉民政职业学院',
            ),
            221 => 
            array (
                'id' => 729,
                'province_id' => 12,
                'name' => '湖北交通职业技术学院',
            ),
            222 => 
            array (
                'id' => 730,
                'province_id' => 12,
                'name' => '湖北国土资源职业学院',
            ),
            223 => 
            array (
                'id' => 731,
                'province_id' => 12,
                'name' => '荆州职业技术学院',
            ),
            224 => 
            array (
                'id' => 732,
                'province_id' => 12,
                'name' => '武汉软件职业技术学院',
            ),
            225 => 
            array (
                'id' => 733,
                'province_id' => 12,
                'name' => '湖北轻工职业技术学院',
            ),
            226 => 
            array (
                'id' => 734,
                'province_id' => 12,
                'name' => '湖北交通职业技术学院',
            ),
            227 => 
            array (
                'id' => 735,
                'province_id' => 12,
                'name' => '武汉交通职业学院',
            ),
            228 => 
            array (
                'id' => 736,
                'province_id' => 12,
                'name' => '武汉航海职业技术学院',
            ),
            229 => 
            array (
                'id' => 737,
                'province_id' => 12,
                'name' => '随州职业技术学院',
            ),
            230 => 
            array (
                'id' => 738,
                'province_id' => 12,
                'name' => '湖北艺术职业学院',
            ),
            231 => 
            array (
                'id' => 739,
                'province_id' => 12,
                'name' => '长江工程职业技术学院',
            ),
            232 => 
            array (
                'id' => 740,
                'province_id' => 12,
                'name' => '咸宁职业技术学院',
            ),
            233 => 
            array (
                'id' => 741,
                'province_id' => 12,
                'name' => '武汉大学',
            ),
            234 => 
            array (
                'id' => 742,
                'province_id' => 12,
                'name' => '中南财经政法大学',
            ),
            235 => 
            array (
                'id' => 743,
                'province_id' => 12,
                'name' => '华中科技大学',
            ),
            236 => 
            array (
                'id' => 744,
                'province_id' => 12,
                'name' => '武汉理工大学',
            ),
            237 => 
            array (
                'id' => 745,
                'province_id' => 12,
                'name' => '中国地质大学（武汉）',
            ),
            238 => 
            array (
                'id' => 746,
                'province_id' => 12,
                'name' => '华中农业大学',
            ),
            239 => 
            array (
                'id' => 747,
                'province_id' => 12,
                'name' => '华中师范大学',
            ),
            240 => 
            array (
                'id' => 748,
                'province_id' => 12,
                'name' => '中南民族大学',
            ),
            241 => 
            array (
                'id' => 749,
                'province_id' => 12,
                'name' => '湖北大学',
            ),
            242 => 
            array (
                'id' => 750,
                'province_id' => 12,
                'name' => '三峡大学',
            ),
            243 => 
            array (
                'id' => 751,
                'province_id' => 12,
                'name' => '江汉大学',
            ),
            244 => 
            array (
                'id' => 752,
                'province_id' => 12,
                'name' => '湖北理工学院',
            ),
            245 => 
            array (
                'id' => 753,
                'province_id' => 12,
                'name' => '武汉生物工程学院',
            ),
            246 => 
            array (
                'id' => 754,
                'province_id' => 12,
                'name' => '武汉科技大学',
            ),
            247 => 
            array (
                'id' => 755,
                'province_id' => 12,
                'name' => '湖北文理学院',
            ),
            248 => 
            array (
                'id' => 756,
                'province_id' => 12,
                'name' => '湖北工业大学',
            ),
            249 => 
            array (
                'id' => 757,
                'province_id' => 12,
                'name' => '长江大学',
            ),
            250 => 
            array (
                'id' => 758,
                'province_id' => 12,
                'name' => '武汉工程大学',
            ),
            251 => 
            array (
                'id' => 759,
                'province_id' => 12,
                'name' => '湖北汽车工业学院',
            ),
            252 => 
            array (
                'id' => 760,
                'province_id' => 12,
                'name' => '武汉科技学院',
            ),
            253 => 
            array (
                'id' => 761,
                'province_id' => 12,
                'name' => '武汉轻工大学',
            ),
            254 => 
            array (
                'id' => 762,
                'province_id' => 12,
                'name' => '湖北中医药大学',
            ),
            255 => 
            array (
                'id' => 763,
                'province_id' => 12,
                'name' => '湖北医药学院',
            ),
            256 => 
            array (
                'id' => 764,
                'province_id' => 12,
                'name' => '湖北工程学院',
            ),
            257 => 
            array (
                'id' => 765,
                'province_id' => 12,
                'name' => '湖北师范学院',
            ),
            258 => 
            array (
                'id' => 766,
                'province_id' => 12,
                'name' => '黄冈师范学院',
            ),
            259 => 
            array (
                'id' => 767,
                'province_id' => 12,
                'name' => '湖北经济学院',
            ),
            260 => 
            array (
                'id' => 768,
                'province_id' => 12,
                'name' => '湖北警官学院',
            ),
            261 => 
            array (
                'id' => 769,
                'province_id' => 12,
                'name' => '武汉体育学院',
            ),
            262 => 
            array (
                'id' => 770,
                'province_id' => 12,
                'name' => '湖北美术学院',
            ),
            263 => 
            array (
                'id' => 771,
                'province_id' => 12,
                'name' => '武汉音乐学院',
            ),
            264 => 
            array (
                'id' => 772,
                'province_id' => 12,
                'name' => '湖北民族学院',
            ),
            265 => 
            array (
                'id' => 773,
                'province_id' => 12,
                'name' => '湖北科技学院',
            ),
            266 => 
            array (
                'id' => 774,
                'province_id' => 13,
                'name' => '中南大学',
            ),
            267 => 
            array (
                'id' => 775,
                'province_id' => 13,
                'name' => '湖南大学',
            ),
            268 => 
            array (
                'id' => 776,
                'province_id' => 13,
                'name' => '湘潭大学',
            ),
            269 => 
            array (
                'id' => 777,
                'province_id' => 13,
                'name' => '吉首大学',
            ),
            270 => 
            array (
                'id' => 778,
                'province_id' => 13,
                'name' => '湖南科技大学',
            ),
            271 => 
            array (
                'id' => 779,
                'province_id' => 13,
                'name' => '长沙理工大学',
            ),
            272 => 
            array (
                'id' => 780,
                'province_id' => 13,
                'name' => '南华大学',
            ),
            273 => 
            array (
                'id' => 781,
                'province_id' => 13,
                'name' => '湖南农业大学',
            ),
            274 => 
            array (
                'id' => 782,
                'province_id' => 13,
                'name' => '湖南师范大学',
            ),
            275 => 
            array (
                'id' => 783,
                'province_id' => 13,
                'name' => '湖南理工大学',
            ),
            276 => 
            array (
                'id' => 784,
                'province_id' => 13,
                'name' => '湖南工业大学',
            ),
            277 => 
            array (
                'id' => 785,
                'province_id' => 13,
                'name' => '湖南城市学院',
            ),
            278 => 
            array (
                'id' => 786,
                'province_id' => 13,
                'name' => '湖南工程学院',
            ),
            279 => 
            array (
                'id' => 787,
                'province_id' => 13,
                'name' => '中南林业科技大学',
            ),
            280 => 
            array (
                'id' => 788,
                'province_id' => 13,
                'name' => '湖南中医药大学',
            ),
            281 => 
            array (
                'id' => 789,
                'province_id' => 13,
                'name' => '湖南文理学院',
            ),
            282 => 
            array (
                'id' => 790,
                'province_id' => 13,
                'name' => '衡阳师范学院',
            ),
            283 => 
            array (
                'id' => 791,
                'province_id' => 13,
                'name' => '湘南学院',
            ),
            284 => 
            array (
                'id' => 792,
                'province_id' => 13,
                'name' => '湖南商学院',
            ),
            285 => 
            array (
                'id' => 793,
                'province_id' => 13,
                'name' => '邵阳学院',
            ),
            286 => 
            array (
                'id' => 794,
                'province_id' => 13,
                'name' => '怀化学院',
            ),
            287 => 
            array (
                'id' => 795,
                'province_id' => 13,
                'name' => '长沙学院',
            ),
            288 => 
            array (
                'id' => 796,
                'province_id' => 13,
                'name' => '湖南理工学院',
            ),
            289 => 
            array (
                'id' => 797,
                'province_id' => 13,
                'name' => '长沙医学院',
            ),
            290 => 
            array (
                'id' => 798,
                'province_id' => 13,
                'name' => '湖南人文科技学院',
            ),
            291 => 
            array (
                'id' => 799,
                'province_id' => 13,
                'name' => '湖南科技学院',
            ),
            292 => 
            array (
                'id' => 800,
                'province_id' => 13,
                'name' => '湖南涉外经济学院',
            ),
            293 => 
            array (
                'id' => 801,
                'province_id' => 13,
                'name' => '湖南工学院',
            ),
            294 => 
            array (
                'id' => 802,
                'province_id' => 13,
                'name' => '湖南医药学院',
            ),
            295 => 
            array (
                'id' => 803,
                'province_id' => 13,
                'name' => '湖南第一师范学院',
            ),
            296 => 
            array (
                'id' => 804,
                'province_id' => 13,
                'name' => '株洲师范高等专科学校',
            ),
            297 => 
            array (
                'id' => 805,
                'province_id' => 13,
                'name' => '湖南税务高等专科学校',
            ),
            298 => 
            array (
                'id' => 806,
                'province_id' => 13,
                'name' => '湖南财政经济学院',
            ),
            299 => 
            array (
                'id' => 807,
                'province_id' => 13,
                'name' => '湖南公安高等专科学校',
            ),
            300 => 
            array (
                'id' => 808,
                'province_id' => 13,
                'name' => '邵阳医学高等专科学校',
            ),
            301 => 
            array (
                'id' => 809,
                'province_id' => 13,
                'name' => '长沙航空职业技术学院',
            ),
            302 => 
            array (
                'id' => 810,
                'province_id' => 13,
                'name' => '湖南冶金职业技术学院',
            ),
            303 => 
            array (
                'id' => 811,
                'province_id' => 13,
                'name' => '湖南信息职业技术学院',
            ),
            304 => 
            array (
                'id' => 812,
                'province_id' => 13,
                'name' => '湖南女子学院',
            ),
            305 => 
            array (
                'id' => 813,
                'province_id' => 13,
                'name' => '湖南环境生物职业技术学院',
            ),
            306 => 
            array (
                'id' => 814,
                'province_id' => 13,
                'name' => '湖南大众传媒职业技术学院',
            ),
            307 => 
            array (
                'id' => 815,
                'province_id' => 13,
                'name' => '湖南工业职业技术学院',
            ),
            308 => 
            array (
                'id' => 816,
                'province_id' => 13,
                'name' => '湖南涉外经济职业学院',
            ),
            309 => 
            array (
                'id' => 817,
                'province_id' => 13,
                'name' => '湖南铁道职业技术学院',
            ),
            310 => 
            array (
                'id' => 818,
                'province_id' => 13,
                'name' => '长沙民政职业技术学院',
            ),
            311 => 
            array (
                'id' => 819,
                'province_id' => 13,
                'name' => '永州职业技术学院',
            ),
            312 => 
            array (
                'id' => 820,
                'province_id' => 13,
                'name' => '娄底职业技术学院',
            ),
            313 => 
            array (
                'id' => 821,
                'province_id' => 13,
                'name' => '湖南邮电职业技术学院',
            ),
            314 => 
            array (
                'id' => 822,
                'province_id' => 13,
                'name' => '张家界航空工业职业技术学院',
            ),
            315 => 
            array (
                'id' => 823,
                'province_id' => 13,
                'name' => '湘潭职业技术学院',
            ),
            316 => 
            array (
                'id' => 824,
                'province_id' => 13,
                'name' => '湖南商务职业技术学院',
            ),
            317 => 
            array (
                'id' => 825,
                'province_id' => 13,
                'name' => '湖南交通职业技术学院',
            ),
            318 => 
            array (
                'id' => 826,
                'province_id' => 13,
                'name' => '湖南科技职业学院',
            ),
            319 => 
            array (
                'id' => 827,
                'province_id' => 13,
                'name' => '郴州职业技术学院',
            ),
            320 => 
            array (
                'id' => 828,
                'province_id' => 13,
                'name' => '湖南机电职业技术学院',
            ),
            321 => 
            array (
                'id' => 829,
                'province_id' => 13,
                'name' => '湖南体育职业学院',
            ),
            322 => 
            array (
                'id' => 830,
                'province_id' => 13,
                'name' => '湖南工程职业技术学院',
            ),
            323 => 
            array (
                'id' => 831,
                'province_id' => 13,
                'name' => '湖南艺术职业学院',
            ),
            324 => 
            array (
                'id' => 832,
                'province_id' => 13,
                'name' => '长沙环境保护职业技术学院',
            ),
            325 => 
            array (
                'id' => 833,
                'province_id' => 13,
                'name' => '长沙特殊教育职业学院',
            ),
            326 => 
            array (
                'id' => 834,
                'province_id' => 13,
                'name' => '怀化职业技术学院',
            ),
            327 => 
            array (
                'id' => 835,
                'province_id' => 13,
                'name' => '岳阳职业技术学院',
            ),
            328 => 
            array (
                'id' => 836,
                'province_id' => 13,
                'name' => '常德职业技术学院',
            ),
            329 => 
            array (
                'id' => 837,
                'province_id' => 13,
                'name' => '长沙社会安全职业技术学院',
            ),
            330 => 
            array (
                'id' => 838,
                'province_id' => 13,
                'name' => '长沙南方职业学院',
            ),
            331 => 
            array (
                'id' => 839,
                'province_id' => 13,
                'name' => '潇湘职业学院',
            ),
            332 => 
            array (
                'id' => 840,
                'province_id' => 13,
                'name' => '湖南化工职业技术学院',
            ),
            333 => 
            array (
                'id' => 841,
                'province_id' => 13,
                'name' => '湖南城建职业技术学院',
            ),
            334 => 
            array (
                'id' => 842,
                'province_id' => 13,
                'name' => '湖南石油化工职业技术学院',
            ),
            335 => 
            array (
                'id' => 843,
                'province_id' => 13,
                'name' => '保险职业学院',
            ),
            336 => 
            array (
                'id' => 844,
                'province_id' => 13,
                'name' => '湖南外贸职业学院',
            ),
            337 => 
            array (
                'id' => 845,
                'province_id' => 13,
                'name' => '湖南网络工程职业学院',
            ),
            338 => 
            array (
                'id' => 846,
                'province_id' => 13,
                'name' => '湖南民族职业学院',
            ),
            339 => 
            array (
                'id' => 847,
                'province_id' => 13,
                'name' => '邵阳职业技术学院',
            ),
            340 => 
            array (
                'id' => 848,
                'province_id' => 13,
                'name' => '湖南司法警官职业学院',
            ),
            341 => 
            array (
                'id' => 849,
                'province_id' => 13,
                'name' => '长沙商贸旅游职业技术学院',
            ),
            342 => 
            array (
                'id' => 850,
                'province_id' => 13,
                'name' => '湖南中医药高等专科学校',
            ),
            343 => 
            array (
                'id' => 851,
                'province_id' => 13,
                'name' => '长沙师范学院',
            ),
            344 => 
            array (
                'id' => 852,
                'province_id' => 13,
                'name' => '湖南应用技术学院',
            ),
            345 => 
            array (
                'id' => 853,
                'province_id' => 13,
                'name' => '湘西民族职业技术学院',
            ),
            346 => 
            array (
                'id' => 854,
                'province_id' => 13,
                'name' => '衡阳财经工业职业技术学院',
            ),
            347 => 
            array (
                'id' => 855,
                'province_id' => 13,
                'name' => '益阳职业技术学院',
            ),
            348 => 
            array (
                'id' => 856,
                'province_id' => 13,
                'name' => '湖南信息学院',
            ),
            349 => 
            array (
                'id' => 857,
                'province_id' => 13,
                'name' => '潇湘科技职业学院',
            ),
            350 => 
            array (
                'id' => 858,
                'province_id' => 13,
                'name' => '湖南金融技术职工大学',
            ),
            351 => 
            array (
                'id' => 859,
                'province_id' => 13,
                'name' => '湖南安全技术职业学院',
            ),
            352 => 
            array (
                'id' => 860,
                'province_id' => 13,
                'name' => '湖南铁路科技职业技术学院',
            ),
            353 => 
            array (
                'id' => 861,
                'province_id' => 13,
                'name' => '湖南交通工程学院',
            ),
            354 => 
            array (
                'id' => 862,
                'province_id' => 13,
                'name' => '湖南理工职业技术学院',
            ),
            355 => 
            array (
                'id' => 863,
                'province_id' => 13,
                'name' => '湖南九嶷职业技术学院',
            ),
            356 => 
            array (
                'id' => 864,
                'province_id' => 13,
                'name' => '湖南工艺美术职业学院',
            ),
            357 => 
            array (
                'id' => 865,
                'province_id' => 13,
                'name' => '湖南软件职业学院',
            ),
            358 => 
            array (
                'id' => 866,
                'province_id' => 13,
                'name' => '湖南高速铁路职业技术学院',
            ),
            359 => 
            array (
                'id' => 867,
                'province_id' => 13,
                'name' => '湖南现代物流职业技术学院',
            ),
            360 => 
            array (
                'id' => 868,
                'province_id' => 13,
                'name' => '湖南水利水电职业技术学院',
            ),
            361 => 
            array (
                'id' => 869,
                'province_id' => 13,
                'name' => '长沙电力职业技术学院',
            ),
            362 => 
            array (
                'id' => 870,
                'province_id' => 13,
                'name' => '湖南汽车工程职业学院',
            ),
            363 => 
            array (
                'id' => 871,
                'province_id' => 13,
                'name' => '长沙职业技术学院',
            ),
            364 => 
            array (
                'id' => 872,
                'province_id' => 14,
                'name' => '吉林大学',
            ),
            365 => 
            array (
                'id' => 873,
                'province_id' => 14,
                'name' => '东北师范大学',
            ),
            366 => 
            array (
                'id' => 874,
                'province_id' => 14,
                'name' => '延边大学',
            ),
            367 => 
            array (
                'id' => 875,
                'province_id' => 14,
                'name' => '北华大学',
            ),
            368 => 
            array (
                'id' => 876,
                'province_id' => 14,
                'name' => '长春大学',
            ),
            369 => 
            array (
                'id' => 877,
                'province_id' => 14,
                'name' => '长春理工大学',
            ),
            370 => 
            array (
                'id' => 878,
                'province_id' => 14,
                'name' => '长春工业大学',
            ),
            371 => 
            array (
                'id' => 879,
                'province_id' => 14,
                'name' => '吉林农业大学',
            ),
            372 => 
            array (
                'id' => 880,
                'province_id' => 14,
                'name' => '吉林师范大学',
            ),
            373 => 
            array (
                'id' => 881,
                'province_id' => 14,
                'name' => '东北电力大学',
            ),
            374 => 
            array (
                'id' => 882,
                'province_id' => 14,
                'name' => '吉林化工学院',
            ),
            375 => 
            array (
                'id' => 883,
                'province_id' => 14,
                'name' => '吉林建筑大学',
            ),
            376 => 
            array (
                'id' => 884,
                'province_id' => 14,
                'name' => '长春工程学院',
            ),
            377 => 
            array (
                'id' => 885,
                'province_id' => 14,
                'name' => '长春中医药大学',
            ),
            378 => 
            array (
                'id' => 886,
                'province_id' => 14,
                'name' => '吉林医药学院',
            ),
            379 => 
            array (
                'id' => 887,
                'province_id' => 14,
                'name' => '长春师范学院',
            ),
            380 => 
            array (
                'id' => 888,
                'province_id' => 14,
                'name' => '白城师范学院',
            ),
            381 => 
            array (
                'id' => 890,
                'province_id' => 14,
                'name' => '通化师范学院',
            ),
            382 => 
            array (
                'id' => 891,
                'province_id' => 14,
                'name' => '吉林工程技术师范学院',
            ),
            383 => 
            array (
                'id' => 892,
                'province_id' => 14,
                'name' => '吉林财经大学',
            ),
            384 => 
            array (
                'id' => 893,
                'province_id' => 14,
                'name' => '吉林体育学院',
            ),
            385 => 
            array (
                'id' => 894,
                'province_id' => 14,
                'name' => '吉林艺术学院',
            ),
            386 => 
            array (
                'id' => 895,
                'province_id' => 14,
                'name' => '吉林粮食高等专科学校',
            ),
            387 => 
            array (
                'id' => 896,
                'province_id' => 14,
                'name' => '长春汽车工业高等专科学校',
            ),
            388 => 
            array (
                'id' => 897,
                'province_id' => 14,
                'name' => '吉林农业科技学院',
            ),
            389 => 
            array (
                'id' => 898,
                'province_id' => 14,
                'name' => '长春医学高等专科学校',
            ),
            390 => 
            array (
                'id' => 899,
                'province_id' => 14,
                'name' => '吉林商业高等专科学校',
            ),
            391 => 
            array (
                'id' => 900,
                'province_id' => 14,
                'name' => '吉林财税高等专科学校',
            ),
            392 => 
            array (
                'id' => 901,
                'province_id' => 14,
                'name' => '长春金融高等专科学校',
            ),
            393 => 
            array (
                'id' => 902,
                'province_id' => 14,
                'name' => '吉林警察学院',
            ),
            394 => 
            array (
                'id' => 903,
                'province_id' => 14,
                'name' => '吉林对外经贸职业学院',
            ),
            395 => 
            array (
                'id' => 904,
                'province_id' => 14,
                'name' => '辽源职业技术学院',
            ),
            396 => 
            array (
                'id' => 905,
                'province_id' => 14,
                'name' => '长春东方职业学院',
            ),
            397 => 
            array (
                'id' => 906,
                'province_id' => 14,
                'name' => '四平职业大学',
            ),
            398 => 
            array (
                'id' => 907,
                'province_id' => 14,
                'name' => '吉林交通职业技术学院',
            ),
            399 => 
            array (
                'id' => 908,
                'province_id' => 14,
                'name' => '吉林农业工程职业技术学院',
            ),
            400 => 
            array (
                'id' => 909,
                'province_id' => 14,
                'name' => '吉林司法警官职业学院',
            ),
            401 => 
            array (
                'id' => 910,
                'province_id' => 14,
                'name' => '长春职业技术学院',
            ),
            402 => 
            array (
                'id' => 911,
                'province_id' => 14,
                'name' => '白城医学高等专科学校',
            ),
            403 => 
            array (
                'id' => 912,
                'province_id' => 14,
                'name' => '吉林工业职业技术学院',
            ),
            404 => 
            array (
                'id' => 913,
                'province_id' => 14,
                'name' => '吉林电子信息职业技术学院',
            ),
            405 => 
            array (
                'id' => 914,
                'province_id' => 14,
                'name' => '松原职业技术学院',
            ),
            406 => 
            array (
                'id' => 915,
                'province_id' => 14,
                'name' => '长春信息技术职业学院',
            ),
            407 => 
            array (
                'id' => 916,
                'province_id' => 15,
                'name' => '南京大学',
            ),
            408 => 
            array (
                'id' => 917,
                'province_id' => 15,
                'name' => '东南大学',
            ),
            409 => 
            array (
                'id' => 918,
                'province_id' => 15,
                'name' => '中国矿业大学',
            ),
            410 => 
            array (
                'id' => 919,
                'province_id' => 15,
                'name' => '河海大学',
            ),
            411 => 
            array (
                'id' => 920,
                'province_id' => 15,
                'name' => '江南大学',
            ),
            412 => 
            array (
                'id' => 921,
                'province_id' => 15,
                'name' => '南京农业大学',
            ),
            413 => 
            array (
                'id' => 922,
                'province_id' => 15,
                'name' => '中国药科大学',
            ),
            414 => 
            array (
                'id' => 923,
                'province_id' => 15,
                'name' => '南京理工大学',
            ),
            415 => 
            array (
                'id' => 924,
                'province_id' => 15,
                'name' => '南京航空航天大学',
            ),
            416 => 
            array (
                'id' => 925,
                'province_id' => 15,
                'name' => '苏州大学',
            ),
            417 => 
            array (
                'id' => 926,
                'province_id' => 15,
                'name' => '扬州大学',
            ),
            418 => 
            array (
                'id' => 927,
                'province_id' => 15,
                'name' => '江苏大学',
            ),
            419 => 
            array (
                'id' => 928,
                'province_id' => 15,
                'name' => '南京工业大学',
            ),
            420 => 
            array (
                'id' => 929,
                'province_id' => 15,
                'name' => '南京林业大学',
            ),
            421 => 
            array (
                'id' => 930,
                'province_id' => 15,
                'name' => '南京医科大学',
            ),
            422 => 
            array (
                'id' => 931,
                'province_id' => 15,
                'name' => '南京中医药大学',
            ),
            423 => 
            array (
                'id' => 932,
                'province_id' => 15,
                'name' => '南京师范大学',
            ),
            424 => 
            array (
                'id' => 933,
                'province_id' => 15,
                'name' => '江苏师范大学',
            ),
            425 => 
            array (
                'id' => 934,
                'province_id' => 15,
                'name' => '南京财经大学',
            ),
            426 => 
            array (
                'id' => 935,
                'province_id' => 15,
                'name' => '南京邮电大学',
            ),
            427 => 
            array (
                'id' => 936,
                'province_id' => 15,
                'name' => '江苏科技大学',
            ),
            428 => 
            array (
                'id' => 937,
                'province_id' => 15,
                'name' => '南京信息工程大学',
            ),
            429 => 
            array (
                'id' => 938,
                'province_id' => 15,
                'name' => '淮海工学院',
            ),
            430 => 
            array (
                'id' => 939,
                'province_id' => 15,
                'name' => '常州大学',
            ),
            431 => 
            array (
                'id' => 940,
                'province_id' => 15,
                'name' => '金陵科技学院',
            ),
            432 => 
            array (
                'id' => 941,
                'province_id' => 15,
                'name' => '南京工程学院',
            ),
            433 => 
            array (
                'id' => 942,
                'province_id' => 15,
                'name' => '常州工学院',
            ),
            434 => 
            array (
                'id' => 943,
                'province_id' => 15,
                'name' => '淮阴工学院',
            ),
            435 => 
            array (
                'id' => 944,
                'province_id' => 15,
                'name' => '徐州工程学院',
            ),
            436 => 
            array (
                'id' => 945,
                'province_id' => 15,
                'name' => '盐城工学院',
            ),
            437 => 
            array (
                'id' => 946,
                'province_id' => 15,
                'name' => '徐州医学院',
            ),
            438 => 
            array (
                'id' => 947,
                'province_id' => 15,
                'name' => '淮阴师范学院',
            ),
            439 => 
            array (
                'id' => 949,
                'province_id' => 15,
                'name' => '南京晓庄学院',
            ),
            440 => 
            array (
                'id' => 950,
                'province_id' => 15,
                'name' => '盐城师范学院',
            ),
            441 => 
            array (
                'id' => 951,
                'province_id' => 15,
                'name' => '苏州科技大学',
            ),
            442 => 
            array (
                'id' => 952,
                'province_id' => 15,
                'name' => '南京审计学院',
            ),
            443 => 
            array (
                'id' => 953,
                'province_id' => 15,
                'name' => '江苏警官学院',
            ),
            444 => 
            array (
                'id' => 954,
                'province_id' => 15,
                'name' => '南京体育学院',
            ),
            445 => 
            array (
                'id' => 955,
                'province_id' => 15,
                'name' => '南京艺术学院',
            ),
            446 => 
            array (
                'id' => 956,
                'province_id' => 15,
                'name' => '三江学院',
            ),
            447 => 
            array (
                'id' => 957,
                'province_id' => 15,
                'name' => '南通大学',
            ),
            448 => 
            array (
                'id' => 958,
                'province_id' => 15,
                'name' => '常熟理工学院',
            ),
            449 => 
            array (
                'id' => 959,
                'province_id' => 15,
                'name' => '南京森林警察学院',
            ),
            450 => 
            array (
                'id' => 960,
                'province_id' => 15,
                'name' => '镇江市高等专科学校',
            ),
            451 => 
            array (
                'id' => 961,
                'province_id' => 15,
                'name' => '南京动力高等专科学校',
            ),
            452 => 
            array (
                'id' => 962,
                'province_id' => 15,
                'name' => '连云港师范高等专科学校',
            ),
            453 => 
            array (
                'id' => 963,
                'province_id' => 15,
                'name' => '泰州学院',
            ),
            454 => 
            array (
                'id' => 964,
                'province_id' => 15,
                'name' => '泰州职业技术学院',
            ),
            455 => 
            array (
                'id' => 965,
                'province_id' => 15,
                'name' => '徐州建筑职业技术学院',
            ),
            456 => 
            array (
                'id' => 966,
                'province_id' => 15,
                'name' => '连云港职业技术学院',
            ),
            457 => 
            array (
                'id' => 967,
                'province_id' => 15,
                'name' => '民办明达职业技术学院',
            ),
            458 => 
            array (
                'id' => 968,
                'province_id' => 15,
                'name' => '南通职业大学',
            ),
            459 => 
            array (
                'id' => 969,
                'province_id' => 15,
                'name' => '苏州职业大学',
            ),
            460 => 
            array (
                'id' => 970,
                'province_id' => 15,
                'name' => '无锡商业职业技术学院',
            ),
            461 => 
            array (
                'id' => 971,
                'province_id' => 15,
                'name' => '扬州市职业大学',
            ),
            462 => 
            array (
                'id' => 972,
                'province_id' => 15,
                'name' => '无锡职业技术学院',
            ),
            463 => 
            array (
                'id' => 973,
                'province_id' => 15,
                'name' => '沙洲职业工学院',
            ),
            464 => 
            array (
                'id' => 974,
                'province_id' => 15,
                'name' => '苏州工艺美术职业技术学院',
            ),
            465 => 
            array (
                'id' => 975,
                'province_id' => 15,
                'name' => '南通航运职业技术学院',
            ),
            466 => 
            array (
                'id' => 976,
                'province_id' => 15,
                'name' => '江苏工程职业技术学院',
            ),
            467 => 
            array (
                'id' => 977,
                'province_id' => 15,
                'name' => '南京工业职业技术学院',
            ),
            468 => 
            array (
                'id' => 978,
                'province_id' => 15,
                'name' => '南京科技职业学院',
            ),
            469 => 
            array (
                'id' => 979,
                'province_id' => 15,
                'name' => '常州机电职业技术学院',
            ),
            470 => 
            array (
                'id' => 980,
                'province_id' => 15,
                'name' => '常州工程职业技术学院',
            ),
            471 => 
            array (
                'id' => 981,
                'province_id' => 15,
                'name' => '南京信息职业技术学院',
            ),
            472 => 
            array (
                'id' => 982,
                'province_id' => 15,
                'name' => '宿迁职业技术学院',
            ),
            473 => 
            array (
                'id' => 983,
                'province_id' => 15,
                'name' => '江阴职业技术学院',
            ),
            474 => 
            array (
                'id' => 984,
                'province_id' => 15,
                'name' => '江苏农牧科技职业学院',
            ),
            475 => 
            array (
                'id' => 985,
                'province_id' => 15,
                'name' => '炎黄职业技术学院',
            ),
            476 => 
            array (
                'id' => 986,
                'province_id' => 15,
                'name' => '徐州工业职业技术学院',
            ),
            477 => 
            array (
                'id' => 987,
                'province_id' => 15,
                'name' => '正德职业技术学院',
            ),
            478 => 
            array (
                'id' => 988,
                'province_id' => 15,
                'name' => '常州纺织服装职业技术学院',
            ),
            479 => 
            array (
                'id' => 989,
                'province_id' => 15,
                'name' => '常州信息职业技术学院',
            ),
            480 => 
            array (
                'id' => 990,
                'province_id' => 15,
                'name' => '南京交通职业技术学院',
            ),
            481 => 
            array (
                'id' => 991,
                'province_id' => 15,
                'name' => '苏州农业职业技术学院',
            ),
            482 => 
            array (
                'id' => 992,
                'province_id' => 15,
                'name' => '江苏农林职业技术学院',
            ),
            483 => 
            array (
                'id' => 993,
                'province_id' => 15,
                'name' => '江苏信息职业技术学院',
            ),
            484 => 
            array (
                'id' => 994,
                'province_id' => 15,
                'name' => '钟山职业技术学院',
            ),
            485 => 
            array (
                'id' => 995,
                'province_id' => 15,
                'name' => '无锡南洋职业技术学院',
            ),
            486 => 
            array (
                'id' => 996,
                'province_id' => 15,
                'name' => '九州职业技术学院',
            ),
            487 => 
            array (
                'id' => 997,
                'province_id' => 15,
                'name' => '紫琅职业技术学院',
            ),
            488 => 
            array (
                'id' => 998,
                'province_id' => 15,
                'name' => '硅湖职业技术学院',
            ),
            489 => 
            array (
                'id' => 999,
                'province_id' => 15,
                'name' => '苏州工业园区职业技术学院',
            ),
            490 => 
            array (
                'id' => 1000,
                'province_id' => 15,
                'name' => '江苏食品职业技术学院',
            ),
            491 => 
            array (
                'id' => 1001,
                'province_id' => 15,
                'name' => '培尔职业技术学院',
            ),
            492 => 
            array (
                'id' => 1002,
                'province_id' => 15,
                'name' => '常州轻工职业技术学院',
            ),
            493 => 
            array (
                'id' => 1003,
                'province_id' => 15,
                'name' => '金肯职业技术学院',
            ),
            494 => 
            array (
                'id' => 1004,
                'province_id' => 15,
                'name' => '南京视觉艺术职业学院',
            ),
            495 => 
            array (
                'id' => 1005,
                'province_id' => 15,
                'name' => '昆山登云科技职业学院',
            ),
            496 => 
            array (
                'id' => 1006,
                'province_id' => 15,
                'name' => '苏州港大思培科技职业学院',
            ),
            497 => 
            array (
                'id' => 1007,
                'province_id' => 15,
                'name' => '南京特殊教育师范学院',
            ),
            498 => 
            array (
                'id' => 1008,
                'province_id' => 15,
                'name' => '淮安信息职业技术学院',
            ),
            499 => 
            array (
                'id' => 1009,
                'province_id' => 15,
                'name' => '江苏海事职业技术学院',
            ),
        ));
        \DB::table('universities')->insert(array (
            0 => 
            array (
                'id' => 1010,
                'province_id' => 15,
                'name' => '江苏经贸职业技术学院',
            ),
            1 => 
            array (
                'id' => 1011,
                'province_id' => 15,
                'name' => '江苏联合职业技术学院',
            ),
            2 => 
            array (
                'id' => 1012,
                'province_id' => 15,
                'name' => '南通科技职业学院',
            ),
            3 => 
            array (
                'id' => 1013,
                'province_id' => 15,
                'name' => '苏州工业职业技术学院',
            ),
            4 => 
            array (
                'id' => 1014,
                'province_id' => 15,
                'name' => '苏州经贸职业技术学院',
            ),
            5 => 
            array (
                'id' => 1015,
                'province_id' => 15,
                'name' => '无锡科技职业学院',
            ),
            6 => 
            array (
                'id' => 1016,
                'province_id' => 15,
                'name' => '建东职业技术学院',
            ),
            7 => 
            array (
                'id' => 1017,
                'province_id' => 15,
                'name' => '扬州环境资源职业技术学院',
            ),
            8 => 
            array (
                'id' => 1018,
                'province_id' => 15,
                'name' => '江南影视艺术职业学院',
            ),
            9 => 
            array (
                'id' => 1019,
                'province_id' => 15,
                'name' => '应天职业技术学院',
            ),
            10 => 
            array (
                'id' => 1020,
                'province_id' => 15,
                'name' => '苏州托普信息职业技术学院',
            ),
            11 => 
            array (
                'id' => 1021,
                'province_id' => 15,
                'name' => '无锡工艺职业技术学院',
            ),
            12 => 
            array (
                'id' => 1022,
                'province_id' => 15,
                'name' => '金山职业技术学院',
            ),
            13 => 
            array (
                'id' => 1023,
                'province_id' => 15,
                'name' => '江海职业技术学院',
            ),
            14 => 
            array (
                'id' => 1024,
                'province_id' => 15,
                'name' => '南京铁道职业技术学院',
            ),
            15 => 
            array (
                'id' => 1025,
                'province_id' => 15,
                'name' => '扬州工业职业技术学院',
            ),
            16 => 
            array (
                'id' => 1026,
                'province_id' => 15,
                'name' => '盐城工业职业技术学院',
            ),
            17 => 
            array (
                'id' => 1027,
                'province_id' => 15,
                'name' => '健雄职业技术学院',
            ),
            18 => 
            array (
                'id' => 1028,
                'province_id' => 15,
                'name' => '无锡城市职业技术学院',
            ),
            19 => 
            array (
                'id' => 1029,
                'province_id' => 15,
                'name' => '江苏财经职业技术学院',
            ),
            20 => 
            array (
                'id' => 1030,
                'province_id' => 16,
                'name' => '景德镇学院',
            ),
            21 => 
            array (
                'id' => 1031,
                'province_id' => 16,
                'name' => '南昌师范高等专科学校',
            ),
            22 => 
            array (
                'id' => 1032,
                'province_id' => 16,
                'name' => '江西中医药高等专科学校',
            ),
            23 => 
            array (
                'id' => 1033,
                'province_id' => 16,
                'name' => '新余高等专科学校',
            ),
            24 => 
            array (
                'id' => 1034,
                'province_id' => 16,
                'name' => '萍乡学院',
            ),
            25 => 
            array (
                'id' => 1035,
                'province_id' => 16,
                'name' => '江西警察学院',
            ),
            26 => 
            array (
                'id' => 1036,
                'province_id' => 16,
                'name' => '江西工业职业技术学院',
            ),
            27 => 
            array (
                'id' => 1037,
                'province_id' => 16,
                'name' => '九江职业技术学院',
            ),
            28 => 
            array (
                'id' => 1038,
                'province_id' => 16,
                'name' => '九江职业大学',
            ),
            29 => 
            array (
                'id' => 1039,
                'province_id' => 16,
                'name' => '江西工程学院',
            ),
            30 => 
            array (
                'id' => 1040,
                'province_id' => 16,
                'name' => '江西应用科技学院',
            ),
            31 => 
            array (
                'id' => 1041,
                'province_id' => 16,
                'name' => '江西应用技术职业学院',
            ),
            32 => 
            array (
                'id' => 1042,
                'province_id' => 16,
                'name' => '江西司法警官职业学院',
            ),
            33 => 
            array (
                'id' => 1043,
                'province_id' => 16,
                'name' => '江西财经职业学院',
            ),
            34 => 
            array (
                'id' => 1044,
                'province_id' => 16,
                'name' => '鹰潭职业技术学院',
            ),
            35 => 
            array (
                'id' => 1045,
                'province_id' => 16,
                'name' => '江西现代职业技术学院',
            ),
            36 => 
            array (
                'id' => 1046,
                'province_id' => 16,
                'name' => '江西艺术职业学院',
            ),
            37 => 
            array (
                'id' => 1047,
                'province_id' => 16,
                'name' => '江西交通职业技术学院',
            ),
            38 => 
            array (
                'id' => 1048,
                'province_id' => 16,
                'name' => '江西电力职业技术学院',
            ),
            39 => 
            array (
                'id' => 1049,
                'province_id' => 16,
                'name' => '江西旅游商贸职业学院',
            ),
            40 => 
            array (
                'id' => 1051,
                'province_id' => 16,
                'name' => '江西机电职业技术学院',
            ),
            41 => 
            array (
                'id' => 1052,
                'province_id' => 16,
                'name' => '江西陶瓷工艺美术职业技术学院',
            ),
            42 => 
            array (
                'id' => 1053,
                'province_id' => 16,
                'name' => '江西环境工程职业学院',
            ),
            43 => 
            array (
                'id' => 1054,
                'province_id' => 16,
                'name' => '江西信息应用职业技术学院',
            ),
            44 => 
            array (
                'id' => 1055,
                'province_id' => 16,
                'name' => '江西工业工程职业技术学院',
            ),
            45 => 
            array (
                'id' => 1056,
                'province_id' => 16,
                'name' => '南昌工学院',
            ),
            46 => 
            array (
                'id' => 1057,
                'province_id' => 16,
                'name' => '江西大宇职业技术学院',
            ),
            47 => 
            array (
                'id' => 1058,
                'province_id' => 16,
                'name' => '江西服装学院',
            ),
            48 => 
            array (
                'id' => 1059,
                'province_id' => 16,
                'name' => '江西科技职业学院',
            ),
            49 => 
            array (
                'id' => 1060,
                'province_id' => 16,
                'name' => '江西工业贸易职业技术学院',
            ),
            50 => 
            array (
                'id' => 1061,
                'province_id' => 16,
                'name' => '宜春职业技术学院',
            ),
            51 => 
            array (
                'id' => 1062,
                'province_id' => 16,
                'name' => '江西应用工程职业学院',
            ),
            52 => 
            array (
                'id' => 1063,
                'province_id' => 16,
                'name' => '江西生物科技职业学院',
            ),
            53 => 
            array (
                'id' => 1064,
                'province_id' => 16,
                'name' => '江西建设职业技术学院',
            ),
            54 => 
            array (
                'id' => 1065,
                'province_id' => 16,
                'name' => '抚州职业技术学院',
            ),
            55 => 
            array (
                'id' => 1066,
                'province_id' => 16,
                'name' => '江西先锋软件职业技术学院',
            ),
            56 => 
            array (
                'id' => 1067,
                'province_id' => 16,
                'name' => '赣西科技职业学院',
            ),
            57 => 
            array (
                'id' => 1068,
                'province_id' => 16,
                'name' => '江西外语外贸职业学院',
            ),
            58 => 
            array (
                'id' => 1069,
                'province_id' => 16,
                'name' => '江西经济管理职业学院',
            ),
            59 => 
            array (
                'id' => 1070,
                'province_id' => 16,
                'name' => '江西农业工程职业学院',
            ),
            60 => 
            array (
                'id' => 1071,
                'province_id' => 16,
                'name' => '江西航空职业技术学院',
            ),
            61 => 
            array (
                'id' => 1072,
                'province_id' => 16,
                'name' => '上饶职业技术学院',
            ),
            62 => 
            array (
                'id' => 1073,
                'province_id' => 16,
                'name' => '江西青年职业学院',
            ),
            63 => 
            array (
                'id' => 1074,
                'province_id' => 16,
                'name' => '江西工程职业学院',
            ),
            64 => 
            array (
                'id' => 1075,
                'province_id' => 16,
                'name' => '江西制造职业技术学院',
            ),
            65 => 
            array (
                'id' => 1076,
                'province_id' => 16,
                'name' => '江西工业职业技术学院',
            ),
            66 => 
            array (
                'id' => 1077,
                'province_id' => 16,
                'name' => '江西卫生职业学院',
            ),
            67 => 
            array (
                'id' => 1078,
                'province_id' => 16,
                'name' => '南昌大学',
            ),
            68 => 
            array (
                'id' => 1079,
                'province_id' => 16,
                'name' => '华东交通大学',
            ),
            69 => 
            array (
                'id' => 1080,
                'province_id' => 16,
                'name' => '江西农业大学',
            ),
            70 => 
            array (
                'id' => 1081,
                'province_id' => 16,
                'name' => '江西师范大学',
            ),
            71 => 
            array (
                'id' => 1082,
                'province_id' => 16,
                'name' => '江西财经大学',
            ),
            72 => 
            array (
                'id' => 1083,
                'province_id' => 16,
                'name' => '江西理工大学',
            ),
            73 => 
            array (
                'id' => 1084,
                'province_id' => 16,
                'name' => '东华理工大学',
            ),
            74 => 
            array (
                'id' => 1085,
                'province_id' => 16,
                'name' => '景德镇陶瓷学院',
            ),
            75 => 
            array (
                'id' => 1086,
                'province_id' => 16,
                'name' => '南昌航空大学',
            ),
            76 => 
            array (
                'id' => 1087,
                'province_id' => 16,
                'name' => '江西中医药大学',
            ),
            77 => 
            array (
                'id' => 1088,
                'province_id' => 16,
                'name' => '赣南医学院',
            ),
            78 => 
            array (
                'id' => 1089,
                'province_id' => 16,
                'name' => '赣南师范大学',
            ),
            79 => 
            array (
                'id' => 1090,
                'province_id' => 16,
                'name' => '上饶师范学院',
            ),
            80 => 
            array (
                'id' => 1092,
                'province_id' => 16,
                'name' => '宜春学院',
            ),
            81 => 
            array (
                'id' => 1093,
                'province_id' => 16,
                'name' => '九江学院',
            ),
            82 => 
            array (
                'id' => 1094,
                'province_id' => 16,
                'name' => '南昌理工学院',
            ),
            83 => 
            array (
                'id' => 1095,
                'province_id' => 16,
                'name' => '江西科技学院',
            ),
            84 => 
            array (
                'id' => 1096,
                'province_id' => 16,
                'name' => '江西科技师范大学',
            ),
            85 => 
            array (
                'id' => 1097,
                'province_id' => 16,
                'name' => '南昌工程学院',
            ),
            86 => 
            array (
                'id' => 1098,
                'province_id' => 17,
                'name' => '大连理工大学',
            ),
            87 => 
            array (
                'id' => 1099,
                'province_id' => 17,
                'name' => '东北大学',
            ),
            88 => 
            array (
                'id' => 1100,
                'province_id' => 17,
                'name' => '大连海事大学',
            ),
            89 => 
            array (
                'id' => 1101,
                'province_id' => 17,
                'name' => '辽宁大学',
            ),
            90 => 
            array (
                'id' => 1102,
                'province_id' => 17,
                'name' => '沈阳大学',
            ),
            91 => 
            array (
                'id' => 1103,
                'province_id' => 17,
                'name' => '大连大学',
            ),
            92 => 
            array (
                'id' => 1104,
                'province_id' => 17,
                'name' => '辽宁工程技术大学',
            ),
            93 => 
            array (
                'id' => 1105,
                'province_id' => 17,
                'name' => '沈阳工业大学',
            ),
            94 => 
            array (
                'id' => 1106,
                'province_id' => 17,
                'name' => '辽宁石油化工大学',
            ),
            95 => 
            array (
                'id' => 1107,
                'province_id' => 17,
                'name' => '鞍山科技大学',
            ),
            96 => 
            array (
                'id' => 1108,
                'province_id' => 17,
                'name' => '沈阳农业大学',
            ),
            97 => 
            array (
                'id' => 1109,
                'province_id' => 17,
                'name' => '中国医科大学',
            ),
            98 => 
            array (
                'id' => 1110,
                'province_id' => 17,
                'name' => '大连医科大学',
            ),
            99 => 
            array (
                'id' => 1111,
                'province_id' => 17,
                'name' => '沈阳药科大学',
            ),
            100 => 
            array (
                'id' => 1112,
                'province_id' => 17,
                'name' => '辽宁师范大学',
            ),
            101 => 
            array (
                'id' => 1113,
                'province_id' => 17,
                'name' => '沈阳师范大学',
            ),
            102 => 
            array (
                'id' => 1114,
                'province_id' => 17,
                'name' => '渤海大学',
            ),
            103 => 
            array (
                'id' => 1115,
                'province_id' => 17,
                'name' => '东北财经大学',
            ),
            104 => 
            array (
                'id' => 1116,
                'province_id' => 17,
                'name' => '大连民族学院',
            ),
            105 => 
            array (
                'id' => 1117,
                'province_id' => 17,
                'name' => '中国刑警学院',
            ),
            106 => 
            array (
                'id' => 1118,
                'province_id' => 17,
                'name' => '沈阳建筑大学',
            ),
            107 => 
            array (
                'id' => 1119,
                'province_id' => 17,
                'name' => '大连交通大学',
            ),
            108 => 
            array (
                'id' => 1120,
                'province_id' => 17,
                'name' => '沈阳理工大学',
            ),
            109 => 
            array (
                'id' => 1121,
                'province_id' => 17,
                'name' => '沈阳化工学院',
            ),
            110 => 
            array (
                'id' => 1123,
                'province_id' => 17,
                'name' => '大连工业大学',
            ),
            111 => 
            array (
                'id' => 1124,
                'province_id' => 17,
                'name' => '沈阳航空航天大学',
            ),
            112 => 
            array (
                'id' => 1125,
                'province_id' => 17,
                'name' => '沈阳工程学院',
            ),
            113 => 
            array (
                'id' => 1126,
                'province_id' => 17,
                'name' => '大连海洋大学',
            ),
            114 => 
            array (
                'id' => 1127,
                'province_id' => 17,
                'name' => '辽宁中医药大学',
            ),
            115 => 
            array (
                'id' => 1128,
                'province_id' => 17,
                'name' => '辽宁医学院',
            ),
            116 => 
            array (
                'id' => 1129,
                'province_id' => 17,
                'name' => '沈阳医学院',
            ),
            117 => 
            array (
                'id' => 1130,
                'province_id' => 17,
                'name' => '鞍山师范学院',
            ),
            118 => 
            array (
                'id' => 1131,
                'province_id' => 17,
                'name' => '大连外国语大学',
            ),
            119 => 
            array (
                'id' => 1132,
                'province_id' => 17,
                'name' => '沈阳体育学院',
            ),
            120 => 
            array (
                'id' => 1133,
                'province_id' => 17,
                'name' => '鲁迅美术学院',
            ),
            121 => 
            array (
                'id' => 1134,
                'province_id' => 17,
                'name' => '沈阳音乐学院',
            ),
            122 => 
            array (
                'id' => 1135,
                'province_id' => 17,
                'name' => '辽东学院',
            ),
            123 => 
            array (
                'id' => 1136,
                'province_id' => 17,
                'name' => '辽宁对外经贸学院',
            ),
            124 => 
            array (
                'id' => 1137,
                'province_id' => 17,
                'name' => '辽宁科技大学',
            ),
            125 => 
            array (
                'id' => 1138,
                'province_id' => 17,
                'name' => '阜新高等专科学校',
            ),
            126 => 
            array (
                'id' => 1139,
                'province_id' => 17,
                'name' => '辽宁交通高等专科学校',
            ),
            127 => 
            array (
                'id' => 1140,
                'province_id' => 17,
                'name' => '锦州师范高等专科学校',
            ),
            128 => 
            array (
                'id' => 1141,
                'province_id' => 17,
                'name' => '铁岭师范高等专科学校',
            ),
            129 => 
            array (
                'id' => 1142,
                'province_id' => 17,
                'name' => '抚顺师范高等专科学校',
            ),
            130 => 
            array (
                'id' => 1143,
                'province_id' => 17,
                'name' => '朝阳师范高等专科学校',
            ),
            131 => 
            array (
                'id' => 1144,
                'province_id' => 17,
                'name' => '辽宁税务高等专科学校',
            ),
            132 => 
            array (
                'id' => 1145,
                'province_id' => 17,
                'name' => '辽宁警官高等专科学校',
            ),
            133 => 
            array (
                'id' => 1146,
                'province_id' => 17,
                'name' => '渤海船舶职业学院',
            ),
            134 => 
            array (
                'id' => 1147,
                'province_id' => 17,
                'name' => '营口职业技术学院',
            ),
            135 => 
            array (
                'id' => 1148,
                'province_id' => 17,
                'name' => '辽宁农业职业技术学院',
            ),
            136 => 
            array (
                'id' => 1149,
                'province_id' => 17,
                'name' => '盘锦职业技术学院',
            ),
            137 => 
            array (
                'id' => 1150,
                'province_id' => 17,
                'name' => '抚顺职业技术学院',
            ),
            138 => 
            array (
                'id' => 1151,
                'province_id' => 17,
                'name' => '鞍山市高等职业专科学校',
            ),
            139 => 
            array (
                'id' => 1152,
                'province_id' => 17,
                'name' => '大连商务职业学院',
            ),
            140 => 
            array (
                'id' => 1153,
                'province_id' => 17,
                'name' => '辽阳职业技术学院',
            ),
            141 => 
            array (
                'id' => 1154,
                'province_id' => 17,
                'name' => '大连职业技术学院',
            ),
            142 => 
            array (
                'id' => 1155,
                'province_id' => 17,
                'name' => '大连东软信息学院',
            ),
            143 => 
            array (
                'id' => 1156,
                'province_id' => 17,
                'name' => '辽宁广告职业学院',
            ),
            144 => 
            array (
                'id' => 1157,
                'province_id' => 17,
                'name' => '辽宁金融职业学院',
            ),
            145 => 
            array (
                'id' => 1158,
                'province_id' => 17,
                'name' => '辽宁经济职业技术学院',
            ),
            146 => 
            array (
                'id' => 1159,
                'province_id' => 17,
                'name' => '辽宁机电职业技术学院',
            ),
            147 => 
            array (
                'id' => 1160,
                'province_id' => 17,
                'name' => '辽宁建筑职业学院',
            ),
            148 => 
            array (
                'id' => 1161,
                'province_id' => 17,
                'name' => '辽宁传媒学院',
            ),
            149 => 
            array (
                'id' => 1162,
                'province_id' => 17,
                'name' => '辽宁商贸职业学院',
            ),
            150 => 
            array (
                'id' => 1163,
                'province_id' => 17,
                'name' => '大连翻译职业学院',
            ),
            151 => 
            array (
                'id' => 1164,
                'province_id' => 17,
                'name' => '大连软件职业学院',
            ),
            152 => 
            array (
                'id' => 1165,
                'province_id' => 17,
                'name' => '大连艺术学院',
            ),
            153 => 
            array (
                'id' => 1166,
                'province_id' => 17,
                'name' => '大连枫叶职业技术学院',
            ),
            154 => 
            array (
                'id' => 1167,
                'province_id' => 17,
                'name' => '辽宁理工职业学院',
            ),
            155 => 
            array (
                'id' => 1168,
                'province_id' => 17,
                'name' => '辽宁体育运动职业技术学院',
            ),
            156 => 
            array (
                'id' => 1169,
                'province_id' => 17,
                'name' => '辽宁石化职业技术学院',
            ),
            157 => 
            array (
                'id' => 1170,
                'province_id' => 17,
                'name' => '沈阳航空职业技术学院',
            ),
            158 => 
            array (
                'id' => 1171,
                'province_id' => 17,
                'name' => '沈阳职业技术学院',
            ),
            159 => 
            array (
                'id' => 1172,
                'province_id' => 17,
                'name' => '辽宁职业学院',
            ),
            160 => 
            array (
                'id' => 1173,
                'province_id' => 17,
                'name' => '辽宁林业职业技术学院',
            ),
            161 => 
            array (
                'id' => 1174,
                'province_id' => 18,
                'name' => '内蒙古大学',
            ),
            162 => 
            array (
                'id' => 1175,
                'province_id' => 18,
                'name' => '内蒙古民族大学',
            ),
            163 => 
            array (
                'id' => 1176,
                'province_id' => 18,
                'name' => '内蒙古工业大学',
            ),
            164 => 
            array (
                'id' => 1177,
                'province_id' => 18,
                'name' => '内蒙古农业大学',
            ),
            165 => 
            array (
                'id' => 1178,
                'province_id' => 18,
                'name' => '内蒙古师范大学',
            ),
            166 => 
            array (
                'id' => 1179,
                'province_id' => 18,
                'name' => '内蒙古科技大学',
            ),
            167 => 
            array (
                'id' => 1180,
                'province_id' => 18,
                'name' => '内蒙古医科大学',
            ),
            168 => 
            array (
                'id' => 1181,
                'province_id' => 18,
                'name' => '呼伦贝尔学院',
            ),
            169 => 
            array (
                'id' => 1182,
                'province_id' => 18,
                'name' => '内蒙古财经大学',
            ),
            170 => 
            array (
                'id' => 1183,
                'province_id' => 18,
                'name' => '赤峰学院',
            ),
            171 => 
            array (
                'id' => 1184,
                'province_id' => 18,
                'name' => '河套学院',
            ),
            172 => 
            array (
                'id' => 1185,
                'province_id' => 18,
                'name' => '内蒙古民族高等专科学校',
            ),
            173 => 
            array (
                'id' => 1186,
                'province_id' => 18,
                'name' => '集宁高等师范专科学校',
            ),
            174 => 
            array (
                'id' => 1187,
                'province_id' => 18,
                'name' => '内蒙古丰州职业学院',
            ),
            175 => 
            array (
                'id' => 1188,
                'province_id' => 18,
                'name' => '内蒙古建筑职业技术学院',
            ),
            176 => 
            array (
                'id' => 1189,
                'province_id' => 18,
                'name' => '包头职业技术学院',
            ),
            177 => 
            array (
                'id' => 1190,
                'province_id' => 18,
                'name' => '内蒙古体育职业学院',
            ),
            178 => 
            array (
                'id' => 1191,
                'province_id' => 18,
                'name' => '内蒙古警察职业学院',
            ),
            179 => 
            array (
                'id' => 1192,
                'province_id' => 18,
                'name' => '兴安职业技术学院',
            ),
            180 => 
            array (
                'id' => 1193,
                'province_id' => 18,
                'name' => '呼和浩特职业学院',
            ),
            181 => 
            array (
                'id' => 1194,
                'province_id' => 18,
                'name' => '内蒙古商贸职业学院',
            ),
            182 => 
            array (
                'id' => 1195,
                'province_id' => 18,
                'name' => '内蒙古机电职业技术学院',
            ),
            183 => 
            array (
                'id' => 1196,
                'province_id' => 18,
                'name' => '内蒙古财税职业学院',
            ),
            184 => 
            array (
                'id' => 1197,
                'province_id' => 18,
                'name' => '包头轻工职业技术学院',
            ),
            185 => 
            array (
                'id' => 1198,
                'province_id' => 18,
                'name' => '内蒙古电子信息职业技术学院',
            ),
            186 => 
            array (
                'id' => 1199,
                'province_id' => 18,
                'name' => '内蒙古化工职业学院',
            ),
            187 => 
            array (
                'id' => 1200,
                'province_id' => 18,
                'name' => '锡林郭勒职业学院',
            ),
            188 => 
            array (
                'id' => 1201,
                'province_id' => 18,
                'name' => '科尔沁艺术职业学院',
            ),
            189 => 
            array (
                'id' => 1202,
                'province_id' => 18,
                'name' => '内蒙古交通职业技术学院',
            ),
            190 => 
            array (
                'id' => 1203,
                'province_id' => 18,
                'name' => '乌兰察布职业学院',
            ),
            191 => 
            array (
                'id' => 1204,
                'province_id' => 18,
                'name' => '通辽职业学院',
            ),
            192 => 
            array (
                'id' => 1205,
                'province_id' => 18,
                'name' => '乌海职业技术学院',
            ),
            193 => 
            array (
                'id' => 1206,
                'province_id' => 18,
                'name' => '包头钢铁职业技术学院',
            ),
            194 => 
            array (
                'id' => 1207,
                'province_id' => 19,
                'name' => '宁夏大学',
            ),
            195 => 
            array (
                'id' => 1208,
                'province_id' => 19,
                'name' => '北方民族大学',
            ),
            196 => 
            array (
                'id' => 1209,
                'province_id' => 19,
                'name' => '宁夏医学院',
            ),
            197 => 
            array (
                'id' => 1210,
                'province_id' => 19,
                'name' => '宁夏理工学院',
            ),
            198 => 
            array (
                'id' => 1211,
                'province_id' => 19,
                'name' => '宁夏师范学院',
            ),
            199 => 
            array (
                'id' => 1212,
                'province_id' => 19,
                'name' => '宁夏民族职业技术学院',
            ),
            200 => 
            array (
                'id' => 1213,
                'province_id' => 19,
                'name' => '银川科技职业学院',
            ),
            201 => 
            array (
                'id' => 1214,
                'province_id' => 19,
                'name' => '宁夏职业技术学院',
            ),
            202 => 
            array (
                'id' => 1215,
                'province_id' => 19,
                'name' => '宁夏财经职业技术学院',
            ),
            203 => 
            array (
                'id' => 1216,
                'province_id' => 19,
                'name' => '宁夏工商职业技术学院',
            ),
            204 => 
            array (
                'id' => 1217,
                'province_id' => 19,
                'name' => '宁夏司法警官职业学院',
            ),
            205 => 
            array (
                'id' => 1218,
                'province_id' => 19,
                'name' => '宁夏建设职业技术学院',
            ),
            206 => 
            array (
                'id' => 1219,
                'province_id' => 19,
                'name' => '宁夏工业职业学院',
            ),
            207 => 
            array (
                'id' => 1220,
                'province_id' => 20,
                'name' => '青海财经职业学院',
            ),
            208 => 
            array (
                'id' => 1221,
                'province_id' => 20,
                'name' => '青海师范高等专科学校',
            ),
            209 => 
            array (
                'id' => 1222,
                'province_id' => 20,
                'name' => '青海民族师范高等专科学校',
            ),
            210 => 
            array (
                'id' => 1223,
                'province_id' => 20,
                'name' => '青海建筑职业技术学院',
            ),
            211 => 
            array (
                'id' => 1224,
                'province_id' => 20,
                'name' => '青海警官职业学院',
            ),
            212 => 
            array (
                'id' => 1225,
                'province_id' => 20,
                'name' => '青海交通职业技术学院',
            ),
            213 => 
            array (
                'id' => 1226,
                'province_id' => 20,
                'name' => '青海畜牧兽医职业技术学院',
            ),
            214 => 
            array (
                'id' => 1227,
                'province_id' => 20,
                'name' => '青海卫生职业技术学院',
            ),
            215 => 
            array (
                'id' => 1228,
                'province_id' => 20,
                'name' => '青海大学',
            ),
            216 => 
            array (
                'id' => 1229,
                'province_id' => 20,
                'name' => '青海师范大学',
            ),
            217 => 
            array (
                'id' => 1230,
                'province_id' => 20,
                'name' => '青海民族大学',
            ),
            218 => 
            array (
                'id' => 1231,
                'province_id' => 21,
                'name' => '山东大学',
            ),
            219 => 
            array (
                'id' => 1232,
                'province_id' => 21,
                'name' => '中国海洋大学',
            ),
            220 => 
            array (
                'id' => 1233,
                'province_id' => 21,
                'name' => '青岛大学',
            ),
            221 => 
            array (
                'id' => 1234,
                'province_id' => 21,
                'name' => '山东科技大学',
            ),
            222 => 
            array (
                'id' => 1235,
                'province_id' => 21,
                'name' => '山东理工大学',
            ),
            223 => 
            array (
                'id' => 1236,
                'province_id' => 21,
                'name' => '聊城大学',
            ),
            224 => 
            array (
                'id' => 1237,
                'province_id' => 21,
                'name' => '烟台大学',
            ),
            225 => 
            array (
                'id' => 1238,
                'province_id' => 21,
                'name' => '青岛科技大学',
            ),
            226 => 
            array (
                'id' => 1239,
                'province_id' => 21,
                'name' => '济南大学',
            ),
            227 => 
            array (
                'id' => 1240,
                'province_id' => 21,
                'name' => '山东农业大学',
            ),
            228 => 
            array (
                'id' => 1241,
                'province_id' => 21,
                'name' => '山东中医药大学',
            ),
            229 => 
            array (
                'id' => 1242,
                'province_id' => 21,
                'name' => '山东师范大学',
            ),
            230 => 
            array (
                'id' => 1243,
                'province_id' => 21,
                'name' => '曲阜师范大学',
            ),
            231 => 
            array (
                'id' => 1244,
                'province_id' => 21,
                'name' => '青岛理工大学',
            ),
            232 => 
            array (
                'id' => 1245,
                'province_id' => 21,
                'name' => '齐鲁工业大学',
            ),
            233 => 
            array (
                'id' => 1246,
                'province_id' => 21,
                'name' => '山东建筑大学',
            ),
            234 => 
            array (
                'id' => 1247,
                'province_id' => 21,
                'name' => '潍坊学院',
            ),
            235 => 
            array (
                'id' => 1248,
                'province_id' => 21,
                'name' => '山东交通学院',
            ),
            236 => 
            array (
                'id' => 1249,
                'province_id' => 21,
                'name' => '青岛农业大学',
            ),
            237 => 
            array (
                'id' => 1250,
                'province_id' => 21,
                'name' => '潍坊医学院',
            ),
            238 => 
            array (
                'id' => 1251,
                'province_id' => 21,
                'name' => '泰山医学院',
            ),
            239 => 
            array (
                'id' => 1252,
                'province_id' => 21,
                'name' => '济宁医学院',
            ),
            240 => 
            array (
                'id' => 1253,
                'province_id' => 21,
                'name' => '滨州医学院',
            ),
            241 => 
            array (
                'id' => 1254,
                'province_id' => 21,
                'name' => '鲁东大学',
            ),
            242 => 
            array (
                'id' => 1255,
                'province_id' => 21,
                'name' => '临沂大学',
            ),
            243 => 
            array (
                'id' => 1256,
                'province_id' => 21,
                'name' => '德州学院',
            ),
            244 => 
            array (
                'id' => 1258,
                'province_id' => 21,
                'name' => '山东财经大学',
            ),
            245 => 
            array (
                'id' => 1259,
                'province_id' => 21,
                'name' => '山东工商学院',
            ),
            246 => 
            array (
                'id' => 1260,
                'province_id' => 21,
                'name' => '山东体育学院',
            ),
            247 => 
            array (
                'id' => 1261,
                'province_id' => 21,
                'name' => '山东艺术学院',
            ),
            248 => 
            array (
                'id' => 1262,
                'province_id' => 21,
                'name' => '山东工艺美术学院',
            ),
            249 => 
            array (
                'id' => 1263,
                'province_id' => 21,
                'name' => '泰山学院',
            ),
            250 => 
            array (
                'id' => 1264,
                'province_id' => 21,
                'name' => '山东警察学院',
            ),
            251 => 
            array (
                'id' => 1265,
                'province_id' => 21,
                'name' => '菏泽学院',
            ),
            252 => 
            array (
                'id' => 1266,
                'province_id' => 21,
                'name' => '烟台南山学院',
            ),
            253 => 
            array (
                'id' => 1267,
                'province_id' => 21,
                'name' => '青岛滨海学院',
            ),
            254 => 
            array (
                'id' => 1268,
                'province_id' => 21,
                'name' => '枣庄学院',
            ),
            255 => 
            array (
                'id' => 1269,
                'province_id' => 21,
                'name' => '滨州学院',
            ),
            256 => 
            array (
                'id' => 1270,
                'province_id' => 21,
                'name' => '山东电力高等专科学校',
            ),
            257 => 
            array (
                'id' => 1271,
                'province_id' => 21,
                'name' => '山东水利专科学校',
            ),
            258 => 
            array (
                'id' => 1272,
                'province_id' => 21,
                'name' => '淄博师范高等专科学校',
            ),
            259 => 
            array (
                'id' => 1273,
                'province_id' => 21,
                'name' => '菏泽医学专科学校',
            ),
            260 => 
            array (
                'id' => 1274,
                'province_id' => 21,
                'name' => '济宁学院',
            ),
            261 => 
            array (
                'id' => 1275,
                'province_id' => 21,
                'name' => '山东医学高等专科学校',
            ),
            262 => 
            array (
                'id' => 1276,
                'province_id' => 21,
                'name' => '山东公安专科学校',
            ),
            263 => 
            array (
                'id' => 1277,
                'province_id' => 21,
                'name' => '齐鲁医药学院',
            ),
            264 => 
            array (
                'id' => 1278,
                'province_id' => 21,
                'name' => '民办青岛滨海职业学院',
            ),
            265 => 
            array (
                'id' => 1279,
                'province_id' => 21,
                'name' => '山东劳动职业技术学院',
            ),
            266 => 
            array (
                'id' => 1280,
                'province_id' => 21,
                'name' => '聊城职业技术学院',
            ),
            267 => 
            array (
                'id' => 1281,
                'province_id' => 21,
                'name' => '威海职业学院',
            ),
            268 => 
            array (
                'id' => 1282,
                'province_id' => 21,
                'name' => '曲阜远东职业技术学院',
            ),
            269 => 
            array (
                'id' => 1283,
                'province_id' => 21,
                'name' => '青岛职业技术学院',
            ),
            270 => 
            array (
                'id' => 1284,
                'province_id' => 21,
                'name' => '济宁职业技术学院',
            ),
            271 => 
            array (
                'id' => 1285,
                'province_id' => 21,
                'name' => '山东商业职业技术学院',
            ),
            272 => 
            array (
                'id' => 1286,
                'province_id' => 21,
                'name' => '日照职业技术学院',
            ),
            273 => 
            array (
                'id' => 1287,
                'province_id' => 21,
                'name' => '莱芜职业技术学院',
            ),
            274 => 
            array (
                'id' => 1288,
                'province_id' => 21,
                'name' => '烟台职业学院',
            ),
            275 => 
            array (
                'id' => 1289,
                'province_id' => 21,
                'name' => '淄博职业学院',
            ),
            276 => 
            array (
                'id' => 1290,
                'province_id' => 21,
                'name' => '山东圣翰财贸职业学院',
            ),
            277 => 
            array (
                'id' => 1291,
                'province_id' => 21,
                'name' => '山东交通职业学院',
            ),
            278 => 
            array (
                'id' => 1292,
                'province_id' => 21,
                'name' => '山东水利职业学院',
            ),
            279 => 
            array (
                'id' => 1293,
                'province_id' => 21,
                'name' => '山东信息职业技术学院',
            ),
            280 => 
            array (
                'id' => 1294,
                'province_id' => 21,
                'name' => '山东外贸职业学院',
            ),
            281 => 
            array (
                'id' => 1295,
                'province_id' => 21,
                'name' => '青岛酒店管理职业技术学院',
            ),
            282 => 
            array (
                'id' => 1296,
                'province_id' => 21,
                'name' => '山东英才学院',
            ),
            283 => 
            array (
                'id' => 1297,
                'province_id' => 21,
                'name' => '山东畜牧兽医职业学院',
            ),
            284 => 
            array (
                'id' => 1298,
                'province_id' => 21,
                'name' => '山东科技职业学院',
            ),
            285 => 
            array (
                'id' => 1299,
                'province_id' => 21,
                'name' => '潍坊职业学院',
            ),
            286 => 
            array (
                'id' => 1300,
                'province_id' => 21,
                'name' => '东营职业学院',
            ),
            287 => 
            array (
                'id' => 1301,
                'province_id' => 21,
                'name' => '德州科技职业学院',
            ),
            288 => 
            array (
                'id' => 1302,
                'province_id' => 21,
                'name' => '潍坊科技学院',
            ),
            289 => 
            array (
                'id' => 1303,
                'province_id' => 21,
                'name' => '山东力明科技职业学院',
            ),
            290 => 
            array (
                'id' => 1304,
                'province_id' => 21,
                'name' => '山东中医药高等专科学校',
            ),
            291 => 
            array (
                'id' => 1305,
                'province_id' => 21,
                'name' => '山东服装职业学院',
            ),
            292 => 
            array (
                'id' => 1306,
                'province_id' => 21,
                'name' => '东营科技职业学院',
            ),
            293 => 
            array (
                'id' => 1307,
                'province_id' => 21,
                'name' => '青岛飞洋职业技术学院',
            ),
            294 => 
            array (
                'id' => 1308,
                'province_id' => 21,
                'name' => '滨州职业学院',
            ),
            295 => 
            array (
                'id' => 1309,
                'province_id' => 21,
                'name' => '淄博科技职业学院',
            ),
            296 => 
            array (
                'id' => 1310,
                'province_id' => 21,
                'name' => '山东工业职业学院',
            ),
            297 => 
            array (
                'id' => 1311,
                'province_id' => 21,
                'name' => '山东胜利职业学院',
            ),
            298 => 
            array (
                'id' => 1312,
                'province_id' => 21,
                'name' => '山东药品食品职业学院',
            ),
            299 => 
            array (
                'id' => 1313,
                'province_id' => 21,
                'name' => '潍坊工商职业学院',
            ),
            300 => 
            array (
                'id' => 1314,
                'province_id' => 21,
                'name' => '青岛港湾职业技术学院',
            ),
            301 => 
            array (
                'id' => 1315,
                'province_id' => 21,
                'name' => '山东经贸职业学院',
            ),
            302 => 
            array (
                'id' => 1316,
                'province_id' => 21,
                'name' => '山东化工职业学院',
            ),
            303 => 
            array (
                'id' => 1317,
                'province_id' => 21,
                'name' => '青岛恒星科技学院',
            ),
            304 => 
            array (
                'id' => 1318,
                'province_id' => 21,
                'name' => '青岛黄海学院',
            ),
            305 => 
            array (
                'id' => 1319,
                'province_id' => 21,
                'name' => '青岛求实职业技术学院',
            ),
            306 => 
            array (
                'id' => 1320,
                'province_id' => 21,
                'name' => '山东现代学院',
            ),
            307 => 
            array (
                'id' => 1321,
                'province_id' => 21,
                'name' => '山东军星职业技术学院',
            ),
            308 => 
            array (
                'id' => 1322,
                'province_id' => 21,
                'name' => '山东华宇工学院',
            ),
            309 => 
            array (
                'id' => 1323,
                'province_id' => 21,
                'name' => '济南工程职业技术学院',
            ),
            310 => 
            array (
                'id' => 1324,
                'province_id' => 21,
                'name' => '山东杏林科技职业学院',
            ),
            311 => 
            array (
                'id' => 1325,
                'province_id' => 21,
                'name' => '山东外事翻译职业学院',
            ),
            312 => 
            array (
                'id' => 1326,
                'province_id' => 21,
                'name' => '山东旅游职业学院',
            ),
            313 => 
            array (
                'id' => 1327,
                'province_id' => 21,
                'name' => '山东协和学院',
            ),
            314 => 
            array (
                'id' => 1328,
                'province_id' => 21,
                'name' => '山东铝业职业学院',
            ),
            315 => 
            array (
                'id' => 1329,
                'province_id' => 21,
                'name' => '山东外国语职业学院',
            ),
            316 => 
            array (
                'id' => 1330,
                'province_id' => 21,
                'name' => '山东职业学院',
            ),
            317 => 
            array (
                'id' => 1331,
                'province_id' => 21,
                'name' => '枣庄科技职业学院',
            ),
            318 => 
            array (
                'id' => 1332,
                'province_id' => 21,
                'name' => '山东凯文科技职业学院',
            ),
            319 => 
            array (
                'id' => 1333,
                'province_id' => 22,
                'name' => '太原电力高等专科学校',
            ),
            320 => 
            array (
                'id' => 1334,
                'province_id' => 22,
                'name' => '吕梁学院',
            ),
            321 => 
            array (
                'id' => 1335,
                'province_id' => 22,
                'name' => '山西省财政税务专科学校',
            ),
            322 => 
            array (
                'id' => 1336,
                'province_id' => 22,
                'name' => '山西警官高等专科学校',
            ),
            323 => 
            array (
                'id' => 1337,
                'province_id' => 22,
                'name' => '山西财贸职业技术学院',
            ),
            324 => 
            array (
                'id' => 1338,
                'province_id' => 22,
                'name' => '山西建筑职业技术学院',
            ),
            325 => 
            array (
                'id' => 1339,
                'province_id' => 22,
                'name' => '山西兴华职业学院',
            ),
            326 => 
            array (
                'id' => 1340,
                'province_id' => 22,
                'name' => '山西戏剧职业学院',
            ),
            327 => 
            array (
                'id' => 1341,
                'province_id' => 22,
                'name' => '山西机电职业技术学院',
            ),
            328 => 
            array (
                'id' => 1342,
                'province_id' => 22,
                'name' => '晋城职业技术学院',
            ),
            329 => 
            array (
                'id' => 1343,
                'province_id' => 22,
                'name' => '大同煤炭职业技术学院',
            ),
            330 => 
            array (
                'id' => 1344,
                'province_id' => 22,
                'name' => '山西药科职业学院',
            ),
            331 => 
            array (
                'id' => 1345,
                'province_id' => 22,
                'name' => '山西交通职业技术学院',
            ),
            332 => 
            array (
                'id' => 1346,
                'province_id' => 22,
                'name' => '山西艺术职业学院',
            ),
            333 => 
            array (
                'id' => 1347,
                'province_id' => 22,
                'name' => '长治职业技术学院',
            ),
            334 => 
            array (
                'id' => 1348,
                'province_id' => 22,
                'name' => '阳泉职业技术学院',
            ),
            335 => 
            array (
                'id' => 1349,
                'province_id' => 22,
                'name' => '山西水利职业技术学院',
            ),
            336 => 
            array (
                'id' => 1350,
                'province_id' => 22,
                'name' => '山西林业职业技术学院',
            ),
            337 => 
            array (
                'id' => 1351,
                'province_id' => 22,
                'name' => '山西工程职业技术学院',
            ),
            338 => 
            array (
                'id' => 1352,
                'province_id' => 22,
                'name' => '临汾职业技术学院',
            ),
            339 => 
            array (
                'id' => 1353,
                'province_id' => 22,
                'name' => '山西信息职业技术学院',
            ),
            340 => 
            array (
                'id' => 1354,
                'province_id' => 22,
                'name' => '山西金融职业技术学院',
            ),
            341 => 
            array (
                'id' => 1355,
                'province_id' => 22,
                'name' => '山西综合职业技术学院',
            ),
            342 => 
            array (
                'id' => 1356,
                'province_id' => 22,
                'name' => '山西煤炭职业技术学院',
            ),
            343 => 
            array (
                'id' => 1357,
                'province_id' => 22,
                'name' => '太原城市职业技术学院',
            ),
            344 => 
            array (
                'id' => 1358,
                'province_id' => 22,
                'name' => '潞安职业技术学院',
            ),
            345 => 
            array (
                'id' => 1359,
                'province_id' => 22,
                'name' => '山西旅游职业学院',
            ),
            346 => 
            array (
                'id' => 1360,
                'province_id' => 22,
                'name' => '山西管理职业学院',
            ),
            347 => 
            array (
                'id' => 1361,
                'province_id' => 22,
                'name' => '山西工商学院',
            ),
            348 => 
            array (
                'id' => 1362,
                'province_id' => 22,
                'name' => '太原旅游职业学院',
            ),
            349 => 
            array (
                'id' => 1363,
                'province_id' => 22,
                'name' => '山西电力职业技术学院',
            ),
            350 => 
            array (
                'id' => 1364,
                'province_id' => 22,
                'name' => '山西国际商务职业学院',
            ),
            351 => 
            array (
                'id' => 1365,
                'province_id' => 22,
                'name' => '山西警官职业学院',
            ),
            352 => 
            array (
                'id' => 1366,
                'province_id' => 22,
                'name' => '山西体育职业学院',
            ),
            353 => 
            array (
                'id' => 1367,
                'province_id' => 22,
                'name' => '忻州职业技术学院',
            ),
            354 => 
            array (
                'id' => 1368,
                'province_id' => 22,
                'name' => '山西同文外语职业学院',
            ),
            355 => 
            array (
                'id' => 1369,
                'province_id' => 22,
                'name' => '晋中职业技术学院',
            ),
            356 => 
            array (
                'id' => 1370,
                'province_id' => 22,
                'name' => '山西华澳商贸职业学院',
            ),
            357 => 
            array (
                'id' => 1371,
                'province_id' => 22,
                'name' => '山西运城农业职业技术学院',
            ),
            358 => 
            array (
                'id' => 1372,
                'province_id' => 22,
                'name' => '山西大学',
            ),
            359 => 
            array (
                'id' => 1373,
                'province_id' => 22,
                'name' => '太原理工大学',
            ),
            360 => 
            array (
                'id' => 1374,
                'province_id' => 22,
                'name' => '山西农业大学',
            ),
            361 => 
            array (
                'id' => 1375,
                'province_id' => 22,
                'name' => '山西医科大学',
            ),
            362 => 
            array (
                'id' => 1376,
                'province_id' => 22,
                'name' => '山西师范大学',
            ),
            363 => 
            array (
                'id' => 1377,
                'province_id' => 22,
                'name' => '山西财经大学',
            ),
            364 => 
            array (
                'id' => 1378,
                'province_id' => 22,
                'name' => '中北大学',
            ),
            365 => 
            array (
                'id' => 1379,
                'province_id' => 22,
                'name' => '太原科技大学',
            ),
            366 => 
            array (
                'id' => 1380,
                'province_id' => 22,
                'name' => '山西大同大学',
            ),
            367 => 
            array (
                'id' => 1381,
                'province_id' => 22,
                'name' => '长治医学院',
            ),
            368 => 
            array (
                'id' => 1382,
                'province_id' => 22,
                'name' => '山西中医学院',
            ),
            369 => 
            array (
                'id' => 1383,
                'province_id' => 22,
                'name' => '忻州师范学院',
            ),
            370 => 
            array (
                'id' => 1384,
                'province_id' => 22,
                'name' => '运城学院',
            ),
            371 => 
            array (
                'id' => 1385,
                'province_id' => 22,
                'name' => '太原师范学院',
            ),
            372 => 
            array (
                'id' => 1386,
                'province_id' => 22,
                'name' => '长治学院',
            ),
            373 => 
            array (
                'id' => 1387,
                'province_id' => 22,
                'name' => '晋中学院',
            ),
            374 => 
            array (
                'id' => 1388,
                'province_id' => 22,
                'name' => '太原学院',
            ),
            375 => 
            array (
                'id' => 1389,
                'province_id' => 23,
                'name' => '西安交通大学',
            ),
            376 => 
            array (
                'id' => 1390,
                'province_id' => 23,
                'name' => '长安大学',
            ),
            377 => 
            array (
                'id' => 1391,
                'province_id' => 23,
                'name' => '西安电子科技大学',
            ),
            378 => 
            array (
                'id' => 1392,
                'province_id' => 23,
                'name' => '西北农林科技大学',
            ),
            379 => 
            array (
                'id' => 1393,
                'province_id' => 23,
                'name' => '陕西师范大学',
            ),
            380 => 
            array (
                'id' => 1394,
                'province_id' => 23,
                'name' => '西北工业大学',
            ),
            381 => 
            array (
                'id' => 1395,
                'province_id' => 23,
                'name' => '西北大学',
            ),
            382 => 
            array (
                'id' => 1396,
                'province_id' => 23,
                'name' => '延安大学',
            ),
            383 => 
            array (
                'id' => 1397,
                'province_id' => 23,
                'name' => '西安理工大学',
            ),
            384 => 
            array (
                'id' => 1398,
                'province_id' => 23,
                'name' => '西安建筑科技大学',
            ),
            385 => 
            array (
                'id' => 1399,
                'province_id' => 23,
                'name' => '陕西科技大学',
            ),
            386 => 
            array (
                'id' => 1400,
                'province_id' => 23,
                'name' => '西安科技大学',
            ),
            387 => 
            array (
                'id' => 1401,
                'province_id' => 23,
                'name' => '西安石油大学',
            ),
            388 => 
            array (
                'id' => 1402,
                'province_id' => 23,
                'name' => '西安工程大学',
            ),
            389 => 
            array (
                'id' => 1403,
                'province_id' => 23,
                'name' => '西安工业大学',
            ),
            390 => 
            array (
                'id' => 1404,
                'province_id' => 23,
                'name' => '西安邮电大学',
            ),
            391 => 
            array (
                'id' => 1405,
                'province_id' => 23,
                'name' => '陕西中医学院',
            ),
            392 => 
            array (
                'id' => 1406,
                'province_id' => 23,
                'name' => '榆林学院',
            ),
            393 => 
            array (
                'id' => 1407,
                'province_id' => 23,
                'name' => '渭南师范学院',
            ),
            394 => 
            array (
                'id' => 1408,
                'province_id' => 23,
                'name' => '宝鸡文理学院',
            ),
            395 => 
            array (
                'id' => 1409,
                'province_id' => 23,
                'name' => '咸阳师范学院',
            ),
            396 => 
            array (
                'id' => 1410,
                'province_id' => 23,
                'name' => '陕西理工学院',
            ),
            397 => 
            array (
                'id' => 1411,
                'province_id' => 23,
                'name' => '西安外国语大学',
            ),
            398 => 
            array (
                'id' => 1412,
                'province_id' => 23,
                'name' => '西安财经学院',
            ),
            399 => 
            array (
                'id' => 1413,
                'province_id' => 23,
                'name' => '西北政法大学',
            ),
            400 => 
            array (
                'id' => 1414,
                'province_id' => 23,
                'name' => '西安体育学院',
            ),
            401 => 
            array (
                'id' => 1415,
                'province_id' => 23,
                'name' => '西安美术学院',
            ),
            402 => 
            array (
                'id' => 1416,
                'province_id' => 23,
                'name' => '西安音乐学院',
            ),
            403 => 
            array (
                'id' => 1417,
                'province_id' => 23,
                'name' => '西安培华学院',
            ),
            404 => 
            array (
                'id' => 1418,
                'province_id' => 23,
                'name' => '西京学院',
            ),
            405 => 
            array (
                'id' => 1419,
                'province_id' => 23,
                'name' => '西安欧亚学院',
            ),
            406 => 
            array (
                'id' => 1420,
                'province_id' => 23,
                'name' => '西安外事学院',
            ),
            407 => 
            array (
                'id' => 1421,
                'province_id' => 23,
                'name' => '西安文理学院',
            ),
            408 => 
            array (
                'id' => 1422,
                'province_id' => 23,
                'name' => '西安医学院',
            ),
            409 => 
            array (
                'id' => 1423,
                'province_id' => 23,
                'name' => '安康学院',
            ),
            410 => 
            array (
                'id' => 1424,
                'province_id' => 23,
                'name' => '商洛学院',
            ),
            411 => 
            array (
                'id' => 1425,
                'province_id' => 23,
                'name' => '西安翻译学院',
            ),
            412 => 
            array (
                'id' => 1426,
                'province_id' => 23,
                'name' => '汉中职业技术学院',
            ),
            413 => 
            array (
                'id' => 1427,
                'province_id' => 23,
                'name' => '陕西经济管理职业技术学院',
            ),
            414 => 
            array (
                'id' => 1428,
                'province_id' => 23,
                'name' => '西安航空学院',
            ),
            415 => 
            array (
                'id' => 1429,
                'province_id' => 23,
                'name' => '西安电力高等专科学校',
            ),
            416 => 
            array (
                'id' => 1430,
                'province_id' => 23,
                'name' => '杨凌职业技术学院',
            ),
            417 => 
            array (
                'id' => 1431,
                'province_id' => 23,
                'name' => '陕西工业职业技术学院',
            ),
            418 => 
            array (
                'id' => 1432,
                'province_id' => 23,
                'name' => '西安思源学院',
            ),
            419 => 
            array (
                'id' => 1433,
                'province_id' => 23,
                'name' => '陕西国防工业职业技术学院',
            ),
            420 => 
            array (
                'id' => 1434,
                'province_id' => 23,
                'name' => '陕西服装艺术职业学院',
            ),
            421 => 
            array (
                'id' => 1435,
                'province_id' => 23,
                'name' => '西安高新科技职业学院',
            ),
            422 => 
            array (
                'id' => 1436,
                'province_id' => 23,
                'name' => '西安三资职业学院',
            ),
            423 => 
            array (
                'id' => 1437,
                'province_id' => 23,
                'name' => '陕西职业技术学院',
            ),
            424 => 
            array (
                'id' => 1438,
                'province_id' => 23,
                'name' => '陕西能源职业技术学院',
            ),
            425 => 
            array (
                'id' => 1439,
                'province_id' => 23,
                'name' => '陕西财经职业技术学院',
            ),
            426 => 
            array (
                'id' => 1440,
                'province_id' => 23,
                'name' => '陕西交通职业技术学院',
            ),
            427 => 
            array (
                'id' => 1441,
                'province_id' => 23,
                'name' => '陕西国际商贸职业学院',
            ),
            428 => 
            array (
                'id' => 1442,
                'province_id' => 23,
                'name' => '西安航空职业技术学院',
            ),
            429 => 
            array (
                'id' => 1443,
                'province_id' => 23,
                'name' => '西安交通工程学院',
            ),
            430 => 
            array (
                'id' => 1444,
                'province_id' => 23,
                'name' => '陕西电子信息职业技术学院',
            ),
            431 => 
            array (
                'id' => 1445,
                'province_id' => 23,
                'name' => '陕西航空职业技术学院',
            ),
            432 => 
            array (
                'id' => 1446,
                'province_id' => 23,
                'name' => '陕西铁路工程职业技术学院',
            ),
            433 => 
            array (
                'id' => 1447,
                'province_id' => 23,
                'name' => '陕西警官职业学院',
            ),
            434 => 
            array (
                'id' => 1448,
                'province_id' => 23,
                'name' => '宝鸡职业技术学院',
            ),
            435 => 
            array (
                'id' => 1449,
                'province_id' => 23,
                'name' => '陕西邮电职业技术学院',
            ),
            436 => 
            array (
                'id' => 1450,
                'province_id' => 23,
                'name' => '西安海棠职业学院',
            ),
            437 => 
            array (
                'id' => 1451,
                'province_id' => 23,
                'name' => '西安汽车科技职业学院',
            ),
            438 => 
            array (
                'id' => 1452,
                'province_id' => 23,
                'name' => '西安东方亚太职业技术学院',
            ),
            439 => 
            array (
                'id' => 1453,
                'province_id' => 23,
                'name' => '咸阳职业技术学院',
            ),
            440 => 
            array (
                'id' => 1454,
                'province_id' => 23,
                'name' => '商洛职业技术学院',
            ),
            441 => 
            array (
                'id' => 1455,
                'province_id' => 23,
                'name' => '陕西青年职业学院',
            ),
            442 => 
            array (
                'id' => 1456,
                'province_id' => 23,
                'name' => '陕西纺织服装职业技术学院',
            ),
            443 => 
            array (
                'id' => 1457,
                'province_id' => 23,
                'name' => '陕西电子科技职业学院',
            ),
            444 => 
            array (
                'id' => 1458,
                'province_id' => 23,
                'name' => '陕西旅游烹饪职业学院',
            ),
            445 => 
            array (
                'id' => 1459,
                'province_id' => 23,
                'name' => '西安职业技术学院',
            ),
            446 => 
            array (
                'id' => 1460,
                'province_id' => 23,
                'name' => '铜川职业技术学院',
            ),
            447 => 
            array (
                'id' => 1461,
                'province_id' => 23,
                'name' => '安康职业技术学院',
            ),
            448 => 
            array (
                'id' => 1462,
                'province_id' => 23,
                'name' => '渭南职业技术学院',
            ),
            449 => 
            array (
                'id' => 1463,
                'province_id' => 23,
                'name' => '延安职业技术学院',
            ),
            450 => 
            array (
                'id' => 1464,
                'province_id' => 23,
                'name' => '西安铁路职业技术学院',
            ),
            451 => 
            array (
                'id' => 1465,
                'province_id' => 24,
                'name' => '复旦大学',
            ),
            452 => 
            array (
                'id' => 1466,
                'province_id' => 24,
                'name' => '同济大学',
            ),
            453 => 
            array (
                'id' => 1467,
                'province_id' => 24,
                'name' => '上海交通大学',
            ),
            454 => 
            array (
                'id' => 1468,
                'province_id' => 24,
                'name' => '华东理工大学',
            ),
            455 => 
            array (
                'id' => 1469,
                'province_id' => 24,
                'name' => '东华大学',
            ),
            456 => 
            array (
                'id' => 1470,
                'province_id' => 24,
                'name' => '华东师范大学',
            ),
            457 => 
            array (
                'id' => 1471,
                'province_id' => 24,
                'name' => '上海外国语大学',
            ),
            458 => 
            array (
                'id' => 1472,
                'province_id' => 24,
                'name' => '上海财经大学',
            ),
            459 => 
            array (
                'id' => 1473,
                'province_id' => 24,
                'name' => '上海大学',
            ),
            460 => 
            array (
                'id' => 1474,
                'province_id' => 24,
                'name' => '上海理工大学',
            ),
            461 => 
            array (
                'id' => 1475,
                'province_id' => 24,
                'name' => '上海工程技术大学',
            ),
            462 => 
            array (
                'id' => 1477,
                'province_id' => 24,
                'name' => '上海中医药大学',
            ),
            463 => 
            array (
                'id' => 1478,
                'province_id' => 24,
                'name' => '上海师范大学',
            ),
            464 => 
            array (
                'id' => 1479,
                'province_id' => 24,
                'name' => '上海海事大学',
            ),
            465 => 
            array (
                'id' => 1480,
                'province_id' => 24,
                'name' => '上海电力学院',
            ),
            466 => 
            array (
                'id' => 1481,
                'province_id' => 24,
                'name' => '上海电机学院',
            ),
            467 => 
            array (
                'id' => 1482,
                'province_id' => 24,
                'name' => '上海应用技术学院',
            ),
            468 => 
            array (
                'id' => 1483,
                'province_id' => 24,
                'name' => '上海对外贸易学院',
            ),
            469 => 
            array (
                'id' => 1484,
                'province_id' => 24,
                'name' => '华东政法大学',
            ),
            470 => 
            array (
                'id' => 1485,
                'province_id' => 24,
                'name' => '上海政法学院',
            ),
            471 => 
            array (
                'id' => 1486,
                'province_id' => 24,
                'name' => '上海体育学院',
            ),
            472 => 
            array (
                'id' => 1487,
                'province_id' => 24,
                'name' => '上海音乐学院',
            ),
            473 => 
            array (
                'id' => 1488,
                'province_id' => 24,
                'name' => '上海戏剧学院',
            ),
            474 => 
            array (
                'id' => 1489,
                'province_id' => 24,
                'name' => '上海杉达学院',
            ),
            475 => 
            array (
                'id' => 1490,
                'province_id' => 24,
                'name' => '上海建桥学院',
            ),
            476 => 
            array (
                'id' => 1491,
                'province_id' => 24,
                'name' => '上海立信会计学院',
            ),
            477 => 
            array (
                'id' => 1492,
                'province_id' => 24,
                'name' => '上海海关高等专科学校',
            ),
            478 => 
            array (
                'id' => 1493,
                'province_id' => 24,
                'name' => '上海医疗器械高等专科学校',
            ),
            479 => 
            array (
                'id' => 1494,
                'province_id' => 24,
                'name' => '上海出版印刷高等专科学校',
            ),
            480 => 
            array (
                'id' => 1495,
                'province_id' => 24,
                'name' => '上海旅游高等专科学校',
            ),
            481 => 
            array (
                'id' => 1496,
                'province_id' => 24,
                'name' => '上海金融学院',
            ),
            482 => 
            array (
                'id' => 1497,
                'province_id' => 24,
                'name' => '上海公安高等专科学校',
            ),
            483 => 
            array (
                'id' => 1498,
                'province_id' => 24,
                'name' => '上海新侨职业技术学院',
            ),
            484 => 
            array (
                'id' => 1499,
                'province_id' => 24,
                'name' => '上海第二工业大学',
            ),
            485 => 
            array (
                'id' => 1500,
                'province_id' => 24,
                'name' => '上海东海职业技术学院',
            ),
            486 => 
            array (
                'id' => 1501,
                'province_id' => 24,
                'name' => '上海城市管理职业技术学院',
            ),
            487 => 
            array (
                'id' => 1502,
                'province_id' => 24,
                'name' => '上海托普信息技术学院',
            ),
            488 => 
            array (
                'id' => 1503,
                'province_id' => 24,
                'name' => '上海邦德职业技术学院',
            ),
            489 => 
            array (
                'id' => 1504,
                'province_id' => 24,
                'name' => '上海农林职业技术学院',
            ),
            490 => 
            array (
                'id' => 1505,
                'province_id' => 24,
                'name' => '上海电子信息职业技术学院',
            ),
            491 => 
            array (
                'id' => 1506,
                'province_id' => 24,
                'name' => '上海建峰职业技术学院',
            ),
            492 => 
            array (
                'id' => 1507,
                'province_id' => 24,
                'name' => '上海科学技术职业学院',
            ),
            493 => 
            array (
                'id' => 1508,
                'province_id' => 24,
                'name' => '上海海事职业技术学院',
            ),
            494 => 
            array (
                'id' => 1509,
                'province_id' => 24,
                'name' => '上海工商外国语职业学院',
            ),
            495 => 
            array (
                'id' => 1510,
                'province_id' => 24,
                'name' => '上海交通职业技术学院',
            ),
            496 => 
            array (
                'id' => 1511,
                'province_id' => 24,
                'name' => '上海济光职业技术学院',
            ),
            497 => 
            array (
                'id' => 1512,
                'province_id' => 24,
                'name' => '上海行健职业学院',
            ),
            498 => 
            array (
                'id' => 1513,
                'province_id' => 24,
                'name' => '上海中侨职业技术学院',
            ),
            499 => 
            array (
                'id' => 1514,
                'province_id' => 24,
                'name' => '上海民远职业技术学院',
            ),
        ));
        \DB::table('universities')->insert(array (
            0 => 
            array (
                'id' => 1515,
                'province_id' => 24,
                'name' => '上海东方文化职业学院',
            ),
            1 => 
            array (
                'id' => 1516,
                'province_id' => 24,
                'name' => '上海震旦职业学院',
            ),
            2 => 
            array (
                'id' => 1517,
                'province_id' => 24,
                'name' => '上海立达职业技术学院',
            ),
            3 => 
            array (
                'id' => 1518,
                'province_id' => 24,
                'name' => '上海思博职业技术学院',
            ),
            4 => 
            array (
                'id' => 1519,
                'province_id' => 24,
                'name' => '上海殴华职业技术学院',
            ),
            5 => 
            array (
                'id' => 1520,
                'province_id' => 24,
                'name' => '上海工艺美术职业学院',
            ),
            6 => 
            array (
                'id' => 1521,
                'province_id' => 24,
                'name' => '上海电影艺术职业学院',
            ),
            7 => 
            array (
                'id' => 1522,
                'province_id' => 24,
                'name' => '上海工会管理职业学院',
            ),
            8 => 
            array (
                'id' => 1523,
                'province_id' => 24,
                'name' => '上海中华职业技术学院',
            ),
            9 => 
            array (
                'id' => 1524,
                'province_id' => 25,
                'name' => '四川大学',
            ),
            10 => 
            array (
                'id' => 1525,
                'province_id' => 25,
                'name' => '西南交通大学',
            ),
            11 => 
            array (
                'id' => 1526,
                'province_id' => 25,
                'name' => '电子科技大学',
            ),
            12 => 
            array (
                'id' => 1527,
                'province_id' => 25,
                'name' => '西南财经大学',
            ),
            13 => 
            array (
                'id' => 1528,
                'province_id' => 25,
                'name' => '西南科技大学',
            ),
            14 => 
            array (
                'id' => 1529,
                'province_id' => 25,
                'name' => '四川农业大学',
            ),
            15 => 
            array (
                'id' => 1530,
                'province_id' => 25,
                'name' => '成都中医药大学',
            ),
            16 => 
            array (
                'id' => 1531,
                'province_id' => 25,
                'name' => '西华大学',
            ),
            17 => 
            array (
                'id' => 1532,
                'province_id' => 25,
                'name' => '四川师范大学',
            ),
            18 => 
            array (
                'id' => 1533,
                'province_id' => 25,
                'name' => '西南民族大学',
            ),
            19 => 
            array (
                'id' => 1534,
                'province_id' => 25,
                'name' => '中国民用航空飞行学院',
            ),
            20 => 
            array (
                'id' => 1535,
                'province_id' => 25,
                'name' => '攀枝花学院',
            ),
            21 => 
            array (
                'id' => 1536,
                'province_id' => 25,
                'name' => '宜宾学院',
            ),
            22 => 
            array (
                'id' => 1537,
                'province_id' => 25,
                'name' => '成都理工大学',
            ),
            23 => 
            array (
                'id' => 1538,
                'province_id' => 25,
                'name' => '西南石油大学',
            ),
            24 => 
            array (
                'id' => 1539,
                'province_id' => 25,
                'name' => '四川理工学院',
            ),
            25 => 
            array (
                'id' => 1540,
                'province_id' => 25,
                'name' => '成都信息工程学院',
            ),
            26 => 
            array (
                'id' => 1541,
                'province_id' => 25,
                'name' => '泸州医学院',
            ),
            27 => 
            array (
                'id' => 1542,
                'province_id' => 25,
                'name' => '川北医学院',
            ),
            28 => 
            array (
                'id' => 1543,
                'province_id' => 25,
                'name' => '成都医学院',
            ),
            29 => 
            array (
                'id' => 1544,
                'province_id' => 25,
                'name' => '西华师范大学',
            ),
            30 => 
            array (
                'id' => 1545,
                'province_id' => 25,
                'name' => '内江师范学院',
            ),
            31 => 
            array (
                'id' => 1546,
                'province_id' => 25,
                'name' => '乐山师范学院',
            ),
            32 => 
            array (
                'id' => 1547,
                'province_id' => 25,
                'name' => '成都体育学院',
            ),
            33 => 
            array (
                'id' => 1548,
                'province_id' => 25,
                'name' => '四川音乐学院',
            ),
            34 => 
            array (
                'id' => 1549,
                'province_id' => 25,
                'name' => '绵阳师范学院',
            ),
            35 => 
            array (
                'id' => 1550,
                'province_id' => 25,
                'name' => '西昌学院',
            ),
            36 => 
            array (
                'id' => 1551,
                'province_id' => 25,
                'name' => '四川文理学院',
            ),
            37 => 
            array (
                'id' => 1552,
                'province_id' => 25,
                'name' => '四川警察学院',
            ),
            38 => 
            array (
                'id' => 1553,
                'province_id' => 25,
                'name' => '成都学院',
            ),
            39 => 
            array (
                'id' => 1554,
                'province_id' => 25,
                'name' => '四川中医药高等专科学校',
            ),
            40 => 
            array (
                'id' => 1555,
                'province_id' => 25,
                'name' => '成都纺织高等专科学校',
            ),
            41 => 
            array (
                'id' => 1556,
                'province_id' => 25,
                'name' => '四川旅游学院',
            ),
            42 => 
            array (
                'id' => 1557,
                'province_id' => 25,
                'name' => '成都工业学院',
            ),
            43 => 
            array (
                'id' => 1558,
                'province_id' => 25,
                'name' => '四川民族学院',
            ),
            44 => 
            array (
                'id' => 1559,
                'province_id' => 25,
                'name' => '阿坝师范高等专科学校',
            ),
            45 => 
            array (
                'id' => 1560,
                'province_id' => 25,
                'name' => '民办西川天一学院',
            ),
            46 => 
            array (
                'id' => 1561,
                'province_id' => 25,
                'name' => '成都航空职业技术学院',
            ),
            47 => 
            array (
                'id' => 1562,
                'province_id' => 25,
                'name' => '四川工程职业技术学院',
            ),
            48 => 
            array (
                'id' => 1563,
                'province_id' => 25,
                'name' => '四川电力职业技术学院',
            ),
            49 => 
            array (
                'id' => 1564,
                'province_id' => 25,
                'name' => '四川建筑职业技术学院',
            ),
            50 => 
            array (
                'id' => 1565,
                'province_id' => 25,
                'name' => '四川国际标榜职业学院',
            ),
            51 => 
            array (
                'id' => 1566,
                'province_id' => 25,
                'name' => '成都农业科技职业学院',
            ),
            52 => 
            array (
                'id' => 1567,
                'province_id' => 25,
                'name' => '眉山职业技术学院',
            ),
            53 => 
            array (
                'id' => 1568,
                'province_id' => 25,
                'name' => '四川职业技术学院',
            ),
            54 => 
            array (
                'id' => 1569,
                'province_id' => 25,
                'name' => '四川工商职业技术学院',
            ),
            55 => 
            array (
                'id' => 1570,
                'province_id' => 25,
                'name' => '绵阳职业技术学院',
            ),
            56 => 
            array (
                'id' => 1571,
                'province_id' => 25,
                'name' => '泸州职业技术学院',
            ),
            57 => 
            array (
                'id' => 1572,
                'province_id' => 25,
                'name' => '四川机电职业技术学院',
            ),
            58 => 
            array (
                'id' => 1573,
                'province_id' => 25,
                'name' => '四川交通职业技术学院',
            ),
            59 => 
            array (
                'id' => 1574,
                'province_id' => 25,
                'name' => '达州职业技术学院',
            ),
            60 => 
            array (
                'id' => 1575,
                'province_id' => 25,
                'name' => '宜宾职业技术学院',
            ),
            61 => 
            array (
                'id' => 1576,
                'province_id' => 25,
                'name' => '成都艺术职业学院',
            ),
            62 => 
            array (
                'id' => 1577,
                'province_id' => 25,
                'name' => '四川托普信息技术职业学院',
            ),
            63 => 
            array (
                'id' => 1578,
                'province_id' => 25,
                'name' => '乐山职业技术学院',
            ),
            64 => 
            array (
                'id' => 1579,
                'province_id' => 25,
                'name' => '雅安职业技术学院',
            ),
            65 => 
            array (
                'id' => 1580,
                'province_id' => 25,
                'name' => '成都职业技术学院',
            ),
            66 => 
            array (
                'id' => 1581,
                'province_id' => 25,
                'name' => '成都东软信息技术职业学院',
            ),
            67 => 
            array (
                'id' => 1582,
                'province_id' => 25,
                'name' => '四川化工职业技术学院',
            ),
            68 => 
            array (
                'id' => 1583,
                'province_id' => 25,
                'name' => '四川水利职业技术学院',
            ),
            69 => 
            array (
                'id' => 1584,
                'province_id' => 25,
                'name' => '南充职业技术学院',
            ),
            70 => 
            array (
                'id' => 1585,
                'province_id' => 25,
                'name' => '内江职业技术学院',
            ),
            71 => 
            array (
                'id' => 1586,
                'province_id' => 25,
                'name' => '四川航天职业技术学院',
            ),
            72 => 
            array (
                'id' => 1587,
                'province_id' => 25,
                'name' => '四川邮电职业技术学院',
            ),
            73 => 
            array (
                'id' => 1588,
                'province_id' => 25,
                'name' => '四川司法警官职业学院',
            ),
            74 => 
            array (
                'id' => 1589,
                'province_id' => 25,
                'name' => '四川工业管理职业学院',
            ),
            75 => 
            array (
                'id' => 1590,
                'province_id' => 25,
                'name' => '四川华新现代职业学院',
            ),
            76 => 
            array (
                'id' => 1591,
                'province_id' => 25,
                'name' => '四川管理职业学院',
            ),
            77 => 
            array (
                'id' => 1592,
                'province_id' => 25,
                'name' => '四川文化传媒职业学院',
            ),
            78 => 
            array (
                'id' => 1593,
                'province_id' => 25,
                'name' => '四川信息职业技术学院',
            ),
            79 => 
            array (
                'id' => 1594,
                'province_id' => 25,
                'name' => '四川商务职业学院',
            ),
            80 => 
            array (
                'id' => 1595,
                'province_id' => 25,
                'name' => '广安职业技术学院',
            ),
            81 => 
            array (
                'id' => 1596,
                'province_id' => 27,
                'name' => '南开大学',
            ),
            82 => 
            array (
                'id' => 1597,
                'province_id' => 27,
                'name' => '天津大学',
            ),
            83 => 
            array (
                'id' => 1598,
                'province_id' => 27,
                'name' => '【网上党校】天津工业大学',
            ),
            84 => 
            array (
                'id' => 1599,
                'province_id' => 27,
                'name' => '天津科技大学',
            ),
            85 => 
            array (
                'id' => 1600,
                'province_id' => 27,
                'name' => '天津医科大学',
            ),
            86 => 
            array (
                'id' => 1601,
                'province_id' => 27,
                'name' => '天津师范大学',
            ),
            87 => 
            array (
                'id' => 1602,
                'province_id' => 27,
                'name' => '中国民航大学',
            ),
            88 => 
            array (
                'id' => 1603,
                'province_id' => 27,
                'name' => '天津理工大学',
            ),
            89 => 
            array (
                'id' => 1604,
                'province_id' => 27,
                'name' => '天津城建大学',
            ),
            90 => 
            array (
                'id' => 1605,
                'province_id' => 27,
                'name' => '天津农学院',
            ),
            91 => 
            array (
                'id' => 1606,
                'province_id' => 27,
                'name' => '天津中医药大学',
            ),
            92 => 
            array (
                'id' => 1607,
                'province_id' => 27,
                'name' => '天津职业技术师范大学',
            ),
            93 => 
            array (
                'id' => 1608,
                'province_id' => 27,
                'name' => '天津外国语大学',
            ),
            94 => 
            array (
                'id' => 1609,
                'province_id' => 27,
                'name' => '天津财经大学',
            ),
            95 => 
            array (
                'id' => 1610,
                'province_id' => 27,
                'name' => '天津商业大学',
            ),
            96 => 
            array (
                'id' => 1611,
                'province_id' => 27,
                'name' => '天津体育学院',
            ),
            97 => 
            array (
                'id' => 1612,
                'province_id' => 27,
                'name' => '天津美术学院',
            ),
            98 => 
            array (
                'id' => 1613,
                'province_id' => 27,
                'name' => '天津音乐学院',
            ),
            99 => 
            array (
                'id' => 1614,
                'province_id' => 27,
                'name' => '天津医学高等专科学校',
            ),
            100 => 
            array (
                'id' => 1615,
                'province_id' => 27,
                'name' => '天津公安警官职业学院',
            ),
            101 => 
            array (
                'id' => 1616,
                'province_id' => 27,
                'name' => '天津电子信息职业技术学院',
            ),
            102 => 
            array (
                'id' => 1617,
                'province_id' => 27,
                'name' => '天津滨海职业学院',
            ),
            103 => 
            array (
                'id' => 1618,
                'province_id' => 27,
                'name' => '天津轻工职业技术学院',
            ),
            104 => 
            array (
                'id' => 1619,
                'province_id' => 27,
                'name' => '天津现代职业技术学院',
            ),
            105 => 
            array (
                'id' => 1620,
                'province_id' => 27,
                'name' => '天津工程职业技术学院',
            ),
            106 => 
            array (
                'id' => 1621,
                'province_id' => 27,
                'name' => '天津职业大学',
            ),
            107 => 
            array (
                'id' => 1622,
                'province_id' => 27,
                'name' => '天津机电职业技术学院',
            ),
            108 => 
            array (
                'id' => 1623,
                'province_id' => 27,
                'name' => '天津工业职业技术学院',
            ),
            109 => 
            array (
                'id' => 1624,
                'province_id' => 27,
                'name' => '民办天狮职业技术学院',
            ),
            110 => 
            array (
                'id' => 1625,
                'province_id' => 27,
                'name' => '天津渤海职业技术学院',
            ),
            111 => 
            array (
                'id' => 1626,
                'province_id' => 27,
                'name' => '天津交通职业学院',
            ),
            112 => 
            array (
                'id' => 1627,
                'province_id' => 27,
                'name' => '天津中德职业技术学院',
            ),
            113 => 
            array (
                'id' => 1628,
                'province_id' => 27,
                'name' => '天津青年职业学院',
            ),
            114 => 
            array (
                'id' => 1629,
                'province_id' => 27,
                'name' => '天津国土资源和房屋职业学院',
            ),
            115 => 
            array (
                'id' => 1630,
                'province_id' => 27,
                'name' => '天津文化艺术职业学院',
            ),
            116 => 
            array (
                'id' => 1631,
                'province_id' => 27,
                'name' => '天津开发区职业技术学院',
            ),
            117 => 
            array (
                'id' => 1632,
                'province_id' => 27,
                'name' => '天津对外经济贸易职业学院',
            ),
            118 => 
            array (
                'id' => 1633,
                'province_id' => 27,
                'name' => '天津石油职业技术学院',
            ),
            119 => 
            array (
                'id' => 1634,
                'province_id' => 27,
                'name' => '天津冶金职业技术学院',
            ),
            120 => 
            array (
                'id' => 1635,
                'province_id' => 27,
                'name' => '天津河北职业学院',
            ),
            121 => 
            array (
                'id' => 1636,
                'province_id' => 27,
                'name' => '天津生物工程职业技术学院',
            ),
            122 => 
            array (
                'id' => 1637,
                'province_id' => 27,
                'name' => '天津城市建设管理职业技术学院',
            ),
            123 => 
            array (
                'id' => 1638,
                'province_id' => 27,
                'name' => '天津美术职业学院',
            ),
            124 => 
            array (
                'id' => 1639,
                'province_id' => 27,
                'name' => '天津城市职业学院',
            ),
            125 => 
            array (
                'id' => 1640,
                'province_id' => 27,
                'name' => '天津海运职业学院',
            ),
            126 => 
            array (
                'id' => 1641,
                'province_id' => 28,
                'name' => '西藏大学',
            ),
            127 => 
            array (
                'id' => 1642,
                'province_id' => 28,
                'name' => '西藏藏医学院',
            ),
            128 => 
            array (
                'id' => 1643,
                'province_id' => 23,
                'name' => '西藏民族大学',
            ),
            129 => 
            array (
                'id' => 1644,
                'province_id' => 28,
                'name' => '西藏警官高等专科学校',
            ),
            130 => 
            array (
                'id' => 1645,
                'province_id' => 28,
                'name' => '拉萨师范高等专科学校',
            ),
            131 => 
            array (
                'id' => 1646,
                'province_id' => 29,
                'name' => '新疆工程学院',
            ),
            132 => 
            array (
                'id' => 1647,
                'province_id' => 29,
                'name' => '新疆维吾尔医学专科学校',
            ),
            133 => 
            array (
                'id' => 1648,
                'province_id' => 29,
                'name' => '和田师范专科学校',
            ),
            134 => 
            array (
                'id' => 1649,
                'province_id' => 29,
                'name' => '新疆警察学院',
            ),
            135 => 
            array (
                'id' => 1650,
                'province_id' => 29,
                'name' => '乌鲁木齐职业大学',
            ),
            136 => 
            array (
                'id' => 1651,
                'province_id' => 29,
                'name' => '新疆机电职业技术学院',
            ),
            137 => 
            array (
                'id' => 1652,
                'province_id' => 29,
                'name' => '新疆轻工职业技术学院',
            ),
            138 => 
            array (
                'id' => 1653,
                'province_id' => 29,
                'name' => '克拉玛依职业技术学院',
            ),
            139 => 
            array (
                'id' => 1654,
                'province_id' => 29,
                'name' => '新疆农业职业技术学院',
            ),
            140 => 
            array (
                'id' => 1655,
                'province_id' => 29,
                'name' => '昌吉职业技术学院',
            ),
            141 => 
            array (
                'id' => 1656,
                'province_id' => 29,
                'name' => '伊犁职业技术学院',
            ),
            142 => 
            array (
                'id' => 1657,
                'province_id' => 29,
                'name' => '巴音郭楞职业技术学院',
            ),
            143 => 
            array (
                'id' => 1658,
                'province_id' => 29,
                'name' => '阿克苏职业技术学院',
            ),
            144 => 
            array (
                'id' => 1659,
                'province_id' => 29,
                'name' => '新疆建设职业技术学院',
            ),
            145 => 
            array (
                'id' => 1660,
                'province_id' => 29,
                'name' => '新疆兵团警官高等专科学校',
            ),
            146 => 
            array (
                'id' => 1661,
                'province_id' => 29,
                'name' => '新疆天山职业技术学院',
            ),
            147 => 
            array (
                'id' => 1662,
                'province_id' => 29,
                'name' => '新疆现代职业技术学院',
            ),
            148 => 
            array (
                'id' => 1663,
                'province_id' => 29,
                'name' => '新疆石河子职业技术学院',
            ),
            149 => 
            array (
                'id' => 1664,
                'province_id' => 29,
                'name' => '新疆交通职业技术学院',
            ),
            150 => 
            array (
                'id' => 1665,
                'province_id' => 29,
                'name' => '新疆大学',
            ),
            151 => 
            array (
                'id' => 1666,
                'province_id' => 29,
                'name' => '石河子大学',
            ),
            152 => 
            array (
                'id' => 1667,
                'province_id' => 29,
                'name' => '新疆农业大学',
            ),
            153 => 
            array (
                'id' => 1668,
                'province_id' => 29,
                'name' => '塔里木大学',
            ),
            154 => 
            array (
                'id' => 1669,
                'province_id' => 29,
                'name' => '新疆医科大学',
            ),
            155 => 
            array (
                'id' => 1670,
                'province_id' => 29,
                'name' => '新疆师范大学',
            ),
            156 => 
            array (
                'id' => 1671,
                'province_id' => 29,
                'name' => '昌吉学院',
            ),
            157 => 
            array (
                'id' => 1672,
                'province_id' => 29,
                'name' => '喀什大学',
            ),
            158 => 
            array (
                'id' => 1673,
                'province_id' => 29,
                'name' => '伊犁师范学院',
            ),
            159 => 
            array (
                'id' => 1674,
                'province_id' => 29,
                'name' => '新疆财经大学',
            ),
            160 => 
            array (
                'id' => 1675,
                'province_id' => 29,
                'name' => '新疆艺术学院',
            ),
            161 => 
            array (
                'id' => 1676,
                'province_id' => 30,
                'name' => '云南大学',
            ),
            162 => 
            array (
                'id' => 1677,
                'province_id' => 30,
                'name' => '昆明理工大学',
            ),
            163 => 
            array (
                'id' => 1678,
                'province_id' => 30,
                'name' => '云南农业大学',
            ),
            164 => 
            array (
                'id' => 1679,
                'province_id' => 30,
                'name' => '云南师范大学',
            ),
            165 => 
            array (
                'id' => 1680,
                'province_id' => 30,
                'name' => '西南林业大学',
            ),
            166 => 
            array (
                'id' => 1681,
                'province_id' => 30,
                'name' => '昆明医科大学',
            ),
            167 => 
            array (
                'id' => 1682,
                'province_id' => 30,
                'name' => '云南中医学院',
            ),
            168 => 
            array (
                'id' => 1683,
                'province_id' => 30,
                'name' => '大理大学',
            ),
            169 => 
            array (
                'id' => 1684,
                'province_id' => 30,
                'name' => '红河学院',
            ),
            170 => 
            array (
                'id' => 1685,
                'province_id' => 30,
                'name' => '曲靖师范学院',
            ),
            171 => 
            array (
                'id' => 1686,
                'province_id' => 30,
                'name' => '玉溪师范学院',
            ),
            172 => 
            array (
                'id' => 1687,
                'province_id' => 30,
                'name' => '楚雄师范学院',
            ),
            173 => 
            array (
                'id' => 1688,
                'province_id' => 30,
                'name' => '云南财经大学',
            ),
            174 => 
            array (
                'id' => 1689,
                'province_id' => 30,
                'name' => '云南艺术学院',
            ),
            175 => 
            array (
                'id' => 1690,
                'province_id' => 30,
                'name' => '云南民族大学',
            ),
            176 => 
            array (
                'id' => 1691,
                'province_id' => 30,
                'name' => '云南警官学院',
            ),
            177 => 
            array (
                'id' => 1692,
                'province_id' => 30,
                'name' => '昆明学院',
            ),
            178 => 
            array (
                'id' => 1693,
                'province_id' => 30,
                'name' => '昆明冶金高等专科学校',
            ),
            179 => 
            array (
                'id' => 1694,
                'province_id' => 30,
                'name' => '普洱学院',
            ),
            180 => 
            array (
                'id' => 1695,
                'province_id' => 30,
                'name' => '昭通学院',
            ),
            181 => 
            array (
                'id' => 1696,
                'province_id' => 30,
                'name' => '文山学院',
            ),
            182 => 
            array (
                'id' => 1697,
                'province_id' => 30,
                'name' => '保山学院',
            ),
            183 => 
            array (
                'id' => 1698,
                'province_id' => 30,
                'name' => '昆明师范高等专科学校',
            ),
            184 => 
            array (
                'id' => 1699,
                'province_id' => 30,
                'name' => '丽江师范高等专科学校',
            ),
            185 => 
            array (
                'id' => 1700,
                'province_id' => 30,
                'name' => '德宏师范高等专科学校',
            ),
            186 => 
            array (
                'id' => 1701,
                'province_id' => 30,
                'name' => '临沧师范高等专科学校',
            ),
            187 => 
            array (
                'id' => 1702,
                'province_id' => 30,
                'name' => '云南工商学院',
            ),
            188 => 
            array (
                'id' => 1703,
                'province_id' => 30,
                'name' => '曲靖医学高等专科学校',
            ),
            189 => 
            array (
                'id' => 1704,
                'province_id' => 30,
                'name' => '楚雄医药高等专科学校',
            ),
            190 => 
            array (
                'id' => 1705,
                'province_id' => 30,
                'name' => '保山中医药高等专科学校',
            ),
            191 => 
            array (
                'id' => 1706,
                'province_id' => 30,
                'name' => '玉溪农业职业技术学院',
            ),
            192 => 
            array (
                'id' => 1707,
                'province_id' => 30,
                'name' => '云南交通职业技术学院',
            ),
            193 => 
            array (
                'id' => 1708,
                'province_id' => 30,
                'name' => '云南科技信息职业学院',
            ),
            194 => 
            array (
                'id' => 1709,
                'province_id' => 30,
                'name' => '云南能源职业技术学院',
            ),
            195 => 
            array (
                'id' => 1710,
                'province_id' => 30,
                'name' => '云南国土资源职业学院',
            ),
            196 => 
            array (
                'id' => 1711,
                'province_id' => 30,
                'name' => '昆明艺术职业学院',
            ),
            197 => 
            array (
                'id' => 1712,
                'province_id' => 30,
                'name' => '西双版纳师范高等专科学校',
            ),
            198 => 
            array (
                'id' => 1713,
                'province_id' => 30,
                'name' => '昆明工业职业技术学院',
            ),
            199 => 
            array (
                'id' => 1714,
                'province_id' => 30,
                'name' => '云南农业职业技术学院',
            ),
            200 => 
            array (
                'id' => 1715,
                'province_id' => 30,
                'name' => '云南司法警官职业学院',
            ),
            201 => 
            array (
                'id' => 1716,
                'province_id' => 30,
                'name' => '云南医学高等专科学校',
            ),
            202 => 
            array (
                'id' => 1717,
                'province_id' => 30,
                'name' => '云南体育运动职业技术学院',
            ),
            203 => 
            array (
                'id' => 1718,
                'province_id' => 30,
                'name' => '云南经济管理学院',
            ),
            204 => 
            array (
                'id' => 1719,
                'province_id' => 30,
                'name' => '云南文化艺术职业学院',
            ),
            205 => 
            array (
                'id' => 1720,
                'province_id' => 30,
                'name' => '云南工程职业学院',
            ),
            206 => 
            array (
                'id' => 1721,
                'province_id' => 30,
                'name' => '云南国防工业职业技术学院',
            ),
            207 => 
            array (
                'id' => 1722,
                'province_id' => 30,
                'name' => '云南热带作物职业学院',
            ),
            208 => 
            array (
                'id' => 1723,
                'province_id' => 30,
                'name' => '云南林业职业技术学院',
            ),
            209 => 
            array (
                'id' => 1724,
                'province_id' => 30,
                'name' => '云南机电职业技术学院',
            ),
            210 => 
            array (
                'id' => 1725,
                'province_id' => 30,
                'name' => '云南城市建设职业学院',
            ),
            211 => 
            array (
                'id' => 1726,
                'province_id' => 31,
                'name' => '浙江大学',
            ),
            212 => 
            array (
                'id' => 1727,
                'province_id' => 31,
                'name' => '宁波大学',
            ),
            213 => 
            array (
                'id' => 1728,
                'province_id' => 31,
                'name' => '浙江工业大学',
            ),
            214 => 
            array (
                'id' => 1729,
                'province_id' => 31,
                'name' => '浙江师范大学',
            ),
            215 => 
            array (
                'id' => 1730,
                'province_id' => 31,
                'name' => '浙江理工大学',
            ),
            216 => 
            array (
                'id' => 1731,
                'province_id' => 31,
                'name' => '嘉兴学院',
            ),
            217 => 
            array (
                'id' => 1732,
                'province_id' => 31,
                'name' => '浙江科技学院',
            ),
            218 => 
            array (
                'id' => 1733,
                'province_id' => 31,
                'name' => '中国计量学院',
            ),
            219 => 
            array (
                'id' => 1734,
                'province_id' => 31,
                'name' => '浙江海洋学院',
            ),
            220 => 
            array (
                'id' => 1735,
                'province_id' => 31,
                'name' => '浙江林学院',
            ),
            221 => 
            array (
                'id' => 1736,
                'province_id' => 31,
                'name' => '浙江中医药大学',
            ),
            222 => 
            array (
                'id' => 1737,
                'province_id' => 31,
                'name' => '温州医科大学',
            ),
            223 => 
            array (
                'id' => 1738,
                'province_id' => 31,
                'name' => '杭州师范大学',
            ),
            224 => 
            array (
                'id' => 1739,
                'province_id' => 31,
                'name' => '绍兴文理学院',
            ),
            225 => 
            array (
                'id' => 1740,
                'province_id' => 31,
                'name' => '台州学院',
            ),
            226 => 
            array (
                'id' => 1742,
                'province_id' => 31,
                'name' => '湖州师范学院',
            ),
            227 => 
            array (
                'id' => 1743,
                'province_id' => 31,
                'name' => '浙江工商大学',
            ),
            228 => 
            array (
                'id' => 1744,
                'province_id' => 31,
                'name' => '浙江财经大学',
            ),
            229 => 
            array (
                'id' => 1745,
                'province_id' => 31,
                'name' => '中国美术学院',
            ),
            230 => 
            array (
                'id' => 1746,
                'province_id' => 31,
                'name' => '丽水学院',
            ),
            231 => 
            array (
                'id' => 1747,
                'province_id' => 31,
                'name' => '浙江万里学院',
            ),
            232 => 
            array (
                'id' => 1748,
                'province_id' => 31,
                'name' => '浙江树人学院',
            ),
            233 => 
            array (
                'id' => 1750,
                'province_id' => 31,
                'name' => '公安海警学院',
            ),
            234 => 
            array (
                'id' => 1751,
                'province_id' => 31,
                'name' => '浙江水利水电学院',
            ),
            235 => 
            array (
                'id' => 1752,
                'province_id' => 31,
                'name' => '浙江医药高等专科学校',
            ),
            236 => 
            array (
                'id' => 1753,
                'province_id' => 31,
                'name' => '浙江医学高等专科学校',
            ),
            237 => 
            array (
                'id' => 1755,
                'province_id' => 31,
                'name' => '温州职业技术学院',
            ),
            238 => 
            array (
                'id' => 1756,
                'province_id' => 31,
                'name' => '宁波职业技术学院',
            ),
            239 => 
            array (
                'id' => 1757,
                'province_id' => 31,
                'name' => '浙江交通职业技术学院',
            ),
            240 => 
            array (
                'id' => 1758,
                'province_id' => 31,
                'name' => '金华职业技术学院',
            ),
            241 => 
            array (
                'id' => 1759,
                'province_id' => 31,
                'name' => '浙江工贸职业技术学院',
            ),
            242 => 
            array (
                'id' => 1760,
                'province_id' => 31,
                'name' => '台州职业技术学院',
            ),
            243 => 
            array (
                'id' => 1761,
                'province_id' => 31,
                'name' => '浙江工商职业技术学院',
            ),
            244 => 
            array (
                'id' => 1762,
                'province_id' => 31,
                'name' => '浙江艺术职业学院',
            ),
            245 => 
            array (
                'id' => 1763,
                'province_id' => 31,
                'name' => '浙江东方职业技术学院',
            ),
            246 => 
            array (
                'id' => 1764,
                'province_id' => 31,
                'name' => '义乌工商职业技术学院',
            ),
            247 => 
            array (
                'id' => 1766,
                'province_id' => 31,
                'name' => '浙江机电职业技术学院',
            ),
            248 => 
            array (
                'id' => 1767,
                'province_id' => 31,
                'name' => '浙江越秀外国语学院',
            ),
            249 => 
            array (
                'id' => 1768,
                'province_id' => 31,
                'name' => '丽水职业技术学院',
            ),
            250 => 
            array (
                'id' => 1769,
                'province_id' => 31,
                'name' => '衢州职业技术学院',
            ),
            251 => 
            array (
                'id' => 1770,
                'province_id' => 31,
                'name' => '湖州职业技术学院',
            ),
            252 => 
            array (
                'id' => 1771,
                'province_id' => 31,
                'name' => '嘉兴职业技术学院',
            ),
            253 => 
            array (
                'id' => 1772,
                'province_id' => 31,
                'name' => '浙江纺织服装职业技术学院',
            ),
            254 => 
            array (
                'id' => 1773,
                'province_id' => 31,
                'name' => '杭州职业技术学院',
            ),
            255 => 
            array (
                'id' => 1774,
                'province_id' => 31,
                'name' => '绍兴职业技术学院',
            ),
            256 => 
            array (
                'id' => 1775,
                'province_id' => 31,
                'name' => '浙江育英职业技术学院',
            ),
            257 => 
            array (
                'id' => 1776,
                'province_id' => 31,
                'name' => '浙江经贸职业技术学院',
            ),
            258 => 
            array (
                'id' => 1777,
                'province_id' => 31,
                'name' => '浙江建设职业技术学院',
            ),
            259 => 
            array (
                'id' => 1778,
                'province_id' => 31,
                'name' => '浙江经济职业技术学院',
            ),
            260 => 
            array (
                'id' => 1779,
                'province_id' => 31,
                'name' => '浙江金融职业学院',
            ),
            261 => 
            array (
                'id' => 1780,
                'province_id' => 31,
                'name' => '浙江警官职业学院',
            ),
            262 => 
            array (
                'id' => 1781,
                'province_id' => 31,
                'name' => '浙江商业职业技术学院',
            ),
            263 => 
            array (
                'id' => 1782,
                'province_id' => 31,
                'name' => '浙江工业职业技术学院',
            ),
            264 => 
            array (
                'id' => 1783,
                'province_id' => 31,
                'name' => '浙江旅游职业学院',
            ),
            265 => 
            array (
                'id' => 1785,
                'province_id' => 31,
                'name' => '浙江广厦建设职业技术学院',
            ),
            266 => 
            array (
                'id' => 1786,
                'province_id' => 31,
                'name' => '杭州万向职业技术学院',
            ),
            267 => 
            array (
                'id' => 1787,
                'province_id' => 31,
                'name' => '宁波城市职业技术学院',
            ),
            268 => 
            array (
                'id' => 1788,
                'province_id' => 31,
                'name' => '宁波卫生职业技术学院',
            ),
            269 => 
            array (
                'id' => 1789,
                'province_id' => 31,
                'name' => '浙江长征职业技术学院',
            ),
            270 => 
            array (
                'id' => 1790,
                'province_id' => 31,
                'name' => '嘉兴南洋职业技术学院',
            ),
            271 => 
            array (
                'id' => 1792,
                'province_id' => 32,
                'name' => '重庆大学',
            ),
            272 => 
            array (
                'id' => 1793,
                'province_id' => 32,
                'name' => '西南大学',
            ),
            273 => 
            array (
                'id' => 1794,
                'province_id' => 32,
                'name' => '重庆医科大学',
            ),
            274 => 
            array (
                'id' => 1795,
                'province_id' => 32,
                'name' => '西南政法大学',
            ),
            275 => 
            array (
                'id' => 1796,
                'province_id' => 32,
                'name' => '重庆文理学院',
            ),
            276 => 
            array (
                'id' => 1797,
                'province_id' => 32,
                'name' => '重庆三峡学院',
            ),
            277 => 
            array (
                'id' => 1798,
                'province_id' => 32,
                'name' => '重庆工商大学',
            ),
            278 => 
            array (
                'id' => 1799,
                'province_id' => 32,
                'name' => '重庆交通大学',
            ),
            279 => 
            array (
                'id' => 1800,
                'province_id' => 32,
                'name' => '重庆邮电大学',
            ),
            280 => 
            array (
                'id' => 1801,
                'province_id' => 32,
                'name' => '重庆科技学院',
            ),
            281 => 
            array (
                'id' => 1802,
                'province_id' => 32,
                'name' => '重庆理工大学',
            ),
            282 => 
            array (
                'id' => 1803,
                'province_id' => 32,
                'name' => '重庆师范大学',
            ),
            283 => 
            array (
                'id' => 1805,
                'province_id' => 32,
                'name' => '四川外国语大学',
            ),
            284 => 
            array (
                'id' => 1806,
                'province_id' => 32,
                'name' => '四川美术学院',
            ),
            285 => 
            array (
                'id' => 1807,
                'province_id' => 32,
                'name' => '重庆电力高等专科学校',
            ),
            286 => 
            array (
                'id' => 1808,
                'province_id' => 32,
                'name' => '重庆工业职业技术学院',
            ),
            287 => 
            array (
                'id' => 1809,
                'province_id' => 32,
                'name' => '重庆航天职业技术学院',
            ),
            288 => 
            array (
                'id' => 1810,
                'province_id' => 32,
                'name' => '重庆房地产职业学院',
            ),
            289 => 
            array (
                'id' => 1811,
                'province_id' => 32,
                'name' => '重庆工程职业技术学院',
            ),
            290 => 
            array (
                'id' => 1813,
                'province_id' => 32,
                'name' => '重庆海联职业技术学院',
            ),
            291 => 
            array (
                'id' => 1814,
                'province_id' => 32,
                'name' => '重庆信息技术职业学院',
            ),
            292 => 
            array (
                'id' => 1815,
                'province_id' => 32,
                'name' => '重庆警察学院',
            ),
            293 => 
            array (
                'id' => 1816,
                'province_id' => 32,
                'name' => '重庆工商职业学院',
            ),
            294 => 
            array (
                'id' => 1817,
                'province_id' => 32,
                'name' => '重庆民生职业技术学院',
            ),
            295 => 
            array (
                'id' => 1818,
                'province_id' => 32,
                'name' => '重庆医药高等专科学校',
            ),
            296 => 
            array (
                'id' => 1819,
                'province_id' => 32,
                'name' => '重庆传媒职业学院',
            ),
            297 => 
            array (
                'id' => 1820,
                'province_id' => 32,
                'name' => '重庆城市管理职业学院',
            ),
            298 => 
            array (
                'id' => 1821,
                'province_id' => 32,
                'name' => '重庆三峡职业学院',
            ),
            299 => 
            array (
                'id' => 1822,
                'province_id' => 32,
                'name' => '重庆工贸职业技术学院',
            ),
            300 => 
            array (
                'id' => 1823,
                'province_id' => 32,
                'name' => '重庆机电职业技术学院',
            ),
            301 => 
            array (
                'id' => 1824,
                'province_id' => 32,
                'name' => '重庆工程学院',
            ),
            302 => 
            array (
                'id' => 1825,
                'province_id' => 32,
                'name' => '重庆电子工程职业学院 ',
            ),
            303 => 
            array (
                'id' => 1826,
                'province_id' => 32,
                'name' => '重庆城市职业学院',
            ),
            304 => 
            array (
                'id' => 1827,
                'province_id' => 32,
                'name' => '重庆水利电力职业技术学院',
            ),
            305 => 
            array (
                'id' => 1828,
                'province_id' => 32,
                'name' => '重庆三峡医药高等专科学校',
            ),
            306 => 
            array (
                'id' => 1829,
                'province_id' => 32,
                'name' => '重庆医药卫生高等专科学校',
            ),
            307 => 
            array (
                'id' => 1830,
                'province_id' => 1,
                'name' => '中国人民解放军炮兵学院',
            ),
            308 => 
            array (
                'id' => 1831,
                'province_id' => 1,
                'name' => '中国人民解放军蚌埠坦克学院',
            ),
            309 => 
            array (
                'id' => 1832,
                'province_id' => 1,
                'name' => '中国人民解放军电子工程学院',
            ),
            310 => 
            array (
                'id' => 1833,
                'province_id' => 1,
                'name' => '中国人民解放军汽车管理学院',
            ),
            311 => 
            array (
                'id' => 1834,
                'province_id' => 2,
                'name' => '中国人民解放军艺术学院',
            ),
            312 => 
            array (
                'id' => 1835,
                'province_id' => 2,
                'name' => '中国人民解放军装备指挥技术学院',
            ),
            313 => 
            array (
                'id' => 1836,
                'province_id' => 2,
                'name' => '中国人民解放军防化指挥工程学院',
            ),
            314 => 
            array (
                'id' => 1837,
                'province_id' => 2,
                'name' => '中国人民解放军装甲兵工程学院',
            ),
            315 => 
            array (
                'id' => 1838,
                'province_id' => 2,
                'name' => '中国人民解放军军医进修学院',
            ),
            316 => 
            array (
                'id' => 1839,
                'province_id' => 3,
                'name' => '中国人民解放军福州医学高等专科学校',
            ),
            317 => 
            array (
                'id' => 1840,
                'province_id' => 4,
                'name' => '中国人民解放军兰州医学高等专科学校',
            ),
            318 => 
            array (
                'id' => 1842,
                'province_id' => 5,
                'name' => '中国人民解放军体育学院',
            ),
            319 => 
            array (
                'id' => 1843,
                'province_id' => 5,
                'name' => '中国人民解放军海军广州舰艇学院',
            ),
            320 => 
            array (
                'id' => 1844,
                'province_id' => 5,
                'name' => '中国人民解放军广州医学高等专科学校',
            ),
            321 => 
            array (
                'id' => 1845,
                'province_id' => 6,
                'name' => '中国人民解放军桂林陆军学院',
            ),
            322 => 
            array (
                'id' => 1846,
                'province_id' => 9,
                'name' => '中国人民解放军石家庄陆军指挥学院',
            ),
            323 => 
            array (
                'id' => 1847,
                'province_id' => 9,
                'name' => '中国人民解放军石家庄陆军学院',
            ),
            324 => 
            array (
                'id' => 1848,
                'province_id' => 9,
                'name' => '中国人民解放军军械工程学院',
            ),
            325 => 
            array (
                'id' => 1849,
                'province_id' => 9,
                'name' => '中国人民解放军白求恩军医学院',
            ),
            326 => 
            array (
                'id' => 1850,
                'province_id' => 10,
                'name' => '中国人民解放军信息工程大学',
            ),
            327 => 
            array (
                'id' => 1851,
                'province_id' => 10,
                'name' => '中国人民解放军外国语学院',
            ),
            328 => 
            array (
                'id' => 1852,
                'province_id' => 10,
                'name' => '中国人民解放军郑州防空兵学院',
            ),
            329 => 
            array (
                'id' => 1853,
                'province_id' => 10,
                'name' => '中国人民解放军空军第一航空学院',
            ),
            330 => 
            array (
                'id' => 1854,
                'province_id' => 12,
                'name' => '中国人民解放军海军工程大学',
            ),
            331 => 
            array (
                'id' => 1855,
                'province_id' => 12,
                'name' => '中国人民解放军军事经济学院',
            ),
            332 => 
            array (
                'id' => 1856,
                'province_id' => 12,
                'name' => '中国人民解放军空军雷达学院',
            ),
            333 => 
            array (
                'id' => 1857,
                'province_id' => 13,
                'name' => '中国人民解放军国防科学技术大学',
            ),
            334 => 
            array (
                'id' => 1858,
                'province_id' => 14,
                'name' => '中国人民解放军军需大学',
            ),
            335 => 
            array (
                'id' => 1859,
                'province_id' => 14,
                'name' => '中国人民解放军空军第二航空学院',
            ),
            336 => 
            array (
                'id' => 1860,
                'province_id' => 14,
                'name' => '中国人民解放军空军长春飞行学院',
            ),
            337 => 
            array (
                'id' => 1861,
                'province_id' => 14,
                'name' => '中国人民解放军空军医学高等专科学校',
            ),
            338 => 
            array (
                'id' => 1862,
                'province_id' => 15,
                'name' => '中国人民解放军理工大学',
            ),
            339 => 
            array (
                'id' => 1863,
                'province_id' => 15,
                'name' => '中国人民解放军南京政治学院',
            ),
            340 => 
            array (
                'id' => 1864,
                'province_id' => 15,
                'name' => '中国人民解放军空军后勤学院',
            ),
            341 => 
            array (
                'id' => 1865,
                'province_id' => 15,
                'name' => '中国人民解放军国际关系学院',
            ),
            342 => 
            array (
                'id' => 1866,
                'province_id' => 15,
                'name' => '中国人民解放军海军医学高等专科学校',
            ),
            343 => 
            array (
                'id' => 1867,
                'province_id' => 16,
                'name' => '中国人民解放军南昌陆军学院',
            ),
            344 => 
            array (
                'id' => 1868,
                'province_id' => 17,
                'name' => '中国人民解放军大连陆军学院',
            ),
            345 => 
            array (
                'id' => 1869,
                'province_id' => 17,
                'name' => '中国人民解放军海军大连舰艇学院',
            ),
            346 => 
            array (
                'id' => 1870,
                'province_id' => 17,
                'name' => '中国人民解放军大连医学高等专科学校',
            ),
            347 => 
            array (
                'id' => 1871,
                'province_id' => 21,
                'name' => '中国人民解放军济南陆军学院',
            ),
            348 => 
            array (
                'id' => 1872,
                'province_id' => 21,
                'name' => '中国人民解放军海军潜艇学院',
            ),
            349 => 
            array (
                'id' => 1873,
                'province_id' => 21,
                'name' => '中国人民解放军海军航空工程学院',
            ),
            350 => 
            array (
                'id' => 1874,
                'province_id' => 21,
                'name' => '中国人民解放军济南医学高等专科学校',
            ),
            351 => 
            array (
                'id' => 1875,
                'province_id' => 23,
                'name' => '中国人民解放军空军工程大学',
            ),
            352 => 
            array (
                'id' => 1876,
                'province_id' => 23,
                'name' => '中国人民解放军第四军医大学',
            ),
            353 => 
            array (
                'id' => 1877,
                'province_id' => 23,
                'name' => '中国人民解放军西安陆军学院',
            ),
            354 => 
            array (
                'id' => 1878,
                'province_id' => 23,
                'name' => '中国人民解放军西安政治学院',
            ),
            355 => 
            array (
                'id' => 1879,
                'province_id' => 23,
                'name' => '中国人民解放军第二炮兵工程学院',
            ),
            356 => 
            array (
                'id' => 1880,
                'province_id' => 23,
                'name' => '中国人民解放军武警工程学院',
            ),
            357 => 
            array (
                'id' => 1881,
                'province_id' => 23,
                'name' => '中国人民解放军西安通信学院',
            ),
            358 => 
            array (
                'id' => 1882,
                'province_id' => 24,
                'name' => '中国人民解放军第二军医大学',
            ),
            359 => 
            array (
                'id' => 1883,
                'province_id' => 25,
                'name' => '中国人民解放军成都医学高等专科学校',
            ),
            360 => 
            array (
                'id' => 1884,
                'province_id' => 27,
                'name' => '中国人民解放军海军后勤学院',
            ),
            361 => 
            array (
                'id' => 1885,
                'province_id' => 27,
                'name' => '中国人民解放军运输工程学院',
            ),
            362 => 
            array (
                'id' => 1886,
                'province_id' => 30,
                'name' => '中国人民解放军昆明陆军学院',
            ),
            363 => 
            array (
                'id' => 1887,
                'province_id' => 32,
                'name' => '中国人民解放军第三军医大学',
            ),
            364 => 
            array (
                'id' => 1888,
                'province_id' => 32,
                'name' => '中国人民解放军后勤工程学院',
            ),
            365 => 
            array (
                'id' => 1889,
                'province_id' => 32,
                'name' => '中国人民解放军重庆通信学院',
            ),
            366 => 
            array (
                'id' => 1890,
                'province_id' => 2,
                'name' => '中国大学生在线发展中心',
            ),
            367 => 
            array (
                'id' => 1891,
                'province_id' => 2,
                'name' => '校园网络通讯社',
            ),
            368 => 
            array (
                'id' => 1901,
                'province_id' => 2,
                'name' => '北京',
            ),
            369 => 
            array (
                'id' => 1903,
                'province_id' => 27,
                'name' => '天津',
            ),
            370 => 
            array (
                'id' => 1905,
                'province_id' => 9,
                'name' => '河北',
            ),
            371 => 
            array (
                'id' => 1907,
                'province_id' => 22,
                'name' => '山西',
            ),
            372 => 
            array (
                'id' => 1909,
                'province_id' => 18,
                'name' => '内蒙古',
            ),
            373 => 
            array (
                'id' => 1911,
                'province_id' => 17,
                'name' => '辽宁',
            ),
            374 => 
            array (
                'id' => 1913,
                'province_id' => 14,
                'name' => '吉林',
            ),
            375 => 
            array (
                'id' => 1915,
                'province_id' => 11,
                'name' => '黑龙江',
            ),
            376 => 
            array (
                'id' => 1917,
                'province_id' => 24,
                'name' => '上海',
            ),
            377 => 
            array (
                'id' => 1921,
                'province_id' => 1,
                'name' => '安徽',
            ),
            378 => 
            array (
                'id' => 1923,
                'province_id' => 31,
                'name' => '浙江',
            ),
            379 => 
            array (
                'id' => 1925,
                'province_id' => 3,
                'name' => '福建',
            ),
            380 => 
            array (
                'id' => 1927,
                'province_id' => 16,
                'name' => '江西',
            ),
            381 => 
            array (
                'id' => 1929,
                'province_id' => 21,
                'name' => '山东',
            ),
            382 => 
            array (
                'id' => 1931,
                'province_id' => 10,
                'name' => '河南',
            ),
            383 => 
            array (
                'id' => 1933,
                'province_id' => 12,
                'name' => '湖北',
            ),
            384 => 
            array (
                'id' => 1935,
                'province_id' => 13,
                'name' => '湖南',
            ),
            385 => 
            array (
                'id' => 1937,
                'province_id' => 5,
                'name' => '广东',
            ),
            386 => 
            array (
                'id' => 1939,
                'province_id' => 6,
                'name' => '广西',
            ),
            387 => 
            array (
                'id' => 1941,
                'province_id' => 8,
                'name' => '海南',
            ),
            388 => 
            array (
                'id' => 1943,
                'province_id' => 25,
                'name' => '四川',
            ),
            389 => 
            array (
                'id' => 1945,
                'province_id' => 32,
                'name' => '重庆',
            ),
            390 => 
            array (
                'id' => 1947,
                'province_id' => 7,
                'name' => '贵州',
            ),
            391 => 
            array (
                'id' => 1949,
                'province_id' => 30,
                'name' => '云南',
            ),
            392 => 
            array (
                'id' => 1951,
                'province_id' => 23,
                'name' => '西藏自治区教育厅',
            ),
            393 => 
            array (
                'id' => 1953,
                'province_id' => 23,
                'name' => '陕西',
            ),
            394 => 
            array (
                'id' => 1955,
                'province_id' => 4,
                'name' => '甘肃',
            ),
            395 => 
            array (
                'id' => 1957,
                'province_id' => 20,
                'name' => '青海',
            ),
            396 => 
            array (
                'id' => 1959,
                'province_id' => 19,
                'name' => '宁夏医科大学',
            ),
            397 => 
            array (
                'id' => 1961,
                'province_id' => 29,
                'name' => '新疆',
            ),
            398 => 
            array (
                'id' => 1963,
                'province_id' => 29,
                'name' => '新疆兵团',
            ),
            399 => 
            array (
                'id' => 1965,
                'province_id' => 21,
                'name' => '中国石油大学（华东）',
            ),
            400 => 
            array (
                'id' => 1967,
                'province_id' => 2,
                'name' => '中国矿业大学（北京）',
            ),
            401 => 
            array (
                'id' => 1969,
                'province_id' => 2,
                'name' => '中国地质大学（北京）',
            ),
            402 => 
            array (
                'id' => 1973,
                'province_id' => 24,
                'name' => '共建示范',
            ),
            403 => 
            array (
                'id' => 1975,
                'province_id' => 2,
                'name' => '示范频道',
            ),
            404 => 
            array (
                'id' => 1977,
                'province_id' => 12,
                'name' => '武昌理工学院',
            ),
            405 => 
            array (
                'id' => 1979,
                'province_id' => 10,
                'name' => '郑州大学升达经贸管理学院',
            ),
            406 => 
            array (
                'id' => 1981,
                'province_id' => 3,
                'name' => '福建广播电视大学',
            ),
            407 => 
            array (
                'id' => 1983,
                'province_id' => 14,
                'name' => '吉林师范大学博达学院',
            ),
            408 => 
            array (
                'id' => 1985,
                'province_id' => 12,
                'name' => '武汉大学东湖分校',
            ),
            409 => 
            array (
                'id' => 1987,
                'province_id' => 5,
                'name' => '华南理工大学广州学院',
            ),
            410 => 
            array (
                'id' => 1997,
                'province_id' => 2,
                'name' => '示范共建高校1',
            ),
            411 => 
            array (
                'id' => 1999,
                'province_id' => 15,
                'name' => '江苏',
            ),
            412 => 
            array (
                'id' => 2001,
                'province_id' => 27,
                'name' => '天津铁道职业技术学院',
            ),
            413 => 
            array (
                'id' => 2003,
                'province_id' => 14,
                'name' => '长春工业大学人文信息学院',
            ),
            414 => 
            array (
                'id' => 2005,
                'province_id' => 14,
                'name' => '东北师范大学人文学院',
            ),
            415 => 
            array (
                'id' => 2007,
                'province_id' => 21,
                'name' => '济南职业学院',
            ),
            416 => 
            array (
                'id' => 2009,
                'province_id' => 6,
                'name' => '柳州城市职业学院',
            ),
            417 => 
            array (
                'id' => 2011,
                'province_id' => 7,
                'name' => '贵州广播电视大学',
            ),
            418 => 
            array (
                'id' => 2013,
                'province_id' => 7,
                'name' => '贵州师范学院',
            ),
            419 => 
            array (
                'id' => 2015,
                'province_id' => 7,
                'name' => '黔西南民族职业技术学院',
            ),
            420 => 
            array (
                'id' => 2017,
                'province_id' => 7,
                'name' => '贵州电子职业技术学院',
            ),
            421 => 
            array (
                'id' => 2019,
                'province_id' => 3,
                'name' => '集美大学诚毅学院',
            ),
            422 => 
            array (
                'id' => 2021,
                'province_id' => 6,
                'name' => '广西民族大学相思湖学院',
            ),
            423 => 
            array (
                'id' => 2023,
                'province_id' => 6,
                'name' => '桂林电子科技大学信息科技学院',
            ),
            424 => 
            array (
                'id' => 2025,
                'province_id' => 6,
                'name' => '桂林工学院博文管理学院',
            ),
            425 => 
            array (
                'id' => 2027,
                'province_id' => 6,
                'name' => '广西中医药大学赛恩斯新医药学院',
            ),
            426 => 
            array (
                'id' => 2029,
                'province_id' => 6,
                'name' => '广西师范学院师园学院',
            ),
            427 => 
            array (
                'id' => 2031,
                'province_id' => 6,
                'name' => '广西工学院鹿山学院',
            ),
            428 => 
            array (
                'id' => 2033,
                'province_id' => 6,
                'name' => '北京航空航天大学北海学院',
            ),
            429 => 
            array (
                'id' => 2035,
                'province_id' => 6,
                'name' => '广西工程职业学院',
            ),
            430 => 
            array (
                'id' => 2037,
                'province_id' => 6,
                'name' => '广西理工职业技术学院',
            ),
            431 => 
            array (
                'id' => 2039,
                'province_id' => 6,
                'name' => '梧州职业学院',
            ),
            432 => 
            array (
                'id' => 2041,
                'province_id' => 6,
                'name' => '广西经济职业学院',
            ),
            433 => 
            array (
                'id' => 2043,
                'province_id' => 6,
                'name' => '梧州学院',
            ),
            434 => 
            array (
                'id' => 2045,
                'province_id' => 6,
                'name' => '广西广播电视大学',
            ),
            435 => 
            array (
                'id' => 2047,
                'province_id' => 6,
                'name' => '广西教育学院',
            ),
            436 => 
            array (
                'id' => 2049,
                'province_id' => 6,
                'name' => '广西经济管理干部学院',
            ),
            437 => 
            array (
                'id' => 2051,
                'province_id' => 6,
                'name' => '广西工商职业技术学院',
            ),
            438 => 
            array (
                'id' => 2053,
                'province_id' => 6,
                'name' => '广西卫生职业技术学院',
            ),
            439 => 
            array (
                'id' => 2055,
                'province_id' => 6,
                'name' => '广西政法管理干部学院',
            ),
            440 => 
            array (
                'id' => 2057,
                'province_id' => 6,
                'name' => '百色职业学院',
            ),
            441 => 
            array (
                'id' => 2059,
                'province_id' => 6,
                'name' => '南宁地区教育学院',
            ),
            442 => 
            array (
                'id' => 2061,
                'province_id' => 6,
                'name' => '桂林市职工大学',
            ),
            443 => 
            array (
                'id' => 2063,
                'province_id' => 6,
                'name' => '广西大学行健文理学院',
            ),
            444 => 
            array (
                'id' => 2065,
                'province_id' => 6,
                'name' => '广西师范大学漓江学院',
            ),
            445 => 
            array (
                'id' => 2067,
                'province_id' => 31,
                'name' => '杭州电子科技大学',
            ),
            446 => 
            array (
                'id' => 2069,
                'province_id' => 31,
                'name' => '浙江警察学院',
            ),
            447 => 
            array (
                'id' => 2071,
                'province_id' => 31,
                'name' => '浙江大学宁波理工学院',
            ),
            448 => 
            array (
                'id' => 2073,
                'province_id' => 3,
                'name' => '福建师范大学福清分校',
            ),
            449 => 
            array (
                'id' => 2075,
                'province_id' => 3,
                'name' => '福建警察学院',
            ),
            450 => 
            array (
                'id' => 2077,
                'province_id' => 5,
                'name' => '东莞理工学院城市学院',
            ),
            451 => 
            array (
                'id' => 2079,
                'province_id' => 3,
                'name' => '福建卫生职业技术学院',
            ),
            452 => 
            array (
                'id' => 2081,
                'province_id' => 10,
                'name' => '郑州大学西亚斯国际学院',
            ),
            453 => 
            array (
                'id' => 2083,
                'province_id' => 1,
                'name' => '安徽广播电视大学',
            ),
            454 => 
            array (
                'id' => 2085,
                'province_id' => 25,
                'name' => '四川大学锦城学院',
            ),
            455 => 
            array (
                'id' => 2087,
                'province_id' => 21,
                'name' => '山东政法学院',
            ),
            456 => 
            array (
                'id' => 2091,
                'province_id' => 3,
                'name' => '福建艺术职业学院',
            ),
            457 => 
            array (
                'id' => 2093,
                'province_id' => 25,
                'name' => '四川师范大学文理学院',
            ),
            458 => 
            array (
                'id' => 2095,
                'province_id' => 12,
                'name' => '文华学院',
            ),
            459 => 
            array (
                'id' => 2097,
                'province_id' => 12,
                'name' => '武汉科技大学城市学院',
            ),
            460 => 
            array (
                'id' => 2099,
                'province_id' => 12,
                'name' => '汉口学院',
            ),
            461 => 
            array (
                'id' => 2101,
                'province_id' => 22,
                'name' => '山西医科大学汾阳学院',
            ),
            462 => 
            array (
                'id' => 2103,
                'province_id' => 24,
                'name' => '上海商学院',
            ),
            463 => 
            array (
                'id' => 2105,
                'province_id' => 22,
                'name' => '太原工业学院',
            ),
            464 => 
            array (
                'id' => 2107,
                'province_id' => 31,
                'name' => '浙江传媒学院',
            ),
            465 => 
            array (
                'id' => 2109,
                'province_id' => 5,
                'name' => '电子科技大学中山学院',
            ),
            466 => 
            array (
                'id' => 2111,
                'province_id' => 12,
                'name' => '【法律援助】中南财经政法大学',
            ),
            467 => 
            array (
                'id' => 2113,
                'province_id' => 12,
                'name' => '【中部崛起】中南财经政法大学',
            ),
            468 => 
            array (
                'id' => 2115,
                'province_id' => 11,
                'name' => '【中国航天】哈尔滨工业大学',
            ),
            469 => 
            array (
                'id' => 2117,
                'province_id' => 15,
                'name' => '【中华农业文明】南京农业大学',
            ),
            470 => 
            array (
                'id' => 2119,
                'province_id' => 21,
                'name' => '【海洋之窗】中国海洋大学',
            ),
            471 => 
            array (
                'id' => 2121,
                'province_id' => 24,
                'name' => '【艺术与我】上海大学',
            ),
            472 => 
            array (
                'id' => 2123,
                'province_id' => 21,
                'name' => '【齐鲁文化】山东理工大学',
            ),
            473 => 
            array (
                'id' => 2125,
                'province_id' => 21,
                'name' => '【心灵之约】山东理工大学',
            ),
            474 => 
            array (
                'id' => 2127,
                'province_id' => 32,
                'name' => '【三峡文化】重庆三峡学院',
            ),
            475 => 
            array (
                'id' => 2129,
                'province_id' => 17,
                'name' => '【长夜书香】东北大学',
            ),
            476 => 
            array (
                'id' => 2131,
                'province_id' => 32,
                'name' => '【支教行动】西南大学',
            ),
            477 => 
            array (
                'id' => 2133,
                'province_id' => 17,
                'name' => '【民族风情】大连民族学院',
            ),
            478 => 
            array (
                'id' => 2135,
                'province_id' => 17,
                'name' => '【星海夜话】大连理工大学',
            ),
            479 => 
            array (
                'id' => 2137,
                'province_id' => 13,
                'name' => '【心理援助】中南大学',
            ),
            480 => 
            array (
                'id' => 2139,
                'province_id' => 25,
                'name' => '【科技原创】电子科技大学',
            ),
            481 => 
            array (
                'id' => 2143,
                'province_id' => 27,
                'name' => '【大学生播客】天津大学',
            ),
            482 => 
            array (
                'id' => 2145,
                'province_id' => 11,
                'name' => '【绿影浮光】东北林业大学',
            ),
            483 => 
            array (
                'id' => 2147,
                'province_id' => 24,
                'name' => '东华大学文化足球',
            ),
            484 => 
            array (
                'id' => 2149,
                'province_id' => 31,
                'name' => '【影像频道】浙江大学',
            ),
            485 => 
            array (
                'id' => 2153,
                'province_id' => 25,
                'name' => '【理财投资】西南财经大学',
            ),
            486 => 
            array (
                'id' => 2155,
                'province_id' => 27,
                'name' => '【实践空间】天津工业大学',
            ),
            487 => 
            array (
                'id' => 2157,
                'province_id' => 27,
                'name' => '天津工业大学',
            ),
            488 => 
            array (
                'id' => 2159,
                'province_id' => 9,
                'name' => '【航标·家园】河北大学',
            ),
            489 => 
            array (
                'id' => 2161,
                'province_id' => 24,
                'name' => '【“鱼”乐在线】上海海洋大学',
            ),
            490 => 
            array (
                'id' => 2163,
                'province_id' => 24,
                'name' => '上海海洋大学',
            ),
            491 => 
            array (
                'id' => 2165,
                'province_id' => 12,
                'name' => '【文海瞭望】华中师范大学',
            ),
            492 => 
            array (
                'id' => 2167,
                'province_id' => 5,
                'name' => '【Fresh环保行动】华南理工大学',
            ),
            493 => 
            array (
                'id' => 2169,
                'province_id' => 12,
                'name' => '【化成天下】华中科技大学',
            ),
            494 => 
            array (
                'id' => 2171,
                'province_id' => 2,
                'name' => '【挚友之约】中国农业大学',
            ),
            495 => 
            array (
                'id' => 2173,
                'province_id' => 12,
                'name' => '【点滴公益】华中农业大学',
            ),
            496 => 
            array (
                'id' => 2175,
                'province_id' => 24,
                'name' => '东华大学科学商店',
            ),
            497 => 
            array (
                'id' => 2177,
                'province_id' => 15,
                'name' => '江南大学设计原创',
            ),
            498 => 
            array (
                'id' => 2179,
                'province_id' => 12,
                'name' => '【学工之家】中国地质大学（武汉）',
            ),
            499 => 
            array (
                'id' => 2181,
                'province_id' => 32,
                'name' => '【开源广场】重庆邮电大学',
            ),
        ));
        \DB::table('universities')->insert(array (
            0 => 
            array (
                'id' => 2183,
                'province_id' => 15,
                'name' => '【大学进阶】南京邮电大学',
            ),
            1 => 
            array (
                'id' => 2185,
                'province_id' => 17,
                'name' => '【北极星光】辽宁工业大学',
            ),
            2 => 
            array (
                'id' => 2187,
                'province_id' => 17,
                'name' => '辽宁工业大学',
            ),
            3 => 
            array (
                'id' => 2189,
                'province_id' => 11,
                'name' => '【思政评论】齐齐哈尔大学',
            ),
            4 => 
            array (
                'id' => 2191,
                'province_id' => 23,
                'name' => '【与道同行】长安大学',
            ),
            5 => 
            array (
                'id' => 2193,
                'province_id' => 11,
                'name' => '【三海一核】哈尔滨工程大学',
            ),
            6 => 
            array (
                'id' => 2195,
                'province_id' => 12,
                'name' => '【汽车无限】武汉理工大学',
            ),
            7 => 
            array (
                'id' => 2197,
                'province_id' => 23,
                'name' => '【三航之光】西北工业大学',
            ),
            8 => 
            array (
                'id' => 2199,
                'province_id' => 12,
                'name' => '中南民族大学高校风华',
            ),
            9 => 
            array (
                'id' => 2201,
                'province_id' => 27,
                'name' => '【理论园地】南开大学',
            ),
            10 => 
            array (
                'id' => 2203,
                'province_id' => 1,
                'name' => '【人人空间】合肥工业大学',
            ),
            11 => 
            array (
                'id' => 2205,
                'province_id' => 1,
                'name' => '【硅谷精英】合肥工业大学',
            ),
            12 => 
            array (
                'id' => 2207,
                'province_id' => 27,
                'name' => '【理论之光】天津大学',
            ),
            13 => 
            array (
                'id' => 2209,
                'province_id' => 15,
                'name' => '【心灵相约】中国矿业大学',
            ),
            14 => 
            array (
                'id' => 2211,
                'province_id' => 24,
                'name' => '上海交通大学',
            ),
            15 => 
            array (
                'id' => 2213,
                'province_id' => 23,
                'name' => '【大学图志】陕西师范大学',
            ),
            16 => 
            array (
                'id' => 2215,
                'province_id' => 22,
                'name' => '【从太行山走来】中北大学',
            ),
            17 => 
            array (
                'id' => 2217,
                'province_id' => 24,
                'name' => '【通识教育】复旦大学',
            ),
            18 => 
            array (
                'id' => 2219,
                'province_id' => 15,
                'name' => '【水文化】河海大学',
            ),
            19 => 
            array (
                'id' => 2221,
                'province_id' => 23,
                'name' => '【农城之光】西北农林科技大学',
            ),
            20 => 
            array (
                'id' => 2223,
                'province_id' => 2,
                'name' => '中央财经大学',
            ),
            21 => 
            array (
                'id' => 2225,
                'province_id' => 24,
                'name' => '东华大学研究生能力建设',
            ),
            22 => 
            array (
                'id' => 2229,
                'province_id' => 13,
                'name' => '【大学生DV网】湘潭大学',
            ),
            23 => 
            array (
                'id' => 2231,
                'province_id' => 31,
                'name' => '【钱塘学子】杭州电子科技大学',
            ),
            24 => 
            array (
                'id' => 2233,
                'province_id' => 27,
                'name' => '天津理工大学6Green理工人',
            ),
            25 => 
            array (
                'id' => 2235,
                'province_id' => 15,
                'name' => '【大学新鲜人】东南大学',
            ),
            26 => 
            array (
                'id' => 2237,
                'province_id' => 15,
                'name' => '【生涯指导】中国矿业大学',
            ),
            27 => 
            array (
                'id' => 2239,
                'province_id' => 13,
                'name' => '【寻“亲”献爱】湖南大学',
            ),
            28 => 
            array (
                'id' => 2241,
                'province_id' => 12,
                'name' => '【远离艾滋】武汉大学',
            ),
            29 => 
            array (
                'id' => 2243,
                'province_id' => 21,
                'name' => '【儒家文化】山东大学',
            ),
            30 => 
            array (
                'id' => 2245,
                'province_id' => 23,
                'name' => '【书院青春风】西安交通大学',
            ),
            31 => 
            array (
                'id' => 2247,
                'province_id' => 4,
                'name' => '【敦煌古风】兰州大学',
            ),
            32 => 
            array (
                'id' => 2249,
                'province_id' => 15,
                'name' => '【铸剑为犁】南京理工大学',
            ),
            33 => 
            array (
                'id' => 2251,
                'province_id' => 2,
                'name' => '【未名心声】北京大学',
            ),
            34 => 
            array (
                'id' => 2253,
                'province_id' => 25,
                'name' => '【学生之家】电子科技大学',
            ),
            35 => 
            array (
                'id' => 2255,
                'province_id' => 14,
                'name' => '【北国烟雨】吉林大学',
            ),
            36 => 
            array (
                'id' => 2257,
                'province_id' => 12,
                'name' => '【食品安全】华中农业大学',
            ),
            37 => 
            array (
                'id' => 2259,
                'province_id' => 1,
                'name' => '中国科学技术大学网上科技博览馆',
            ),
            38 => 
            array (
                'id' => 2261,
                'province_id' => 21,
                'name' => '【石油之光】中国石油大学（华东）',
            ),
            39 => 
            array (
                'id' => 2263,
                'province_id' => 9,
                'name' => '【红色战线】河北大学',
            ),
            40 => 
            array (
                'id' => 2265,
                'province_id' => 2,
                'name' => 'UNIVS快递',
            ),
            41 => 
            array (
                'id' => 2268,
                'province_id' => 32,
                'name' => '重庆应用外国语专修学院',
            ),
            42 => 
            array (
                'id' => 2272,
                'province_id' => 3,
                'name' => '厦门城市职业学院',
            ),
            43 => 
            array (
                'id' => 2277,
                'province_id' => 35,
                'name' => '其他',
            ),
            44 => 
            array (
                'id' => 2280,
                'province_id' => 1,
                'name' => '万博科技职业学院',
            ),
            45 => 
            array (
                'id' => 2282,
                'province_id' => 1,
                'name' => '芜湖信息技术职业学院',
            ),
            46 => 
            array (
                'id' => 2286,
                'province_id' => 1,
                'name' => '合肥师范学院淮北师范学校教学点',
            ),
            47 => 
            array (
                'id' => 2288,
                'province_id' => 1,
                'name' => '安徽绿海商务职业学院',
            ),
            48 => 
            array (
                'id' => 2290,
                'province_id' => 1,
                'name' => '安徽三联学院',
            ),
            49 => 
            array (
                'id' => 2292,
                'province_id' => 1,
                'name' => '安徽水电学院',
            ),
            50 => 
            array (
                'id' => 2294,
                'province_id' => 1,
                'name' => '安徽文达信息工程学院',
            ),
            51 => 
            array (
                'id' => 2296,
                'province_id' => 1,
                'name' => '安徽中澳职业技术学院',
            ),
            52 => 
            array (
                'id' => 2298,
                'province_id' => 1,
                'name' => '马鞍山师范高等专科学校',
            ),
            53 => 
            array (
                'id' => 2300,
                'province_id' => 3,
                'name' => '福建高等教育学会',
            ),
            54 => 
            array (
                'id' => 2302,
                'province_id' => 3,
                'name' => '福州英华学院',
            ),
            55 => 
            array (
                'id' => 2304,
                'province_id' => 3,
                'name' => '福建江夏学院',
            ),
            56 => 
            array (
                'id' => 2306,
                'province_id' => 5,
                'name' => '私立华联大学',
            ),
            57 => 
            array (
                'id' => 2308,
                'province_id' => 5,
                'name' => '广东第二师范学院',
            ),
            58 => 
            array (
                'id' => 2310,
                'province_id' => 5,
                'name' => '广东科贸职业学院（原农干院）',
            ),
            59 => 
            array (
                'id' => 2312,
                'province_id' => 5,
                'name' => '广东岭南职业技术学院',
            ),
            60 => 
            array (
                'id' => 2314,
                'province_id' => 5,
                'name' => '广东青年管理干部学院',
            ),
            61 => 
            array (
                'id' => 2316,
                'province_id' => 5,
                'name' => '广东省财政学校',
            ),
            62 => 
            array (
                'id' => 2318,
                'province_id' => 5,
                'name' => '广东食品药品职业学院',
            ),
            63 => 
            array (
                'id' => 2320,
                'province_id' => 5,
                'name' => '广州工程职业技术学院',
            ),
            64 => 
            array (
                'id' => 2322,
                'province_id' => 5,
                'name' => '广州科技贸易职业学院',
            ),
            65 => 
            array (
                'id' => 2324,
                'province_id' => 5,
                'name' => '广州松田职业学院',
            ),
            66 => 
            array (
                'id' => 2326,
                'province_id' => 8,
                'name' => '海口经济学院',
            ),
            67 => 
            array (
                'id' => 2328,
                'province_id' => 8,
                'name' => '海南琼台师范高等专科学校',
            ),
            68 => 
            array (
                'id' => 2330,
                'province_id' => 9,
                'name' => '石家庄理工职业学院',
            ),
            69 => 
            array (
                'id' => 2332,
                'province_id' => 9,
                'name' => '中国环境管理干部学院',
            ),
            70 => 
            array (
                'id' => 2334,
                'province_id' => 9,
                'name' => '河北防灾学院',
            ),
            71 => 
            array (
                'id' => 2336,
                'province_id' => 9,
                'name' => '河北管理干部学院',
            ),
            72 => 
            array (
                'id' => 2338,
                'province_id' => 9,
                'name' => '河北金融学院',
            ),
            73 => 
            array (
                'id' => 2340,
                'province_id' => 9,
                'name' => '河北理工大学轻工学院',
            ),
            74 => 
            array (
                'id' => 2342,
                'province_id' => 9,
                'name' => '河北青年管理干部学院',
            ),
            75 => 
            array (
                'id' => 2344,
                'province_id' => 9,
                'name' => '承德石油高等专科学院',
            ),
            76 => 
            array (
                'id' => 2346,
                'province_id' => 9,
                'name' => '莱西职教中心',
            ),
            77 => 
            array (
                'id' => 2348,
                'province_id' => 10,
                'name' => '郑州升达大学',
            ),
            78 => 
            array (
                'id' => 2350,
                'province_id' => 12,
                'name' => '湖北科技职业学院  ',
            ),
            79 => 
            array (
                'id' => 2352,
                'province_id' => 12,
                'name' => '湖北青年职业学院  ',
            ),
            80 => 
            array (
                'id' => 2354,
                'province_id' => 12,
                'name' => '湖北省经济管理干部学院  ',
            ),
            81 => 
            array (
                'id' => 2356,
                'province_id' => 12,
                'name' => '荆楚理工学院',
            ),
            82 => 
            array (
                'id' => 2358,
                'province_id' => 12,
                'name' => '荆州教育学院  ',
            ),
            83 => 
            array (
                'id' => 2360,
                'province_id' => 14,
                'name' => '吉林城建学院',
            ),
            84 => 
            array (
                'id' => 2362,
                'province_id' => 14,
                'name' => '吉林工商学院',
            ),
            85 => 
            array (
                'id' => 2364,
                'province_id' => 14,
                'name' => '吉林经济管理干部学院',
            ),
            86 => 
            array (
                'id' => 2366,
                'province_id' => 14,
                'name' => '吉林铁道职业技术学院 ',
            ),
            87 => 
            array (
                'id' => 2368,
                'province_id' => 15,
                'name' => '苏州高等职业技术学校',
            ),
            88 => 
            array (
                'id' => 2370,
                'province_id' => 15,
                'name' => '苏州旅游与财经高等职业技术学校',
            ),
            89 => 
            array (
                'id' => 2372,
                'province_id' => 15,
                'name' => '苏州市职业大学',
            ),
            90 => 
            array (
                'id' => 2374,
                'province_id' => 15,
                'name' => '无锡交通高等职业技术学院',
            ),
            91 => 
            array (
                'id' => 2376,
                'province_id' => 15,
                'name' => '无锡立信职教中心校',
            ),
            92 => 
            array (
                'id' => 2378,
                'province_id' => 15,
                'name' => '吴中职教中心校',
            ),
            93 => 
            array (
                'id' => 2380,
                'province_id' => 15,
                'name' => '江苏信息职术技术学院',
            ),
            94 => 
            array (
                'id' => 2382,
                'province_id' => 16,
                'name' => '新余高专',
            ),
            95 => 
            array (
                'id' => 2384,
                'province_id' => 16,
                'name' => '江西宜春职业技术学院',
            ),
            96 => 
            array (
                'id' => 2386,
                'province_id' => 16,
                'name' => '井冈山大学',
            ),
            97 => 
            array (
                'id' => 2388,
                'province_id' => 17,
                'name' => '大连电视大学',
            ),
            98 => 
            array (
                'id' => 2390,
                'province_id' => 17,
                'name' => '大连工业大学社科学院',
            ),
            99 => 
            array (
                'id' => 2392,
                'province_id' => 17,
                'name' => '大连工业大学信息管理学院',
            ),
            100 => 
            array (
                'id' => 2394,
                'province_id' => 17,
                'name' => '东软信息学院',
            ),
            101 => 
            array (
                'id' => 2396,
                'province_id' => 18,
                'name' => '内蒙古化工学院',
            ),
            102 => 
            array (
                'id' => 2398,
                'province_id' => 21,
                'name' => '青岛平度职教中心',
            ),
            103 => 
            array (
                'id' => 2400,
                'province_id' => 21,
                'name' => '广州侨光财经专修学院',
            ),
            104 => 
            array (
                'id' => 2402,
                'province_id' => 21,
                'name' => '青岛电子学校',
            ),
            105 => 
            array (
                'id' => 2404,
                'province_id' => 21,
                'name' => '青岛房产学校',
            ),
            106 => 
            array (
                'id' => 2406,
                'province_id' => 21,
                'name' => '青岛港湾学校',
            ),
            107 => 
            array (
                'id' => 2408,
                'province_id' => 21,
                'name' => '青岛高等职业学校',
            ),
            108 => 
            array (
                'id' => 2410,
                'province_id' => 21,
                'name' => '青岛供销中专',
            ),
            109 => 
            array (
                'id' => 2412,
                'province_id' => 21,
                'name' => '青岛广播电视大学',
            ),
            110 => 
            array (
                'id' => 2414,
                'province_id' => 21,
                'name' => '青岛恒星学院',
            ),
            111 => 
            array (
                'id' => 2416,
                'province_id' => 21,
                'name' => '青岛华夏职业学校',
            ),
            112 => 
            array (
                'id' => 2418,
                'province_id' => 21,
                'name' => '青岛经贸科技学校',
            ),
            113 => 
            array (
                'id' => 2420,
                'province_id' => 21,
                'name' => '青岛开发区职业中专',
            ),
            114 => 
            array (
                'id' => 2422,
                'province_id' => 21,
                'name' => '青岛旅游学校',
            ),
            115 => 
            array (
                'id' => 2424,
                'province_id' => 21,
                'name' => '青岛商务学校',
            ),
            116 => 
            array (
                'id' => 2426,
                'province_id' => 21,
                'name' => '青岛外事服务专业学校',
            ),
            117 => 
            array (
                'id' => 2428,
                'province_id' => 21,
                'name' => '青岛新港报关学院',
            ),
            118 => 
            array (
                'id' => 2430,
                'province_id' => 21,
                'name' => '青岛远洋船员学院',
            ),
            119 => 
            array (
                'id' => 2432,
                'province_id' => 21,
                'name' => '日照市工业学校',
            ),
            120 => 
            array (
                'id' => 2434,
                'province_id' => 21,
                'name' => '山东技师学院',
            ),
            121 => 
            array (
                'id' => 2436,
                'province_id' => 21,
                'name' => '山东联合大学',
            ),
            122 => 
            array (
                'id' => 2438,
                'province_id' => 21,
                'name' => '山东农业工程学院',
            ),
            123 => 
            array (
                'id' => 2440,
                'province_id' => 21,
                'name' => '山东轻工工程学院',
            ),
            124 => 
            array (
                'id' => 2442,
                'province_id' => 21,
                'name' => '山东商务职业学院',
            ),
            125 => 
            array (
                'id' => 2444,
                'province_id' => 21,
                'name' => '山东管理学院',
            ),
            126 => 
            array (
                'id' => 2446,
                'province_id' => 21,
                'name' => '山东行政学院',
            ),
            127 => 
            array (
                'id' => 2448,
                'province_id' => 21,
                'name' => '城阳职教中心',
            ),
            128 => 
            array (
                'id' => 2450,
                'province_id' => 21,
                'name' => '德州职业技术学院',
            ),
            129 => 
            array (
                'id' => 2452,
                'province_id' => 21,
                'name' => '济南幼儿师范高等专科学校',
            ),
            130 => 
            array (
                'id' => 2454,
                'province_id' => 21,
                'name' => '济南英才学院 ',
            ),
            131 => 
            array (
                'id' => 2456,
                'province_id' => 21,
                'name' => '胶南市职业中专',
            ),
            132 => 
            array (
                'id' => 2458,
                'province_id' => 21,
                'name' => '胶州职业高中',
            ),
            133 => 
            array (
                'id' => 2460,
                'province_id' => 21,
                'name' => '胶州职业中专',
            ),
            134 => 
            array (
                'id' => 2462,
                'province_id' => 22,
                'name' => '山西财政金融专科学校',
            ),
            135 => 
            array (
                'id' => 2464,
                'province_id' => 22,
                'name' => '太原城市学院',
            ),
            136 => 
            array (
                'id' => 2466,
                'province_id' => 22,
                'name' => '煤炭管理干部学院',
            ),
            137 => 
            array (
                'id' => 2468,
                'province_id' => 24,
                'name' => '上海工商外国语学院',
            ),
            138 => 
            array (
                'id' => 2470,
                'province_id' => 24,
                'name' => '上海海关学院',
            ),
            139 => 
            array (
                'id' => 2472,
                'province_id' => 24,
                'name' => '上海海关职业技术学院',
            ),
            140 => 
            array (
                'id' => 2474,
                'province_id' => 24,
                'name' => '上海华东政法大学',
            ),
            141 => 
            array (
                'id' => 2476,
                'province_id' => 24,
                'name' => '上海欧华职业技术学院',
            ),
            142 => 
            array (
                'id' => 2478,
                'province_id' => 24,
                'name' => '上海杉达大学',
            ),
            143 => 
            array (
                'id' => 2480,
                'province_id' => 24,
                'name' => '上海托普信息技术职业学院',
            ),
            144 => 
            array (
                'id' => 2482,
                'province_id' => 24,
                'name' => '上海外贸学院',
            ),
            145 => 
            array (
                'id' => 2484,
                'province_id' => 25,
                'name' => '四川财经职业学院',
            ),
            146 => 
            array (
                'id' => 2486,
                'province_id' => 25,
                'name' => '四川城市职业学院',
            ),
            147 => 
            array (
                'id' => 2488,
                'province_id' => 25,
                'name' => '四川教育学院',
            ),
            148 => 
            array (
                'id' => 2490,
                'province_id' => 25,
                'name' => '四川科技职业学院',
            ),
            149 => 
            array (
                'id' => 2492,
                'province_id' => 25,
                'name' => '四川文化产业职业学院',
            ),
            150 => 
            array (
                'id' => 2494,
                'province_id' => 25,
                'name' => '四川现代职业学院',
            ),
            151 => 
            array (
                'id' => 2496,
                'province_id' => 25,
                'name' => '成都大学',
            ),
            152 => 
            array (
                'id' => 2498,
                'province_id' => 28,
                'name' => '西藏职业技术学院',
            ),
            153 => 
            array (
                'id' => 2500,
                'province_id' => 29,
                'name' => '新疆职业大学商学院',
            ),
            154 => 
            array (
                'id' => 2502,
                'province_id' => 30,
                'name' => '昆明冶金高等专科学校经济与管理学院',
            ),
            155 => 
            array (
                'id' => 2506,
                'province_id' => 31,
                'name' => '宁波工程学院',
            ),
            156 => 
            array (
                'id' => 2514,
                'province_id' => 31,
                'name' => '温州科技职业学院',
            ),
            157 => 
            array (
                'id' => 2520,
                'province_id' => 31,
                'name' => '宁波大红鹰学院',
            ),
            158 => 
            array (
                'id' => 2522,
                'province_id' => 32,
                'name' => '重庆财经职业学院',
            ),
            159 => 
            array (
                'id' => 2524,
                'province_id' => 32,
                'name' => '重庆商务职业学院',
            ),
            160 => 
            array (
                'id' => 2528,
                'province_id' => 32,
                'name' => '重庆科创职业学院',
            ),
            161 => 
            array (
                'id' => 2530,
                'province_id' => 32,
                'name' => '重庆青年职业技术学院',
            ),
            162 => 
            array (
                'id' => 2534,
                'province_id' => 5,
                'name' => '广州城建职业学院',
            ),
            163 => 
            array (
                'id' => 2535,
                'province_id' => 31,
                'name' => '温州大学瓯江学院',
            ),
            164 => 
            array (
                'id' => 2539,
                'province_id' => 13,
                'name' => '湖南生物机电职业技术学院',
            ),
            165 => 
            array (
                'id' => 2541,
                'province_id' => 1,
                'name' => '合肥师范学院',
            ),
            166 => 
            array (
                'id' => 2542,
                'province_id' => 12,
                'name' => '三峡旅游职业技术学院',
            ),
            167 => 
            array (
                'id' => 2544,
                'province_id' => 31,
                'name' => '台州科技职业学院',
            ),
            168 => 
            array (
                'id' => 2546,
                'province_id' => 1,
                'name' => '安徽理工大学材料科学与工程学院',
            ),
            169 => 
            array (
                'id' => 2548,
                'province_id' => 25,
                'name' => '【小韩说事】电子科技大学',
            ),
            170 => 
            array (
                'id' => 2550,
                'province_id' => 2,
                'name' => '在线编辑部',
            ),
            171 => 
            array (
                'id' => 2554,
                'province_id' => 5,
                'name' => '吉林大学珠海学院',
            ),
            172 => 
            array (
                'id' => 2555,
                'province_id' => 31,
                'name' => '宁波诺丁汉大学',
            ),
            173 => 
            array (
                'id' => 2556,
                'province_id' => 2,
                'name' => '气候变化 中国在行动',
            ),
            174 => 
            array (
                'id' => 2557,
                'province_id' => 31,
                'name' => '温州大学',
            ),
            175 => 
            array (
                'id' => 2558,
                'province_id' => 25,
                'name' => '电子科技大学',
            ),
            176 => 
            array (
                'id' => 2559,
                'province_id' => 2,
                'name' => '原创中心',
            ),
            177 => 
            array (
                'id' => 2561,
                'province_id' => 31,
                'name' => '浙江理工大学阳光视觉',
            ),
            178 => 
            array (
                'id' => 2563,
                'province_id' => 2,
                'name' => 'Global News',
            ),
            179 => 
            array (
                'id' => 2564,
                'province_id' => 2,
                'name' => '【求是天地】中国人民大学',
            ),
            180 => 
            array (
                'id' => 2566,
                'province_id' => 12,
                'name' => '【化成天下】华中科技大学',
            ),
            181 => 
            array (
                'id' => 2567,
                'province_id' => 2,
                'name' => '【弘毅之路】中国人民大学',
            ),
            182 => 
            array (
                'id' => 2569,
                'province_id' => 2,
                'name' => '首都师范大学科德学院 ',
            ),
            183 => 
            array (
                'id' => 2571,
                'province_id' => 2,
                'name' => '北京工商大学嘉华学院',
            ),
            184 => 
            array (
                'id' => 2572,
                'province_id' => 2,
                'name' => '北京邮电大学世纪学院',
            ),
            185 => 
            array (
                'id' => 2574,
                'province_id' => 2,
                'name' => '北京工业大学耿丹学院',
            ),
            186 => 
            array (
                'id' => 2575,
                'province_id' => 27,
                'name' => '南开大学滨海学院 ',
            ),
            187 => 
            array (
                'id' => 2577,
                'province_id' => 27,
                'name' => '天津外国语大学滨海外事学院',
            ),
            188 => 
            array (
                'id' => 2578,
                'province_id' => 27,
                'name' => '天津体育学院运动与文化艺术学院',
            ),
            189 => 
            array (
                'id' => 2580,
                'province_id' => 27,
                'name' => '天津商业大学宝德学院 ',
            ),
            190 => 
            array (
                'id' => 2582,
                'province_id' => 2,
                'name' => '北京科技大学天津学院',
            ),
            191 => 
            array (
                'id' => 2583,
                'province_id' => 27,
                'name' => '天津师范大学津沽学院',
            ),
            192 => 
            array (
                'id' => 2584,
                'province_id' => 27,
                'name' => '天津理工大学中环信息学院',
            ),
            193 => 
            array (
                'id' => 2585,
                'province_id' => 27,
                'name' => '天津大学仁爱学院',
            ),
            194 => 
            array (
                'id' => 2587,
                'province_id' => 27,
                'name' => '天津财经大学珠江学院',
            ),
            195 => 
            array (
                'id' => 2588,
                'province_id' => 9,
                'name' => '河北工程大学科信学院',
            ),
            196 => 
            array (
                'id' => 2590,
                'province_id' => 9,
                'name' => '华北电力大学科技学院 ',
            ),
            197 => 
            array (
                'id' => 2591,
                'province_id' => 9,
                'name' => '河北科技大学理工学院',
            ),
            198 => 
            array (
                'id' => 2592,
                'province_id' => 9,
                'name' => '河北大学工商学院 ',
            ),
            199 => 
            array (
                'id' => 2594,
                'province_id' => 9,
                'name' => '河北师范大学汇华学院 ',
            ),
            200 => 
            array (
                'id' => 2596,
                'province_id' => 9,
                'name' => '河北医科大学临床学院 ',
            ),
            201 => 
            array (
                'id' => 2598,
                'province_id' => 9,
                'name' => '河北经贸大学经济管理学院 ',
            ),
            202 => 
            array (
                'id' => 2601,
                'province_id' => 9,
                'name' => '河北工业大学城市学院 ',
            ),
            203 => 
            array (
                'id' => 2602,
                'province_id' => 9,
                'name' => '燕山大学里仁学院 ',
            ),
            204 => 
            array (
                'id' => 2604,
                'province_id' => 9,
                'name' => '石家庄铁道大学四方学院 ',
            ),
            205 => 
            array (
                'id' => 2606,
                'province_id' => 9,
                'name' => '石家庄经济学院华信学院 ',
            ),
            206 => 
            array (
                'id' => 2608,
                'province_id' => 9,
                'name' => '河北农业大学现代科技学院 ',
            ),
            207 => 
            array (
                'id' => 2609,
                'province_id' => 9,
                'name' => '华北煤炭医学院冀唐学院 ',
            ),
            208 => 
            array (
                'id' => 2610,
                'province_id' => 9,
                'name' => '中国地质大学长城学院',
            ),
            209 => 
            array (
                'id' => 2611,
                'province_id' => 9,
                'name' => '燕京理工学院',
            ),
            210 => 
            array (
                'id' => 2612,
                'province_id' => 9,
                'name' => '北京中医药大学东方学院',
            ),
            211 => 
            array (
                'id' => 2613,
                'province_id' => 9,
                'name' => '北京交通大学海滨学院',
            ),
            212 => 
            array (
                'id' => 2615,
                'province_id' => 22,
                'name' => '山西大学商务学院 ',
            ),
            213 => 
            array (
                'id' => 2616,
                'province_id' => 22,
                'name' => '太原理工大学现代科技学院 ',
            ),
            214 => 
            array (
                'id' => 2618,
                'province_id' => 22,
                'name' => '山西农业大学信息学院 ',
            ),
            215 => 
            array (
                'id' => 2620,
                'province_id' => 22,
                'name' => '山西师范大学现代文理学院 ',
            ),
            216 => 
            array (
                'id' => 2622,
                'province_id' => 22,
                'name' => '中北大学信息商务学院 ',
            ),
            217 => 
            array (
                'id' => 2623,
                'province_id' => 22,
                'name' => '太原科技大学华科学院 ',
            ),
            218 => 
            array (
                'id' => 2627,
                'province_id' => 22,
                'name' => '山西医科大学晋祠学院 ',
            ),
            219 => 
            array (
                'id' => 2629,
                'province_id' => 22,
                'name' => '山西财经大学华商学院',
            ),
            220 => 
            array (
                'id' => 2630,
                'province_id' => 18,
                'name' => '内蒙古大学创业学院',
            ),
            221 => 
            array (
                'id' => 2631,
                'province_id' => 18,
                'name' => '内蒙古师范大学鸿德学院',
            ),
            222 => 
            array (
                'id' => 2632,
                'province_id' => 17,
                'name' => '大连理工大学城市学院 ',
            ),
            223 => 
            array (
                'id' => 2634,
                'province_id' => 17,
                'name' => '沈阳航空航天大学北方科技学院 ',
            ),
            224 => 
            array (
                'id' => 2635,
                'province_id' => 17,
                'name' => '沈阳城市学院',
            ),
            225 => 
            array (
                'id' => 2636,
                'province_id' => 17,
                'name' => '大连科技学院',
            ),
            226 => 
            array (
                'id' => 2638,
                'province_id' => 17,
                'name' => '辽宁理工学院',
            ),
            227 => 
            array (
                'id' => 2639,
                'province_id' => 17,
                'name' => '东北财经大学津桥商学院 ',
            ),
            228 => 
            array (
                'id' => 2641,
                'province_id' => 17,
                'name' => '大连工业大学艺术与信息工程学院 ',
            ),
            229 => 
            array (
                'id' => 2642,
                'province_id' => 17,
                'name' => '辽宁科技大学信息技术学院',
            ),
            230 => 
            array (
                'id' => 2644,
                'province_id' => 17,
                'name' => '中国医科大学临床医药学院 ',
            ),
            231 => 
            array (
                'id' => 2646,
                'province_id' => 17,
                'name' => '辽宁石油化工大学顺华能源学院 ',
            ),
            232 => 
            array (
                'id' => 2648,
                'province_id' => 17,
                'name' => '辽宁师范大学海华学院 ',
            ),
            233 => 
            array (
                'id' => 2650,
                'province_id' => 17,
                'name' => '沈阳城市建设学院',
            ),
            234 => 
            array (
                'id' => 2652,
                'province_id' => 17,
                'name' => '辽宁中医药大学杏林学院',
            ),
            235 => 
            array (
                'id' => 2660,
                'province_id' => 17,
                'name' => '辽宁医学院医疗学院',
            ),
            236 => 
            array (
                'id' => 2662,
                'province_id' => 17,
                'name' => '大连医科大学中山学院',
            ),
            237 => 
            array (
                'id' => 2663,
                'province_id' => 17,
                'name' => '沈阳工业大学工程学院',
            ),
            238 => 
            array (
                'id' => 2664,
                'province_id' => 17,
                'name' => '沈阳化工大学科亚学院',
            ),
            239 => 
            array (
                'id' => 2666,
                'province_id' => 14,
                'name' => '吉林建筑大学城建学院',
            ),
            240 => 
            array (
                'id' => 2667,
                'province_id' => 14,
                'name' => '长春建筑学院',
            ),
            241 => 
            array (
                'id' => 2669,
                'province_id' => 14,
                'name' => '长春光华学院 ',
            ),
            242 => 
            array (
                'id' => 2672,
                'province_id' => 14,
                'name' => '长春理工大学光电信息学院',
            ),
            243 => 
            array (
                'id' => 2673,
                'province_id' => 14,
                'name' => '吉林财经大学信息经济学院',
            ),
            244 => 
            array (
                'id' => 2674,
                'province_id' => 14,
                'name' => '长春科技学院',
            ),
            245 => 
            array (
                'id' => 2679,
                'province_id' => 11,
                'name' => '哈尔滨理工大学远东学院',
            ),
            246 => 
            array (
                'id' => 2680,
                'province_id' => 11,
                'name' => '哈尔滨师范大学恒星学院',
            ),
            247 => 
            array (
                'id' => 2681,
                'province_id' => 11,
                'name' => '哈尔滨华德学院',
            ),
            248 => 
            array (
                'id' => 2683,
                'province_id' => 11,
                'name' => '黑龙江工商学院',
            ),
            249 => 
            array (
                'id' => 2684,
                'province_id' => 11,
                'name' => '黑龙江大学剑桥学院',
            ),
            250 => 
            array (
                'id' => 2685,
                'province_id' => 11,
                'name' => '哈尔滨商业大学广厦学院',
            ),
            251 => 
            array (
                'id' => 2687,
                'province_id' => 11,
                'name' => '哈尔滨石油学院',
            ),
            252 => 
            array (
                'id' => 2691,
                'province_id' => 24,
                'name' => '复旦大学太平洋金融学院 ',
            ),
            253 => 
            array (
                'id' => 2692,
                'province_id' => 24,
                'name' => '上海外国语大学贤达经济人文学院',
            ),
            254 => 
            array (
                'id' => 2693,
                'province_id' => 24,
                'name' => '上海师范大学天华学院',
            ),
            255 => 
            array (
                'id' => 2695,
                'province_id' => 24,
                'name' => '复旦大学上海视觉艺术学院',
            ),
            256 => 
            array (
                'id' => 2696,
                'province_id' => 24,
                'name' => '同济大学同科学院',
            ),
            257 => 
            array (
                'id' => 2698,
                'province_id' => 15,
                'name' => '无锡太湖学院',
            ),
            258 => 
            array (
                'id' => 2699,
                'province_id' => 15,
                'name' => '东南大学成贤学院 ',
            ),
            259 => 
            array (
                'id' => 2700,
                'province_id' => 15,
                'name' => '中国矿业大学徐海学院',
            ),
            260 => 
            array (
                'id' => 2702,
                'province_id' => 15,
                'name' => '南京大学金陵学院 ',
            ),
            261 => 
            array (
                'id' => 2703,
                'province_id' => 15,
                'name' => '南京航空航天大学金城学院',
            ),
            262 => 
            array (
                'id' => 2704,
                'province_id' => 15,
                'name' => '中国传媒大学南广学院',
            ),
            263 => 
            array (
                'id' => 2705,
                'province_id' => 15,
                'name' => '南京理工大学泰州科技学院',
            ),
            264 => 
            array (
                'id' => 2706,
                'province_id' => 14,
                'name' => '长春大学旅游学院',
            ),
            265 => 
            array (
                'id' => 2707,
                'province_id' => 15,
                'name' => '南京师范大学泰州学院',
            ),
            266 => 
            array (
                'id' => 2709,
                'province_id' => 15,
                'name' => '南京工业大学浦江学院',
            ),
            267 => 
            array (
                'id' => 2710,
                'province_id' => 15,
                'name' => '南京师范大学中北学院',
            ),
            268 => 
            array (
                'id' => 2712,
                'province_id' => 15,
                'name' => '南京医科大学康达学院',
            ),
            269 => 
            array (
                'id' => 2714,
                'province_id' => 15,
                'name' => '南京中医药大学翰林学院',
            ),
            270 => 
            array (
                'id' => 2715,
                'province_id' => 15,
                'name' => '南京信息工程大学滨江学院',
            ),
            271 => 
            array (
                'id' => 2716,
                'province_id' => 15,
                'name' => '苏州大学文正学院',
            ),
            272 => 
            array (
                'id' => 2717,
                'province_id' => 15,
                'name' => '苏州大学应用技术学院',
            ),
            273 => 
            array (
                'id' => 2718,
                'province_id' => 15,
                'name' => '苏州科技学院天平学院',
            ),
            274 => 
            array (
                'id' => 2721,
                'province_id' => 15,
                'name' => '扬州大学广陵学院',
            ),
            275 => 
            array (
                'id' => 2722,
                'province_id' => 15,
                'name' => '江苏师范大学科文学院',
            ),
            276 => 
            array (
                'id' => 2724,
                'province_id' => 15,
                'name' => '南京邮电大学通达学院',
            ),
            277 => 
            array (
                'id' => 2726,
                'province_id' => 15,
                'name' => '南京财经大学红山学院',
            ),
            278 => 
            array (
                'id' => 2728,
                'province_id' => 15,
                'name' => '江苏科技大学苏州理工学院',
            ),
            279 => 
            array (
                'id' => 2730,
                'province_id' => 15,
                'name' => '常州大学怀德学院',
            ),
            280 => 
            array (
                'id' => 2731,
                'province_id' => 15,
                'name' => '南通大学杏林学院',
            ),
            281 => 
            array (
                'id' => 2733,
                'province_id' => 15,
                'name' => '南京审计学院金审学院',
            ),
            282 => 
            array (
                'id' => 2735,
                'province_id' => 31,
                'name' => '浙江大学城市学院',
            ),
            283 => 
            array (
                'id' => 2737,
                'province_id' => 31,
                'name' => '浙江工业大学之江学院',
            ),
            284 => 
            array (
                'id' => 2739,
                'province_id' => 31,
                'name' => '浙江师范大学行知学院',
            ),
            285 => 
            array (
                'id' => 2741,
                'province_id' => 31,
                'name' => '宁波大学科学技术学院',
            ),
            286 => 
            array (
                'id' => 2742,
                'province_id' => 31,
                'name' => '杭州电子科技大学信息工程学院',
            ),
            287 => 
            array (
                'id' => 2744,
                'province_id' => 31,
                'name' => '浙江理工大学科技与艺术学院',
            ),
            288 => 
            array (
                'id' => 2746,
                'province_id' => 31,
                'name' => '浙江海洋学院东海科学技术学院',
            ),
            289 => 
            array (
                'id' => 2748,
                'province_id' => 31,
                'name' => '浙江农林大学天目学院',
            ),
            290 => 
            array (
                'id' => 2750,
                'province_id' => 31,
                'name' => '温州医科大学仁济学院',
            ),
            291 => 
            array (
                'id' => 2752,
                'province_id' => 31,
                'name' => '浙江中医药大学滨江学院',
            ),
            292 => 
            array (
                'id' => 2754,
                'province_id' => 31,
                'name' => '湖州师范学院求真学院 ',
            ),
            293 => 
            array (
                'id' => 2756,
                'province_id' => 31,
                'name' => '绍兴文理学院元培学院',
            ),
            294 => 
            array (
                'id' => 2760,
                'province_id' => 31,
                'name' => '浙江工商大学杭州商学院',
            ),
            295 => 
            array (
                'id' => 2762,
                'province_id' => 31,
                'name' => '中国计量学院现代科技学院',
            ),
            296 => 
            array (
                'id' => 2764,
                'province_id' => 31,
                'name' => '浙江财经大学东方学院',
            ),
            297 => 
            array (
                'id' => 2765,
                'province_id' => 31,
                'name' => '嘉兴学院南湖学院 ',
            ),
            298 => 
            array (
                'id' => 2766,
                'province_id' => 31,
                'name' => '温州大学城市学院',
            ),
            299 => 
            array (
                'id' => 2767,
                'province_id' => 31,
                'name' => '同济大学浙江学院',
            ),
            300 => 
            array (
                'id' => 2768,
                'province_id' => 31,
                'name' => '上海财经大学浙江学院',
            ),
            301 => 
            array (
                'id' => 2770,
                'province_id' => 1,
                'name' => '安徽大学江淮学院 ',
            ),
            302 => 
            array (
                'id' => 2772,
                'province_id' => 12,
                'name' => '中南财经政法大学（通讯站）',
            ),
            303 => 
            array (
                'id' => 2773,
                'province_id' => 1,
                'name' => '安徽师范大学皖江学院 ',
            ),
            304 => 
            array (
                'id' => 2774,
                'province_id' => 1,
                'name' => '安徽农业大学经济技术学院',
            ),
            305 => 
            array (
                'id' => 2776,
                'province_id' => 1,
                'name' => '安徽医科大学临床医学院',
            ),
            306 => 
            array (
                'id' => 2777,
                'province_id' => 1,
                'name' => '安徽工业大学工商学院 ',
            ),
            307 => 
            array (
                'id' => 2778,
                'province_id' => 1,
                'name' => '安徽财经大学商学院 ',
            ),
            308 => 
            array (
                'id' => 2780,
                'province_id' => 1,
                'name' => '淮北师范大学信息学院',
            ),
            309 => 
            array (
                'id' => 2781,
                'province_id' => 1,
                'name' => '安徽建筑工业学院城市建设学院 ',
            ),
            310 => 
            array (
                'id' => 2782,
                'province_id' => 1,
                'name' => '安徽工程大学机电学院',
            ),
            311 => 
            array (
                'id' => 2783,
                'province_id' => 1,
                'name' => '阜阳师范学院信息工程学院',
            ),
            312 => 
            array (
                'id' => 2784,
                'province_id' => 1,
                'name' => '河海大学文天学院',
            ),
            313 => 
            array (
                'id' => 2785,
                'province_id' => 3,
                'name' => '厦门大学嘉庚学院 ',
            ),
            314 => 
            array (
                'id' => 2786,
                'province_id' => 3,
                'name' => '阳光学院',
            ),
            315 => 
            array (
                'id' => 2787,
                'province_id' => 3,
                'name' => '福建师范大学协和学院',
            ),
            316 => 
            array (
                'id' => 2788,
                'province_id' => 3,
                'name' => '福建农林大学东方学院 ',
            ),
            317 => 
            array (
                'id' => 2789,
                'province_id' => 3,
                'name' => '福建师范大学闽南科技学院',
            ),
            318 => 
            array (
                'id' => 2790,
                'province_id' => 3,
                'name' => '厦门工学院',
            ),
            319 => 
            array (
                'id' => 2792,
                'province_id' => 3,
                'name' => '福州大学至诚学院',
            ),
            320 => 
            array (
                'id' => 2793,
                'province_id' => 3,
                'name' => '福建农林大学金山学院',
            ),
            321 => 
            array (
                'id' => 2794,
                'province_id' => 16,
                'name' => '南昌大学科学技术学院',
            ),
            322 => 
            array (
                'id' => 2796,
                'province_id' => 16,
                'name' => '江西农业大学南昌商学院',
            ),
            323 => 
            array (
                'id' => 2797,
                'province_id' => 16,
                'name' => '.江西师范大学科学技术学院 ',
            ),
            324 => 
            array (
                'id' => 2798,
                'province_id' => 16,
                'name' => '华东交通大学理工学院 ',
            ),
            325 => 
            array (
                'id' => 2799,
                'province_id' => 16,
                'name' => '江西理工大学应用科学学院 ',
            ),
            326 => 
            array (
                'id' => 2801,
                'province_id' => 16,
                'name' => '东华理工大学长江学院 ',
            ),
            327 => 
            array (
                'id' => 2802,
                'province_id' => 16,
                'name' => '南昌航空大学科技学院 ',
            ),
            328 => 
            array (
                'id' => 2803,
                'province_id' => 16,
                'name' => '江西中医学院科技学院',
            ),
            329 => 
            array (
                'id' => 2805,
                'province_id' => 16,
                'name' => '江西财经大学现代经济管理学院',
            ),
            330 => 
            array (
                'id' => 2807,
                'province_id' => 16,
                'name' => '赣南师范学院科技学院',
            ),
            331 => 
            array (
                'id' => 2808,
                'province_id' => 16,
                'name' => '景德镇陶瓷学院科技艺术学院 ',
            ),
            332 => 
            array (
                'id' => 2810,
                'province_id' => 16,
                'name' => '江西科技师范学院理工学院 ',
            ),
            333 => 
            array (
                'id' => 2812,
                'province_id' => 16,
                'name' => '南昌大学共青学院',
            ),
            334 => 
            array (
                'id' => 2814,
                'province_id' => 21,
                'name' => '中国石油大学胜利学院 ',
            ),
            335 => 
            array (
                'id' => 2816,
                'province_id' => 21,
                'name' => '烟台大学文经学院',
            ),
            336 => 
            array (
                'id' => 2817,
                'province_id' => 21,
                'name' => '青岛理工大学琴岛学院',
            ),
            337 => 
            array (
                'id' => 2818,
                'province_id' => 21,
                'name' => '山东科技大学泰山科技学院',
            ),
            338 => 
            array (
                'id' => 2820,
                'province_id' => 21,
                'name' => '青岛工学院',
            ),
            339 => 
            array (
                'id' => 2821,
                'province_id' => 21,
                'name' => '山东经济学院燕山学院',
            ),
            340 => 
            array (
                'id' => 2824,
                'province_id' => 21,
                'name' => '青岛农业大学海都学院',
            ),
            341 => 
            array (
                'id' => 2825,
                'province_id' => 21,
                'name' => '齐鲁理工学院',
            ),
            342 => 
            array (
                'id' => 2827,
                'province_id' => 21,
                'name' => '山东财政学院东方学院',
            ),
            343 => 
            array (
                'id' => 2828,
                'province_id' => 21,
                'name' => '山东师范大学历山学院',
            ),
            344 => 
            array (
                'id' => 2830,
                'province_id' => 21,
                'name' => '聊城大学东昌学院',
            ),
            345 => 
            array (
                'id' => 2831,
                'province_id' => 21,
                'name' => '济南大学泉城学院',
            ),
            346 => 
            array (
                'id' => 2832,
                'province_id' => 10,
                'name' => '河南理工大学万方科技学院 ',
            ),
            347 => 
            array (
                'id' => 2834,
                'province_id' => 10,
                'name' => '河南大学民生学院',
            ),
            348 => 
            array (
                'id' => 2836,
                'province_id' => 10,
                'name' => '中原工学院信息商务学院',
            ),
            349 => 
            array (
                'id' => 2837,
                'province_id' => 10,
                'name' => '安阳师范学院人文管理学院',
            ),
            350 => 
            array (
                'id' => 2838,
                'province_id' => 10,
                'name' => '河南师范大学新联学院 ',
            ),
            351 => 
            array (
                'id' => 2839,
                'province_id' => 10,
                'name' => '新乡医学院三全学院 ',
            ),
            352 => 
            array (
                'id' => 2841,
                'province_id' => 10,
                'name' => '河南科技学院新科学院',
            ),
            353 => 
            array (
                'id' => 2843,
                'province_id' => 10,
                'name' => '信阳师范学院华锐学院',
            ),
            354 => 
            array (
                'id' => 2844,
                'province_id' => 10,
                'name' => '商丘学院',
            ),
            355 => 
            array (
                'id' => 2845,
                'province_id' => 10,
                'name' => '河南财经政法大学成功学院',
            ),
            356 => 
            array (
                'id' => 2847,
                'province_id' => 12,
                'name' => '武昌首义学院',
            ),
            357 => 
            array (
                'id' => 2848,
                'province_id' => 12,
                'name' => '武汉东湖学院',
            ),
            358 => 
            array (
                'id' => 2853,
                'province_id' => 12,
                'name' => '武汉学院',
            ),
            359 => 
            array (
                'id' => 2855,
                'province_id' => 12,
                'name' => '武汉理工大学华夏学院 ',
            ),
            360 => 
            array (
                'id' => 2856,
                'province_id' => 12,
                'name' => '湖北大学知行学院 ',
            ),
            361 => 
            array (
                'id' => 2858,
                'province_id' => 12,
                'name' => '三峡大学科技学院 ',
            ),
            362 => 
            array (
                'id' => 2861,
                'province_id' => 12,
                'name' => '武汉工商学院',
            ),
            363 => 
            array (
                'id' => 2863,
                'province_id' => 12,
                'name' => '湖北工业大学工程技术学院 ',
            ),
            364 => 
            array (
                'id' => 2864,
                'province_id' => 12,
                'name' => '湖北商贸学院 ',
            ),
            365 => 
            array (
                'id' => 2865,
                'province_id' => 12,
                'name' => '武昌工学院',
            ),
            366 => 
            array (
                'id' => 2867,
                'province_id' => 12,
                'name' => '武汉工程大学邮电与信息工程学院 ',
            ),
            367 => 
            array (
                'id' => 2869,
                'province_id' => 12,
                'name' => '武汉纺织大学外经贸学院 ',
            ),
            368 => 
            array (
                'id' => 2871,
                'province_id' => 12,
                'name' => '江汉大学文理学院 ',
            ),
            369 => 
            array (
                'id' => 2873,
                'province_id' => 12,
                'name' => '湖北汽车工业学院科技学院 ',
            ),
            370 => 
            array (
                'id' => 2875,
                'province_id' => 12,
                'name' => '湖北经济学院法商学院 ',
            ),
            371 => 
            array (
                'id' => 2877,
                'province_id' => 12,
                'name' => '武汉体育学院体育科技学院',
            ),
            372 => 
            array (
                'id' => 2878,
                'province_id' => 12,
                'name' => '湖北师范学院文理学院 ',
            ),
            373 => 
            array (
                'id' => 2880,
                'province_id' => 12,
                'name' => '孝感学院新技术学院 ',
            ),
            374 => 
            array (
                'id' => 2881,
                'province_id' => 12,
                'name' => '湖北民族学院科技学院 ',
            ),
            375 => 
            array (
                'id' => 2883,
                'province_id' => 12,
                'name' => '湖北医药学院药护学院 ',
            ),
            376 => 
            array (
                'id' => 2885,
                'province_id' => 12,
                'name' => '襄樊学院理工学院 ',
            ),
            377 => 
            array (
                'id' => 2886,
                'province_id' => 12,
                'name' => '武汉工程科技学院 ',
            ),
            378 => 
            array (
                'id' => 2887,
                'province_id' => 12,
                'name' => '长江大学文理学院 ',
            ),
            379 => 
            array (
                'id' => 2889,
                'province_id' => 12,
                'name' => '长江大学工程技术学院',
            ),
            380 => 
            array (
                'id' => 2895,
                'province_id' => 12,
                'name' => '华中师范大学武汉传媒学院 ',
            ),
            381 => 
            array (
                'id' => 2897,
                'province_id' => 12,
                'name' => '华中农业大学楚天学院',
            ),
            382 => 
            array (
                'id' => 2899,
                'province_id' => 12,
                'name' => '武汉大学珞珈学院',
            ),
            383 => 
            array (
                'id' => 2900,
                'province_id' => 13,
                'name' => '湖南师范大学树达学院',
            ),
            384 => 
            array (
                'id' => 2902,
                'province_id' => 13,
                'name' => '湖南商学院北津学院 ',
            ),
            385 => 
            array (
                'id' => 2903,
                'province_id' => 13,
                'name' => '中南林业科技大学涉外学院 ',
            ),
            386 => 
            array (
                'id' => 2905,
                'province_id' => 13,
                'name' => '湖南农业大学东方科技学院 ',
            ),
            387 => 
            array (
                'id' => 2906,
                'province_id' => 13,
                'name' => '长沙理工大学城南学院 ',
            ),
            388 => 
            array (
                'id' => 2907,
                'province_id' => 13,
                'name' => '湖南科技大学潇湘学院',
            ),
            389 => 
            array (
                'id' => 2909,
                'province_id' => 13,
                'name' => '湖南工业大学科技学院 ',
            ),
            390 => 
            array (
                'id' => 2910,
                'province_id' => 13,
                'name' => '湘潭大学兴湘学院',
            ),
            391 => 
            array (
                'id' => 2912,
                'province_id' => 13,
                'name' => '南华大学船山学院 ',
            ),
            392 => 
            array (
                'id' => 2914,
                'province_id' => 13,
                'name' => '湖南文理学院芙蓉学院 ',
            ),
            393 => 
            array (
                'id' => 2915,
                'province_id' => 13,
                'name' => '湖南理工学院南湖学院 ',
            ),
            394 => 
            array (
                'id' => 2917,
                'province_id' => 13,
                'name' => '吉首大学张家界学院 ',
            ),
            395 => 
            array (
                'id' => 2918,
                'province_id' => 13,
                'name' => '湖南工程学院应用技术学院 ',
            ),
            396 => 
            array (
                'id' => 2920,
                'province_id' => 13,
                'name' => '湖南中医药大学湘杏学院 ',
            ),
            397 => 
            array (
                'id' => 2922,
                'province_id' => 13,
                'name' => '衡阳师范学院南岳学院',
            ),
            398 => 
            array (
                'id' => 2923,
                'province_id' => 5,
                'name' => '北京师范大学珠海分校 ',
            ),
            399 => 
            array (
                'id' => 2926,
                'province_id' => 5,
                'name' => '广州商学院',
            ),
            400 => 
            array (
                'id' => 2927,
                'province_id' => 5,
                'name' => '广东工业大学华立学院',
            ),
            401 => 
            array (
                'id' => 2928,
                'province_id' => 5,
                'name' => '广州大学松田学院',
            ),
            402 => 
            array (
                'id' => 2930,
                'province_id' => 5,
                'name' => '北京理工大学珠海学院',
            ),
            403 => 
            array (
                'id' => 2935,
                'province_id' => 5,
                'name' => '中山大学新华学院',
            ),
            404 => 
            array (
                'id' => 2937,
                'province_id' => 5,
                'name' => '华南农业大学珠江学院',
            ),
            405 => 
            array (
                'id' => 2938,
                'province_id' => 5,
                'name' => '广州大学华软软件学院',
            ),
            406 => 
            array (
                'id' => 2940,
                'province_id' => 5,
                'name' => '广东技术师范学院天河学院',
            ),
            407 => 
            array (
                'id' => 2941,
                'province_id' => 5,
                'name' => '中山大学南方学院',
            ),
            408 => 
            array (
                'id' => 2944,
                'province_id' => 5,
                'name' => '广东财经大学华商学院',
            ),
            409 => 
            array (
                'id' => 2945,
                'province_id' => 5,
                'name' => '广东海洋大学寸金学院',
            ),
            410 => 
            array (
                'id' => 2947,
                'province_id' => 5,
                'name' => '广东外语外贸大学南国商学院',
            ),
            411 => 
            array (
                'id' => 2952,
                'province_id' => 6,
                'name' => '桂林理工大学博文管理学院',
            ),
            412 => 
            array (
                'id' => 2962,
                'province_id' => 6,
                'name' => '北京航空航天大学北海学院',
            ),
            413 => 
            array (
                'id' => 2964,
                'province_id' => 8,
                'name' => '三亚学院',
            ),
            414 => 
            array (
                'id' => 2965,
                'province_id' => 32,
                'name' => '重庆人文科技学院',
            ),
            415 => 
            array (
                'id' => 2966,
                'province_id' => 32,
                'name' => '四川外国语大学重庆南方翻译学院',
            ),
            416 => 
            array (
                'id' => 2967,
                'province_id' => 32,
                'name' => '重庆师范大学涉外商贸学院',
            ),
            417 => 
            array (
                'id' => 2968,
                'province_id' => 32,
                'name' => '重庆工商大学融智学院 ',
            ),
            418 => 
            array (
                'id' => 2969,
                'province_id' => 32,
                'name' => '重庆工商大学派斯学院 ',
            ),
            419 => 
            array (
                'id' => 2971,
                'province_id' => 32,
                'name' => '重庆邮电大学移通学院',
            ),
            420 => 
            array (
                'id' => 2972,
                'province_id' => 32,
                'name' => '重庆大学城市科技学院',
            ),
            421 => 
            array (
                'id' => 2973,
                'province_id' => 25,
                'name' => '成都理工大学工程技术学院 ',
            ),
            422 => 
            array (
                'id' => 2975,
                'province_id' => 25,
                'name' => '四川传媒学院',
            ),
            423 => 
            array (
                'id' => 2976,
                'province_id' => 25,
                'name' => '成都信息工程学院银杏酒店管理学院 ',
            ),
            424 => 
            array (
                'id' => 2978,
                'province_id' => 25,
                'name' => '四川师范大学成都学院',
            ),
            425 => 
            array (
                'id' => 2979,
                'province_id' => 25,
                'name' => '四川外语学院成都学院',
            ),
            426 => 
            array (
                'id' => 2980,
                'province_id' => 25,
                'name' => '电子科技大学成都学院',
            ),
            427 => 
            array (
                'id' => 2982,
                'province_id' => 25,
                'name' => '西南科技大学城市学院',
            ),
            428 => 
            array (
                'id' => 2983,
                'province_id' => 25,
                'name' => '四川音乐学院绵阳艺术学院',
            ),
            429 => 
            array (
                'id' => 2984,
                'province_id' => 25,
                'name' => '四川大学锦江学院',
            ),
            430 => 
            array (
                'id' => 2986,
                'province_id' => 25,
                'name' => '西南财经大学天府学院',
            ),
            431 => 
            array (
                'id' => 2988,
                'province_id' => 25,
                'name' => '西南交通大学希望学院',
            ),
            432 => 
            array (
                'id' => 2990,
                'province_id' => 7,
                'name' => '贵州大学科技学院 ',
            ),
            433 => 
            array (
                'id' => 2991,
                'province_id' => 7,
                'name' => '贵州大学明德学院 ',
            ),
            434 => 
            array (
                'id' => 2992,
                'province_id' => 7,
                'name' => '贵州师范大学求是学院',
            ),
            435 => 
            array (
                'id' => 2994,
                'province_id' => 7,
                'name' => '遵义医学院医学与科技学院 ',
            ),
            436 => 
            array (
                'id' => 2995,
                'province_id' => 7,
                'name' => '贵阳中医学院时珍学院 ',
            ),
            437 => 
            array (
                'id' => 2997,
                'province_id' => 7,
                'name' => '贵州财经学院商务学院 ',
            ),
            438 => 
            array (
                'id' => 2999,
                'province_id' => 7,
                'name' => '贵州民族大学人文科技学院 ',
            ),
            439 => 
            array (
                'id' => 3001,
                'province_id' => 7,
                'name' => '贵阳医学院神奇民族医药学院',
            ),
            440 => 
            array (
                'id' => 3002,
                'province_id' => 30,
                'name' => '云南大学滇池学院 ',
            ),
            441 => 
            array (
                'id' => 3005,
                'province_id' => 30,
                'name' => '云南师范大学商学院 ',
            ),
            442 => 
            array (
                'id' => 3006,
                'province_id' => 30,
                'name' => '云南师范大学文理学院 ',
            ),
            443 => 
            array (
                'id' => 3009,
                'province_id' => 30,
                'name' => '云南大学旅游文化学院 ',
            ),
            444 => 
            array (
                'id' => 3010,
                'province_id' => 30,
                'name' => '云南艺术学院文华学院 ',
            ),
            445 => 
            array (
                'id' => 3011,
                'province_id' => 30,
                'name' => '昆明理工大学津桥学院 ',
            ),
            446 => 
            array (
                'id' => 3012,
                'province_id' => 23,
                'name' => '西安财经学院行知学院',
            ),
            447 => 
            array (
                'id' => 3014,
                'province_id' => 23,
                'name' => '西安电子科技大学长安学院',
            ),
            448 => 
            array (
                'id' => 3015,
                'province_id' => 23,
                'name' => '延安大学西安创新学院',
            ),
            449 => 
            array (
                'id' => 3017,
                'province_id' => 23,
                'name' => '西北大学现代学院 ',
            ),
            450 => 
            array (
                'id' => 3019,
                'province_id' => 23,
                'name' => '西安建筑科技大学华清学院 ',
            ),
            451 => 
            array (
                'id' => 3021,
                'province_id' => 23,
                'name' => '陕西科技大学镐京学院',
            ),
            452 => 
            array (
                'id' => 3022,
                'province_id' => 23,
                'name' => '西安工业大学北方信息工程学院',
            ),
            453 => 
            array (
                'id' => 3024,
                'province_id' => 23,
                'name' => '西北工业大学明德学院',
            ),
            454 => 
            array (
                'id' => 3026,
                'province_id' => 23,
                'name' => '西安科技大学高新学院',
            ),
            455 => 
            array (
                'id' => 3027,
                'province_id' => 23,
                'name' => '西安理工大学高科学院 ',
            ),
            456 => 
            array (
                'id' => 3029,
                'province_id' => 23,
                'name' => '长安大学兴华学院 ',
            ),
            457 => 
            array (
                'id' => 3030,
                'province_id' => 4,
                'name' => '兰州交通大学博文学院',
            ),
            458 => 
            array (
                'id' => 3032,
                'province_id' => 4,
                'name' => '兰州财经大学长青学院',
            ),
            459 => 
            array (
                'id' => 3033,
                'province_id' => 4,
                'name' => '西北师范大学知行学院',
            ),
            460 => 
            array (
                'id' => 3034,
                'province_id' => 4,
                'name' => '兰州财经大学陇桥学院',
            ),
            461 => 
            array (
                'id' => 3035,
                'province_id' => 4,
                'name' => '兰州理工大学技术工程学院',
            ),
            462 => 
            array (
                'id' => 3038,
                'province_id' => 19,
                'name' => '宁夏大学新华学院',
            ),
            463 => 
            array (
                'id' => 3039,
                'province_id' => 19,
                'name' => '中国矿业大学银川学院 ',
            ),
            464 => 
            array (
                'id' => 3040,
                'province_id' => 20,
                'name' => '青海大学昆仑学院',
            ),
            465 => 
            array (
                'id' => 3043,
                'province_id' => 29,
                'name' => '新疆农业大学科学技术学院',
            ),
            466 => 
            array (
                'id' => 3044,
                'province_id' => 29,
                'name' => '新疆财经大学商务学院',
            ),
            467 => 
            array (
                'id' => 3046,
                'province_id' => 29,
                'name' => '新疆医科大学厚博学院',
            ),
            468 => 
            array (
                'id' => 3048,
                'province_id' => 29,
                'name' => '石河子大学科技学院 ',
            ),
            469 => 
            array (
                'id' => 3049,
                'province_id' => 8,
                'name' => '三亚理工职业学院',
            ),
            470 => 
            array (
                'id' => 3050,
                'province_id' => 10,
                'name' => '郑州工业应用技术学院',
            ),
            471 => 
            array (
                'id' => 3055,
                'province_id' => 3,
                'name' => '武夷山职业学院',
            ),
            472 => 
            array (
                'id' => 3059,
                'province_id' => 10,
                'name' => '漯河食品职业学院',
            ),
            473 => 
            array (
                'id' => 3060,
                'province_id' => 10,
                'name' => '郑州师范学院',
            ),
            474 => 
            array (
                'id' => 3061,
                'province_id' => 7,
                'name' => '贵州职业技术学院',
            ),
            475 => 
            array (
                'id' => 3062,
                'province_id' => 12,
                'name' => '湖北第二师范学院',
            ),
            476 => 
            array (
                'id' => 3064,
                'province_id' => 12,
                'name' => '武汉纺织大学',
            ),
            477 => 
            array (
                'id' => 3066,
                'province_id' => 19,
                'name' => '宁夏',
            ),
            478 => 
            array (
                'id' => 3068,
                'province_id' => 21,
                'name' => '山东大学（威海）',
            ),
            479 => 
            array (
                'id' => 3070,
                'province_id' => 5,
                'name' => '广东潮汕职业技术学院',
            ),
            480 => 
            array (
                'id' => 3072,
                'province_id' => 23,
                'name' => '西北工业大学2010社会实践',
            ),
            481 => 
            array (
                'id' => 3073,
                'province_id' => 18,
                'name' => '内蒙古经贸外语职业学院 ',
            ),
            482 => 
            array (
                'id' => 3076,
                'province_id' => 13,
                'name' => '湖南科技工业职业技术学院',
            ),
            483 => 
            array (
                'id' => 3078,
                'province_id' => 32,
                'name' => '重庆建筑工程职业学院',
            ),
            484 => 
            array (
                'id' => 3080,
                'province_id' => 32,
                'name' => '重庆工商大学学工部',
            ),
            485 => 
            array (
                'id' => 3081,
                'province_id' => 31,
                'name' => '浙江汽车职业技术学院',
            ),
            486 => 
            array (
                'id' => 3083,
                'province_id' => 10,
                'name' => '郑州澍青医学高等专科学校',
            ),
            487 => 
            array (
                'id' => 3085,
                'province_id' => 16,
                'name' => '江西管理职业学院',
            ),
            488 => 
            array (
                'id' => 3087,
                'province_id' => 10,
                'name' => '河南职工医学院',
            ),
            489 => 
            array (
                'id' => 3089,
                'province_id' => 15,
                'name' => '苏州高博软件职业技术学院',
            ),
            490 => 
            array (
                'id' => 3091,
                'province_id' => 15,
                'name' => '江苏建康职业学院',
            ),
            491 => 
            array (
                'id' => 3095,
                'province_id' => 7,
                'name' => '毕节职业技术学院',
            ),
            492 => 
            array (
                'id' => 3097,
                'province_id' => 2,
                'name' => '中南林业科技大学北京教学点',
            ),
            493 => 
            array (
                'id' => 3101,
                'province_id' => 2,
                'name' => '北京东城职工大学',
            ),
            494 => 
            array (
                'id' => 3103,
                'province_id' => 15,
                'name' => '南京理工大学紫金学院',
            ),
            495 => 
            array (
                'id' => 3105,
                'province_id' => 8,
                'name' => '海南工商职业学院',
            ),
            496 => 
            array (
                'id' => 3107,
                'province_id' => 5,
                'name' => '东莞职业技术学院',
            ),
            497 => 
            array (
                'id' => 3111,
                'province_id' => 3,
                'name' => '漳州城市职业学院',
            ),
            498 => 
            array (
                'id' => 3113,
                'province_id' => 10,
                'name' => '河南化工职业学院',
            ),
            499 => 
            array (
                'id' => 3115,
                'province_id' => 21,
                'name' => '烟台工程职业技术学院',
            ),
        ));
        \DB::table('universities')->insert(array (
            0 => 
            array (
                'id' => 3117,
                'province_id' => 15,
                'name' => '南京人口管理干部学院',
            ),
            1 => 
            array (
                'id' => 3119,
                'province_id' => 16,
                'name' => '江西财经大学国际学院',
            ),
            2 => 
            array (
                'id' => 3121,
                'province_id' => 21,
                'name' => '潍坊工程职业学院',
            ),
            3 => 
            array (
                'id' => 3123,
                'province_id' => 16,
                'name' => '新余学院',
            ),
            4 => 
            array (
                'id' => 3125,
                'province_id' => 21,
                'name' => '哈尔滨工业大学（威海）',
            ),
            5 => 
            array (
                'id' => 3127,
                'province_id' => 21,
                'name' => '【印象·鸢都】潍坊学院',
            ),
            6 => 
            array (
                'id' => 3129,
                'province_id' => 12,
                'name' => '武汉软件工程职业学院',
            ),
            7 => 
            array (
                'id' => 3131,
                'province_id' => 31,
                'name' => '衢州学院',
            ),
            8 => 
            array (
                'id' => 3133,
                'province_id' => 11,
                'name' => '黑龙江商业职业学院',
            ),
            9 => 
            array (
                'id' => 3135,
                'province_id' => 23,
                'name' => '【成长·我的青春】西安科技大学',
            ),
            10 => 
            array (
                'id' => 3137,
                'province_id' => 23,
                'name' => '【西译风采】西安翻译学院',
            ),
            11 => 
            array (
                'id' => 3139,
                'province_id' => 2,
                'name' => '测试（1216）',
            ),
            12 => 
            array (
                'id' => 3143,
                'province_id' => 2,
                'name' => '北京市教委',
            ),
            13 => 
            array (
                'id' => 3145,
                'province_id' => 27,
                'name' => '天津市教委',
            ),
            14 => 
            array (
                'id' => 3147,
                'province_id' => 24,
                'name' => '上海市教委',
            ),
            15 => 
            array (
                'id' => 3149,
                'province_id' => 32,
                'name' => '重庆市教委',
            ),
            16 => 
            array (
                'id' => 3151,
                'province_id' => 9,
                'name' => '河北省教育厅',
            ),
            17 => 
            array (
                'id' => 3153,
                'province_id' => 22,
                'name' => '山西省教育厅',
            ),
            18 => 
            array (
                'id' => 3155,
                'province_id' => 17,
                'name' => '辽宁省教育厅',
            ),
            19 => 
            array (
                'id' => 3157,
                'province_id' => 14,
                'name' => '吉林省教育厅',
            ),
            20 => 
            array (
                'id' => 3159,
                'province_id' => 11,
                'name' => '黑龙江省教育厅',
            ),
            21 => 
            array (
                'id' => 3161,
                'province_id' => 15,
                'name' => '江苏省教育厅',
            ),
            22 => 
            array (
                'id' => 3163,
                'province_id' => 31,
                'name' => '浙江省教育厅',
            ),
            23 => 
            array (
                'id' => 3165,
                'province_id' => 1,
                'name' => '安徽省教育厅',
            ),
            24 => 
            array (
                'id' => 3167,
                'province_id' => 3,
                'name' => '福建省教育厅',
            ),
            25 => 
            array (
                'id' => 3169,
                'province_id' => 16,
                'name' => '江西省教育厅',
            ),
            26 => 
            array (
                'id' => 3171,
                'province_id' => 21,
                'name' => '山东省教育厅',
            ),
            27 => 
            array (
                'id' => 3173,
                'province_id' => 10,
                'name' => '河南省教育厅',
            ),
            28 => 
            array (
                'id' => 3175,
                'province_id' => 12,
                'name' => '湖北省教育厅',
            ),
            29 => 
            array (
                'id' => 3177,
                'province_id' => 13,
                'name' => '湖南省教育厅',
            ),
            30 => 
            array (
                'id' => 3179,
                'province_id' => 5,
                'name' => '广东省教育厅',
            ),
            31 => 
            array (
                'id' => 3181,
                'province_id' => 8,
                'name' => '海南省教育厅',
            ),
            32 => 
            array (
                'id' => 3183,
                'province_id' => 25,
                'name' => '四川省教育厅',
            ),
            33 => 
            array (
                'id' => 3185,
                'province_id' => 7,
                'name' => '贵州省教育厅',
            ),
            34 => 
            array (
                'id' => 3187,
                'province_id' => 30,
                'name' => '云南省教育厅',
            ),
            35 => 
            array (
                'id' => 3189,
                'province_id' => 23,
                'name' => '陕西省教育厅',
            ),
            36 => 
            array (
                'id' => 3191,
                'province_id' => 4,
                'name' => '甘肃省教育厅',
            ),
            37 => 
            array (
                'id' => 3193,
                'province_id' => 20,
                'name' => '青海省教育厅',
            ),
            38 => 
            array (
                'id' => 3195,
                'province_id' => 6,
                'name' => '广西壮族自治区教育厅',
            ),
            39 => 
            array (
                'id' => 3197,
                'province_id' => 18,
                'name' => '内蒙古自治区教育厅',
            ),
            40 => 
            array (
                'id' => 3199,
                'province_id' => 28,
                'name' => '西藏自治区教育厅',
            ),
            41 => 
            array (
                'id' => 3201,
                'province_id' => 19,
                'name' => '宁夏回族自治区教育厅',
            ),
            42 => 
            array (
                'id' => 3203,
                'province_id' => 29,
                'name' => '新疆维吾尔自治区教育厅',
            ),
            43 => 
            array (
                'id' => 3205,
                'province_id' => 23,
                'name' => '陕西学前师范学院',
            ),
            44 => 
            array (
                'id' => 3207,
                'province_id' => 3,
                'name' => '【德耀海西】三明学院',
            ),
            45 => 
            array (
                'id' => 3209,
                'province_id' => 1,
                'name' => '合肥信息技术职业学院',
            ),
            46 => 
            array (
                'id' => 3211,
                'province_id' => 15,
                'name' => '徐州财经高等职业技术学校',
            ),
            47 => 
            array (
                'id' => 3219,
                'province_id' => 17,
                'name' => '辽宁财贸学院',
            ),
            48 => 
            array (
                'id' => 3221,
                'province_id' => 16,
                'name' => '江西泰豪动漫职业学院',
            ),
            49 => 
            array (
                'id' => 3223,
                'province_id' => 21,
                'name' => '山东传媒职业学院',
            ),
            50 => 
            array (
                'id' => 3225,
                'province_id' => 15,
                'name' => '江苏城市职业学院',
            ),
            51 => 
            array (
                'id' => 3237,
                'province_id' => 14,
                'name' => '吉林华桥外国语学院',
            ),
            52 => 
            array (
                'id' => 3239,
                'province_id' => 13,
                'name' => '【青年评论】湖南师范大学',
            ),
            53 => 
            array (
                'id' => 3243,
                'province_id' => 18,
                'name' => '内蒙古科技大学包头医学院',
            ),
            54 => 
            array (
                'id' => 3245,
                'province_id' => 5,
                'name' => '汕头大学医学院',
            ),
            55 => 
            array (
                'id' => 3247,
                'province_id' => 21,
                'name' => '山东理工职业学院',
            ),
            56 => 
            array (
                'id' => 3249,
                'province_id' => 7,
                'name' => '贵阳护理职业学院',
            ),
            57 => 
            array (
                'id' => 3251,
                'province_id' => 22,
                'name' => '山西传媒艺术学院',
            ),
            58 => 
            array (
                'id' => 3253,
                'province_id' => 15,
                'name' => '盐城卫生职业技术学院',
            ),
            59 => 
            array (
                'id' => 3255,
                'province_id' => 13,
                'name' => '湖南有色金属职业技术学院',
            ),
            60 => 
            array (
                'id' => 3257,
                'province_id' => 9,
                'name' => '华北电力大学（保定校区）',
            ),
            61 => 
            array (
                'id' => 3259,
                'province_id' => 21,
                'name' => '山东文化产业职业学院',
            ),
            62 => 
            array (
                'id' => 3260,
                'province_id' => 11,
                'name' => '黑龙江财经学院',
            ),
            63 => 
            array (
                'id' => 3262,
                'province_id' => 7,
                'name' => '贵州盛华职业学院',
            ),
            64 => 
            array (
                'id' => 3264,
                'province_id' => 22,
                'name' => '【共建频道】晋中学院',
            ),
            65 => 
            array (
                'id' => 3266,
                'province_id' => 25,
                'name' => '四川艺术职业学院',
            ),
            66 => 
            array (
                'id' => 3268,
                'province_id' => 2,
                'name' => '【红船领航】中国人民大学',
            ),
            67 => 
            array (
                'id' => 3270,
                'province_id' => 32,
                'name' => '重庆交通职业学院',
            ),
            68 => 
            array (
                'id' => 3272,
                'province_id' => 11,
                'name' => '黑龙江幼儿师范高等专科学校',
            ),
            69 => 
            array (
                'id' => 3274,
                'province_id' => 21,
                'name' => '山东青年政治学院',
            ),
            70 => 
            array (
                'id' => 3276,
                'province_id' => 3,
                'name' => '厦门医学高等专科学校',
            ),
            71 => 
            array (
                'id' => 3278,
                'province_id' => 11,
                'name' => '黑龙江交通职业技术学院',
            ),
            72 => 
            array (
                'id' => 3280,
                'province_id' => 21,
                'name' => '枣庄职业学院',
            ),
            73 => 
            array (
                'id' => 3282,
                'province_id' => 17,
                'name' => '辽宁城市建设职业技术学院',
            ),
            74 => 
            array (
                'id' => 3286,
                'province_id' => 21,
                'name' => '山东女子学院',
            ),
            75 => 
            array (
                'id' => 3288,
                'province_id' => 31,
                'name' => '浙江横店影视职业学院',
            ),
            76 => 
            array (
                'id' => 3290,
                'province_id' => 1,
                'name' => '徽商职业学院',
            ),
            77 => 
            array (
                'id' => 3292,
                'province_id' => 21,
                'name' => '【中华情】山东大学',
            ),
            78 => 
            array (
                'id' => 3294,
                'province_id' => 18,
                'name' => '呼伦贝尔职业技术学院',
            ),
            79 => 
            array (
                'id' => 3296,
                'province_id' => 3,
                'name' => '厦门软件职业技术学院',
            ),
            80 => 
            array (
                'id' => 3298,
                'province_id' => 10,
                'name' => '河南建筑职业技术学院',
            ),
            81 => 
            array (
                'id' => 3300,
                'province_id' => 32,
                'name' => '重庆化工职业学院',
            ),
            82 => 
            array (
                'id' => 3302,
                'province_id' => 18,
                'name' => '内蒙古科技大学包头师范学院',
            ),
            83 => 
            array (
                'id' => 3304,
                'province_id' => 17,
                'name' => '大连航运职业技术学院',
            ),
            84 => 
            array (
                'id' => 3306,
                'province_id' => 32,
                'name' => '重庆第二师范学院',
            ),
            85 => 
            array (
                'id' => 3312,
                'province_id' => 21,
                'name' => '山东城市建设职业学院',
            ),
            86 => 
            array (
                'id' => 3314,
                'province_id' => 18,
                'name' => '赤峰工业职业技术学院',
            ),
            87 => 
            array (
                'id' => 3316,
                'province_id' => 11,
                'name' => '【旅游文化】哈尔滨理工大学',
            ),
            88 => 
            array (
                'id' => 3318,
                'province_id' => 1,
                'name' => '安徽粮食工程职业学院',
            ),
            89 => 
            array (
                'id' => 3320,
                'province_id' => 15,
                'name' => '宿迁学院',
            ),
            90 => 
            array (
                'id' => 3324,
                'province_id' => 11,
                'name' => '黑龙江粮食职业学院',
            ),
            91 => 
            array (
                'id' => 3326,
                'province_id' => 2,
                'name' => '【解民之艰】中国农业大学',
            ),
            92 => 
            array (
                'id' => 3328,
                'province_id' => 21,
                'name' => '巨野县技工学校',
            ),
            93 => 
            array (
                'id' => 3330,
                'province_id' => 2,
                'name' => '【共建频道】清华大学',
            ),
            94 => 
            array (
                'id' => 3332,
                'province_id' => 24,
                'name' => '【共建频道】同济大学',
            ),
            95 => 
            array (
                'id' => 3334,
                'province_id' => 15,
                'name' => '【共建频道】江南大学',
            ),
            96 => 
            array (
                'id' => 3336,
                'province_id' => 13,
                'name' => '【共建频道】湖南理工学院',
            ),
            97 => 
            array (
                'id' => 3338,
                'province_id' => 14,
                'name' => '【共建频道】白城职业技术学院',
            ),
            98 => 
            array (
                'id' => 3340,
                'province_id' => 14,
                'name' => '白城职业技术学院',
            ),
            99 => 
            array (
                'id' => 3342,
                'province_id' => 16,
                'name' => '【共建频道】华东交通大学',
            ),
            100 => 
            array (
                'id' => 3344,
                'province_id' => 15,
                'name' => '南京城市职业学院',
            ),
            101 => 
            array (
                'id' => 3346,
                'province_id' => 15,
                'name' => '【共建频道】南京航空航天大学金城学院',
            ),
            102 => 
            array (
                'id' => 3348,
                'province_id' => 32,
                'name' => '【共建频道】重庆大学',
            ),
            103 => 
            array (
                'id' => 3350,
                'province_id' => 7,
                'name' => '贵阳职业技术学院',
            ),
            104 => 
            array (
                'id' => 3352,
                'province_id' => 16,
                'name' => '南昌师范学院',
            ),
            105 => 
            array (
                'id' => 3354,
                'province_id' => 14,
                'name' => '吉林动画学院',
            ),
            106 => 
            array (
                'id' => 3356,
                'province_id' => 32,
                'name' => '重庆艺术工程职业学院',
            ),
            107 => 
            array (
                'id' => 3358,
                'province_id' => 14,
                'name' => '【共建频道】长春中医药大学',
            ),
            108 => 
            array (
                'id' => 3360,
                'province_id' => 23,
                'name' => '【共建频道】西北农林科技大学',
            ),
            109 => 
            array (
                'id' => 3362,
                'province_id' => 32,
                'name' => '【共建频道】重庆工业职业技术学院',
            ),
            110 => 
            array (
                'id' => 3364,
                'province_id' => 10,
                'name' => '开封文化艺术职业学院',
            ),
            111 => 
            array (
                'id' => 3366,
                'province_id' => 13,
                'name' => '【共建频道】长沙民政职业技术学院',
            ),
            112 => 
            array (
                'id' => 3368,
                'province_id' => 1,
                'name' => '合肥职业技术学院',
            ),
            113 => 
            array (
                'id' => 3370,
                'province_id' => 10,
                'name' => '【共建频道】郑州信息科技职业学院',
            ),
            114 => 
            array (
                'id' => 3372,
                'province_id' => 25,
                'name' => '四川汽车职业技术学院',
            ),
            115 => 
            array (
                'id' => 3374,
                'province_id' => 13,
                'name' => '湖南警察学院',
            ),
            116 => 
            array (
                'id' => 3376,
                'province_id' => 13,
                'name' => '【共建频道】湖南警察学院',
            ),
            117 => 
            array (
                'id' => 3378,
                'province_id' => 21,
                'name' => '【共建频道】山东商业职业技术学院',
            ),
            118 => 
            array (
                'id' => 3384,
                'province_id' => 13,
                'name' => '【共建频道】长沙理工大学',
            ),
            119 => 
            array (
                'id' => 3386,
                'province_id' => 21,
                'name' => '山东电子职业技术学院',
            ),
            120 => 
            array (
                'id' => 3388,
                'province_id' => 5,
                'name' => '【共建频道】广东药学院',
            ),
            121 => 
            array (
                'id' => 3390,
                'province_id' => 8,
                'name' => '【共建频道】海口经济学院',
            ),
            122 => 
            array (
                'id' => 3392,
                'province_id' => 3,
                'name' => '泉州幼儿师范高等专科学校',
            ),
            123 => 
            array (
                'id' => 3394,
                'province_id' => 22,
                'name' => '【共建频道】太原理工大学',
            ),
            124 => 
            array (
                'id' => 3396,
                'province_id' => 5,
                'name' => '【共建频道】广东技术师范学院',
            ),
            125 => 
            array (
                'id' => 3398,
                'province_id' => 24,
                'name' => '上海民航职业技术学院',
            ),
            126 => 
            array (
                'id' => 3400,
                'province_id' => 5,
                'name' => '广东环境保护工程职业学院',
            ),
            127 => 
            array (
                'id' => 3402,
                'province_id' => 6,
                'name' => '广西幼儿师范高等专科学校',
            ),
            128 => 
            array (
                'id' => 3404,
                'province_id' => 15,
                'name' => '江苏第二师范学院',
            ),
            129 => 
            array (
                'id' => 3406,
                'province_id' => 17,
                'name' => '辽宁科技学院',
            ),
            130 => 
            array (
                'id' => 3408,
                'province_id' => 21,
                'name' => '山东轻工职业学院',
            ),
            131 => 
            array (
                'id' => 3410,
                'province_id' => 16,
                'name' => '江西医学高等专科学校',
            ),
            132 => 
            array (
                'id' => 3412,
                'province_id' => 17,
                'name' => '辽宁装备制造职业技术学院',
            ),
            133 => 
            array (
                'id' => 3414,
                'province_id' => 17,
                'name' => '辽宁地质工程职业学院',
            ),
            134 => 
            array (
                'id' => 3416,
                'province_id' => 9,
                'name' => '石家庄幼儿师范高等专科学校',
            ),
            135 => 
            array (
                'id' => 3418,
                'province_id' => 25,
                'name' => '川北幼儿师范高等专科学校',
            ),
            136 => 
            array (
                'id' => 3422,
                'province_id' => 1,
                'name' => '桐城师范高等专科学校',
            ),
            137 => 
            array (
                'id' => 3424,
                'province_id' => 3,
                'name' => '福建教育学院',
            ),
            138 => 
            array (
                'id' => 3426,
                'province_id' => 3,
                'name' => '厦门南洋职业学院',
            ),
            139 => 
            array (
                'id' => 3428,
                'province_id' => 1,
                'name' => '合肥财经职业学院',
            ),
            140 => 
            array (
                'id' => 3430,
                'province_id' => 9,
                'name' => '泊头职业学院',
            ),
            141 => 
            array (
                'id' => 3432,
                'province_id' => 32,
                'name' => '重庆公共运输职业学院',
            ),
            142 => 
            array (
                'id' => 3434,
                'province_id' => 15,
                'name' => '江苏建筑职业技术学院',
            ),
            143 => 
            array (
                'id' => 3436,
                'province_id' => 18,
                'name' => '内蒙古广播电视大学',
            ),
            144 => 
            array (
                'id' => 3438,
                'province_id' => 18,
                'name' => '乌兰察布医学高等专科学校',
            ),
            145 => 
            array (
                'id' => 3440,
                'province_id' => 3,
                'name' => '漳州卫生职业学院',
            ),
            146 => 
            array (
                'id' => 3442,
                'province_id' => 7,
                'name' => '贵州理工学院',
            ),
            147 => 
            array (
                'id' => 3444,
                'province_id' => 11,
                'name' => '哈尔滨应用职业技术学院',
            ),
            148 => 
            array (
                'id' => 3446,
                'province_id' => 27,
                'name' => '【食文化】天津科技大学',
            ),
            149 => 
            array (
                'id' => 3448,
                'province_id' => 25,
                'name' => '【共建频道】四川电影电视职业学院',
            ),
            150 => 
            array (
                'id' => 3450,
                'province_id' => 25,
                'name' => '四川电影电视学院',
            ),
            151 => 
            array (
                'id' => 3452,
                'province_id' => 32,
                'name' => '长江师范学院',
            ),
            152 => 
            array (
                'id' => 3454,
                'province_id' => 5,
                'name' => '中山职业技术学院',
            ),
            153 => 
            array (
                'id' => 3456,
                'province_id' => 10,
                'name' => '郑州城市职业学院',
            ),
            154 => 
            array (
                'id' => 3458,
                'province_id' => 31,
                'name' => '浙江特殊教育职业学院',
            ),
            155 => 
            array (
                'id' => 3460,
                'province_id' => 10,
                'name' => '洛阳职业技术学院',
            ),
            156 => 
            array (
                'id' => 3462,
                'province_id' => 10,
                'name' => '新乡学院',
            ),
            157 => 
            array (
                'id' => 3464,
                'province_id' => 5,
                'name' => '广东创新科技职业学院',
            ),
            158 => 
            array (
                'id' => 3466,
                'province_id' => 5,
                'name' => '广东省技师学院',
            ),
            159 => 
            array (
                'id' => 3468,
                'province_id' => 3,
                'name' => '福建幼儿师范高等专科学校',
            ),
            160 => 
            array (
                'id' => 3470,
                'province_id' => 24,
                'name' => '中华职业学校',
            ),
            161 => 
            array (
                'id' => 3472,
                'province_id' => 5,
                'name' => '广东外语艺术职业学院',
            ),
            162 => 
            array (
                'id' => 3474,
                'province_id' => 10,
                'name' => '河南林业职业学院',
            ),
            163 => 
            array (
                'id' => 3476,
                'province_id' => 31,
                'name' => '浙江邮电职业技术学院',
            ),
            164 => 
            array (
                'id' => 3478,
                'province_id' => 22,
                'name' => '山西轻工职业技术学院',
            ),
            165 => 
            array (
                'id' => 3480,
                'province_id' => 31,
                'name' => '浙江外国语学院',
            ),
            166 => 
            array (
                'id' => 3482,
                'province_id' => 16,
                'name' => '【共建频道】华东交通大学',
            ),
            167 => 
            array (
                'id' => 3484,
                'province_id' => 16,
                'name' => '宜春幼儿师范高等专科学校',
            ),
            168 => 
            array (
                'id' => 3486,
                'province_id' => 3,
                'name' => '泉州工艺美术职业学院',
            ),
            169 => 
            array (
                'id' => 3488,
                'province_id' => 15,
                'name' => '苏州卫生职业技术学院',
            ),
            170 => 
            array (
                'id' => 3490,
                'province_id' => 22,
                'name' => '阳泉师范高等专科学校',
            ),
            171 => 
            array (
                'id' => 3492,
                'province_id' => 18,
                'name' => '鄂尔多斯职业学院',
            ),
            172 => 
            array (
                'id' => 3494,
                'province_id' => 1,
                'name' => '黄山职业技术学院',
            ),
            173 => 
            array (
                'id' => 3496,
                'province_id' => 27,
                'name' => '天津广播电视大学',
            ),
            174 => 
            array (
                'id' => 3498,
                'province_id' => 1,
                'name' => '安徽黄梅戏艺术职业学院',
            ),
            175 => 
            array (
                'id' => 3500,
                'province_id' => 11,
                'name' => '佳木斯职业学院',
            ),
            176 => 
            array (
                'id' => 3504,
                'province_id' => 15,
                'name' => '江苏海事职业技术学院',
            ),
            177 => 
            array (
                'id' => 3506,
                'province_id' => 17,
                'name' => '大连装备制造职业技术学院',
            ),
            178 => 
            array (
                'id' => 3508,
                'province_id' => 23,
                'name' => '榆林职业技术学院',
            ),
            179 => 
            array (
                'id' => 3510,
                'province_id' => 30,
                'name' => '昆明医科大学海源学院',
            ),
            180 => 
            array (
                'id' => 3512,
                'province_id' => 15,
                'name' => '徐州幼儿师范高等专科学校',
            ),
            181 => 
            array (
                'id' => 3514,
                'province_id' => 13,
                'name' => '【共建频道】中南林业科技大学',
            ),
            182 => 
            array (
                'id' => 3516,
                'province_id' => 4,
                'name' => '白银矿冶职业技术学院',
            ),
            183 => 
            array (
                'id' => 3518,
                'province_id' => 32,
                'name' => '重庆文化艺术职业学院',
            ),
            184 => 
            array (
                'id' => 3520,
                'province_id' => 18,
                'name' => '阿拉善职业技术学院',
            ),
            185 => 
            array (
                'id' => 3522,
                'province_id' => 1,
                'name' => '马鞍山职业技术学院',
            ),
            186 => 
            array (
                'id' => 3524,
                'province_id' => 3,
                'name' => '宁德职业技术学院',
            ),
            187 => 
            array (
                'id' => 3526,
                'province_id' => 10,
                'name' => '河南教育学院',
            ),
            188 => 
            array (
                'id' => 3528,
                'province_id' => 17,
                'name' => '辽宁省交通高等专科学校',
            ),
            189 => 
            array (
                'id' => 3530,
                'province_id' => 5,
                'name' => '广州华夏职业学院',
            ),
            190 => 
            array (
                'id' => 3532,
                'province_id' => 6,
                'name' => '广西培贤国际职业学院',
            ),
            191 => 
            array (
                'id' => 3534,
                'province_id' => 22,
                'name' => '山西老区职业技术学院',
            ),
            192 => 
            array (
                'id' => 3536,
                'province_id' => 13,
                'name' => '长沙卫生职业学院',
            ),
            193 => 
            array (
                'id' => 3538,
                'province_id' => 25,
                'name' => '四川护理职业学院',
            ),
            194 => 
            array (
                'id' => 3540,
                'province_id' => 25,
                'name' => '民办四川天一学院',
            ),
            195 => 
            array (
                'id' => 3542,
                'province_id' => 13,
                'name' => '湖南高尔夫旅游职业学院',
            ),
            196 => 
            array (
                'id' => 3544,
                'province_id' => 5,
                'name' => '广州东华职业学院',
            ),
            197 => 
            array (
                'id' => 3546,
                'province_id' => 10,
                'name' => '河南工业和信息化职业学院',
            ),
            198 => 
            array (
                'id' => 3548,
                'province_id' => 22,
                'name' => '山西大学商务学院',
            ),
            199 => 
            array (
                'id' => 3550,
                'province_id' => 3,
                'name' => '漳州科技职业学院',
            ),
            200 => 
            array (
                'id' => 3552,
                'province_id' => 2,
                'name' => '北京经济管理职业学院',
            ),
            201 => 
            array (
                'id' => 3554,
                'province_id' => 1,
                'name' => '合肥幼儿师范高等专科学校',
            ),
            202 => 
            array (
                'id' => 3555,
                'province_id' => 13,
                'name' => '湖南电气职业技术学院',
            ),
            203 => 
            array (
                'id' => 3557,
                'province_id' => 5,
                'name' => '北京师范大学-香港浸会大学联合国际学院',
            ),
            204 => 
            array (
                'id' => 3559,
                'province_id' => 17,
                'name' => '营口理工学院',
            ),
            205 => 
            array (
                'id' => 3561,
                'province_id' => 22,
                'name' => '山西经贸职业学院',
            ),
            206 => 
            array (
                'id' => 3563,
                'province_id' => 24,
                'name' => '上海医药高等专科学校',
            ),
            207 => 
            array (
                'id' => 3565,
                'province_id' => 30,
                'name' => '大理农林职业技术学院',
            ),
            208 => 
            array (
                'id' => 3567,
                'province_id' => 2,
                'name' => '高等教育出版社',
            ),
            209 => 
            array (
                'id' => 3569,
                'province_id' => 17,
                'name' => '沈阳工学院',
            ),
            210 => 
            array (
                'id' => 3571,
                'province_id' => 25,
                'name' => '【创客空间】电子科技大学',
            ),
            211 => 
            array (
                'id' => 3573,
                'province_id' => 27,
                'name' => '天津医科大学临床医学院',
            ),
            212 => 
            array (
                'id' => 3575,
                'province_id' => 32,
                'name' => '重庆幼儿高等师范专科学校',
            ),
            213 => 
            array (
                'id' => 3577,
                'province_id' => 15,
                'name' => '苏州信息职业技术学院',
            ),
            214 => 
            array (
                'id' => 3579,
                'province_id' => 16,
                'name' => '江西水利职业学院',
            ),
            215 => 
            array (
                'id' => 3581,
                'province_id' => 32,
                'name' => '重庆电信职业学院',
            ),
            216 => 
            array (
                'id' => 3583,
                'province_id' => 27,
                'name' => '天津工艺美术职业学院',
            ),
            217 => 
            array (
                'id' => 3585,
                'province_id' => 10,
                'name' => '驻马店职业技术学院',
            ),
            218 => 
            array (
                'id' => 3587,
                'province_id' => 22,
                'name' => '运城职业技术学院',
            ),
            219 => 
            array (
                'id' => 3589,
                'province_id' => 32,
                'name' => '重庆能源职业学院',
            ),
            220 => 
            array (
                'id' => 3591,
                'province_id' => 30,
                'name' => '昆明艺术职业学院',
            ),
            221 => 
            array (
                'id' => 3593,
                'province_id' => 7,
                'name' => '铜仁幼儿师范高等专科学校',
            ),
            222 => 
            array (
                'id' => 3595,
                'province_id' => 25,
                'name' => '四川幼儿师范高等专科学校',
            ),
            223 => 
            array (
                'id' => 3597,
                'province_id' => 10,
                'name' => '洛阳科技职业学院',
            ),
            224 => 
            array (
                'id' => 3599,
                'province_id' => 31,
                'name' => '浙江农业商贸职业学院',
            ),
            225 => 
            array (
                'id' => 3601,
                'province_id' => 10,
                'name' => '许昌电气职业学院',
            ),
            226 => 
            array (
                'id' => 3603,
                'province_id' => 20,
                'name' => '青海广播电视大学',
            ),
            227 => 
            array (
                'id' => 3605,
                'province_id' => 29,
                'name' => '新疆师范高等专科学校',
            ),
            228 => 
            array (
                'id' => 3607,
                'province_id' => 10,
                'name' => '郑州幼儿师范高等专科学校',
            ),
            229 => 
            array (
                'id' => 3609,
                'province_id' => 2,
                'name' => '中国科学院大学',
            ),
            230 => 
            array (
                'id' => 3611,
                'province_id' => 27,
                'name' => '天津天狮学院',
            ),
            231 => 
            array (
                'id' => 3613,
                'province_id' => 27,
                'name' => '天津商务职业学院',
            ),
            232 => 
            array (
                'id' => 3615,
                'province_id' => 27,
                'name' => '天津艺术职业学院',
            ),
            233 => 
            array (
                'id' => 3617,
                'province_id' => 27,
                'name' => '天津广播影视职业学院',
            ),
            234 => 
            array (
                'id' => 3619,
                'province_id' => 22,
                'name' => '山西职业技术学院',
            ),
            235 => 
            array (
                'id' => 3621,
                'province_id' => 22,
                'name' => '山西同文职业技术学院',
            ),
            236 => 
            array (
                'id' => 3623,
                'province_id' => 22,
                'name' => '运城幼儿师范高等专科学校',
            ),
            237 => 
            array (
                'id' => 3625,
                'province_id' => 22,
                'name' => '朔州职业技术学院',
            ),
            238 => 
            array (
                'id' => 3627,
                'province_id' => 22,
                'name' => '山西应用科技学院',
            ),
            239 => 
            array (
                'id' => 3631,
                'province_id' => 22,
                'name' => '山西工程技术学院',
            ),
            240 => 
            array (
                'id' => 3633,
                'province_id' => 22,
                'name' => '晋中师范高等专科学校',
            ),
            241 => 
            array (
                'id' => 3635,
                'province_id' => 22,
                'name' => '山西青年职业学院',
            ),
            242 => 
            array (
                'id' => 3637,
                'province_id' => 22,
                'name' => '运城护理职业学院',
            ),
            243 => 
            array (
                'id' => 3639,
                'province_id' => 22,
                'name' => '运城师范高等专科专科学校',
            ),
            244 => 
            array (
                'id' => 3641,
                'province_id' => 22,
                'name' => '朔州师范高等专科学校',
            ),
            245 => 
            array (
                'id' => 3643,
                'province_id' => 22,
                'name' => '吕梁职业技术学院',
            ),
            246 => 
            array (
                'id' => 3645,
                'province_id' => 31,
                'name' => '浙江农林大学',
            ),
            247 => 
            array (
                'id' => 3647,
                'province_id' => 31,
                'name' => '浙江树人大学',
            ),
            248 => 
            array (
                'id' => 3649,
                'province_id' => 18,
                'name' => '集宁师范学院',
            ),
            249 => 
            array (
                'id' => 3651,
                'province_id' => 18,
                'name' => '呼和浩特民族学院',
            ),
            250 => 
            array (
                'id' => 3653,
                'province_id' => 18,
                'name' => '内蒙古艺术学院',
            ),
            251 => 
            array (
                'id' => 3655,
                'province_id' => 18,
                'name' => '鄂尔多斯应用技术学院',
            ),
            252 => 
            array (
                'id' => 3657,
                'province_id' => 18,
                'name' => '内蒙古科技职业学院',
            ),
            253 => 
            array (
                'id' => 3659,
                'province_id' => 18,
                'name' => '内蒙古北方职业技术学院',
            ),
            254 => 
            array (
                'id' => 3661,
                'province_id' => 18,
                'name' => '赤峰职业技术学院',
            ),
            255 => 
            array (
                'id' => 3663,
                'province_id' => 18,
                'name' => '包头铁道职业技术学院',
            ),
            256 => 
            array (
                'id' => 3665,
                'province_id' => 18,
                'name' => '内蒙古工业职业学院',
            ),
            257 => 
            array (
                'id' => 3667,
                'province_id' => 18,
                'name' => '满洲里俄语职业学院',
            ),
            258 => 
            array (
                'id' => 3669,
                'province_id' => 18,
                'name' => '内蒙古能源职业学院',
            ),
            259 => 
            array (
                'id' => 3671,
                'province_id' => 18,
                'name' => '内蒙古美术职业学院',
            ),
            260 => 
            array (
                'id' => 3673,
                'province_id' => 18,
                'name' => '内蒙古民族幼儿师范高等专科学校',
            ),
            261 => 
            array (
                'id' => 3675,
                'province_id' => 18,
                'name' => '鄂尔多斯生态环境职业学院',
            ),
            262 => 
            array (
                'id' => 3677,
                'province_id' => 18,
                'name' => '扎兰屯职业学院',
            ),
            263 => 
            array (
                'id' => 3679,
                'province_id' => 29,
                'name' => '新疆大学科学技术学院',
            ),
            264 => 
            array (
                'id' => 3681,
                'province_id' => 29,
                'name' => '新疆能源职业技术学院',
            ),
            265 => 
            array (
                'id' => 3683,
                'province_id' => 29,
                'name' => '新疆体育职业技术学院',
            ),
            266 => 
            array (
                'id' => 3685,
                'province_id' => 29,
                'name' => '新疆应用职业技术学院',
            ),
            267 => 
            array (
                'id' => 3687,
                'province_id' => 29,
                'name' => '新疆铁道职业技术学院',
            ),
            268 => 
            array (
                'id' => 3689,
                'province_id' => 29,
                'name' => '新疆生产建设兵团兴新职业技术学院',
            ),
            269 => 
            array (
                'id' => 3691,
                'province_id' => 29,
                'name' => '哈密职业技术学院',
            ),
            270 => 
            array (
                'id' => 3693,
                'province_id' => 29,
                'name' => '新疆科技职业技术学院',
            ),
            271 => 
            array (
                'id' => 3695,
                'province_id' => 17,
                'name' => '沈阳化工大学',
            ),
            272 => 
            array (
                'id' => 3697,
                'province_id' => 17,
                'name' => '辽宁警察学院',
            ),
            273 => 
            array (
                'id' => 3699,
                'province_id' => 17,
                'name' => '大连财经学院',
            ),
            274 => 
            array (
                'id' => 3701,
                'province_id' => 17,
                'name' => '辽宁何氏医学院',
            ),
            275 => 
            array (
                'id' => 3703,
                'province_id' => 17,
                'name' => '辽宁轨道交通职业学院',
            ),
            276 => 
            array (
                'id' => 3705,
                'province_id' => 17,
                'name' => '辽河石油职业技术学院',
            ),
            277 => 
            array (
                'id' => 3707,
                'province_id' => 17,
                'name' => '辽宁铁道职业技术学院',
            ),
            278 => 
            array (
                'id' => 3709,
                'province_id' => 17,
                'name' => '大连航运职业技术学院',
            ),
            279 => 
            array (
                'id' => 3711,
                'province_id' => 17,
                'name' => '大连汽车职业技术学院',
            ),
            280 => 
            array (
                'id' => 3713,
                'province_id' => 17,
                'name' => '辽宁现代服务职业技术学院',
            ),
            281 => 
            array (
                'id' => 3715,
                'province_id' => 27,
                'name' => '天津市职业大学',
            ),
            282 => 
            array (
                'id' => 3717,
                'province_id' => 17,
                'name' => '辽宁冶金职业技术学院',
            ),
            283 => 
            array (
                'id' => 3719,
                'province_id' => 17,
                'name' => '辽宁工程职业学院',
            ),
            284 => 
            array (
                'id' => 3721,
                'province_id' => 17,
                'name' => '辽宁医药职业学院',
            ),
            285 => 
            array (
                'id' => 3723,
                'province_id' => 17,
                'name' => '铁岭卫生职业学院',
            ),
            286 => 
            array (
                'id' => 3725,
                'province_id' => 17,
                'name' => '沈阳北软信息职业技术学院',
            ),
            287 => 
            array (
                'id' => 3727,
                'province_id' => 17,
                'name' => '辽宁政法职业学院',
            ),
            288 => 
            array (
                'id' => 3729,
                'province_id' => 17,
                'name' => '辽宁民族师范高等专科学校',
            ),
            289 => 
            array (
                'id' => 3731,
                'province_id' => 17,
                'name' => '辽宁轻工职业学院',
            ),
            290 => 
            array (
                'id' => 3733,
                'province_id' => 17,
                'name' => '辽宁水利职业学院',
            ),
            291 => 
            array (
                'id' => 3735,
                'province_id' => 17,
                'name' => '辽宁特殊教育师范高等专科学校',
            ),
            292 => 
            array (
                'id' => 3737,
                'province_id' => 14,
                'name' => '长春财经学院',
            ),
            293 => 
            array (
                'id' => 3739,
                'province_id' => 14,
                'name' => '长春建筑学院',
            ),
            294 => 
            array (
                'id' => 3741,
                'province_id' => 14,
                'name' => '吉林工程职业学院',
            ),
            295 => 
            array (
                'id' => 3743,
                'province_id' => 14,
                'name' => '长白山职业技术学院',
            ),
            296 => 
            array (
                'id' => 3745,
                'province_id' => 14,
                'name' => '吉林科技职业技术学院',
            ),
            297 => 
            array (
                'id' => 3747,
                'province_id' => 14,
                'name' => '延边职业技术学院',
            ),
            298 => 
            array (
                'id' => 3749,
                'province_id' => 14,
                'name' => '吉林城市职业技术学院',
            ),
            299 => 
            array (
                'id' => 3751,
                'province_id' => 11,
                'name' => '黑龙江外国语学院',
            ),
            300 => 
            array (
                'id' => 3753,
                'province_id' => 25,
                'name' => '四川医科大学',
            ),
            301 => 
            array (
                'id' => 3755,
                'province_id' => 11,
                'name' => '黑龙江工程学院昆仑旅游学院',
            ),
            302 => 
            array (
                'id' => 3757,
                'province_id' => 11,
                'name' => '哈尔滨广厦学院',
            ),
            303 => 
            array (
                'id' => 3759,
                'province_id' => 11,
                'name' => '黑龙江职业学院',
            ),
            304 => 
            array (
                'id' => 3761,
                'province_id' => 25,
                'name' => '阿坝师范学院',
            ),
            305 => 
            array (
                'id' => 3763,
                'province_id' => 11,
                'name' => '哈尔滨江南职业技术学院',
            ),
            306 => 
            array (
                'id' => 3765,
                'province_id' => 25,
                'name' => '成都东软学院',
            ),
            307 => 
            array (
                'id' => 3767,
                'province_id' => 25,
                'name' => '成都信息工程大学银杏酒店管理学院',
            ),
            308 => 
            array (
                'id' => 3769,
                'province_id' => 11,
                'name' => '黑龙江旅游职业技术学院',
            ),
            309 => 
            array (
                'id' => 3771,
                'province_id' => 25,
                'name' => '成都文理学院',
            ),
            310 => 
            array (
                'id' => 3773,
                'province_id' => 11,
                'name' => '哈尔滨科学技术职业学院',
            ),
            311 => 
            array (
                'id' => 3775,
                'province_id' => 25,
                'name' => '四川工商学院',
            ),
            312 => 
            array (
                'id' => 3777,
                'province_id' => 25,
                'name' => '四川外国语大学成都学院',
            ),
            313 => 
            array (
                'id' => 3779,
                'province_id' => 11,
                'name' => '黑龙江护理高等专科学校',
            ),
            314 => 
            array (
                'id' => 3781,
                'province_id' => 25,
                'name' => '四川工业科技学院',
            ),
            315 => 
            array (
                'id' => 3783,
                'province_id' => 25,
                'name' => '四川文化艺术学院',
            ),
            316 => 
            array (
                'id' => 3785,
                'province_id' => 25,
                'name' => '成都师范学院',
            ),
            317 => 
            array (
                'id' => 3787,
                'province_id' => 11,
                'name' => '黑龙江冰雪体育职业学院',
            ),
            318 => 
            array (
                'id' => 3789,
                'province_id' => 11,
                'name' => '哈尔滨幼儿师范高等专科学校',
            ),
            319 => 
            array (
                'id' => 3791,
                'province_id' => 11,
                'name' => '齐齐哈尔理工职业学院',
            ),
            320 => 
            array (
                'id' => 3793,
                'province_id' => 11,
                'name' => '哈尔滨工程技术职业学院',
            ),
            321 => 
            array (
                'id' => 3795,
                'province_id' => 25,
                'name' => '四川长江职业学院',
            ),
            322 => 
            array (
                'id' => 3797,
                'province_id' => 25,
                'name' => '四川三河职业学院',
            ),
            323 => 
            array (
                'id' => 3799,
                'province_id' => 25,
                'name' => '四川卫生康复职业学院',
            ),
            324 => 
            array (
                'id' => 3801,
                'province_id' => 25,
                'name' => '巴中职业技术学院',
            ),
            325 => 
            array (
                'id' => 3803,
                'province_id' => 25,
                'name' => '四川希望汽车职业学院',
            ),
            326 => 
            array (
                'id' => 3805,
                'province_id' => 25,
                'name' => '四川电子机械职业技术学院',
            ),
            327 => 
            array (
                'id' => 3807,
                'province_id' => 25,
                'name' => '四川文轩职业学院',
            ),
            328 => 
            array (
                'id' => 3809,
                'province_id' => 25,
                'name' => '川南幼儿师范高等专科学校',
            ),
            329 => 
            array (
                'id' => 3811,
                'province_id' => 25,
                'name' => '成都工业职业技术学院',
            ),
            330 => 
            array (
                'id' => 3813,
                'province_id' => 25,
                'name' => '四川西南航空职业学院',
            ),
            331 => 
            array (
                'id' => 3815,
                'province_id' => 25,
                'name' => '成都工贸职业技术学院',
            ),
            332 => 
            array (
                'id' => 3817,
                'province_id' => 25,
                'name' => '四川应用技术职业学院',
            ),
            333 => 
            array (
                'id' => 3819,
                'province_id' => 24,
                'name' => '华东理工大学',
            ),
            334 => 
            array (
                'id' => 3821,
                'province_id' => 24,
                'name' => '上海健康医学院',
            ),
            335 => 
            array (
                'id' => 3823,
                'province_id' => 24,
                'name' => '上海对外经贸大学',
            ),
            336 => 
            array (
                'id' => 3825,
                'province_id' => 24,
                'name' => '上海兴伟学院',
            ),
            337 => 
            array (
                'id' => 3827,
                'province_id' => 24,
                'name' => '上海科技大学',
            ),
            338 => 
            array (
                'id' => 3829,
                'province_id' => 24,
                'name' => '上海纽约大学',
            ),
            339 => 
            array (
                'id' => 3831,
                'province_id' => 24,
                'name' => '上海工商职业技术学院',
            ),
            340 => 
            array (
                'id' => 3833,
                'province_id' => 24,
                'name' => '上海体育职业学院',
            ),
            341 => 
            array (
                'id' => 3835,
                'province_id' => 24,
                'name' => '上海健康职业技术学院',
            ),
            342 => 
            array (
                'id' => 3837,
                'province_id' => 23,
                'name' => '陕西中医药大学',
            ),
            343 => 
            array (
                'id' => 3839,
                'province_id' => 23,
                'name' => '陕西国际商贸学院',
            ),
            344 => 
            array (
                'id' => 3841,
                'province_id' => 23,
                'name' => '陕西服装工程学院',
            ),
            345 => 
            array (
                'id' => 3843,
                'province_id' => 23,
                'name' => '西安交通大学城市学院',
            ),
            346 => 
            array (
                'id' => 3845,
                'province_id' => 23,
                'name' => '西安城市建设职业学院',
            ),
            347 => 
            array (
                'id' => 3847,
                'province_id' => 23,
                'name' => '陕西工商职业学院',
            ),
            348 => 
            array (
                'id' => 3849,
                'province_id' => 23,
                'name' => '西安医学高等专科学校',
            ),
            349 => 
            array (
                'id' => 3851,
                'province_id' => 23,
                'name' => '陕西艺术职业学院',
            ),
            350 => 
            array (
                'id' => 3853,
                'province_id' => 15,
                'name' => '江苏理工学院',
            ),
            351 => 
            array (
                'id' => 3855,
                'province_id' => 15,
                'name' => '南通理工学院',
            ),
            352 => 
            array (
                'id' => 3857,
                'province_id' => 15,
                'name' => '江苏大学京江学院',
            ),
            353 => 
            array (
                'id' => 3859,
                'province_id' => 15,
                'name' => '西交利物浦大学',
            ),
            354 => 
            array (
                'id' => 3861,
                'province_id' => 15,
                'name' => '太湖创意职业技术学院',
            ),
            355 => 
            array (
                'id' => 3863,
                'province_id' => 15,
                'name' => '苏州健雄职业技术学院',
            ),
            356 => 
            array (
                'id' => 3865,
                'province_id' => 15,
                'name' => '南京机电职业技术学院',
            ),
            357 => 
            array (
                'id' => 3867,
                'province_id' => 15,
                'name' => '南京旅游职业学院',
            ),
            358 => 
            array (
                'id' => 3869,
                'province_id' => 15,
                'name' => '宿迁泽达职业技术学院',
            ),
            359 => 
            array (
                'id' => 3871,
                'province_id' => 15,
                'name' => '苏州工业园区服务外包职业学院',
            ),
            360 => 
            array (
                'id' => 3873,
                'province_id' => 15,
                'name' => '徐州生物工程职业技术学院',
            ),
            361 => 
            array (
                'id' => 3875,
                'province_id' => 15,
                'name' => '江苏商贸职业学院',
            ),
            362 => 
            array (
                'id' => 3877,
                'province_id' => 15,
                'name' => '南通师范高等专科学校',
            ),
            363 => 
            array (
                'id' => 3879,
                'province_id' => 15,
                'name' => '扬州中瑞酒店职业学院',
            ),
            364 => 
            array (
                'id' => 3881,
                'province_id' => 15,
                'name' => '江苏财会职业学院',
            ),
            365 => 
            array (
                'id' => 3883,
                'province_id' => 15,
                'name' => '江苏城乡建设职业学院',
            ),
            366 => 
            array (
                'id' => 3885,
                'province_id' => 15,
                'name' => '昆山杜克大学',
            ),
            367 => 
            array (
                'id' => 3887,
                'province_id' => 2,
                'name' => '北京第二外国语学院中瑞酒店管理学院',
            ),
            368 => 
            array (
                'id' => 3889,
                'province_id' => 2,
                'name' => '中国科学院大学',
            ),
            369 => 
            array (
                'id' => 3891,
                'province_id' => 2,
                'name' => '北京现代职业技术学院',
            ),
            370 => 
            array (
                'id' => 3893,
                'province_id' => 2,
                'name' => '北京劳动保障职业学院',
            ),
            371 => 
            array (
                'id' => 3895,
                'province_id' => 2,
                'name' => '北京社会管理职业学院',
            ),
            372 => 
            array (
                'id' => 3897,
                'province_id' => 2,
                'name' => '北京艺术传媒职业学院',
            ),
            373 => 
            array (
                'id' => 3899,
                'province_id' => 2,
                'name' => '北京体育职业学院',
            ),
            374 => 
            array (
                'id' => 3901,
                'province_id' => 2,
                'name' => '北京卫生职业学院',
            ),
            375 => 
            array (
                'id' => 3903,
                'province_id' => 1,
                'name' => '民办合肥滨湖职业技术学院',
            ),
            376 => 
            array (
                'id' => 3905,
                'province_id' => 1,
                'name' => '安徽公安职业学院',
            ),
            377 => 
            array (
                'id' => 3907,
                'province_id' => 1,
                'name' => '安庆医药高等专科学校',
            ),
            378 => 
            array (
                'id' => 3909,
                'province_id' => 1,
                'name' => '安徽涉外经济职业学院',
            ),
            379 => 
            array (
                'id' => 3911,
                'province_id' => 1,
                'name' => '合肥共达职业技术学院',
            ),
            380 => 
            array (
                'id' => 3913,
                'province_id' => 1,
                'name' => '蚌埠经济技术职业学院',
            ),
            381 => 
            array (
                'id' => 3915,
                'province_id' => 1,
                'name' => '民办安徽旅游职业学院',
            ),
            382 => 
            array (
                'id' => 3917,
                'province_id' => 1,
                'name' => '安徽现代信息工程职业学院',
            ),
            383 => 
            array (
                'id' => 3919,
                'province_id' => 1,
                'name' => '安徽矿业职业技术学院',
            ),
            384 => 
            array (
                'id' => 3921,
                'province_id' => 1,
                'name' => '滁州城市中职业学院',
            ),
            385 => 
            array (
                'id' => 3923,
                'province_id' => 1,
                'name' => '安徽汽车职业技术学院',
            ),
            386 => 
            array (
                'id' => 3925,
                'province_id' => 1,
                'name' => '皖西卫生职业学院',
            ),
            387 => 
            array (
                'id' => 3927,
                'province_id' => 1,
                'name' => '安徽长江职业学院',
            ),
            388 => 
            array (
                'id' => 3929,
                'province_id' => 1,
                'name' => '安徽扬子职业技术学院',
            ),
            389 => 
            array (
                'id' => 3931,
                'province_id' => 1,
                'name' => '安徽人口职业学院',
            ),
            390 => 
            array (
                'id' => 3933,
                'province_id' => 1,
                'name' => '合肥科技职业学院',
            ),
            391 => 
            array (
                'id' => 3935,
                'province_id' => 1,
                'name' => '皖北卫生职业学院',
            ),
            392 => 
            array (
                'id' => 3937,
                'province_id' => 1,
                'name' => '阜阳幼儿师范高等专科学校',
            ),
            393 => 
            array (
                'id' => 3939,
                'province_id' => 3,
                'name' => '福建船政交通职业学院',
            ),
            394 => 
            array (
                'id' => 3941,
                'province_id' => 3,
                'name' => '福建生物工程职业技术学院',
            ),
            395 => 
            array (
                'id' => 3943,
                'province_id' => 3,
                'name' => '福建体育职业技术学院',
            ),
            396 => 
            array (
                'id' => 3945,
                'province_id' => 3,
                'name' => '厦门东海职业技术学院',
            ),
            397 => 
            array (
                'id' => 3947,
                'province_id' => 3,
                'name' => '漳州理工职业学院',
            ),
            398 => 
            array (
                'id' => 3949,
                'province_id' => 3,
                'name' => '泉州海洋职业学院',
            ),
            399 => 
            array (
                'id' => 3951,
                'province_id' => 3,
                'name' => '泉州轻工职业学院',
            ),
            400 => 
            array (
                'id' => 3953,
                'province_id' => 3,
                'name' => '厦门安防科技职业学院',
            ),
            401 => 
            array (
                'id' => 3955,
                'province_id' => 3,
                'name' => '闽江师范高等专科学校',
            ),
            402 => 
            array (
                'id' => 3957,
                'province_id' => 3,
                'name' => '泉州工程职业技术学院',
            ),
            403 => 
            array (
                'id' => 3959,
                'province_id' => 4,
                'name' => '甘肃钢铁职业技术学院',
            ),
            404 => 
            array (
                'id' => 3961,
                'province_id' => 4,
                'name' => '甘肃有色冶金职业技术学院',
            ),
            405 => 
            array (
                'id' => 3963,
                'province_id' => 4,
                'name' => '甘肃卫生职业学院',
            ),
            406 => 
            array (
                'id' => 3965,
                'province_id' => 4,
                'name' => '兰州科技职业学院',
            ),
            407 => 
            array (
                'id' => 3967,
                'province_id' => 4,
                'name' => '庆阳职业技术学院',
            ),
            408 => 
            array (
                'id' => 3969,
                'province_id' => 4,
                'name' => '临夏现代职业学院',
            ),
            409 => 
            array (
                'id' => 3971,
                'province_id' => 20,
                'name' => '西宁城市职业技术学院',
            ),
            410 => 
            array (
                'id' => 3973,
                'province_id' => 20,
                'name' => '青海高等职业技术学院',
            ),
            411 => 
            array (
                'id' => 3975,
                'province_id' => 19,
                'name' => '银川能源学院',
            ),
            412 => 
            array (
                'id' => 3977,
                'province_id' => 19,
                'name' => '宁夏防沙治沙职业技术学院',
            ),
            413 => 
            array (
                'id' => 3979,
                'province_id' => 19,
                'name' => '宁夏幼儿师范高等专科学校',
            ),
            414 => 
            array (
                'id' => 3981,
                'province_id' => 19,
                'name' => '宁夏艺术职业学院',
            ),
            415 => 
            array (
                'id' => 3983,
                'province_id' => 29,
                'name' => '新疆职业大学',
            ),
            416 => 
            array (
                'id' => 3985,
                'province_id' => 5,
                'name' => '广东东软学院',
            ),
            417 => 
            array (
                'id' => 3987,
                'province_id' => 5,
                'name' => '广东理工学院',
            ),
            418 => 
            array (
                'id' => 3989,
                'province_id' => 5,
                'name' => '南方科技大学',
            ),
            419 => 
            array (
                'id' => 3991,
                'province_id' => 5,
                'name' => '香港中文大学（深圳）',
            ),
            420 => 
            array (
                'id' => 3993,
                'province_id' => 5,
                'name' => '广州珠江职业技术学院',
            ),
            421 => 
            array (
                'id' => 3995,
                'province_id' => 5,
                'name' => '广东文理职业学院',
            ),
            422 => 
            array (
                'id' => 3997,
                'province_id' => 5,
                'name' => '广东南方职业学院',
            ),
            423 => 
            array (
                'id' => 3999,
                'province_id' => 5,
                'name' => '广州华商职业学院',
            ),
            424 => 
            array (
                'id' => 4001,
                'province_id' => 5,
                'name' => '广东青年职业学院',
            ),
            425 => 
            array (
                'id' => 4003,
                'province_id' => 5,
                'name' => '广东舞蹈戏剧职业学院',
            ),
            426 => 
            array (
                'id' => 4005,
                'province_id' => 5,
                'name' => '惠州卫生职业技术学院',
            ),
            427 => 
            array (
                'id' => 4007,
                'province_id' => 5,
                'name' => '广东信息工程职业学院',
            ),
            428 => 
            array (
                'id' => 4009,
                'province_id' => 5,
                'name' => '广东生态工程职业学院',
            ),
            429 => 
            array (
                'id' => 4011,
                'province_id' => 5,
                'name' => '惠州城市职业学院',
            ),
            430 => 
            array (
                'id' => 4013,
                'province_id' => 5,
                'name' => '广东碧桂园职业学院',
            ),
            431 => 
            array (
                'id' => 4015,
                'province_id' => 5,
                'name' => '公安边防部队高等专科学校',
            ),
            432 => 
            array (
                'id' => 4017,
                'province_id' => 6,
                'name' => '广西警察学院',
            ),
            433 => 
            array (
                'id' => 4019,
                'province_id' => 6,
                'name' => '广西金融职业技术学院',
            ),
            434 => 
            array (
                'id' => 4021,
                'province_id' => 6,
                'name' => '广西中远职业学院',
            ),
            435 => 
            array (
                'id' => 4023,
                'province_id' => 8,
                'name' => '三亚城市职业学院',
            ),
            436 => 
            array (
                'id' => 4025,
                'province_id' => 8,
                'name' => '海南科技职业学院',
            ),
            437 => 
            array (
                'id' => 4027,
                'province_id' => 7,
                'name' => '贵州工商职业学院',
            ),
            438 => 
            array (
                'id' => 4029,
                'province_id' => 7,
                'name' => '贵阳幼儿师范高等专科学校',
            ),
            439 => 
            array (
                'id' => 4031,
                'province_id' => 7,
                'name' => '黔南民族幼儿师范高等专科学校',
            ),
            440 => 
            array (
                'id' => 4033,
                'province_id' => 7,
                'name' => '毕节医学高等专科学校',
            ),
            441 => 
            array (
                'id' => 4035,
                'province_id' => 7,
                'name' => '贵州建设职业技术学院',
            ),
            442 => 
            array (
                'id' => 4037,
                'province_id' => 7,
                'name' => '毕节幼儿师范高等专科学校',
            ),
            443 => 
            array (
                'id' => 4039,
                'province_id' => 7,
                'name' => '贵州农业职业学院',
            ),
            444 => 
            array (
                'id' => 4041,
                'province_id' => 16,
                'name' => '江西枫林涉外经贸职业学院',
            ),
            445 => 
            array (
                'id' => 4043,
                'province_id' => 16,
                'name' => '南昌职业学院',
            ),
            446 => 
            array (
                'id' => 4045,
                'province_id' => 16,
                'name' => '江西新能源科技职业学院',
            ),
            447 => 
            array (
                'id' => 4047,
                'province_id' => 16,
                'name' => '江西冶金职业技术学院',
            ),
            448 => 
            array (
                'id' => 4049,
                'province_id' => 16,
                'name' => '江西传媒职业学院',
            ),
            449 => 
            array (
                'id' => 4051,
                'province_id' => 16,
                'name' => '江西工商职业技术学院',
            ),
            450 => 
            array (
                'id' => 4053,
                'province_id' => 16,
                'name' => '景德镇职业技术学院',
            ),
            451 => 
            array (
                'id' => 4055,
                'province_id' => 16,
                'name' => '共青科技职业学院',
            ),
            452 => 
            array (
                'id' => 4057,
                'province_id' => 16,
                'name' => '赣州师范高等专科学校',
            ),
            453 => 
            array (
                'id' => 4059,
                'province_id' => 16,
                'name' => '吉安职业技术学院',
            ),
            454 => 
            array (
                'id' => 4061,
                'province_id' => 16,
                'name' => '江西洪州职业学院',
            ),
            455 => 
            array (
                'id' => 4063,
                'province_id' => 16,
                'name' => '江西师范高等专科学校',
            ),
            456 => 
            array (
                'id' => 4065,
                'province_id' => 16,
                'name' => '南昌影视传播职业学院',
            ),
            457 => 
            array (
                'id' => 4067,
                'province_id' => 21,
                'name' => '山东财经大学东方学院',
            ),
            458 => 
            array (
                'id' => 4069,
                'province_id' => 21,
                'name' => '北京电影学院现代创意媒体学院',
            ),
            459 => 
            array (
                'id' => 4071,
                'province_id' => 21,
                'name' => '齐鲁师范学院',
            ),
            460 => 
            array (
                'id' => 4073,
                'province_id' => 21,
                'name' => '泰山职业技术学院',
            ),
            461 => 
            array (
                'id' => 4075,
                'province_id' => 21,
                'name' => '烟台汽车工程职业学院',
            ),
            462 => 
            array (
                'id' => 4077,
                'province_id' => 21,
                'name' => '山东司法警官职业学院',
            ),
            463 => 
            array (
                'id' => 4079,
                'province_id' => 21,
                'name' => '菏泽家政职业学院',
            ),
            464 => 
            array (
                'id' => 4081,
                'province_id' => 21,
                'name' => '临沂职业学院',
            ),
            465 => 
            array (
                'id' => 4083,
                'province_id' => 21,
                'name' => '济南护理职业学院',
            ),
            466 => 
            array (
                'id' => 4085,
                'province_id' => 21,
                'name' => '泰山护理职业学院',
            ),
            467 => 
            array (
                'id' => 4087,
                'province_id' => 21,
                'name' => '山东海事职业学院',
            ),
            468 => 
            array (
                'id' => 4089,
                'province_id' => 21,
                'name' => '潍坊护理职业学院',
            ),
            469 => 
            array (
                'id' => 4091,
                'province_id' => 21,
                'name' => '菏泽职业学院',
            ),
            470 => 
            array (
                'id' => 4093,
                'province_id' => 21,
                'name' => '山东艺术设计职业学院',
            ),
            471 => 
            array (
                'id' => 4095,
                'province_id' => 21,
                'name' => '威海海洋职业学院',
            ),
            472 => 
            array (
                'id' => 4097,
                'province_id' => 21,
                'name' => '山东特殊教育职业学院',
            ),
            473 => 
            array (
                'id' => 4099,
                'province_id' => 10,
                'name' => '河南水利与环境职业学院',
            ),
            474 => 
            array (
                'id' => 4101,
                'province_id' => 10,
                'name' => '河南检察职业学院',
            ),
            475 => 
            array (
                'id' => 4103,
                'province_id' => 10,
                'name' => '河南信息统计职业学院',
            ),
            476 => 
            array (
                'id' => 4105,
                'province_id' => 10,
                'name' => '郑州电力职业技术学院',
            ),
            477 => 
            array (
                'id' => 4107,
                'province_id' => 10,
                'name' => '周口科技职业学院',
            ),
            478 => 
            array (
                'id' => 4109,
                'province_id' => 10,
                'name' => '安阳职业技术学院',
            ),
            479 => 
            array (
                'id' => 4111,
                'province_id' => 10,
                'name' => '新乡职业技术学院',
            ),
            480 => 
            array (
                'id' => 4113,
                'province_id' => 10,
                'name' => '焦作工贸职业学院',
            ),
            481 => 
            array (
                'id' => 4115,
                'province_id' => 10,
                'name' => '许昌陶瓷职业学院',
            ),
            482 => 
            array (
                'id' => 4117,
                'province_id' => 10,
                'name' => '郑州理工职业学院',
            ),
            483 => 
            array (
                'id' => 4119,
                'province_id' => 10,
                'name' => '郑州信息工程职业学院',
            ),
            484 => 
            array (
                'id' => 4121,
                'province_id' => 10,
                'name' => '河南艺术职业学院',
            ),
            485 => 
            array (
                'id' => 4123,
                'province_id' => 10,
                'name' => '河南机电职业学院',
            ),
            486 => 
            array (
                'id' => 4125,
                'province_id' => 10,
                'name' => '南阳职业学院',
            ),
            487 => 
            array (
                'id' => 4127,
                'province_id' => 10,
                'name' => '安阳幼儿师范高等专科学校',
            ),
            488 => 
            array (
                'id' => 4129,
                'province_id' => 12,
                'name' => '武汉城市职业学院',
            ),
            489 => 
            array (
                'id' => 4131,
                'province_id' => 12,
                'name' => '黄冈科技职业学院',
            ),
            490 => 
            array (
                'id' => 4133,
                'province_id' => 12,
                'name' => '三峡电力职业学院',
            ),
            491 => 
            array (
                'id' => 4135,
                'province_id' => 12,
                'name' => '天门职业学院',
            ),
            492 => 
            array (
                'id' => 4137,
                'province_id' => 12,
                'name' => '湖北体育职业学院',
            ),
            493 => 
            array (
                'id' => 4139,
                'province_id' => 12,
                'name' => '襄阳汽车职业技术学院',
            ),
            494 => 
            array (
                'id' => 4141,
                'province_id' => 12,
                'name' => '湖北幼儿师范高等专科学校',
            ),
            495 => 
            array (
                'id' => 4143,
                'province_id' => 13,
                'name' => '湖南财经工业职业技术学院',
            ),
            496 => 
            array (
                'id' => 4145,
                'province_id' => 13,
                'name' => '湖南外国语职业学院',
            ),
            497 => 
            array (
                'id' => 4147,
                'province_id' => 13,
                'name' => '益阳医学高等专科学校',
            ),
            498 => 
            array (
                'id' => 4149,
                'province_id' => 13,
                'name' => '湖南都市职业学院',
            ),
            499 => 
            array (
                'id' => 4151,
                'province_id' => 13,
                'name' => '湖南电子科技职业学院',
            ),
        ));
        \DB::table('universities')->insert(array (
            0 => 
            array (
                'id' => 4153,
                'province_id' => 13,
                'name' => '湖南工商职业学院',
            ),
            1 => 
            array (
                'id' => 4155,
                'province_id' => 13,
                'name' => '湖南三一工业职业技术学院',
            ),
            2 => 
            array (
                'id' => 4157,
                'province_id' => 13,
                'name' => '湖南食品药品职业学院',
            ),
            3 => 
            array (
                'id' => 4159,
                'province_id' => 13,
                'name' => '湖南吉利汽车职业技术学院',
            ),
            4 => 
            array (
                'id' => 4161,
                'province_id' => 13,
                'name' => '湖南幼儿师范高等专科学校',
            ),
            5 => 
            array (
                'id' => 4163,
                'province_id' => 13,
                'name' => '湘南幼儿师范高等专科学校',
            ),
            6 => 
            array (
                'id' => 4165,
                'province_id' => 13,
                'name' => '湖南劳动人事职业学院',
            ),
            7 => 
            array (
                'id' => 4167,
                'province_id' => 15,
                'name' => '南京航空航天大学金城学院',
            ),
            8 => 
            array (
                'id' => 4169,
                'province_id' => 32,
                'name' => '【青春倡廉】重庆邮电大学',
            ),
            9 => 
            array (
                'id' => 4171,
                'province_id' => 31,
                'name' => '宁波教育学院',
            ),
            10 => 
            array (
                'id' => 4173,
                'province_id' => 9,
                'name' => '河北中医学院',
            ),
            11 => 
            array (
                'id' => 4175,
                'province_id' => 30,
                'name' => '昆明卫生职业学院',
            ),
            12 => 
            array (
                'id' => 4177,
                'province_id' => 21,
                'name' => '山东广播电视大学',
            ),
            13 => 
            array (
                'id' => 4179,
                'province_id' => 32,
                'name' => '重庆电讯职业学院',
            ),
            14 => 
            array (
                'id' => 4181,
                'province_id' => 15,
                'name' => '盐城幼儿师范高等专科学校',
            ),
            15 => 
            array (
                'id' => 4183,
                'province_id' => 30,
                'name' => '云南商务职业学院',
            ),
            16 => 
            array (
                'id' => 4185,
                'province_id' => 31,
                'name' => '温州肯恩大学',
            ),
            17 => 
            array (
                'id' => 4187,
                'province_id' => 31,
                'name' => '浙江同济科技职业学院',
            ),
        ));
        
        
    }
}
