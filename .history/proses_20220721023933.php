<?php 

$nama = $_POST['nama'];
$email = $_POST['email'];
$alamat = $_POST['service'];


echo "<head><title>My Guest Book</title></head>";
$fp = fopen("guestbook.txt", "a+");
fputs($fp, "$nama|$email|$alamat|$komentar\n");
fclose($fp);

echo "Terima kasih atas partisipasi anda mengisi buku tamu<br>";
echo "<a href='UTS.html'>Isi buku tamu</a><br>";
echo "<a href='lihat.php'>Lihat buku tamu</a><br>";

 ?>