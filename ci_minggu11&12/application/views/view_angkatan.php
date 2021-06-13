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
		<h3>
			Daftar Angkatan
		</h3>
		<table border="1">
			<tr>
				<td>No</td>
				<td>Angkatan</td>
			</tr>
			 <?php //foreach($Angkatan as $row) { ?>
			<tr>
				<td width="30"><? //echo $row['no']; ?></td>
				<td width="70"><? //echo $row['angkatan']; ?></td>
			</tr>
			<?php //} ?> 
		</table>
	</body>-->

	<body>
		<h3>
			Daftar Angkatan
		</h3>
		<table border="1">
			<tr>
				<td>No</td>
				<td>Angkatan</td>
			</tr>
			<?php foreach($soal_b as $row) { ?>
			<tr>
				<td width="30"><?= $row['no']; ?></td>
				<td width="50"><?= $row['angkatan']; ?></td>
			</tr>
			<?php } ?>

		</table>
	</body>
</html>