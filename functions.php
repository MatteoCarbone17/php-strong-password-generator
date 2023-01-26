<?php
$userValue = intval($_GET["userLengthPassword"]);


$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%&*_";
$password = substr( str_shuffle( $chars ), 0, $userValue );

echo $password;

?>