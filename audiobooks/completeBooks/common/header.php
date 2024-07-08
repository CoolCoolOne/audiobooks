<header>
    <nav>
        <?php if (isset($_SESSION['user_login'])) : ?>
            <a href="./index.php">Главная</a>
            <a href="./books.php">Книги</a>
        <?php else : ?>
            <a href="./signin.php">Авторизироваться</a>
            <a href="./signup.php">Зарегаться</a>
        <?php endif; ?>
    </nav>
</header>