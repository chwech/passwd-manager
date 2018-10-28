<?php
namespace app\lib\exception;

class ParameterException extends BaseException
{
    public $code = 400;
    public $errorCode = 10000;
    public $msg = '参数错误';
}