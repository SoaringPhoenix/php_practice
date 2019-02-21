<?php
$string = $argv[1];
$str = crc32($string);
$s = crc32($string)%3;
echo $string."\n";
echo $str."\n";
echo $s."\n";
?>
