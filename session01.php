<?php
/*******************************************************
 Nama file : session01.php
 Halaman ini merupakan halaman contoh penciptaa session.
 Perintah session_star() harus di taruh di perintah pertama
 tanpa spasi di depannya . perintah session_star() harus ada
 pada setiap halaman yang berhubungan dengan session
 *********************************************************/
session_start();
if (isset ($_POST['login'])) {
    $user = $_POST['user'];
    $pass = $_POST ['pass'];
    //periksa login
    if ($user == "Selinur" && $pass == "123") {
        //menciptakan session
        $_SESSION['login'] = $user;
        //menuju ke halaman pemeriksaan session
        echo "<h1>Anda berhasil login</h1>";
        echo "<h2>Klik <a href='session2.php'> di sini(session2.php)</a>
        untuk menuju ke halaman pemeriksaan session";
    }
} else {
    ?>  
<html>
    <head>
     <title> login here....</title>
     </head>
     <body>
        <form action ="" method="post">
             <h2>Login here....</h2>
            username : <input type = "text" name = "user"><br>
            password : <input type ="password" name = "pass"><br>
            <input type ="submit" name ="login" value="log in">
            </form>
        </body>
        </html>
  <?php } ?>
