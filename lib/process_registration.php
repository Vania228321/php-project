<?php
    $login = trim(filter_var($_POST['login'], FILTER_SANITIZE_SPECIAL_CHARS));
    $username = trim(filter_var($_POST['username'], FILTER_SANITIZE_SPECIAL_CHARS));
    $email = trim(filter_var($_POST['email'], FILTER_SANITIZE_SPECIAL_CHARS));
    $password = trim(filter_var($_POST['password'], FILTER_SANITIZE_SPECIAL_CHARS));
    $repeat_password = trim(filter_var($_POST['repeat_password'], FILTER_SANITIZE_SPECIAL_CHARS));

    if (strlen($login) < 4) {
        echo "Длина логина должна быть не менее 4 символов!";
        exit();
    }

    if (strlen($username) < 4) {
        echo "Длина имени должна быть не менее 4 символов!";
        exit();
    }

    if (strlen($email < 4)) {
        echo "Длина почты должна быть не менее 4 символов!";
        exit();
    }

    if ($password != $repeat_password) {
        echo "Пароль и подвержденный пароль должны совпадать!";
        exit();
    }

    // Шифрование пароля при отправке в базу данных
    $salt = '56s89_)(*&^^&%$^#DFS';
    $password = md5($salt . $password);

    require_once "db.php";

    $sql = 'INSERT INTO users(login, username, email, password) VALUES (?, ?, ?, ?)';
    $query = $pdo->prepare($sql);
    $query->execute([$login, $username, $email, $password]);

    header('Location: /');