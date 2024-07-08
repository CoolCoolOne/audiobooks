<?php require_once './logic/db.php'; ?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <?php require_once './common/head.php'; ?>
</head>

<body>

    <?php include_once './common/header.php' ?>

    <?php if (isset($_SESSION['user_login'])) : ?>

        <section id="book-sec">
            <?php include_once './common/show_books.php'; ?>
        </section>

    <?php else : ?>
        <?php include_once './common/not_auth.php' ?>
    <?php endif; ?>


</body>

</html>