<?php
/**
 * Created by PhpStorm.
 * User: zuoyebang
 * Date: 2019/3/29
 * Time: 16:42
 */
class MyHashMap {
    private $hashMap;
    function __construct() {
        $this->hashMap = [1=> 1, 5=>2, 8=>5];
    }

    function put($key, $value) {
        $this->hashMap[$key] = $value;
    }

    function get($key) {
        return isset($this->hashMap[$key]) ? $this->hashMap[$key] : -1;
    }

    function remove($key) {
        unset($this->hashMap[$key]);
        return $this->hashMap;
//        $this->hashMap = array_diff_key($this->hashMap, [$key => $this->hashMap[$key]]);
    }
}
var_export((new MyHashMap())->remove(8));
