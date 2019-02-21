<?php
/**
 * Created by PhpStorm.
 * User: zuoyebang
 * Date: 2019/2/18
 * Time: 17:59
 */
Bd_Init::init('support');
class updatePrice extends Hk_Common_BaseDao {
    const DEFAULT_PRICE = '1';
        public function __construct() {
            $this->_dbName = 'mobile/nativeapp';
            $this->_table = 'tblPlatPayProduct';
        }
        public function execute($serviceId, $itemId) {
            if (!isset($serviceId) || !isset($itemId)) {
                echo "请输入serviceId和itemId\n";
                die;
            }
            $ret = $this->update($serviceId, $itemId);
            if ($ret == false) {
                echo "狗屁代码更新数据库失败，请查bug\n";
                die;
            }
            $service = new Pt_Service_PlatPay();
            $service->clearProductInfoCache($serviceId, $itemId);
            echo "恭喜你, 辣鸡代码执行成功了\n";
            return true;
        }
        public function update($serviceId, $itemId) {
            $strategyArr = $this->checkStrategy($serviceId, $itemId);
            $strategy = $strategyArr[0]['strategy'];
            $arrConds = [
              'serviceId' => $serviceId,
              'itemId' => $itemId
            ];
            if ($strategy == '[]') {
                $arrFields = [
                    'price' => self::DEFAULT_PRICE
                ];
            }
            else {
                $index = strrpos($strategy, 'bargain') + strlen('bargain') + 2;
                $rep = self::DEFAULT_PRICE."}}]";
                $str = substr_replace($strategy, $rep, $index, 15);
                $arrFields = [
                    'strategy' => $str
                ];
            }
            $ret = $this->updateByConds($arrConds, $arrFields);
            return $ret;
        }

        public function checkStrategy($serviceId, $itemId) {
            $arrConds = [
                'serviceId' => $serviceId,
                'itemId' => $itemId
            ];
            $arrFields = [
                'strategy'
            ];
            $ret = $this->getListByConds($arrConds, $arrFields);
            return $ret;
        }
}
$serviceId = $argv[1];
$itemId = $argv[2];
(new updatePrice())->execute($serviceId, $itemId);
