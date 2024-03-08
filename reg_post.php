<?php require_once "db_connect.php" ?>
<? ob_start();?>
<?php
$name=$_POST['name'];
$surname=$_POST['surname'];
$age=$_POST['age'];

$conn->query('TRUNCATE TABLE bilets');
$sql = $conn->prepare("INSERT INTO bilets (name, surname, age) VALUES (?,?,?)");
$sql->bind_param("sss", $name, $surname, $age);

if ($sql->execute() === TRUE) {
  echo "Данные отправленны";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();

$new_url = "test.php?level=$age";
header('Location: '.$new_url);
ob_end_flush();

?> 