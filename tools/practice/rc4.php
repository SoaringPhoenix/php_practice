<?php
Bd_Init::init('practice');
$path = '/home/homework/user/jason/tools/analyze1.txt';
$content = file_get_contents($path);
$ret = Hk_Util_Rc4::rc4Decode($content);
var_dump($ret);
