<?php 

$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $website = test_input($_POST["website"]);
  $comment = test_input($_POST["comment"]);
  // $gender = test_input($_POST["gender"]);
}
//php trim() 函数）去除用户输入数据中不必要的字符（多余的空格、制表符、换行）
//PHP stripslashes() 函数）删除用户输入数据中的反斜杠（\）
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
echo test_input($name);
 ?>