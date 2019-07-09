<?php
/**
 * Created by PhpStorm.
 * User: jinzhao
 * Date: 2019/7/9
 * Time: 7:07 AM
 */

if(isset($_GET['file'])) {
    $re = '/^uploads\/[\d|\w]*.jpg$/m';
    $str = $_GET['file'];

    preg_match_all($re, $str, $matches, PREG_SET_ORDER, 0);

    if(count($matches) == 0 && $_GET['file'] !== 'upload.php') {
        die('你不老实哦~');
    }

    include $_GET['file'];
} else {
    Header('Location: index.php?file=upload.php');
}
