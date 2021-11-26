<?php

function checkMail($str){
    $pattern = '/^[A-Za-z0-9]+[A-Za-z0-9]*@[A-Za-z0-9]+(\.[A-Za-z0-9]+)$/';

    if (preg_match($pattern,$str)){
        echo "Email hop le";
    } else {
        echo "Email khong hop le";
    }

}

$str = 'a@gmail.com';
checkMail($str);
echo "<br>";
$str2 = '@gmail.com';
checkMail($str2);
