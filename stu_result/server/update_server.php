<?php
error_reporting(0);
include("conn.php");
$id = $_POST['id'];
$name = $_POST['name'];
$age = $_POST['age'];
$result = $_POST['result'];
$yw = $_POST['yw'];
$yy = $_POST['yy'];
$xh = $_POST['xh'];
$bj = $_POST['bj'];
$sql = "update result set name = '". $name ."',age = $age,result = $result,yw = $yw,yy = $yy,xh = $xh,bj = $bj where id =$id";
if ($conn->query($sql)) {
    echo "修改成功!";
} else {
    echo "Error ： " . $sql . "<br>" .$conn->error;
}
$conn->close();