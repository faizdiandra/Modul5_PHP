<?php
function VBola($jari){
    $a = 4/3;
    return 3.14 * $a * $jari * $jari * $jari;
}
function LBola($jari){
    $b = 4;
    return 3.14 * $b * $jari * $jari;
}
$r = 10;
echo "Volume Bola dari Jari-Jari $r adalah ";
echo VBola($r);
echo "<br> Dan Luas Bola dari Jari-Jari $r adalah ";
echo LBola($r);
?>