<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Luas Lingkaran</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<fieldset>
    <p>luas dan keliling lingkaran</p>
    <legend>
         luas luas_lingkaran
    </legend>

    <form action="" method="get">
    <label for="">Sisi</label>
    <input type="number" min="1" name="jari" required>
    <br>
    <input type="submit" name="simpan" value="simpan">
    </form>
    </fieldset>

<?php
if(isset($_GET['simpan'])){
$jari=$_GET['jari'];


    function luas_lingkaran ($jari){
        $hasil=3.14*$jari*$jari;
        return $hasil;
    }
}
echo "Luas lingkaran dengan jari-jari = $jari<br>";

echo "Luas Lingkaran : $hasil";
echo luas_lingkaran($jari);
?>
</body>
</html>