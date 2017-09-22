<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------



\think\Route::get('web/test','index/Index/test');
\think\Route::post('dbtest','index/Index/dbtest');
\think\Route::post('Ibase','index/UserController/index');


\think\Route::get('allData','index/UserController/allData');
\think\Route::post('adminlogin','index/UserController/adminlogin');
\think\Route::get('allData/detail','index/UserController/detail');
\think\Route::get('allQuestion','index/UserController/question');
\think\Route::get('allData/detail/pay','index/UserController/pay');
\think\Route::post('add','index/UserController/add');
\think\Route::post('check','index/UserController/check');


return [
    '__pattern__' => [
        'name' => '\w+',
    ],

    '[hello]'     => [
        ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
        ':name' => ['index/hello', ['method' => 'post']],
    ],


];
