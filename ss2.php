<?php
session_start();
if (isset($_SESSION['login'])) {
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>

    <body>
        <nav>
            <a href="ss1.php">Halaman 1</a> |
            <a href="ss2.php">Halaman 2</a> |
            <a href="ss3.php">Halaman 3</a> |
            <a href="logout.php" onclick="myFunction()">Logout</a> |
        </nav>
        <center>Halaman 2</center>
        <fieldset>
            <legend>Latihan 2</legend>
            <pre>
                <form action="" method="post">
                    <label for="">Nama</label>    
                    <input type="text" name="nama">
                    <br>
                    <label for="">kelas</label>    
                    <input type="text" name="kelas">
                    <br>
                    <input type="submit" name="sbm" value="Simpan">
                </form>
            </pre>
            <?php if (isset($_POST['sbm'])) {
                    $a = $_POST['nama'];
                    echo "Nama Saya: $a";
                    
                    $b = $_POST['kelas'];
                    echo "Kelas: $b";
                } ?>
    </body>

    </html>
<?php } else {
    header("location: login1.php");
    // die("Silahkan Login Terlebih dahuli");
}
?>