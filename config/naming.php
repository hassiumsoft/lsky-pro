<?php
/**
 * User: Wisp X
 * Date: 2018/10/2
 * Time: 13:02
 * Link: https://github.com/wisp-x
 */

// [命名规则配置文件]

use think\facade\Session;

$time = time();
$md5 = md5('LSKY PRO' . uniqid() . time());
$uid = Session::has('uid') ? Session::get('uid') : 0;

return [
    'path'  => [
        [
            'name'      => '{Y}',
            'example'   => '2018',
            'explain'   => '年',
            'value'     => date('Y'),
        ],
        [
            'name'      => '{m}',
            'example'   => '01',
            'explain'   => '月',
            'value'     => date('m'),
        ],
        [
            'name'      => '{d}',
            'example'   => '04',
            'explain'   => '日',
            'value'     => date('d'),
        ],
        [
            'name'      => '{Ymd}',
            'example'   => '20180104',
            'explain'   => '上传日期',
            'value'     => date('Ymd'),
        ],
        [
            'name'      => '{ymd}',
            'example'   => '180104',
            'explain'   => '上传日期',
            'value'     => date('ymd'),
        ],
        [
            'name'      => '{Y-m-d}',
            'example'   => '2018-01-04',
            'explain'   => '上传日期',
            'value'     => date('Y-m-d'),
        ],
        [
            'name'      => '{y-m-d}',
            'example'   => '18-01-04',
            'explain'   => '上传日期',
            'value'     =>  date('y-m-d'),
        ],
        [
            'name'      => '{time-stamp}',
            'example'   => '1514995200',
            'explain'   => '上传日期',
            'value'     => $time,
        ],
        [
            'name'      => '{uniqid}',
            'example'   => '5bb2f89a38935',
            'explain'   => '唯一ID',
            'value'     => uniqid(),
        ],
        [
            'name'      => '{md5-32}',
            'example'   => 'f96087bb0a9a5e8723dbde0d0f8dce34',
            'explain'   => 'md5(非文件md5)',
            'value'     => $md5,
        ],
        [
            'name'      => '{md5-16}',
            'example'   => '0a9a5e8723dbde0d',
            'explain'   => 'md5(非文件md5)',
            'value'     => substr($md5, 8, 16),
        ],
        [
            'name'      => '{uid}',
            'example'   => '1',
            'explain'   => '用户ID(用户从网页端登录可用，否则为0)',
            'value'     => $uid,
        ],
        [
            'name'      => '{rend-character}',
            'example'   => 'HgTLmGcDceplMduF',
            'explain'   => '16位随机字符串',
            'value'     => str_rand(),
        ],
    ],
    'file'  => [
        [
            'name'      => '{Y}',
            'example'   => '2018',
            'explain'   => '年',
            'value'     => date('Y'),
        ],
        [
            'name'      => '{m}',
            'example'   => '01',
            'explain'   => '月',
            'value'     => date('m'),
        ],
        [
            'name'      => '{d}',
            'example'   => '04',
            'explain'   => '日',
            'value'     => date('d'),
        ],
        [
            'name'      => '{Ymd}',
            'example'   => '20180104',
            'explain'   => '上传日期',
            'value'     => date('Ymd'),
        ],
        [
            'name'      => '{ymd}',
            'example'   => '180104',
            'explain'   => '上传日期',
            'value'     => date('ymd'),
        ],
        [
            'name'      => '{Y-m-d}',
            'example'   => '2018-01-04',
            'explain'   => '上传日期',
            'value'     => date('Y-m-d'),
        ],
        [
            'name'      => '{y-m-d}',
            'example'   => '18-01-04',
            'explain'   => '上传日期',
            'value'     =>  date('y-m-d'),
        ],
        [
            'name'      => '{time-stamp}',
            'example'   => '1514995200',
            'explain'   => '上传日期',
            'value'     => $time,
        ],
        [
            'name'      => '{uniqid}',
            'example'   => '5bb2f89a38935',
            'explain'   => '唯一ID',
            'value'     => uniqid(),
        ],
        [
            'name'      => '{md5-32}',
            'example'   => 'f96087bb0a9a5e8723dbde0d0f8dce34',
            'explain'   => 'md5(非文件md5)',
            'value'     => $md5,
        ],
        [
            'name'      => '{md5-16}',
            'example'   => '0a9a5e8723dbde0d',
            'explain'   => 'md5(非文件md5)',
            'value'     => substr($md5, 8, 16),
        ],
        [
            'name'      => '{uid}',
            'example'   => '1',
            'explain'   => '用户ID(用户从网页端登录可用，否则为0)',
            'value'     => $uid,
        ],
        [
            'name'      => '{rend-character}',
            'example'   => 'HgTLmGcDceplMduF',
            'explain'   => '16位随机字符串',
            'value'     => str_rand(),
        ],
    ],
];
