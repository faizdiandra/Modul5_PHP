<?php
function ganjil($awal, $akhir){
    for($i=$awal; $i<$akhir; $i++){
        if($i%2 == 1){
            echo"$i, ";
        }
    }
}
$a = 10;
$b = 50;
echo "<b> Bilangan jganjil dari $a sampai $b : </b><br>";
ganjil($a, $b);
?>