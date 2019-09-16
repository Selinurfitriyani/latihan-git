<?php
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
        echo "<h2>Klik <a href='ss1.php'> di sini(latses2.php)</a>";
    }
}else {
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>Latihan session</title>
        
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