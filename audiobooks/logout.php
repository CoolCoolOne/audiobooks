<?php
require_once './db.php';

if (isset($_SESSION[session_name()])) {
    setcookie(session_name(), '', time()-3600, '/');
}

session_destroy();

header('Location: signin.php');