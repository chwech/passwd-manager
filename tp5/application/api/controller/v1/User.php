<?php
namespace app\api\controller\v1;

use think\Request;
use app\api\validate\UserValidate;
use app\api\model\User as UserModel;
use app\lib\exception\AddUserFailException;

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
        $result = UserModel::create($request -> param());
        
        if ($result) {
            return [
                "errorCode" => 10000,
                "msg" => "注册成功",
                "data" => []
            ];
        }
        else {
            throw new AddUserFailException();
        }
    }
}