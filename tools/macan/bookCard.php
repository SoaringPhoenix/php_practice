<?php
/**
 * Created by PhpStorm.
 * User: chengwanding@zuoyebang.com
 * Date: 2019/1/9
 * Time: 20:11
 */
Bd_Init::init('macan');
Ap_Loader::getInstance()->registerLocalNamespace(["macan"]);
class addBookCard extends Hk_Common_BaseMultiDao {
        private $objCache;
        const BOOK_CARD_NUM = 50000;
        const CACHE_USER_INFO_KEY = "drawBook_userInfo_%s";
        public function __construct(){
                $this->objCache = Hk_Service_Memcached::getInstance("common");
                $this->_dbName = 'zybmacan/zybmacan';
                $this->_table = 'tblUserInfo';
                $this->_tableName   = "tblUserInfo";
                $this->_partionKey  = "uid";
                $this->_partionType = self::TYPE_TABLE_PARTION_MOD;
                $this->_partionNum  = 10;
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
                $cacheKey = sprintf(self::CACHE_USER_INFO_KEY, $uid);
                $result = $this->objCache->delete($cacheKey);
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
                        "bookCard" => self::BOOK_CARD_NUM,
                        ];
                $ret = $this->updateByConds($uid, $arrConds, $arrFields);
                return $ret;
        }

        public function insert($uid) {
                $arrFields = [
                        "uid" => $uid,
                        "bookCard" => self::BOOK_CARD_NUM,
                        "createdAt" => time(),
                        "updatedAt" => time(),
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
                $count = $ret[0]['count(uid)'];
                return $count;
        }
}

$uid = $argv[1];
$addBookCard = new addBookCard();
$addBookCard->execute($uid);
