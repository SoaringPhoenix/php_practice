<?php
Bd_init::init();
$objMemcache = Hk_Service_Memcached::getInstance('common');
$cacheKey = 'composition:practice:qid:152';

$objMemcache->set($cacheKey, );
?>
