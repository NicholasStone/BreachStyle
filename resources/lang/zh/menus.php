<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Menus Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used in menu items throughout the system.
    | Regardless where it is placed, a menu item can be listed here so it is easily
    | found in a intuitive way.
    |
    */

    'backend' => [
        'access' => [
            'title' => '权限管理',

            'roles' => [
                'all'        => '所有角色',
                'create'     => '创建新角色',
                'edit'       => '编辑角色',
                'management' => '管理角色',
                'main'       => '角色',
            ],

            'users' => [
                'all'             => '所有用户',
                'change-password' => '更改密码',
                'create'          => '创建新用户',
                'deactivated'     => '冻结用户',
                'deleted'         => '删除用户',
                'edit'            => '编辑用户',
                'main'            => '用户',
            ],
        ],

        'comments' => [
            'title' => '评论管理',
            ''
        ],

        'log-viewer' => [
            'main'      => '查看日志',
            'dashboard' => '仪表盘',
            'logs'      => '日志',
        ],

        'sidebar' => [
            'dashboard' => '仪表盘',
            'general'   => '全体',
            'settings'  => '首页设置',
        ],

        'verification' => [
            'main'        => '信息审核',
            'personal'    => '个体信息审核',
            'application' => '成果展示申请审核',
            'branch'      => '党支部信息审核',
        ],
    ],

    'language-picker' => [
        'language' => '语言',
        /**
         * Add the new language to this array.
         * The key should have the same language code as the folder name.
         * The string should be: 'Language-name-in-your-own-language (Language-name-in-English)'.
         * Be sure to add the new language in alphabetical order.
         */
        'langs'    => [
            'ar'    => 'Arabic',
            'da'    => 'Danish',
            'de'    => 'German',
            'en'    => 'English',
            'es'    => 'Spanish',
            'fr'    => 'French',
            'it'    => 'Italian',
            'pt-BR' => 'Brazilian Portuguese',
            'sv'    => 'Swedish',
            'zh'    => '简体中文',
        ],
    ],
];
