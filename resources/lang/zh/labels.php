<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Labels Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used in labels throughout the system.
    | Regardless where it is placed, a label can be listed here so it is easily
    | found in a intuitive way.
    |
    */

    'general' => [
        'all' => '全部',
        'yes' => '确认',
        'no' => '取消',
        'custom' => '自定义',
        'actions' => '操作',
        'buttons' => [
            'save' => '保存',
            'update' => '更新',
        ],
        'hide' => '隐藏',
        'none' => '无',
        'show' => '显示',
        'toggle_navigation' => 'Toggle Navigation',
    ],

    'backend' => [
        'access' => [
            'roles' => [
                'create' => '创建新角色',
                'edit' => '编辑角色',
                'management' => '管理角色',

                'table' => [
                    'number_of_users' => '用户人数',
                    'permissions' => '权限',
                    'role' => '角色',
                    'sort' => '排序',
                    'total' => '全部',
                ],
            ],

            'users' => [
                'active' => '激活用户',
                'all_permissions' => '全部权限',
                'change_password' => '修改密码',
                'change_password_for' => '为 :user 修改密码',
                'create' => '新建用户',
                'deactivated' => '冻结用户',
                'deleted' => '删除用户',
                'edit' => '编辑用户',
                'management' => '用户管理',
                'no_permissions' => '权限不足',
                'no_roles' => '没有此角色',
                'permissions' => '权限',

                'table' => [
                    'confirmed' => '已确认',
                    'created' => '已创建',
                    'email' => 'E-mail',
                    'id' => 'ID',
                    'last_updated' => '最后一次更新',
                    'name' => '名字',
                    'no_deactivated' => '没有激活的用户',
                    'no_deleted' => '没有已删除的用户',
                    'roles' => '角色',
                    'total' => '总共用户',
                ],
            ],
        ],
    ],

    'frontend' => [

        'auth' => [
            'login_box_title' => '登录',
            'login_button' => '登录',
            'login_with' => '使用 :social_media 登录',
            'register_box_title' => '注册',
            'register_button' => '注册',
            'remember_me' => '记住我',
        ],

        'passwords' => [
            'forgot_password' => '忘记密码?',
            'reset_password_box_title' => '重设密码',
            'reset_password_button' => '重设密码',
            'send_password_reset_link_button' => 'Send Password Reset Link',
        ],

        'macros' => [
            'country' => [
                'alpha' => 'Country Alpha Codes',
                'alpha2' => 'Country Alpha 2 Codes',
                'alpha3' => 'Country Alpha 3 Codes',
                'numeric' => 'Country Numeric Codes',
            ],

            'macro_examples' => 'Macro Examples',

            'state' => [
                'mexico' => 'Mexico State List',
                'us' => [
                    'us' => 'US States',
                    'outlying' => 'US Outlying Territories',
                    'armed' => 'US Armed Forces',
                ],
            ],

            'territories' => [
                'canada' => 'Canada Province & Territories List',
            ],

            'timezone' => 'Timezone',
        ],

        'user' => [
            'passwords' => [
                'change' => 'Change Password',
            ],

            'profile' => [
                'avatar' => 'Avatar',
                'created_at' => 'Created At',
                'edit_information' => 'Edit Information',
                'email' => 'E-mail',
                'last_updated' => 'Last Updated',
                'name' => 'Name',
                'update_information' => 'Update Information',
            ],
        ],

    ],
];
