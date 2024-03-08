<?php require_once "db_connect.php" ?>
<? ob_start();?>
<?php

$sql = $conn->prepare("UPDATE bilets SET 
Cifer1=?,
Cifer2=?,
Cifer3=?,
Cifer4=?,
Cifer5=?,
Cifer6=?,
Cifer7=?,
Cifer8=?,
Cifer9=?,
Cifer10=?,
Cifer11=?,
Cifer12=?,
Cifer13=?,
Cifer14=?,
Cifer15=?");

$sql->bind_param("sssssssssssssss", 
$_POST['unittype1'],
$_POST['unittype2'],
$_POST['unittype3'],
$_POST['unittype4'],
$_POST['unittype5'],
$_POST['unittype6'],
$_POST['unittype7'],
$_POST['unittype8'],
$_POST['unittype9'],
$_POST['unittype10'],
$_POST['unittype11'],
$_POST['unittype12'],
$_POST['unittype13'],
$_POST['unittype14'],
$_POST['unittype15']
);

if ($sql->execute() === TRUE) {
  echo "Данные отправленны";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();

$level = $_GET["level"];
$new_url = "result.php?level=$level";
header('Location: '.$new_url);
ob_end_flush();

?> 