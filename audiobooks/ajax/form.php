<?php

$inp = $_POST['formInput'];

switch ($inp) {
    case '123':
        echo 'молодец считаешь до 3';
        break;
    case '135':
        echo 'молодец...';
        break;
    default:
        echo 'введи лучше 123';
}
