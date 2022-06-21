<?php



//$host="127.0.0.1";

$host="140.127.74.186";
$username="410977010";
$password="410977010";
$dbname="410977010";

$conn = mysqli_connect($host, $username, $password, $dbname);



if(!$conn){
    die("連接失敗 : ". mysqli_error($conn));
    
}
else{


$sql="SELECT time_record.receive,package.id,package.sum FROM package,time_record WHERE package.customer_id='1456545' ,'".$_GET['q']."."00:00:00"'<=time_record.receive<='".$_GET['q']."."23:59:59"'";
//可能會有問題日曆格式2022-06-20 跟資料庫格式不同


$result=mysqli_query($conn,$sql);

if ($result) {
    // mysqli_num_rows方法可以回傳我們結果總共有幾筆資料
    if (mysqli_num_rows($result)>0) {
        // 取得大於0代表有資料
        // while迴圈會根據資料數量，決定跑的次數
        // mysqli_fetch_assoc方法可取得一筆值
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<tr>';
            echo"<td>" .$row['time_record.receive'] ."</td>";
            echo "<td>" . $row['package.id'] . "</td>";
            echo "<td>" . $row['package.sum'] . "</td>";
            
            echo "</tr>";
        }
    }
 
}

mysqli_close($conn);

}


?>