<?php 

// $db_host = "localhost";
// $db_user = "vika";
// $db_pass = "1234";
// $db_name = "bilets";

$db_host='172.19.0.2'; // ваш хост
$db_name='bilets1'; // ваша бд
$db_user='root'; // пользователь бд
$db_pass='qwerty'; // пароль к бд

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);// включаем сообщения об ошибках
// Create connection
$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$conn->set_charset("utf8mb4"); // задаем кодировку

?>