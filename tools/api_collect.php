<?php
/**
 * Created by PhpStorm.
 * User: chengwanding@zuoyebang.com
 * Date: 2018/12/7
 * Time: 21:20
 */
$ret = Bd_init::init('napi');
#var_export($ret);
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
        #var_export($dirUser);
        #var_export($dirMarketing);
        #var_export($dirMall);
        #var_export($dirDrawbookV1);
        #var_export($dirDrawbookV2);
        foreach ($dirUser as $key1 => $user) {
            $apis[$key1]['action'] = 'user';
            $apis[$key1]['name'] = $user;
            $apis[$key1]['status'] = 0;
            $apis[$key1]['createdAt'] = time();
            $apis[$key1]['updatedAt'] = time();
        }
        #var_export($apis);
        foreach ($dirMarketing as $key2 => $marketing) {
            $apis[$key2]['action'] = 'marketing';
            $apis[$key2]['name'] = $marketing;
            $apis[$key2]['status'] = 0;
            $apis[$key2]['createdAt'] = time();
            $apis[$key2]['updatedAt'] = time();
        }
        #var_export($apis);
        foreach ($dirMall as $key3 => $mall) {
            $apis[$key3]['action'] = 'mall';
            $apis[$key3]['name'] = $mall;
            $apis[$key3]['status'] = 0;
            $apis[$key3]['createdAt'] = time();
            $apis[$key3]['updatedAt'] = time();
        }
        #var_export($apis);
        foreach ($dirDrawbookV1 as $key4 => $drawbookV1) {
            $apis[$key4]['action'] = 'drawbookV1';
            $apis[$key4]['name'] = $drawbookV1;
            $apis[$key4]['status'] = 0;
            $apis[$key4]['createdAt'] = time();
            $apis[$key4]['updatedAt'] = time();
        }
        #var_export($apis);
        foreach ($dirDrawbookV2 as $key5 => $drawbookV2) {
            $apis[$key5]['action'] = 'drawbookV2';
            $apis[$key5]['name'] = $drawbookV2;
            $apis[$key5]['status'] = 0;
            $apis[$key5]['createdAt'] = time();
            $apis[$key5]['updatedAt'] = time();
        }
        #var_export($apis);
        foreach ($apis as $key => $api) {
            $api = $apis[$key];
        #    $ret = $this->insertRecords($api);
        }
        var_export($api);
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

