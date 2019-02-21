<?php
$string = 'I am a student and I am smart, so I am a good student';
$str = '/student/';
preg_match_all($str, $string, $matches);
var_dump($matches);
