<?php
error_reporting(0);
include("conn.php");
$name = $_POST['name'];
$age = $_POST['age'];
$result = $_POST["result"];
$yw = $_POST["yw"];
$yy = $_POST["yy"];
$xh = $_POST["xh"];
$bj = $_POST["bj"];
$stmt = $conn->prepare("insert into result (name,age,result,yw,yy,xh,bj) values (?,?,?,?,?,?,?)");
$stmt->bind_param("siiiiss",$name,$age,$result,$yw,$yy,$xh,$bj);
$stmt->execute();
if ($conn->affected_rows) {
    echo "添加成功!";
} else {
    echo "Error:".$conn->error;
}
$stmt->close();
$conn->close();

