
<?php
/**
 *
 * 修改数据库数据
 * Created by PhpStorm.
 * User: xiashishi
 * Date: 15/7/6
 * Time: 下午11:23
 */

require_once 'functions.php';

if(empty($_POST['id'])){

}
if(empty($_POST['name'])){

}
if(empty($_POST['age'])){

}
$id = intval($_POST['id']);
$name = $_POST['name'];
$age = intval($_POST['age']);

connetDb();

mysql_query("UPDATE users SET  name = '$name',age = $age WHERE id = $id");


if(mysql_errno()){
    echo mysql_error();
}else {
    header("Location:allusers.php");
}



 