
<?php
/**
 * Created by PhpStorm.
 * User: xiashishi
 * Date: 15/7/5
 * Time: 下午10:38
 */
require_once 'config.php';
function connetDb(){
    $conn = mysql_connect(MYSQL_HOST,MYSQL_USER,MYSQL_PW);
    if(!$conn){
        die('Can not connect db');
    }
    mysql_select_db('myap');
    return $conn;
}




 