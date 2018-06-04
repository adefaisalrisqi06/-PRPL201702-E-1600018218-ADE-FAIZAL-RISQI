<?php
	$tanggalawal = $_POST['tanggalawal'];
	$tanggalakhir = $_POST['tanggalakhir'];
	
	?><?php
include 'koneksi.php';
?>
<html>
<head>
	<title> </title>
    
</head>
<body><center>

<div class="container" id="orderline">
    <h2 class="wow fadeInUp" data-wow-delay="0.3s"><center> Daftar Pesanan</center></h2>
  <form action="pencarian.php" method="POST">
    <h5><a class="kiri">Masukkan Tanggal Awal </a><a class="kanan">Masukkan Tanggal Terakhir</a></h5>
	<input type="date" class="name wow zoomIn" name="tanggalawal"  />
	<input type="date" class="name1 wow zoomIn" name="tanggalakhir" /> 
	<center><input class="booknow wow fadeInUp" type="submit" name="cari" value="search" /></center> 
    </form>
	
<center>
		
  <table border="1">
    <tr>
    <td>idcustomer</td>
    <td>Nama</td>
    <td>Alamat</td>
    <td>No Telepon</td>
    <td>No Meja</td>
    <td>Email</td>
    <td>Tanggal</td>
    <td colspan=1>Aksi</td>
    </tr> 
	<?php
     
	
	$tanggalawal = $_POST['tanggalawal'];
	$tanggalakhir = $_POST['tanggalakhir'];
	if($tanggalawal && $tanggalakhir !=''){
	$select = mysqli_query($conn, "SELECT * FROM customer WHERE tanggal BETWEEN '$tanggalawal' and '$tanggalakhir' ");
	} 
	else{
    $select = mysqli_query($conn, "SELECT * FROM customer");
	}
	
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
    echo "<td>".$row['Tanggal']."</td>";
   
    echo "<td><a href='delete_customer.php?namacustomer=".$row['idcustomer']."'>Hapus</a></td>";
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