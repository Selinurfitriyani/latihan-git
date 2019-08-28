<?php
if (isset($_POST['sbm'])) {
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];

    foreach ($nama as $data) {
        echo "nama saya : " . $nama['data'] . "- kelas : " .$nama[$data] . "<hr>";
    }
}