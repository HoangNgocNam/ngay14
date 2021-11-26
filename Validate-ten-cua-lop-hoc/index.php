<?php
function checkClass($str){
    $pattern = '/^[C|A|P]+[0-9]{4}+[G|H|I|K|L|M]$/';
    if (preg_match($pattern,$str)){
        echo "Ten lop hop le";
    }else {
        echo "ten lop khong hop le";
    }
}

$str = 'C0234G';
checkClass($str);
echo "<br>";
$str1 = 'M1234G';
checkClass($str1);
echo "<br>";
$str2 = 'P2242A';
checkClass($str2);