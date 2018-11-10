<?php
namespace app\api\controller\v1;
use app\lib\jwt\Jwt;
use app\api\model\User;
use think\Request;
class Token
{
    public function getToken()
    {
        $request = Request::instance();
        // 验证用户名、密码
        $res = User::get([
          'username' => $request -> param('username'),
          'password' => md5($request -> param('password'))
        ]);
        if ($res) {
          $token = Jwt::buildToken();
  
          $res = [
              "errorCode" => 20000,
              "data" => (string) $token,
              "msg" => "登录成功"
          ];
  
          return json($res);
        }
        else {
          $res = [
            "errorCode" => 20000,
            "data" => [],
            "msg" => "用户不存在"
          ];
          return json($res);
        }
    }
}