<?php
    session_start();
    session_destroy();
    header("location:index.php");
    //Di file php ini, fungsi ini mengembalikan nilai ke index.php atau kembalikan ke halaman login awal/keluar.
?>

