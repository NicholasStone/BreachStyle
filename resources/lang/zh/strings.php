<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Strings Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used in strings throughout the system.
    | Regardless where it is placed, a string can be listed here so it is easily
    | found in a intuitive way.
    |
    */

    'backend' => [
        'access' => [
            'users' => [
                'delete_user_confirm'  => '你确定要删除此用户吗？（此操作不能撤销）.',
                'if_confirmed_off'     => '(If confirmed is off)',
                'restore_user_confirm' => '重置此用户到初始状态？',
            ],
        ],

        'verification' => [
            'application' => [
                'title'      => '成果展示申请详情',
                'name'       => '成功名称',
                'type'       => '推荐种类',
                'detail'     => '党支部情况介绍',
                'user'       => '申报联系人',
                'tel'        => '手机',
                'dept'       => '部门',
                'university' => '所在院校',
                'summary'    => '成功简介',
                'branch'     => '提交支部名称',
                'img'        => '简介',
                'apply'      => '申请表',
            ],
            'branch'      => [
                'title'             => '支部详情',
                'name'              => '支部名称',
                'secretary'         => '支书',
                'secretary-summary' => '支书简介',
                'created_at'        => '提交于',
                'summary'           => '简介',
                'total-membership'  => '总人数',
                'school'            => '所属学校',
                'address'           => '通讯地址',
                'type'              => '类型',
                'avatar'            => '配图',
                'tel'               => '联系电话',
            ],
        ],

        'dashboard' => [
            'title'   => '管理员面板',
            'welcome' => '欢迎',
        ],

        'general' => [
            'all_rights_reserved' => '版权所有',
            'are_you_sure'        => '您确定吗？',
            'boilerplate_link'    => 'Laravel 5 Boilerplate',
            'continue'            => '继续',
            'member_since'        => 'Member since',
            'minutes'             => ' 分钟',
            'search_placeholder'  => '搜索...',
            'timeout'             => '由于您长时间处于为操作状态，处于安全原因已自动注销',

            'see_all' => [
                'messages'      => '查看所有信息',
                'notifications' => '查看所有',
                'tasks'         => '查看所有任务',
            ],

            'status' => [
                'online'  => '在线',
                'offline' => '离线',
            ],

            'you_have' => [
                'messages'      => '{0} You don\'t have messages|{1} You have 1 message|[2,Inf] You have :number messages',
                'notifications' => '{0} You don\'t have notifications|{1} You have 1 notification|[2,Inf] You have :number notifications',
                'tasks'         => '{0} You don\'t have tasks|{1} You have 1 task|[2,Inf] You have :number tasks',
            ],
        ],
    ],

    'emails' => [
        'auth' => [
            'password_reset_subject' => 'Your Password Reset Link',
            'reset_password'         => 'Click here to reset your password',
        ],
    ],

    'frontend' => [
        'email' => [
            'confirm_account' => 'Click here to confirm your account:',
        ],

        'test' => 'Test',

        'tests' => [
            'based_on' => [
                'permission' => 'Permission Based - ',
                'role'       => 'Role Based - ',
            ],

            'js_injected_from_controller' => 'Javascript Injected from a Controller',

            'using_blade_extensions' => 'Using Blade Extensions',

            'using_access_helper' => [
                'array_permissions'     => 'Using Access Helper with Array of Permission Names or ID\'s where the user does have to possess all.',
                'array_permissions_not' => 'Using Access Helper with Array of Permission Names or ID\'s where the user does not have to possess all.',
                'array_roles'           => 'Using Access Helper with Array of Role Names or ID\'s where the user does have to possess all.',
                'array_roles_not'       => 'Using Access Helper with Array of Role Names or ID\'s where the user does not have to possess all.',
                'permission_id'         => 'Using Access Helper with Permission ID',
                'permission_name'       => 'Using Access Helper with Permission Name',
                'role_id'               => 'Using Access Helper with Role ID',
                'role_name'             => 'Using Access Helper with Role Name',
            ],

            'view_console_it_works'          => 'View console, you should see \'it works!\' which is coming from FrontendController@index',
            'you_can_see_because'            => 'You can see this because you have the role of \':role\'!',
            'you_can_see_because_permission' => 'You can see this because you have the permission of \':permission\'!',
        ],

        'user' => [
            'profile_updated'  => 'Profile successfully updated.',
            'password_updated' => 'Password successfully updated.',
        ],

        'welcome_to' => 'Welcome to :place',
    ],
];