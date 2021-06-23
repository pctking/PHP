<html>
<head>
<meta charset="utf-8"/>
    <title>学生成绩管理系统</title>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <script type="text/javascript" src= "js/index.js"></script>
</head>
<body>
    <h1>学生成绩管理系统</hl>
    <table>
        <tr>
            <td>姓名：</td>
            <td><input type="text" name="name"></td>
        </tr>
		<tr>
		    <td>学号：</td>
		    <td><input type="text" name="xh"></td>
		</tr>
		<tr>
		    <td>班级：</td>
		    <td><input type="text" name="bj"></td>
		</tr>
        <tr>
            <td>年龄：</td>
            <td><input type="text" name="age"></td>
        </tr>
        <tr>
            <td>英语：</td>
            <td><input type="text" name="result"></td>
        </tr>
		<tr>
		    <td>语文：</td>
		    <td><input type="text" name="yw"></td>
		</tr>
		<tr>
		    <td>英语：</td>
		    <td><input type="text" name="yy"></td>
		</tr>
        <tr>
            <td colspan="2"><button onclick="insert()">添加</button></td>
        </tr>
    </table>
</body>
</html>
<script>
	function insert(){
		let name=document.getElementsByName("name")[0].value;
		let age=document.getElementsByName("age")[0].value;
		let result=document.getElementsByName("result")[0].value;
		let yw=document.getElementsByName("yw")[0].value;
		let yy=document.getElementsByName("yy")[0].value;
		let xh=document.getElementsByName("xh")[0].value;
		let bj=document.getElementsByName("bj")[0].value;
		let ajax=getAjax();
		ajax.open("POST","./server/insert_server.php",false);  /*ajax.open("POST","（14）",false);*/
		ajax.setRequestHeader("Content-type","application/x-www-form-urlencoded;charset=UTF-8");
		ajax.send("name="+name+"&age="+age+"&result="+result+"&yw="+yw+"&yy="+yy+"&xh="+xh+"&bj="+bj);
        alert(ajax.responseText);
        window.location.href="index.php";
	}
</script>