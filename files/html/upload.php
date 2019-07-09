<?php
/**
 * Created by PhpStorm.
 * User: jinzhao
 * Date: 2019/7/9
 * Time: 7:54 AM
 */


if(isset($_FILES['upload_file'])) {
    @mkdir("uploads/");


    $filename = uniqid().".jpg";
    move_uploaded_file($_FILES["upload_file"]["tmp_name"],
        "uploads/" . $filename);
    echo "文件已储存在: " . "uploads/" . $filename;
}

?>


<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <title>上传文件</title>
</head>
<body>
<div style="text-align: center">
    <h>文件会被上传到 ./uploads</h>
    <form action="index.php?file=upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="upload_file"/>
        <input type="submit" value="上传"/>
    </form>
</div>
</body>
</html>

