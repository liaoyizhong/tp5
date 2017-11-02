<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
return [
    '__rest__' => [
        'orders' => 'orders/index',
        'orders_type' => 'orders/orders_type',
        'users' => 'users/users',
        'users_roles' => 'users/users_roles'
    ],
    'orders/calculate' => ['orders/index/calculate',['method' => 'get']],
    '__pattern__' => [
        'name' => '\w+',
    ]
];

