<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
    <link rel="stylesheet" href="/css/main.css">
</head>

    <body>
    <?php require_once "blocks/header.php"; ?>

    <div class="feedback">
        <div class="container">
            <h2>Регистрация</h2>

            <form method="post" action="/lib/process_registration.php">
                <div class="inline">
                    <div>
                        <label>Логин</label>
                        <input type="text" name="login">
                    </div>
                    <div>
                        <label>Имя</label>
                        <input type="text" name="username">
                    </div>
                </div>
                <label>Email</label>
                <input type="email" class="one-line" name="email">

                <label>Пароль</label>
                <input type="password" class="one-line" name="password">

                <label>Подтверждение пароля</label>
                <input type="password" class="one-line" name="repeat_password">

                <button type="submit">Зарегистрироваться</button>
            </form>
        </div>
    </div>

    <?php require_once "blocks/footer.php" ?>
    </body>

</html>