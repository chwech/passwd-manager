<?php
namespace app\lib\exception;

use Exception;
use think\exception\Handle;
use think\Request;
use think\Log;
/**
 * 接管框架的异常处理, 实现自定义的异常处理
 */
class ExceptionHandle extends Handle
{
    private $code;
    private $errorCode;
    private $msg;

    public function render(Exception $e)
    {
        if ($e instanceof BaseException) {
            // 自定义客户端异常处理
            $this -> code = $e -> code;
            $this -> errorCode = $e -> errorCode;
            $this -> msg = $e -> msg;
        }
        else {
            if (config('app_debug')) {
                // 使用框架默认异常处理行为
                return parent::render($e);
            } 
            else {
                // 服务器内部异常处理
                $this -> code = 500;
                $this -> errorCode = 999;
                $this -> msg = '服务器内部错误';
                // 日志记录
                $this -> recordErrorLog($e);
            }
        }
        
        $request = Request::instance();

        $arr = [
            'errorCode' => $this -> errorCode,
            'msg' => $this -> msg,
            'url' => $request -> url()
        ];

        return json($arr, $this -> code);
    }

    /**
     * 关闭框架的自动日志记录,自定义日志记录行为
     */
    private function recordErrorLog(Exception $e) {
        Log::init([
          'type' => 'File',
          'path' => LOG_PATH,
          'level' => ['error']
        ]);
        Log::record($e -> getMessage(), 'error');
    }
}