<?php
/**
 * Created by PhpStorm.
 * User: zuoyebang
 * Date: 2019/3/29
 * Time: 17:22
 */
class MyHashSet {
    private $hashSet;
    function __construct() {
        $this->hashSet = [];
    }

    function add($key) {
        $this->hashSet[$key] = true;
    }

    function remove($key) {
        if (isset($this->hashSet[$key])) {
            $this->hashSet[$key] = false;
        }
    }

    function contains($key) {
        return isset($this->hashSet[$key]) && $this->hashSet[$key];
    }
}