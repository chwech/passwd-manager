<?php
namespace app\api\validate;

use think\Validate;
use think\Exception;
use think\Request;

class BaseValidate extends Validate
{
    public function goCheck()
    {
        $request = Request::instance();
        $params = $request -> param();
        $result = $this -> check($params);
    
        if (!$result) {
          $error = $this -> error;
          throw new Exception($error);
        }
        else {
          return true;
        }
    }
}