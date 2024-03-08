<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <title>Экзаменационные билеты</title>
    <meta name="description" content="Страница регистрации">
    <meta name="keywords" content="Экзаменационные билеты">
    <meta name="author" content="Кукаева Вика">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
 
    
</head>
<body>
    <main class="container">
        <h1 class="text-center">Экзаменационные билеты на знание правил дорожного движения для велосипедистов и водителей мопедов</h1>
        <div class="container d-flex justify-content-center align-item-center">
                <form action="reg_post.php" method="POST">
                    <div class="mb-3">
                        <label for="name" class="form-label">Имя</label>
                        <input type="text" class="form-control" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="surname" class="form-label">Фамилия</label>
                        <input type="text" class="form-control" name="surname" required>
                    </div>
                    <div class="mb-3">
                        <label for="age" class="form-label">Возраст</label>
                        <select class="form-select" name="age" required>
                            <option selected value="">Выберите возраст</option>
                            <option value="1">До 12 лет</option>
                            <option value="2">От 13 до 16 лет</option>
                            <option value="3">От 16 лет</option>
                        </select>
                    </div>
            
                    <button type="submit" class="btn btn-primary">Продолжить</button>
                </form>
        </div>
            
    </main>
       
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
