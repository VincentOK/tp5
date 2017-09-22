<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/31 0031
 * Time: 下午 4:44
 */

namespace app\IJiekou;


use app\index\Model\User;
use think\Db;

class UserResponse extends BaseResponse
{
    public function findById($id)
    {
        $val = Db::query('select * from reader_book where id=?',[$id]);
        return $val;
        // TODO: Implement findById() method.
    }

    public function selectAll()
    {
        // TODO: Implement selectAll() method.
        $val = Db::query('select * from reader_book');
        return $val;
    }

    public function login($name, $password)
    {


        // TODO: Implement login() method.
//        $val = Db::query('select * from reader_administrator WHERE Administrator_name=? AND  Administrator_tel=?',[$name,$password]);
        $arrData = array('Administrator_name'=>$name,'Administrator_tel'=>$password);
        $val = Db::name('administrator')->where($arrData)->find();
        return $val;
    }

    public function detail($id)
    {
        // TODO: Implement detail() method.
//        $val = Db::name('book')->where('book_id',$id)->find();

        $val = Db::query('select reader_book.*,reader_user.user_name from reader_book LEFT JOIN reader_user ON reader_book.book_user_id = reader_user.user_id WHERE book_id = ?',[ $id]);
        return $val;
    }

    public function pay($id)
    {
        // TODO: Implement pay() method.
        $val = Db::name('book')->where("book_id",$id)->setField('book_user_id',0);
//        var_dump($val);
        return $val;
    }

    public function add($data)
    {
        // TODO: Implement add() method.
        $val = Db::name('book')->insert($data);
        return $val;
    }

    public function checkDb($name)
    {
        // TODO: Implement check() method.
        $val = Db::query("select * from reader_book WHERE reader_book.book_name LIKE ? ",['%'.$name.'%']);
        wsLog($val,'lhc');
        return $val;
    }

}