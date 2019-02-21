<?php
$str = '[{"type":"bargainUnLimit","data":{"bargain":10000000000}}]';
$rep = '1}}]';
$var = 'bargain';
echo strchr($str, $var)."\n";
#echo substr_replace($str, $rep, 44, 15)."\n";

