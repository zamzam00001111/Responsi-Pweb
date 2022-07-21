<?php 

echo "<head><title>My Guest Book</title></head>";
$fp = fopen("guestbook.txt", "r");

echo "<table border='0'>";

while ($isi = fgets($fp)) {
    $pisah = explode('|', $isi);
    echo "<tr><td>Nama: </td><td>: $pisah[0] </td></tr>";
    echo "<tr><td>Email: </td><td>: $pisah[1] </td></tr>";
    echo "<tr><td>service: </td><td>: $pisah[9] </td></tr>";
    echo "<tr><td><br></td><td><br></td></tr>";
}
echo "</table>";
echo "<a href='barber.html'> Isi buku Orderan </a>";

?>