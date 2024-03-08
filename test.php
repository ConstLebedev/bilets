<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <title>Экзаменационные билеты</title>
    <meta name="description" content="Страница билета">
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
<?php
$level = $_GET["level"];
$levels = array("", "Начальный", "Средний", "Продвинутый");
?>

            <h1 class="text-center"> <?php echo $levels[$level] ?> уровень</h1>
            <div class="container min-vh-100 d-flex justify-content-center align-item-center">
                <form action="test_post.php?level=<?php echo $level ?>" method="POST">
                    <table class="table table-bordered" style="width: 900px">

<?php

if ($level == 1) {
    require "bilet1-1.php";
    require "bilet1-2.php";
    require "bilet1-3.php";
} elseif ($level == 2) {
    require "bilet2-1.php";
    require "bilet2-2.php";
    require "bilet2-3.php";
} else {
    require "bilet3-1.php";
    require "bilet3-2.php";
    require "bilet3-3.php";
}

?>
                    </table>
                    <div class="row justify-content-end my-2 p-2">
                        <div class="col-2 mx-4 p-1"><button type="submit" class="btn btn-primary">Продолжить</button> </div>
                    </div>
                </form> 
            </div>
        </div>
    </main>
       
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
