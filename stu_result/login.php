<html>
<head>
<meta charset="utf-8" />
<link rel= "stylesheet" type="text/css" href="css/style.css" />
    <title>学生成绩管理系统</title>
</head>
<body>
    <h1>学生成绩管理系统</h1>
    <form action ="./server/user_server.php" method="post">
        <table>
            <tr>
                <td>用户名： </td>
                <td><input type="text" name= "account" ></td>
            </tr>
            <tr>
                <td>密码：</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td><button type= "submit">登录</button></td>
                <td>
                <span>
                    <?php echo isset($GET['message']) ? $GET['message'] : "" ;?>
                </span>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>