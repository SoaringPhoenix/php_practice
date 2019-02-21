<?php
#0现在时间到时间戳，1现在时间戳到时间，2特定时间到时间戳，3特定时间戳到时间
$method = $argv[1];
$time = $argv[2];
switch($method) {
    case 0:
        $output = time();
        break;
    case 1:
        $output = date("Y-m-d H:i:s", time()); 
        break;
    case 2:
        $output = strtotime($time);
        break;
    case 3:
        $output = date("Y-m-d H:i:s", $time);
        break;
}
echo $output."\n";
?>
