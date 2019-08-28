<?php
if (isset($_POST['Login'])) {
 $NOPENDAFTARAN = $_POST['NOPENDAFTARAN'];
 $NISN = $_POST['NISN'];
 $NAMA = $_POST['NAMA'];
 $ALAMAT = $_POST['ALAMAT'];
 $TEMPATLAHIR = $_POST['TEMPATLAHIR'];
 $TANGGALLAHIR = $_POST['TANGGALLAHIR'];
 $ASALSEKOLAH = $_POST['ASALSEKOLAH'];
 $JENISKELAMIN = $_POST['JENISKELAMIN'];
 $JURUSAN = $_POST['JURUSAN'];
 $NAMAAYAH = $_POST['NAMAAYAH'];
 $PEKERJAANAYAH = $_POST['PEKERJAANAYAH'];
 $NAMAIBU = $_POST['NAMAIBU'];
 $PEKERJAANIBU = $_POST['PEKERJAANIBU'];
 $HOBI = $_POST['HOBI'];
 $AGAMA = $_POST['AGAMA'];

}
echo "NO PENDAFTARAAN :" . $NOPENDAFTARAN  ."<br>";
echo "NISN : " . $NISN  . "<br>";
echo "NAMA : ". $NAMA  . "<br>";
echo "ALAMAT : " . $ALAMAT . "<br>";
echo "TEMPAT LAHIR : " . $TEMPATLAHIR . "<br>";
echo "TANGGAL LAHIR : " . $TANGGALLAHIR . "<br>";
echo "ASAL SEKOLAH : " . $ASALSEKOLAH . "<br>";
echo "JENIS KELAMIN : " . $JENISKELAMIN . "<br>";
echo "JURUSAN : " . $JURUSAN . "<br>";
echo "NAMA AYAH : " . $NAMAAYAH . "<br>";
echo "PEKERJAAN AYAH : " . $PEKERJAANAYAH . "<br>";
echo "NAMA IBU : " . $NAMAIBU . "<br>";
echo "PEKERJAAN IBU : " . $PEKERJAANIBU . "<br>";
echo "HOBI : " . $HOBI . "<br>";
echo "AGAMA : " . $AGAMA . "<br>";
?> 