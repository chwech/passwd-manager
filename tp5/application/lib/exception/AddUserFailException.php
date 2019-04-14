<?php
namespace app\lib\exception;

class AddUserFailException extends BaseException
{
    public $code = 409;
    public $errorCode = 10002;
    public $msg = '注册失败';
}