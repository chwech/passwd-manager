<?php
namespace app\lib\exception;

use Exception;
use think\exception\Handle;
use think\Request;

class UserException extends BaseException
{
    public $code = 401;
    public $errorCode = 10001;
    public $msg = '参数错误';
}