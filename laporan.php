<?php
include 'koneksi.php';
?>
<html>
<html>
<head>

</head>
<body>
	<center>
<div class="container" id="orderline">
    <h2 class="wow fadeInUp" data-wow-delay="0.3s"><center> Daftar Pesanan</center></h2>
  <form action="pencarian.php" method="POST">
    <h5><a class="kiri">Masukkan Tanggal Awal </a><a class="kanan">Masukkan Tanggal Terakhir</a></h5>
	<input type="date" class="name wow zoomIn" name="tanggalawal"  />
	<input type="date" class="name1 wow zoomIn" name="tanggalakhir" /> 
	<center><input class="booknow wow fadeInUp" type="submit" name="cari" value="search" /></center> 
    </form>
	
	
	<table border="1">
		<tr>
		<td>Id Customer</td>
		<td>Id Menu</td>
		<td>Nama Customer</td>
		<td>Makanan</td>
		<td>Minuman</td>
		<td>Jumlah Makanan & Minuman</td>
		<td>Tanggal</td>
		<td>Catatan</td>
		<td colspan=1>Aksi</td>
		</tr> 
		
	<?php
     
    $select = mysqli_query($conn, "SELECT * FROM pesan");
	
	if ($select->num_rows > 0){
	$no = 1; 
  while ($row = $select->fetch_assoc()) {
    echo "<tr>";
    echo "<td>".$row['idcustomer']."</td>";
    echo "<td>".$row['Nama']."</td>";
    echo "<td>".$row['Alamat']."</td>";
	echo "<td>".$row['NoTelepon']."</td>";
    echo "<td>".$row['NoMeja']."</td>";
    echo "<td>".$row['Email']."</td>";
	echo "<td>".$row['tanggal']."</td>";
   
    echo "<td><a href='delete_pesan.php?namacustomer=".$row['namacustomer']."'>Hapus</a></td>";
    echo "</tr>";
  }
}else{
echo '<tr><td colspan="6"> Data Yang Dicari Tidak ada ...!!! <td></tr>';
	}
	 ?>
</table>


</center>
	</body>
		</html>