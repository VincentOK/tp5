<?php
namespace  app\IJiekou;
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/31 0031
 * Time: 下午 4:35
 */
 interface IBase
{

    public function findById($id);

    public function selectAll();

    public function login($name,$password);

     public function detail($id);

     public function pay($id);

     public function add($data);

     public function checkDb($name);
}