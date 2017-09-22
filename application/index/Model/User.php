<?php
namespace app\index\Model;
use think\Model;
use think\Db;
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/31 0031
 * Time: 下午 2:38
 */
class User extends Model
{

    protected $table ='user';

//    //查询数据
//    public function selectFun($id){
////        parent::initialize();
//        $val = Db::query('select * from think_user where id=?',[$id]);
////        $val =  Db::table('think_user')->select();
//        return $val;
//    }
//    //增加数据
//    public function add($id,$name,$age){
//
//    }
}