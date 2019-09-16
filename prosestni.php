<?php
if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $tinggibadan = $_POST['tb'];
    $beratbadan = $_POST['bb'];

    function TNI($tb,$bb)
    {
     if ($tb>165 && $bb <60 || $bb > 50) {
         return "selamat anda di terima";
     }else{
         return "maaf anda tidak diterima";
     }
    }
    echo "NAMA :" . $NAMA  ."<br>";
    echo "TINGGI BADAN : " . $tb  . "<br>";
    echo "KECAMATAN : ". $KECAMATAN  . "<br>";
    echo "KOTA : " . $KOTA . "<br>";

}