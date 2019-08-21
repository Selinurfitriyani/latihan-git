<?php
$a= 100;
$b= 90;
$c= $a+$b/2;
echo 'Nama : Seli nur <br>';
echo 'Kelas : X RPL 1 <br>';
echo 'Nilai bahasa indonesia :'.$a;
echo "<br>";
echo 'Nilai matematika : ' .$b;
echo "<br>";
echo 'Nilai rata rata : '.$c;
echo "<br>";
switch (true)
{
	case ($c >= 100) :
		echo 'sangat baik <br/> dengan grade : A <br>';
        break;
    case ($c >= 90) :
		echo 'baik <br/> dengan grade : B+ <br>';
		break;    
	case ($c < 9 && $nilai >= 80) :
		echo ' masih baik<br/> dengan grade :B <br>';
		break;
	case ($c < 8 && $nilai >=  70) :
		echo 'cukup baik<br/> dengan grade : C <br>';
		break;
	default : 
		echo 'perlu ditingkatkan lagi:( <br>';
}
?>