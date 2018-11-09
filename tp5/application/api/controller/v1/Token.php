<?php
namespace app\api\controller\v1;
use app\lib\jwt\Jwt;

class Token
{
    public function getToken()
    {
        $token = Jwt::buildToken();
        
        $res = [
            "errorCode" => 20000,
            "data" => (string) $token,
            "msg" => "获取token成功"
        ];

        return json($res);
    }
}