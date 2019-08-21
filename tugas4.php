<?php
for ($i=1; $i <=10 ; $i++) { 
 for ($j=1; $j <=10 ; $j++) { 
     $a = $i*$j;
     if ($i % 2 == 1) {
        echo "$i x $j = $a adalah bilangan ganjil<br>";
    }else{
        echo "$i x $j = $a adalah bilangan genap<br>";
    }
 }
}
?>