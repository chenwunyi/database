



<?php
//$host="127.0.0.1";

$host = "140.127.74.186";
$username = "410977010";
$password = "410977010";
$dbname = "410977010";


if (!$conn) {
    die("連接失敗 : " . mysqli_error($conn));
} else {
    $sql = "SELECT package.id, package.customer_id, package.receivername, package.receiverphone, locate_record.truck, time_record.truck
    FROM package, locate_record,time_record " ;



    $result = mysqli_query($conn, $sql);
    $data = array();
    while($row = mysqli_fetch_row($result)){
        $row[2] = urlencode($row[2]);
        array_push($data, array('package.id' => $row[0]));
        array_push($data, array('package.customer_id' => $row[1]));
        array_push($data, array('package.receivername' => $row[2]));
        array_push($data, array('package.receiverphone' => $row[3]));
        array_push($data, array('locate_record.truck' => $row[4]));
        array_push($data, array('time_record.truck' => $row[5]));
       
    }
    $json = urldecode(json_encode($data));
    echo $json;
}
?>
