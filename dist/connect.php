<?php
header('Content-Type: application/json; charset=UTF-8'); //確認連線採用編碼-8
if (isset($_POST["method_123"])) {
    $sql = "select *  from package";

    $link = mysqli_connect('140.127.74.186', '410977010', '410977010', '410977010'); //主機, 使用者, 密碼, 資料庫名
    if ($conn) {
        echo '連線成功';
    } else {
        echo '連線失敗';
        exit(); //結束程式
    }
}
