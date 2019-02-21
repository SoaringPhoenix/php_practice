<?php
Bd_Init::init('practice');
$examId = $argv[1];
$ret = Hk_Util_IdCrypt::encodeQid($examId);
echo $ret."\n";
