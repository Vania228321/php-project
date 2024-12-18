<?php
    session_start();
    $login = trim(filter_var($_POST['login'], FILTER_SANITIZE_SPECIAL_CHARS));
    $password = trim(filter_var($_POST['password'], FILTER_SANITIZE_SPECIAL_CHARS));

    if (strlen($login) < 4) {
        echo "Длина логина должна быть не менее 4 символов!";
        exit();
    }

    if (strlen($password) < 4) {
        echo "Длина пароля должна быть не менее 4 символов!";
        exit();
    }

    // Шифрование пароля при отправке в базу данных
    $salt = '56s89_)(*&^^&%$^#DFS';
    $password = md5($salt . $password);

    require_once "db.php";

    $sql = "SELECT id FROM users WHERE login = ? AND password = ?";
    $query = $pdo->prepare($sql);
    $query->execute([$login, $password]);

    if ($query->rowCount() === 0) {
        echo "Такого пользователя в базе нет!";
    } else {
        $_SESSION['login'] = $login;
        header('Location: /user.php');
    }