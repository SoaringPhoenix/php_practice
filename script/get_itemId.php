<?php
/**
 * Created by PhpStorm.
 * User: chengwanding@zuoyebang.com
 * Date: 2018/12/7
 * Time: 12:40
 */
Bd_init::init('napi');
class get_itemId extends Hk_Common_BaseDao {

    public function __construct(){
        $this->_dbName = 'mobile/nativeapp';
        $this->_table = 'tblPlatPayProduct';
    }

    public function execute($serviceId) {
        $arrConds = [
            "serviceId in ($serviceId)",
        ];
        $arrFields = [
            "name", "itemId", "duration"
        ];
        $arrAppends = [
            "order by duration asc, itemId asc"
        ];
        $ret = $this->getListByConds($arrConds, $arrFields, NULL, $arrAppends);
        $product = [];
        foreach ($ret as $key => $item) {
            $product[$key] = $item;
        }
        var_dump($product);
        Bd_Log::warning("------------chengwanding------------".var_export($product, true));
        return $ret;
    }
}
$get_itemId = new get_itemId();
$serviceId = $argv[1];
if (!isset($serviceId)) {
    $serviceId = 31;
}
$get_itemId->execute($serviceId);
