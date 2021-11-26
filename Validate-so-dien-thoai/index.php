<?php
function checkPhone($str){
    $pattern = '/^\([0-9]{2}\)-\(0[0-9]{9}\)$/';
    if (preg_match($pattern,$str)){
        echo "So dien thoai hop le";
    } else {
        echo "So dien thoai khong hop le";
    }
}

$str = '(84)-(0978489648)';
checkPhone($str);
echo "<br>";
$str1 = '(a8)-(0987654321)';
checkPhone($str1);

