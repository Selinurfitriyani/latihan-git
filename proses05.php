<?php
if (isset($_POST['Login'])) {
 $user = $_POST['user'];
 $pass = $_POST['password'];
 if ($user == "selinur" && $pass == "280103") {
 echo "<h2>Login Berhasil</h2>";
 } else {
 echo "<h2>Login Gagal</h2>";
 }
}
?> 