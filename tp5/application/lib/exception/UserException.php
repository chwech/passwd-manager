<?php
namespace app\lib\exception;

use Exception;
use think\exception\Handle;
use think\Request;

class UserException extends BaseException
{
    public code;
    public errorCode;
    public msg;
}