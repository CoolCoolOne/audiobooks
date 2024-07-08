
<!-- <h1>Hello World!</h1> -->
<?php
 $driver = 'mysql';
 $host='localhost';
 $db_name='audiobooks';
 $db_user = 'admin';
 $db_pass = '123';
 $charset = 'utf8';
 $options =[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];



 try{
    $pdo = new 
    PDO("$driver:host=$host;dbname=$db_name;charset=$charset",
    $db_user,$db_pass,$options);

    session_start();
    

 }catch(PDOException $e){
    die('can not connect to data base...');
 }

//  $result = $pdo->query('SELECT * FROM books');
//  while( $row = $result->fetch(PDO::FETCH_ASSOC) ){
//     echo 'Аудиокнига '.$row['name'].'. <br> Время звучания '.$row['duration'].' часов <br> <br>';
//  }
//  или fecthAll