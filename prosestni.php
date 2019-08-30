<?php
if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $nama = $_POST['nama'];
    $nama = $_POST['nama'];

    function TNI($tb,$bb)
    {
     if ($tb>165 && $bb <60 || $bb > 50) {
         return "selamat anda di terima";
     }else{
         return "maaf anda tidak diterima";
     }
    }
    echo "NAMA :" . $NAMA  ."<br>";
    echo "ALAMAT : " . $ALAMAT  . "<br>";
    echo "KECAMATAN : ". $KECAMATAN  . "<br>";
    echo "KOTA : " . $KOTA . "<br>";

}