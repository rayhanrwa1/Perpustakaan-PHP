<?php
// mysqli_connect("hostname","user database","password","nama")
$koneksi= mysqli_connect("localhost","root","","db_perpustakan") or die("Tidak bisa terhubungan ke database"); 
//disini digunakan untuk I/O File Heandling, sebenernya database ini bukan menggunaakaan file berformat txt
//tetapi menggunakan database sql sebagai tempat menyimpan data user, peminjaman buku, dan daftar buku.
