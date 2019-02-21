<?php
class func {
function execute() {
    echo get_class();
    echo "\n";
    $a  = new func();
    var_dump(get_object_vars($a));
    echo "\n";
    var_dump(get_class_methods('func'));
   }
}
(new func())->execute();
