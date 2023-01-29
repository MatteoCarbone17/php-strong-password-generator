
<?php



function generatorPassword($userValue){
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%&*_";
    
    $userValue = intval($_GET["userLengthPassword"]);

    if ($userValue <= 0 || $userValue > 30 ) {
        echo 'inserisci numero tra 1 e 30';
    } else{
        $password = substr(str_shuffle($chars), 0, $userValue);
       echo 'la tua password è:  '.  $password ;
    };
    
}





?>