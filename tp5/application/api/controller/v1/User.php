<?php
namespace app\api\controller\v1;

use think\Request;
use app\api\validate\UserValidate;

class User
{
    /**
     * 添加用户
     * @url /user
     * @http POST
     */
    public function addUser(Request $request)
    {
        (new UserValidate()) -> goCheck();
    }
}