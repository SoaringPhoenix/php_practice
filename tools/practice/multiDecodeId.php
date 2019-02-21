<?php
Bd_Init::init('practice');
$tids = ['66f23c8ff82110288e293b38f0dd5cae', '711cff3f34bc00eb49f040f4e60f82ad','c4dd3b8dc3bc419f326ac79cf4798d56', '59681d10ea45b9d333c2fbd798348f94','032bc32077bae0384f7d952a844e4e18'];
$qid = [];
foreach($tids as $key => $tid) {
    $qid[$key] = Practice_Tools::decodeTid($tid);
    }
var_dump($qid);



