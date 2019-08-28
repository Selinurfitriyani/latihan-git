<?php
if (isset($_POST['Login'])) {
 $NAMA = $_POST['NAMA'];
 $ALAMAT = $_POST['ALAMAT'];
 $KECAMATAN = $_POST['KECAMATAN'];
 $KOTA = $_POST['KOTA'];
 $PROVINSI = $_POST['PROVINSI'];
 $KODEPOS = $_POST['KODEPOS'];
 $NAMABARANG = $_POST['NAMABARANG'];
 $HARGABARANG = $_POST['HARGABARANG']; 
 $JUMLAHBARANG = $_POST['JUMLAHBARANG'];
 $DESKRIPSI = $_POST['DESKRIPSI'];
 $TANGGALPEMBELIAN = $_POST['TANGGALPEMBELIAN'];
 $BAYAR = $_POST['BAYAR'];
 $YANGHARUSDIBAYAR = $_POST['YANGHARUSDIBAYAR'];
    
}
if ($BAYAR=($HARGABARANG*$JUMLAHBARANG)) {
    
}
    
if ($JUMLAHBARANG > 5) {
    $diskon=(($BAYAR*0.1)/100);
    $YANGHARUSDIBAYAR=($BAYAR-$diskon);

}
    
    elseif ($JUMLAHBARANG > 100) {
    $diskon=(($BAYAR*0.2)/100);
    $YANGHARUSDIBAYAR=($BAYAR-$diskon);
    }

echo "NAMA :" . $NAMA  ."<br>";
echo "ALAMAT : " . $ALAMAT  . "<br>";
echo "KECAMATAN : ". $KECAMATAN  . "<br>";
echo "KOTA : " . $KOTA . "<br>";
echo "PROVINSI : " . $PROVINSI . "<br>";
echo "KODE POS : " . $KODEPOS . "<br>";
echo "NAMA BARANG : " . $NAMABARANG . "<br>";
echo "JUMLAH BARANG : " . $JUMLAHBARANG . "<br>";
echo "DESKRIPSI : " . $DESKRIPSI . "<br>";
echo "BAYAR :" . $BAYAR  ."<br>";
echo "YANG HARUS DI BAYAR : " . $YANGHARUSDIBAYAR . "<br>";
?>