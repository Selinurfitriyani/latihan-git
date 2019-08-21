<?php
//array key nu merik
$a = array('Seli', 21 , true , 14.45);
echo $a[1] . "<br>";

for ($i=4; $i < 0; $i--) { 
    echo $a[$i] . "<br>";
}

//aray key asosiatif
$aso = ['nama' => 'Seli' , 'umur' => 16 , 'alamat' => 'Babakan nugraha'];

foreach ($aso as $index => $val) {
    echo $val['nama'] . "<br>";
}
?>