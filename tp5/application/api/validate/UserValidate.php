<?php
namespace app\api\validate;

class UserValidate extends BaseValidate
{
    protected $rule = [
        'username' => 'require|chsAlphaNum|max:32',
        'password'  => 'require|alphaNum|max:32',
        'register_ip' => 'require|ip'
    ];
}