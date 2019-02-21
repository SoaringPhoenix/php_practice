<?php
/**
 * Created by PhpStorm.
 * User: zuoyebang
 * Date: 2019/1/19
 * Time: 17:44
 */
Bd_Init::init('macan');
class getBooks extends Hk_Common_BaseMultiDao {
        const SOURCE = 'script';
        const OPCODE = 88;
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
                $exists = $this->exists($uid);
                $arrTotal = [];
                $arrExists = [];
                $subject = [];
                foreach ($total as $key => $value) {
                        $arrTotal[$key] = $value['bookId'];
                        $subject[$arrTotal[$key]] = $value['subjectId'];
                }
                foreach ($exists as $key => $value) {
                        $arrExists[$key] = $value['bookId'];
                }
                $need = array_diff($arrTotal, $arrExists);
                foreach ($need as $key => $value) {
                        $this->fillUp($uid, $subject[$value], $value);
                }
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
                $fields = "bookId, subjectId";
                $sql = "SELECT $fields FROM $table;";
                $ret = $this->query($sql);
                return $ret;
        }

        public function fillUp($uid, $subjectId, $bookId) {
                $arrFields = [
                        'uid' => $uid,
                        'subjectId' => $subjectId,
                        'bookId' => $bookId,
                        'cost' => 0,
                        'source' => self::SOURCE,
                        'opCode' => self::OPCODE,
                        'status' => 1,
                        'finishedAt' => time(),
                        'createdAt' => time(),
                        'updatedAt' => time(),
                        ];
                $ret = $this->insertRecords($uid, $arrFields);
                if ($ret == false) {
                Bd_Log::warning("-------dcy------------".var_export($ret, true));
                }
                return $ret;
        }
}
$uid = !empty($argv[1]) ? $argv[1]: 2000017206;
$obj = new getBooks();
$obj->execute($uid);
