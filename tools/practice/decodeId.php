<?php
Bd_Init::init('practice');
$tid = $argv[1];
$ret = Hk_Util_IdCrypt::decodeQid($tid);
