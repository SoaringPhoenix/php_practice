<?php 
$app = array('homework', 'parent', 'airclass', 'ykteacher', 'dyteacher');
$apps = array(
0 => 'homework',
1 => 'parent',
2 => 'airclass',
3 => 'teacher',
4 => 'dayiteacher');
$appid = 'homework';
echo (in_array($appid, $apps)) ? true: false;
?>
