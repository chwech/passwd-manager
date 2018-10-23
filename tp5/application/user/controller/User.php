<?php
namespace app\user\controller;

use think\Request;

class User
{
    public function addUser(Request $request)
    {
      
        return 'adduser'.$request -> param('name');
    }
}