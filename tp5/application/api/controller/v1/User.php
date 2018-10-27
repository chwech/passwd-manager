<?php
namespace app\api\controller\v1;

use think\Request;
use app\api\validate\UserValidate;
use app\api\model\User as UserModel;

class User
{
    /**
     * 添加用户
     * @url /user
     * @http POST
     */
    public function addUser(Request $request)
    {
        // 参数校验
        (new UserValidate()) -> goCheck();

        // 业务逻辑
        UserModel::addUser();
    }
}