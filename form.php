<?php
if (isset($_POST['Login'])) {
 $Nama = $_POST['Nama'];
 $Alamat = $_POST['Alamat'];
 $Jeniskelamin = $_POST['username'];
 $Agama = $_POST['Agama'];
 $Email = $_POST['Email'];
 $pass = $_POST['Password'];
 if ($Email == "selinur@gmail.com" && $pass == "280103") {
 echo "<h2>Status anda aktif</h2>";
 } else {
 echo "<h2>Status Anda Tidak Aktif</h2>";
 }
}
echo "Nama :" . $Nama  ."<br>";
echo "Alamat : " . $Alamat  . "<br>";
echo "Jenis Kelamin : ". $Jeniskelamin  . "<br>";
echo "Agama : " . $Agama . "<br>";
echo "Email : " . $Email . "<br>";
?> 