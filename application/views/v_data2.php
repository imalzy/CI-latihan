<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Menampilkan data</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<table border="1">
			<tr>
				<td>id Produk</td>
				<td>nama Produk</td>
				<td>merk Produk</td>
				<td>harga Produk</td>
			</tr>
			<?php foreach ($barang as $brg){?>
			<tr>
				<td><?php echo $brg['idProduk']; ?></td>
				<td><?php echo $brg['nmProduk']; ?></td>
				<td><?php echo $brg['merkProduk']; ?></td>
				<td><?php echo $brg['hrgProduk']; ?></td>
			</tr>
			<?php } ?>
	</table>
</body>
</html>