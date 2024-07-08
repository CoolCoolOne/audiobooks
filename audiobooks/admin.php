<?php
require_once './db.php';

if (isset($_SESSION['user_login'])) {
    echo $_SESSION['user_login'] . ', Вы на странице админа!';
    echo '<br><br>';
    echo 'Вы посещали эту страницу за последнее время ' . $_COOKIE['page_visit'] . ' раз';
    echo '<br><br>';
    echo '<a href="logout.php">ВЫХОД из аккаунта</a>';
}else{
    die( 'Нет доступа к странице, авторизируйтесь');
}
