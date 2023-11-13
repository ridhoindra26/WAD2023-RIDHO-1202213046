<!-- File ini berisi koneksi dengan database yang telah di import ke phpMyAdmin kalian -->


<?php
// Buatlah variable untuk connect ke database yang telah di import ke phpMyAdmin
$host = "localhost:3316";
$user = "root";
$pw = "";
$db = "wad_modul3";
$conn = mysqli_connect($host,$user,$pw,$db);
// 
  
// Buatlah perkondisian jika tidak bisa terkoneksi ke database maka akan mengeluarkan errornya
if (!$conn) {
    echo "Database Not Connected";
}
// 
?>