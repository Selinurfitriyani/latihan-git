<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <fieldset>
    <p>luas persegi</p>
    <legend>
         luas persegi
    </legend>

    <form action="" method="get">
    <label for="">Sisi</label>
    <input type="number" min="1" name="s" required>
    <br>
    <input type="submit" name="simpan" value="simpan">
    </form>
    </fieldset>

<?php
if (isset($_GET['simpan'])) {
    $sisi = $_GET['s'];

    function luas_persegi($sisi){ 
        $luas = $s * $s;
        return $luas;  
    }
    $luas = luas_persegi($sisi);
    echo "Luas persegi : $luas" ;
    
}



?>
</body>
</html>