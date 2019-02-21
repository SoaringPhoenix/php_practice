<?php
/**
 * Created by PhpStorm.
 * User: zuoyebang
 * Date: 2019/1/10
 * Time: 20:33
 */
Bd_Init::init('napi');
class wealthCoin extends Hk_Common_BaseMultiDao {
        const USER_WEALTH_COIN = 50000;
        private $objCache;

        public function __construct() {
                $this->_dbName = 'zybuser/zybuser';
                $this->_table = 'tblAppUcloud';
                $this->_tableName   = "tblAppUcloud";
                $this->_partionKey  = "uid";
                $this->_partionType = self::TYPE_TABLE_PARTION_MOD;
                $this->_partionNum  = 20;
                $this->objCache = Hk_Service_Memcached::getInstance('ucloud');
        }

        public function execute($uid) {
                $count = $this->select($uid);
                if (empty($count)) {
                        $ret = $this->insert($uid);
                }
                else {
                        $ret = $this->update($uid);
                }
                if ($ret == false) {
                        echo "写的什么狗屁代码，数据库更新失败！"."\n";
                        return false;
                }
                $result = $this->objCache->delete($uid);
                if (!$result) {
                        echo "写的什么狗屁代码，删缓存失败！"."\n";
                        return false;
                }
                echo "恭喜你，辣鸡代码更新成功"."\n";
                return true;
        }

        public function update($uid) {
                $arrConds = [
                        "uid" => $uid,
                        ];
                $arrFields = [
                        "wealth" => self::USER_WEALTH_COIN,
                        ];
                $ret = $this->updateByConds($uid, $arrConds, $arrFields);
                return $ret;
        }

        public function insert($uid) {
                $arrFields = [
                        "uid" => $uid,
                        "experience" => 0,
                        "wealth" => self::USER_WEALTH_COIN,
                        ];
                $ret = $this->insertRecords($uid, $arrFields);
                return $ret;
        }

        public function select($uid) {
                $arrConds = [
                        "uid" => $uid,
                        ];
                $arrFields = [
                        "count(uid)",
                        ];
                $ret = $this->getListByConds($uid, $arrConds, $arrFields);
                if ($ret == false) {
                        return false;
                }
                $count = $ret[0]["count(uid)"];
                return $count;
        }
}
$uid = $argv[1];
$wealthCoin = new wealthCoin();
$wealthCoin->execute($uid);
