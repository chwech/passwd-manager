<?php
namespace app\api\validate;

class UserValidate extends BaseValidate
{
    protected $rule = [
        'name' => 'require|max:6',
        'age'  => 'number|between:1,120',
    ];
}