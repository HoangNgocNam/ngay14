<?php
function isFirsLetterUpperCase($str){
    $regexp = '/^[A-Z]/';

    if (preg_match($regexp,$str)){
        echo "string's first character is uppercase";
    } else {
        echo "string's first character is not uppercase";
    }
}

$str = 'CodeGym';
isFirsLetterUpperCase($str);
echo "<br>";
$str1 = 'codegym';
isFirsLetterUpperCase($str1);
echo "<br>";
$str2 = 'Nguyen van Nam';
isFirsLetterUpperCase($str2);
echo "<br>";
$str3 = "NGUYEN VAN NAM";
isFirsLetterUpperCase($str3);