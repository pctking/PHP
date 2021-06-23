<?php
$servername = "127.0.0.1";
$username = "root";
$password = "ws000323sw";
$dbname = "stu_result";
$conn = new mysqli($servername,$username,$password,$dbname);
@mysqli_set_charset($conn,utf8);
if($conn->connect_error){
    die("连接失败：".$conn->connect_error);
}
?>