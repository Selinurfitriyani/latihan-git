<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Pendaftaraan Tni</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <fieldset>
    <legend>Pendaftaraan Tni</legend>
    <form action"prosestni.php" methode="post">
    <label for="">Nama : </label>
    <input type="text" name="nama" required>
    <br>
    <label for="">Tinggi Badan : </label>
    <input type="text" name="tb" required>
    <br>
    <label for="">Berat Badan : </label>
    <input type="text" name="bb" required>
    <br>
    <input type="submit" name="simpan" value="simpan">
    </form>
    </fieldset>
</body>
</html>