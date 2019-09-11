<!-- <?php
	$temp = file_get_contents($data);
	$hasil = json_decode($temp, true);
?> -->
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
		   <th>Id Produk</th>
		   <th>Nama Produk</th>
		   <th>Merk Produk</th>
		   <th>Harga Produk</th>
	  	</tr>
	  	<?php foreach ($barang as $result){ ?>
			<tr>
				<td><?php echo $result->idProduk ?></td>
				<td><?php echo $result->nmProduk ?></td>
				<td><?php echo $result->merkProduk ?></td>
				<td><?php echo $result->hrgProduk ?></td>
			</tr>
		<?php endforeach; ?>
	  	<!-- <?php   
		   // for($a=0; $a < count($hasil); $a++)
		   // {
		   //  echo "<tr>";
			  //   echo "<td>".$hasil[$a]['idProduk']."</td>";
			  //   echo "<td>".$hasil[$a]['nmProduk']."</td>";
			  //   echo "<td>".$hasil[$a]['merkProduk']."</td>";
			  //   echo "<td>".$hasil[$a]['hrgProduk']."</td>";
		   //  echo "</tr>";
		   }
	  	?> -->
	 </table>
</body>
</html>