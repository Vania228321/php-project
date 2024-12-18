<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход</title>
    <link rel="stylesheet" href="/css/main.css">
</head>

<body>
<?php require_once "blocks/header.php"; ?>

<div class="feedback">
    <div class="container">
        <h2>Авторизация</h2>

        <form method="post" action="/lib/process_authorization.php">

            <label>Логин</label>
            <input type="text" name="login">

            <label>Пароль</label>
            <input type="password" name="password">

            <button type="submit">Войти</button>
        </form>
    </div>
</div>

<?php require_once "blocks/footer.php" ?>
</body>

</html>