<?php
/*********************************************************
 Halaman ini merupakan contoh halama pemeriksaan session. 
 pemeriksaan session biasanyta di lakukan jika suatu halaman
 memiliki akses terbatas. Misalnya harus login terlebih dahulu.
 ************************************************************/
session_start();

//pemeriksaan session
if (isset ($_SESSION['login'])) { //jika sudah login
    //menampilkan isi session
    echo "<h1>Selamat Datang " . $_SESSION['login'] ."</h1>";
    echo "<h2> Halama ini hanya bisa di akses jika sudah login </h2>";
    echo "<h2>Klik <a herf='session2.php'> di sini(session3.php)</a>
        untuk LOGOUT </h2>";
}else {
    //session belum ada artinya belum login
    die ("Anda belum login! A nda tidak berhak masuk ke halaman
    ini. silahkan login <a href='session01.php'>di sini </a>");
}
?>