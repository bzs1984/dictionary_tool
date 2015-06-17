<?php
/**
 * Created by PhpStorm.
 * User: rabbitns
 * Date: 15-5-17
 * Time: 下午6:05
 */

return [
    'custom'    =>  [
        'username'  =>  [
            'required' => '管理员用户名不能为空',
            'between:3,50' => '长度须在3-30字符之间',
            'unique' => '管理员用户名重复',
        ],
        'email' =>  [
            'required'  =>  'Email不能为空',
            'email'  =>  'Email格式不正确',
            'unique'  =>  'Email已被占用',
        ],
        'password'  =>  [
            'required'  =>  '请输入密码',
            'between'   =>  '密码长度在6－30位之间'
        ],
        'password2' =>  [
            'same'  =>  '两次密码输入不一致'
        ],
        'role_name' =>  [
            'required'  => '请输入角色名称',
            'between:3,50' => '长度须在3-30字符之间',
            'unique' => '角色名称重复',
        ],
        'actiongroup' => [
            'required'  =>  '请分配权限',
            'array'  =>  '请分配权限',
        ]
    ],

];
