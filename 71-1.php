<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/25
 * Time: 8:19
 */
$data = [
    [id=>1,name => 'houdunren',url=>'houdunren.com'],
    [id=>2,name => 'houdunwang',url=>'houdunwang.com'],
];

echo json_encode($data,JSON_UNESCAPED_UNICODE);