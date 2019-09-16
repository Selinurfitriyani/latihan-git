<!DOCTYPE html>
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
         keliling_lingkaran
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


    function keliling_lingkaran ($jari){
        $hasil=2*3.14*$jari;
        return $hasil;
    }
}

echo "keliling Lingkaran : $hasil";
echo keliling_lingkaran($jari);
?>
</body>
</html>