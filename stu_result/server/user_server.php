<?php
include ("conn.php" );
$account = $_POST['account'] ;
$password = $_POST['password'];
$sql = "select id from user where account = '$account' and password = '$password'";
$result = $conn->query($sql);

if($result->num_rows > 0) {
    session_start();
    $SESSION["user.account"] =$account;
    $result->free_result();
    $conn->close();
    header("location:../index.php");
} else {
    $result->free_result();
    $conn->close();
    header("location:../login.php?message=用户名或密码不一致");
}