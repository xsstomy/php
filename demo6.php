<html>
<body>
<!-- 
	请在此时使用 require：当文件被应用程序请求时。
请在此时使用 include：当文件不是必需的，且应用程序在文件未找到时应该继续运行时。
 -->
<h1>Welcome to my home page!</h1>
<?php
require 'vars.php';
echo "I have a $color $car.";
?>

</body>
</html>