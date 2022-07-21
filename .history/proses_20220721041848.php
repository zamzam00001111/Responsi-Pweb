<?php 

$nama = $_POST['nama'];
$email = $_POST['email'];
$alamat = $_POST['service'];


echo "<head><title>My Guest Book</title></head>";
$fp = fopen("guestbook.txt", "a+");
fputs($fp, "$nama|$email|$service\n");
fclose($fp);

echo "Terima kasih atas pemensanan service anda<br>";
echo "<a href='barber.html'>Isi buku tamu</a><br>";
echo "<a href='lihat.php'>Lihat buku tamu</a><br>";

 ?>