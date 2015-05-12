
<!DOCTYPE html>
<html>
<body>


	<!-- date(format,timestamp)
format	必需。规定时间戳的格式。
timestamp	可选。规定时间戳。默认是当前时间和日期。

	 -->


	 
<!-- d - 表示月里的某天（01-31）
m - 表示月（01-12）
Y - 表示年（四位数）
1 - 表示周里的某天 -->
<?php
echo "今天是 " . date("Y/m/d") . "<br>";
echo "今天是 " . date("Y.m.d") . "<br>";
echo "今天是 " . date("Y-m-d") . "<br>";
echo "今天是 " . date("l");
?>


<!-- h - 带有首位零的 12 小时小时格式
i - 带有首位零的分钟
s - 带有首位零的秒（00 -59）
a - 小写的午前和午后（am 或 pm）

下面的例子把时区设置为 "Asia/Shanghai"，然后以指定格式输出当前时间：
 -->


<?php
date_default_timezone_set("Asia/Shanghai");
echo "当前时间是 " . date("h:i:sa");
?>


<?php
$d=strtotime("10:38pm April 15 2015");
echo "创建日期 " . date("Y-m-d h:i:sa", $d);
?>


<?php
$d=strtotime("tomorrow");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("next Saturday");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("+3 Months");
echo date("Y-m-d h:i:sa", $d) . "<br>";
?>
</body>
</html>