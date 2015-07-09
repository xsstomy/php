    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <title>修改数据库数据</title>
    </head>
    <body>


    <?php
    /**
     * 修改数据库数据
     * Created by PhpStorm.
     * User: xiashishi
     * Date: 15/7/6
     * Time: 下午11:15
     */
    require_once 'functions.php';

    if(!empty($_GET['id'])){
        connetDb();
        //转化成整型
        $id = intval($_GET['id']);

        $result = mysql_query("SELECT * FROM users WHERE id = $id");

        if(mysql_errno()){
            die('can not connect db');
        }

        $arr = mysql_fetch_assoc($result);


    }else{
        die('id not define');
    }

    ?>

    <form action="edituser_server.php" method="post">
        <div>用户ID
            <input type="text" name="id" value="<?php echo $arr['id'] ?>">
        </div>
        <div>用户名字
            <input type="text" name="name" value="<?php echo $arr['name'] ?>">
        </div>
        <div>用户年纪
            <input type="text" name="age" value="<?php echo $arr['age'] ?>">
        </div>
        <div>
            <input type="submit" value="提交">
        </div>
    </form>
    </body>
    </html>