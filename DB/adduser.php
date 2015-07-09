

<?php
/**
 * 向数据库添加数据
 * Created by PhpStorm.
 * User: xiashishi
 * Date: 15/7/5
 * Time: 下午11:30
 */
if(!isset($_POST['name'])){
    die('user name not define');
}

if(!isset($_POST['age'])){
    die('user age not define');
}

$name = $_POST['name'];
if(empty($name)){
    die('user name is empty');
}
$age = $_POST['age'];
if(empty($age)){
    die('user age is empty');
}

require_once 'functions.php';

connetDb();

//转换数据类型，确保是int类型
$age = intval($age);

mysql_query("INSERT INTO users(name,age) VALUES ('$name',$age)");
if(mysql_errno()){
    echo mysql_error();
}else{
    header("Location:allusers.php");
}





 