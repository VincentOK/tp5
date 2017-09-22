<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/31 0031
 * Time: 下午 4:45
 */
namespace app\index\controller;

use app\IJiekou\UserResponse;
use app\index\common\common;
use think\Log;
use think\Request;

class UserController
{
   protected $userResp;
   function __construct(UserResponse $userResponse,common $c)
   {
       $this->userResp = $userResponse;
       $this->comm = $c;
   }
   public  function  index(Request $request){
       $params = $request->param();
       $id = $params['id'];
       $val = $this->userResp->findById($id);
       return json($val);
   }
   public function allData(){
       $val = $this->userResp->selectAll();
//       $com = $this->comm->successObj();
//       $last = $com->data = $val;
       return json($val);
   }
   public function adminlogin(Request $request){
       $params = $request->param();
       $name = $params['name'];
       $password = $params['password'];
       $val = $this->userResp->login($name,$password);
//       var_dump($val);
       return json($val);
   }


    public function detail(Request $request){
        $params = $request->param();
        $id = $params['id'];
        $val = $this->userResp->detail($id);
        return json($val);
    }



    public function pay(Request $request){
        $params = $request->param();
        $id = $params['id'];
        $val = $this->userResp->pay($id);
//        var_dump($val);
        return json($val);
    }


    public function add(Request $request){
        $params = $request->param();
//        var_dump($params);
        $val = $this->userResp->add($params);
        return json($val);
    }


    public function check(Request $request){
        $params = $request->param();
        $name = $params['word'];
        $val = $this->userResp->checkDb($name);
        wsLog($name,'lhc');
       return json($val);
    }


    //测试
    public function question(){
        $val = '{
  "err": 0,
  "data": {
    "n_id": "25",
    "title": "调查水果",
    "creattime": "1505293154547",
    "deadline": "1506700800000",
    "status": "1",
    "intro": "水果说明",
    "topic": [
      {
        "q_id": "66",
        "question": "你喜欢什么水果",
        "isRequired": true,
        "type": "单选",
        "description": "",
        "selectContent": "",
        "additional": "",
        "options": [
          {
            "o_id": "100",
            "content": "苹果",
            "isAddition": false
          },
          {
            "o_id": "101",
            "content": "哈哈瓜",
            "isAddition": false
          }
        ]
      },
      {
        "q_id": "67",
        "question": "你什么鬼",
        "isRequired": true,
        "type": "多选",
        "description": "",
        "selectMultipleContent": [
          
        ],
        "additional": "",
        "options": [
          {
            "o_id": "102",
            "content": "哈哈一",
            "isAddition": false
          },
          {
            "o_id": "103",
            "content": "合哈二",
            "isAddition": false
          }
        ]
      },
      {
        "q_id": "68",
        "question": "333",
        "isRequired": true,
        "type": "单选",
        "description": "",
        "selectContent": "",
        "additional": "",
        "options": [
          {
            "o_id": "104",
            "content": "11",
            "isAddition": false
          },
          {
            "o_id": "105",
            "content": "33",
            "isAddition": false
          }
        ]
      }
    ]
  }
}';
        return json($val);
    }
}