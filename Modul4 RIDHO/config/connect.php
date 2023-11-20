<!-- File ini berisi koneksi dengan database MySQL -->
<?php 

// (1) Buatlah variable untuk connect ke database yang telah di import ke phpMyAdmin
$host = "localhost:3316";
$user = "root";
$pw = "";
$db = "wad_modul4";
$conn = mysqli_connect($host,$user,$pw,$db);
// 

// (2) Buatlah perkondisian untuk menampilkan pesan error ketika database gagal terkoneksi
if (!$conn) {
    echo "Database Not Connected";
}
// 
 
?>