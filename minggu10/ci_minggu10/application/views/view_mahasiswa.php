<html>
	<head>
		<title>Minggu 8</title>
	</head>

	<!--<body>
		Nama : <?php //echo $nama; ?>
		<br />
		Prodi : <?php //echo $prodi; ?>
	</body>-->

	<!--<body>
		<?php
			/*foreach($Mahasiswa as $row)
			{
				echo "Nama:" . $row['nama'];
				echo "<br />";
				echo "Prodi:" . $row['prodi'];
				echo "<hr />";
			}*/
			
		?>
	</body>-->
	<body>
		<h3>
			Daftar Mahasiswa
		</h3>
		<table border="1">
			<tr>
				<td>Nama</td>
				<td>Prodi</td>
			</tr>
			<?php foreach($Mahasiswa as $row) { ?>
			<tr>
				<td width="170"><?= $row['nama']; ?></td>
				<td width="70"><?= $row['prodi']; ?></td>
			</tr>
			<?php } ?>

		</table>
	</body>
</html>