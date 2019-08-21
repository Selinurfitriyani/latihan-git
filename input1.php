<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>pengelolaan form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <form action ="" method ="post" name = "input">
    Nama anda : <input type = "text" name="nama" required><br>
    <input type="submit" name="input" value="input">
    <input type="submit" name="delete" value="delete">
    </form>
</body>
</html>
<?php
if (isset($_POST ['input'])) {
    $nama= $_POST['nama'];
    echo "nama anda : <b>$nama</>";
}
?>