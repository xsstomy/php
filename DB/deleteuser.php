
<?php
/**
 * Created by PhpStorm.
 * User: xiashishi
 * Date: 15/7/7
 * Time: 下午10:38
 */

require_once 'functions.php';

if(empty($_GET['id'])){
    die('id is empty');
}

connetDb();

$id = intval($_GET['id']);

mysql_query("DELETE FROM users WHERE  id = $id");

if(mysql_errno()){
    die("Fail to delete user with id $id");
}else {
    header("Location:allusers.php");
}

