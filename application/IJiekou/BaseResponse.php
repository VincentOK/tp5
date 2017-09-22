<?php

namespace   app\IJiekou;

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/31 0031
 * Time: 下午 4:37
 */
abstract class BaseResponse implements IBase
{
//    protected $model;
//
//
//    public function finId($id){
//        $this->model->find($id);
//    }
      public function test(){
          return "success";
      }
}