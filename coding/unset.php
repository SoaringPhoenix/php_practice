<?php

$arr = [1, 2, 3, 4];
$list = [];
foreach($arr as $ele => $item) {
    if ($ele === 2) {
        unset($arr[$ele]);
        $list[] = $item;
    }
}
var_dump($arr);
?>
