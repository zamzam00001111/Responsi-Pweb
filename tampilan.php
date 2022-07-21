<html>
	<head>
		<title>My Guest Book</title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
		<link rel="stylesheet" href="proses.php">
	</head>

	<body>
		<div align="center"><strong><font size="6" face="Courier New, Courier, mono">BUKU TAMU </font></strong></div>
			<form name="form1" method="post" action="proses.php">
				<table width="58%" border="0" align="center">
					<tr>
						<td>Nama </td>
						<td><input name="nama" type="text" id="nama"></td>
					</tr>
					<tr>
						<td>E-Mail</td>
						<td><input name="email" type="text" id="email"></td> </tr>
						</tr>
					<tr>
						<td>Service</td>
						<td><input name="service" type="text" id="service"></td>
					</tr>

					<tr>
						<td></td>
						<td><input type="submit" name="Submit" value="Kirim"><input type="reset" name="Submit2" value="Batal">
					</td>
					</tr>
				</table>
			</form>
		<div align="center"><strong><a href="lihat.php">::Lihat Buku Tamu::
		</a></strong></div>
	</body>
</html>