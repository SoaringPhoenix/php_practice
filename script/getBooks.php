<?php
/**
 * Created by PhpStorm.
 * User: zuoyebang
 * Date: 2019/1/19
 * Time: 17:44
 */
Bd_Init::init('macan');
class getBooks extends Hk_Common_BaseMultiDao {
    public function __construct() {
        $this->_dbName = 'zybmacan/zybmacan';
        $this->_table = 'tblBookRecord';
        $this->_tableName = 'tblBookRecord';
        $this->_partionKey = 'uid';
        $this->_partionType = self::TYPE_TABLE_PARTION_MOD;
        $this->_partionNum = 10;
    }

    public function execute($uid) {
        $total = $this->total();
        $arrTotal = [];
        $exists = $this->exists($uid);
        foreach ($total as $key => $value) {
        }
        $need = array_diff($total, $exists);
        var_export($need);
    }

    public function exists($uid) {
        $arrConds = [
            "uid" => $uid,
        ];
        $arrFields = [
            "bookId"
        ];
        $ret = $this->getListByConds($uid, $arrConds, $arrFields);
        return $ret;
    }

    public function total() {
        $table = "tblSubjectBook";
        $sql = "SELECT bookId FROM $table;";
        $ret = $this->query($sql);
        var_dump($ret);
        return $ret;
    }
}
$uid = $argv[1];
$obj = new getBooks();
$obj->execute($uid);