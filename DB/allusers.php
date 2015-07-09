<?php
require_once 'functions.php';
?>
<!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <title>所有用户</title>
</head>
<body>
<a href="adduser.html">添加用户</a>
<table style='text-align: left' >
    <tr><th>id</th><th>名字</th><th>年纪</th><th>修改</th><th>删除</th></tr>
<?php
/**
 * Created by PhpStorm.
 * User: xiashishi
 * Date: 15/7/5
 * Time: 下午10:34
 */


$conn = connetDb();

$result = mysql_query('SELECT * FROM users');

$dataCount = mysql_num_rows($result);

for($i = 0 ; $i < $dataCount ; $i++)
{
    $result_arr = mysql_fetch_assoc($result);

    $id = $result_arr['id'];
    $name = $result_arr['name'];
    $age = $result_arr['age'];

    echo "<tr><td>$id</td><td>$name</td><td>$age</td><td><a href='edituser.php?id=$id'>修改</a></td><td><a href='deleteuser.php?id=$id'>删除</a></td></tr>";
}

?>
</table>
</body>
</html>


 