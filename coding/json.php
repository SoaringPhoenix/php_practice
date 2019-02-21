<?php
$content = $argv[1];
$content = '[{"type":"bargainUnLimit","data":{"bargain":0}}]';
$content = '[{"type":"bargainUnLimit","data":{"bargain":1990}}]';
$index = strpos($content, 'bargain');
$arr = json_encode($content);
#var_dump($index);
#var_dump(json_decode($arr['type']));
#var_dump(json_encode($content['data']));
$str = ' {"\u8d2d\u4e70\u8bf4\u660e":"\u5957\u9910\u6709\u6548\u671f\u5185\uff0c\u53ef\u514d\u8d39\u4f7f\u7528VIP\u6db5\u76d6\u7684\u670d\u52a1\uff0c\u5305\u62ec\u5168\u90e8\u89c6\u9891\u8bb2\u89e3\u3001\u5168\u90e8\u4e13\u9879\u7ec3\u4e60\u9898\u5305\u3002","\u6e29\u99a8\u63d0\u793a":"\u5957\u9910\u5230\u671f\u540e\uff0c\u5c06\u4e0d\u518d\u4eab\u6709VIP\u7684\u670d\u52a1\uff0c\u82e5\u8981\u7ee7\u7eed\u4f7f\u7528\uff0c\u9700\u91cd\u65b0\u8d2d\u4e70\u3002","\u6709\u6548\u671f":"\u8d2d\u4e70\u4e4b\u65e5\u8d7730\u5929\u5185\u6709\u6548\u3002"}';
$content = json_decode($str);
var_dump($content);
