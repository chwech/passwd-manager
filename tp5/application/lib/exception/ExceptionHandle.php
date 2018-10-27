<?php
namespace app\lib\exception;

use Exception;
use think\exception\Handle;
use think\Request;

/**
 * 接管框架的异常处理, 实现自定义的异常处理
 */
class ExceptionHandle extends Handle
{
  private $code;
  private $errorCode;
  private $msg;
  private $url;

  public function render(Exception $e)
  {
      if ($e instanceof BaseException) {
        // 客户端错误处理
        // $res = [
        //   'errorCode' => $this -> errorCode,
        //   'msg' => $this -> msg
        // ];
        // return json($res);
      }
      else {
        $request = Request::instance();
        // 服务器错误处理
        $this -> code = 500;
        $this -> errorCode = 999;
        $this -> msg = '服务器内部错误';
        $this -> url = $request -> url();
      }
      $arr = [
        'errorCode' => $this -> errorCode,
        'msg' => $this -> msg,
        'url' => $this -> url
      ];
      dump($e);
      return json($arr, $this -> code);
  }
}