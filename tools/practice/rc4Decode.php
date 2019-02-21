<?php
Bd_Init::init('practice');
$file = '/home/homework/user/jason/tools/practice/testContent.txt';
$content = file_get_contents($file);
$ret = Hk_Util_Rc4::rc4Decode($content);
var_dump($ret);
