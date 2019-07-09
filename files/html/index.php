<?php
/**
 * Created by PhpStorm.
 * User: jinzhao
 * Date: 2019/7/9
 * Time: 7:07 AM
 */

if(isset($_GET['file'])) {
    include $_GET['file'];
} else {
    Header('Location: index.php?file=upload.php');
}
