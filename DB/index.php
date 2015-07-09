<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>数据库连接</title>
</head>
<body>



<?php
/**
 * Created by PhpStorm.
 * User: xiashishi
 * Date: 15/7/1
 * Time: 下午11:07
 */

$conn = @mysql_connect('localhost','root','');

if( $conn ){
//    echo '连接成功';
    mysql_select_db('myap', $conn);

    //获取数据
    $result = mysql_query('SELECT * FROM users');

//    $result_arr = mysql_fetch_assoc($result);
//
//    print_r($result_arr);

    //数据条数
    $data_count = mysql_num_rows($result);
    for($i = 0 ; $i < $data_count; $i++)
    {
        print_r(mysql_fetch_assoc($result));
    }

}else{
    echo '连接失败';
}
?>

</body>
</html>