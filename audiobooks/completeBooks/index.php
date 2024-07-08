<?php require_once './logic/db.php'; ?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <?php require_once './common/head.php'; ?>
</head>

<body>

    <?php include_once './common/header.php' ?>

    <?php if (isset($_SESSION['user_login'])) : ?>
        <h1> Добро пожаловать, <?php echo $_SESSION['user_login']; ?> </h1>
        <a href="./logic/logout.php">Выйти из аккаунта</a>
        <br>
    <?php else : ?>
        <?php include_once './common/not_auth.php' ?>
    <?php endif; ?>


</body>

</html>