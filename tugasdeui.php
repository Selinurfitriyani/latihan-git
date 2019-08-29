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
<FORM ACTION="formulir.php" METHOD="POST" NAME="input"> 
      <h2>Form Pendaftaran</h2> 
      NO PENDAFTARAN <br> <input type="number" name="NOPENDAFTARAN"><br>
      <br> 
      NISN :<br> <input type="number" name="NISN"><sbr>
      <br>
      NAMA :<br> <input type="text" name="NAMA"><br>
      <br>
      ALAMAT :<br> <textarea name="ALAMAT" cols="40" rows="1"></textarea><br>
      <br>
      TEMPAT LAHIR :<br> <input type="text" name="TEMPATLAHIR"><br>
      <br>
      TANGGAL LAHIR :<br> <input type="date" name="TANGGALLAHIR"><br>
      <br>
      ASAL SEKOLAH :<br> <input type="text" name="ASALSEKOLAH"><br> 
      <br>
      JENIS KELAMIN :<br> <input type="radio" name="JENISKELAMIN" value="LAKI-LAKI"> PEREMPUAN<br>
                   <input type="radio" name="jurusan" value="PEREMPUAN">LAKI-LAKI<br>
      <br>              
      JURUSAN :<br> <select name="JURUSAN"> 
            <option value="RPL">REKYASA PERANGKAT LUNAK</option> 
            <option value="TKR">TEKNIK KENDARAAN RINGAN</option> 
            <option value="TSM">TEKNIK SEPEDAH MOTOR  </option>   
            </select><br>
      <br>
      NAMA AYAH :<br> <input type="text" name="NAMAAYAH"><br>
      <br>
      PEKERJAAN AYAH:<br> <input type="text" name="PEKERJAANAYAH"><br>
      <br>
      NAMA IBU:<br> <input type="text" name="NAMAIBU"><br>
      <br>
      PEKERJAAN IBU :<br> <input type="text" name="PEKERJAANIBU"><br>
      <br>
      HOBI  : <br><input type="checkbox" name="HOBI" value="BERENANG"> BERENANG<br>
              <input type="checkbox" name="HOBI2" value="BACA BUKU"> BACA BUKU<br>
              <input type="checkbox" name="HOBI3" value="MEMASAK">MEMASAK<br>
              <input type="checkbox" name="HOBI4" value="DANDAN">DANDAN<br>
              <br>
      AGAMA :<br> <select name="AGAMA"> 
            <option value="ISLAM">ISLAM</option> 
            <option value="HINDU">HINDU</option> 
            <option value="BUDHA">BUDHA</option>   
            </select><br>
            <br>
      <input type="submit" name="Login" value="Login"> 
      <input type="reset" name="reset" value="Reset"> 
   
   </FORM> 
</body>
</html>