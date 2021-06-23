<?php
error_reporting(0);
include("conn.php");
$id = $_GET['id'];
$sql = "select * from result where id ='$id'";
$result = $conn->query($sql);
$results = array();
if($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $results = $row;
    }
    echo json_encode($results);
} else {
    echo "未找到数据!";
}
$conn->close();
