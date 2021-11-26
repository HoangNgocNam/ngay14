<?php
function checkAccount($str){
    $pattern = '/[_a-z0-9]{6,}$/';

    if (preg_match($pattern,$str)){
        echo "Account hop le";
    } else {
        echo "Acount khong hop le";
    }
}

$str = 'aba123_';
checkAccount($str);
echo "<br>";
$str1 = '...@';
checkAccount($str1);
echo "<br>";
$str2 = "12244fasdf";
checkAccount($str2);