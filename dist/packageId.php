<?php



//$host="127.0.0.1";

$host = "140.127.74.186";
$username = "410977010";
$password = "410977010";
$dbname = "410977010";


if (!$conn) {
    die("連接失敗 : " . mysqli_error($conn));
} else {
    $sql = "SELECT * FROM package WHERE id='" . $_GET['q'] . "' ";



    $result = mysqli_query($conn, $sql);
    $data = array();
    while ($row = mysqli_fetch_row($result)) {
        $row[2] = urlencode($row[2]);
        array_push($data, array('包裹ID' => $row[0]));
        array_push($data, array('顧客ID' => $row[1]));
        array_push($data, array('收件人' => $row[2]));
        array_push($data, array('電話' => $row[3]));
        array_push($data, array('跨國' => $row[4]));
        array_push($data, array('有害' => $row[5]));
        array_push($data, array('材積' => $row[6]));
        array_push($data, array('重量' => $row[7]));
        array_push($data, array('運費' => $row[8]));
    }
    $json = urldecode(json_encode($data));
    echo $json;
}


if ($result) {
    // mysqli_num_rows方法可以回傳我們結果總共有幾筆資料
    if (mysqli_num_rows($result) > 0) {
        // 取得大於0代表有資料
        // while迴圈會根據資料數量，決定跑的次數
        // mysqli_fetch_assoc方法可取得一筆值
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<tr>';
            echo '<td>' . $row['id'] . '</td>';
            echo '<td>' . $row['customer_id'] . '</td>';
            echo '<td>' . $row['receivername'] . '</td>';
            echo '<td>' . $row['receiverphone'] . '</td>';
            echo '<td>' . $row['international'] . '</td>';
            echo '<td>' . $row['injurant'] . '</td>';
            echo '<td>' . $row['volume'] . '</td>';
            echo '<td>' . $row['weight'] . '</td>';
            echo '<td>' . $row['sum'] . '</td>';
            echo '</tr>';
        }
    }
}
