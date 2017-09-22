<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// [ 应用入口文件 ]
function wsLog($_data = array(), $sign = 'sign', $signSub = 'sub', $url = null)
{
    if ($url == null) $url = '47.94.4.189:9090/socket';
    $c = debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS);
    $ch = curl_init($url);
    if (!is_array($_data)) {
        $data = [];
        $data['content'] = $_data;
    } else $data = $_data;
    curl_setopt_array($ch, [
        CURLOPT_POST => true,
        CURLOPT_CONNECTTIMEOUT => 10,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POSTFIELDS => http_build_query(array_merge([
            'log_time' => date('Y-m-d H:i:s'),
            'file' => $c[0]['file'],
            'line' => $c[0]['line'],
            'showDebugSign' => $sign,
            'showDebugSignSub' => $signSub
        ], $data))
    ]);
    $result = curl_exec($ch);
    return $result;
}
// 定义应用目录
define('APP_PATH', __DIR__ . '/../application/');
// 加载框架引导文件
require __DIR__ . '/../thinkphp/start.php';
