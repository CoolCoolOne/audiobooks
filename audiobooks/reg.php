<?php
require_once 'db.php';
$login = trim($_POST['login']);
$pwd = trim( $_POST['pwd'] );

if (!empty($login) && !empty($pwd)){

    //существование польз. с таким именем
    $sql_check = 'SELECT EXISTS (SELECT login FROM users WHERE login = :login)';

    $login_check = $pdo->prepare($sql_check);
    $login_check -> execute ([':login'=>$login]);

    if ($login_check -> fetchColumn()){
        die('это имя уже занято!');
    }


    $pwd = password_hash($pwd, PASSWORD_DEFAULT);
    
    $sql = 'INSERT INTO users(login, password) VALUES(:login, :pwd)';
    $param = ['login' => $login, ':pwd' => $pwd ];

    $stmt = $pdo->prepare($sql);
    $stmt->execute($param);

    echo 'регистрация прошла успешно!';
}else{
    echo 'Заполните все поля!';
}