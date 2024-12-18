<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Личный кабинет</title>
    <link rel="stylesheet" href="/css/main.css">
</head>

<body>
<?php require_once "blocks/header.php"; ?>

<div class="feedback">
    <div class="container">
        <h2>Личный кабинет</h2>
        <p>Привет,  <?= $_SESSION['login'];  ?>! </p>
    </div>
</div>

<?php require_once "blocks/footer.php" ?>
</body>

</html>