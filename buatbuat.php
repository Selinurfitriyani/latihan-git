<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Formulir Pendaftaran</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<FORM ACTION="seli.php" METHOD="POST" NAME="input"> 
      <h2>Form Pembeli Barang</h2> 
      NAMA :<br> <input type="text" name="NAMA"><br>
      <br>
      ALAMAT :<br> <textarea name="ALAMAT" cols="40" rows="1"></textarea><br>
      <br>
      KECAMATAN :<br> <input type="text" name="KECAMATAN"><br>
      KOTA :<br> <input type="text" name="KOTA"><br>
      <br>
      PROVINSI :<br> <input type="text" name="PROVINSI"><br>
      <br>
      KODE POS :<br> <input type="number" name="KODEPOS"><sbr>
      <br>
      NAMA BARANG :<br> <input type="text" name="NAMABARANG"><br>
      <br>
      HARGA BARANG :<br> <input type="number" name="HARGABARANG"><br>
      <br>
      JUMLAH BARANG :<br> <input type="number" name="JUMLAHBARANG"><br> 
      <br>
      DESKRIPSI :<br> <textarea name="DESKRIPSI" cols="40" rows="5"></textarea><br>
      <br>            
      TANGGAL PEMBELIAN :<br> <input type="date" name="TANGGALPEMBELIAN"><br>
      <br>
      BAYAR :<br> <input type="number" name="BAYAR"><br>
      <br>
      <br>
      
      <input type="submit" name="Login" value="Login"> 
      <input type="reset" name="reset" value="Reset"> 
   
   </FORM> 
</body>
</html>