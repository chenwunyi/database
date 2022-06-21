<?php
//$host="127.0.0.1";

$host = "140.127.74.186";
$username = "410977010";
$password = "410977010";
$dbname = "410977010";


if (!$conn) {
  die("連接失敗 : " . mysqli_error($conn));
} else {
  $sql = "SELECT customer.id, customer.name, customer.frequency, customer.payment, count(package.id)
    FROM customer, package GROUP BY package.customer_id order by count(package.id) desc";


  $result = mysqli_query($conn, $sql);
  $data = array();
  while ($row = mysqli_fetch_row($result)) {
    $row[1] = urlencode($row[1]);
    array_push($data, array('customer.id' => $row[0]));
    array_push($data, array('customer.name' => $row[1]));
    array_push($data, array('customer.frequency' => $row[2]));
    array_push($data, array('customer.payment' => $row[3]));
    array_push($data, array('count' => $row[4]));
  }
  $json = urldecode(json_encode($data));
  echo $json;
}
?>
