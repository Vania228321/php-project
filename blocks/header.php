<?php session_start(); ?>
<header class="container">
    <span class="logo">logo</span>
    <nav>
        <ul>
            <li class="active"><a href="/">Главная</a></li>
            <li><a href="/about.php">О нас</a></li>
            <li><a href="/contacts.php">Контакты</a></li>
            <?php
                if (isset($_SESSION['login'])) {
                    echo '<li><a href="/user.php">Личный кабинет</a></li>
                          <li><a href="/lib/logout.php">Выход</a></li>';
                } else {
                    echo '<li><a href="/authorization.php">Вход</a></li>
                    <li><a href="/registration.php">Регистрация</a></li>';
                }
            ?>
        </ul>
    </nav>
</header>