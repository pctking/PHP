<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="js/index.js"></script>
</head>
<body>
<h1>学生成绩管理系统</h1>
<table>
		<tr>
			<th>序号</th>
			<th>学号</th>
			<th>班级</th>
			<th>姓名</th>
			<th>年龄</th>
			<th>数学</th>
			<th>语文</th>
			<th>英语</th>
			<th>总分</th>
			<th>平均分</th>
			<th>操作</th>
		</tr>
<?php 
require_once("./server/conn.php");  
$sql = "select * from result"; 
$result=$conn->query($sql);

$sqlsum = "SELECT sum(result+yy+yw) FROM `result`GROUP by id";
$resultsum = mysqli_query($conn,$sqlsum);
$sqlavg = "SELECT round(sum(yw+result+yy)/3,2) FROM `result` GROUP BY id";
$resultavg = mysqli_query($conn,$sqlavg);

if($result->num_rows > 0){
	while($row=$result->fetch_assoc()){
?>
		<tr> 
			<td><?php echo $row["id"]; ?></td>
			<td><?php echo $row["xh"]; ?></td>
			<td><?php echo $row["bj"]; ?></td>
			<td><?php echo $row["name"]; ?></td>   
			<td><?php echo $row["age"]; ?></td>
			<td><?php echo $row["result"]; ?></td>
			<td><?php echo $row["yw"]; ?></td>
			<td><?php echo $row["yy"]; ?></td>
			<td><?php echo mysqli_fetch_array($resultsum)['sum(result+yy+yw)'] ?></td>
			<td><?php echo mysqli_fetch_array($resultavg)['round(sum(yw+result+yy)/3,2)'] ?></td>
			<td>
				<button onclick="toUpdate(this)">修改</button>
				<button onclick="remove(this)">删除</button>	
			</td>
		</tr>
<?php
	}
}
    $conn->close();
?>
<tr>
    <td colspan="100"><a href="insert.php"><button>添加</button></a></td>
</tr>
 </table>
 </body>
</html>
<script type="text/javascript">
	function remove(ele){
		let id=ele.parentElement.parentElement.children[0].innerText;
		window.location.href="./server/remove_server.php?id="+id;
	}
	function toUpdate(ele){
		let id=ele.parentElement.parentElement.children[0].innerText;
		window.location.href="./update.php?id="+id;
	}
</script>
