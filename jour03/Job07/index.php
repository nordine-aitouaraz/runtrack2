<?php
$str = "Certaines choses changent, et d'autres ne changeront jamais.";
$newStr = "";

$length = strlen($str);

for ($i = 0; $i < $length - 1; $i++) {
    $newStr .= $str[$i + 1]; 
}

$newStr .= $str[0];

echo $newStr;
?>
