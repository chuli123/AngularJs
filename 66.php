<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/25
 * Time: 8:19
 */
$data = [
    [name => 'houdunren',url=>'houdunren.com'],
    [name => 'houdunwang',url=>'houdunwang.com'],
];

echo json_encode($data,JSON_UNESCAPED_UNICODE);