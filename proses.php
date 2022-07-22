<?php 

$nama = $_POST['nama'];
$email = $_POST['email'];
$service = $_POST['service'];

echo "<head><title>My Guest Book</title></head>";
$fp = fopen("guestbook.txt", "a+");
fputs($fp, "$nama|$email|$service\n");
fclose($fp);

echo "Terima kasih atas pemensanan anda<br>";
echo "<a href='barber.html'> Isi Orderan Kembali</a><br>";
echo "<a href='lihat.php'>Lihat Daftar Orderan</a><br>";

 ?>
