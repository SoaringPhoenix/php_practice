<?php
/**
 * Created by PhpStorm.
 * Date: 2018/12/7
 * Time: 21:20
 */
Bd_init::init('napi');
class api_collect extends Hk_Common_BaseDao {
    const PATH = '/home/homework/app/macan/actions';

    public function __construct(){
        $this->_dbName = 'homework/homework';
        $this->_table = 'tblApiList';
    }
    public function execute() {
        $dir = $this->getContent(self::PATH);
        $user = $dir[0];
        $marketing = $dir[1];
        $mall = $dir[4];
        $drawbook = $dir[6];
        $dirUser = $this->getContent(self::PATH."/".$user."/v1");
        $dirMarketing = $this->getContent(self::PATH."/".$marketing."/v1");
        $dirMall = $this->getContent(self::PATH."/".$mall."/v1");
        $dirDrawbookV1 = $this->getContent(self::PATH."/".$drawbook."/v1");
        $dirDrawbookV2 = $this->getContent(self::PATH."/".$drawbook."/v2");
        $apis = [];
        foreach ($dirUser as $key => $user) {
            $apis[$key]['action'] = 'user';
            $apis[$key]['name'] = $user;
            $apis[$key]['status'] = 0;
            $apis[$key]['createdAt'] = time();
            $apis[$key]['updatedAt'] = time();
        }
        foreach ($dirMarketing as $key => $marketing) {
            $apis[$key]['action'] = 'marketing';
            $apis[$key]['name'] = $marketing;
            $apis[$key]['status'] = 0;
            $apis[$key]['createdAt'] = time();
            $apis[$key]['updatedAt'] = time();
        }
        foreach ($dirMall as $key => $mall) {
            $apis[$key]['action'] = 'mall';
            $apis[$key]['name'] = $mall;
            $apis[$key]['status'] = 0;
            $apis[$key]['createdAt'] = time();
            $apis[$key]['updatedAt'] = time();
        }
        foreach ($dirDrawbookV1 as $key => $drawbookV1) {
            $apis[$key]['action'] = 'drawbookV1';
            $apis[$key]['name'] = $drawbookV1;
            $apis[$key]['status'] = 0;
            $apis[$key]['createdAt'] = time();
            $apis[$key]['updatedAt'] = time();
        }
        foreach ($dirDrawbookV2 as $key => $drawbookV2) {
            $apis[$key]['action'] = 'drawbookV2';
            $apis[$key]['name'] = $drawbookV2;
            $apis[$key]['status'] = 0;
            $apis[$key]['createdAt'] = time();
            $apis[$key]['updatedAt'] = time();
        }
        foreach ($apis as $key => $api) {
            $api = $apis[$key];
            $ret = $this->insertRecords($api);
        }
        if ($ret != true) {
            echo 'we have some error';
        }
        else {
            echo 'insert success!';
        }
    }

    function getContent($path) {
        $dir = opendir($path);
        $arrDir = [];
        while ($content = readdir($dir)) {
            if ($content != '.' && $content != '..') {
                $arrDir[] = $content;
            }
        }
        closedir($path);
        return $arrDir;
    }
}
$apiCollect = new api_collect();
$apiCollect->execute();

