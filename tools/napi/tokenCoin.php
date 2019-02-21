<?php
/**
 * Created by PhpStorm.
 * User: chengwanding@zuoyebang.com
 * Date: 2019/1/10
 * Time: 14:23
 */
Bd_Init::init('napi');
class addTokenCoin extends Hk_Common_BaseMultiDao {
        const USER_TOKEN_COIN = 901;
        const CACHE_USER_COIN_KEY = "tokencoin:%s";
        private $objCache;
        public function __construct() {
                $this->_dbName = 'zybucenter/zybucenter';
                $this->_table = 'tblUserTokenCoin';
                $this->_tableName   = "tblUserTokenCoin";
                $this->_partionKey  = "uid";
                $this->_partionType = self::TYPE_TABLE_PARTION_MOD;
                $this->_partionNum  = 20;
                $this->objCache     = Hk_Service_Memcached::getInstance('ucloud');
        }

        public function execute($uid) {
                if (!isset($uid)) { 
                    echo "请输入uid啊大兄弟\n";
                    die;
                }
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
                $cacheKey   = sprintf(self::CACHE_USER_COIN_KEY, $uid);
                $result = $this->objCache->delete($cacheKey);
                if (!$result) {
                        echo "写的什么狗屁代码，删缓存失败！"."\n";
                        return false;
                }
                echo sprintf("恭喜你，辣鸡代码更新成功，余额为%s\n", self::USER_TOKEN_COIN);
                return true;
        }

        public function update($uid) {
                $arrConds = [
                        "uid" => $uid,
                        ];
                $arrFields = [
                        "coin" => self::USER_TOKEN_COIN,
                        ];
                $ret = $this->updateByConds($uid, $arrConds, $arrFields);
                return $ret;
        }

        public function insert($uid) {
                $arrFields = [
                        "uid" => $uid,
                        "coin" => self::USER_TOKEN_COIN,
                        "updateTime" => time(),
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
$addTokenCoin = new addTokenCoin();
$addTokenCoin->execute($uid);
