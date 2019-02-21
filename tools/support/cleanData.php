<?php
/**
 * Created by PhpStorm.
 * User: zuoyebang
 * Date: 2019/1/18
 * Time: 14:20
 * Desc:处理超大兑换码数量的任务和兑换码
 */
Bd_Init::init('support');
class cleanData extends Hk_Common_BaseDao {
        public function __construct() {
                $this->_dbName = 'zybsupport/zybsupport';
                $this->_table= 'tblRandomCode';
        }
        public function delete() {
                $ret = [];
                $task = "";
                $sql2 = 'select `quantity`, `taskId` from `tblRandomTask` where `quantity` >= 1000';
                $record = $this->query($sql2);
                foreach ($record as $key => $rec) {
                        $task .= $rec['taskId'].",";
                }
                $task = substr($task, 0, strlen($task) - 1);
                for ($i = 0; $i < 20; $i++) {
                        $table =$this->_table.$i;
                        $sql = "select `code`, `taskId` from {$table} where taskId in ({$task}) limit 100;";
                        $sql = "delete from {$table} where taskId in ({$task});";
                        $ret[$i] = $this->query($sql);
                }
                var_dump($ret);
        }
}
$clean = new cleanData();
$clean->delete();

