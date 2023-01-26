


<?php

$userValue = intval($_GET["userLengthPassword"]);

if ($userValue <= 0) {
    echo 'inserisci un  numero';
} else {
    echo random_bytes($userValue);
}



//  
//     // $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%&*_";
//     // $password = substr( str_shuffle( $chars ), 0, $userValue );

//     echo $userValue;

// }

?>