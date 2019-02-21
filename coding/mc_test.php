<?php
Bd_init::init('search');
$memcached = Hk_Service_Memcached::getInstance('common');
#var_export($memcached);
$res = $memcached->delete('vip:renew:uid:2000017206');
#var_dump($res);
print_r($res);
?>
