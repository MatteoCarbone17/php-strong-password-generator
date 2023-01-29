
<?php

$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%&*_";

$userValue = intval($_GET["userLengthPassword"]);

if ($userValue <= 0 || $userValue > 24 ) {
    echo 'inserisci numero tra 1 e 24';
} else{
    $password = substr(str_shuffle($chars), 0, $userValue);
    echo  $password;
};




?>