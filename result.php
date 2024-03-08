<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <title>Экзаменационные билеты</title>
    <meta name="description" content="Результаты">
    <meta name="keywords" content="Экзаменационные билеты">
    <meta name="author" content="Кукаева Вика">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
 
    
</head>
<body>
    <header></header>
    <main class=container>
        <div>
        <h1 class="text-center">Результаты</h1>
    
<?php require_once "db_connect.php" ?>

<?php
$level = $_GET["level"];
$sql = $conn->prepare('SELECT * FROM answers WHERE id = ?');
$sql->bind_param("s", $level);
$sql->execute();
$answers = $sql->get_result()->fetch_row();
$bilets = $conn->query('SELECT * FROM bilets')->fetch_row(); 

$counter = 0;
$i = 1;
?>


<table class="table table-primary">
    <tr>
        <th>Номер вопроса </th>
        <th>Твой вариант ответа</th>
        <th>Правильный вариант</th>
    </tr>
    <?php foreach (array_map(null, array_slice($bilets, 1, 15), array_slice($answers, 1, 15)) as $pair) {
 

    ?>
    <?php if ($pair[0]==$pair[1]) { 
        $counter++?> 
        <tr class="table-success">
    <?php ;} else {?>
        <tr class="table-danger">
    <?php ;} ?>
        <td><?php echo $i++; ?></td>
        <td><?php echo $pair[0]; ?></td>
        <td><?php echo $pair[1] ?></td>
    </tr>
    <?php } ?>
</table>

<p>Правильных ответов: <?=$counter?></p>
<?php if ($counter > 13) { ?>
    <div class="alert alert-success" role="alert">
        Отлично, у тебя получилось!
    </div>
    <div class="col-3 my-4 p-1"><a class="btn btn-success" href="get_license.php">Получить права</a></div>
<?php } elseif  ($counter > 10) {?>
    <div class="alert alert-warning" role="alert">
        Очень хорошо, но тебе нужно еще постараться.
    </div>
    <div class="col-3 my-4 p-1"><a class="btn btn-secondary" href="registr.php">Пройти тест заново</a></div>
<?php } else {?>
    <div class="col-3 my-4 p-1"><a class="btn btn-secondary" href="registr.php">Пройти тест заново</a></div>
<?php } ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>


