<?php
namespace app\test\controller;
use \think\Db;
class Index 
{
    public function index()
    {
        $data = ['id' => 1, 'username' => 'chwech', 'password' => 'admin'];
        Db::table('pm_user')->insert($data);
	// phpinfo();
    }
}
