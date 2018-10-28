<?php
namespace app\lib\exception;

use Exception;
use think\exception\Handle;
use think\Request;

class BaseException extends Exception
{
    public $code = 400;
    public $errorCode = 10000;
    public $msg = '参数错误 ';

    public function __construct($params = []) {
      if (!is_array($params)) {
        return;
      }
      if (array_key_exists('code', $params)) {
        $this -> code = $params['code'];
      }
      if (array_key_exists('errorCode', $params)) {
        $this -> errorCode = $params['errorCode'];
      }
      if (array_key_exists('msg', $params)) {
        $this -> msg = $params['msg'];
      }
  }
}