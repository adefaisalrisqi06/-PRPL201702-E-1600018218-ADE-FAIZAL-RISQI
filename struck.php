<html>
<head>
	<link href ="struk.css" rel = "stylesheet" type="text/css" media = "all" />
	<script type="text/javascript">
		
	</script>
</head>
<body>
<center>
	<div class="container">
		<h1> RESTORAN PINGGIRAN </h1>
		<h2> BILL PEMBAYARAN </h2>
		<h3> Jalan UmbulHarjo No 10 , Yogyakarta</h3>
		<h2> ==================== </h2>	

<?php
$tgl_skrg = date("d-m-Y");

$host = "localhost";
$username = "root";
$password = "";
$db_name = "calresto";

$konek = new mysqli($host, $username, $password , $db_name);


if($konek->connect_error){
  die("Koneksi Gagal Karena : ". $konek->connect_error);
}

$nomormeja = $_GET['nomormeja'];
$data = mysqli_query($konek, "SELECT * from pemesanan where nomormeja = '$nomormeja' "); 
echo "<table border='0'>";

if ($data->num_rows > 0){
	while ($row = $data->fetch_assoc()) {
		echo "<tr>";
		echo "<td>TANGGAL </td>";
		echo "<td> : </td>";
		echo "<td> $tgl_skrg </td>";
		echo "</tr>";
		echo "<td></td>";
		echo "<tr>";
		echo "<td> ID PEMESAN </td>";
		echo "<td> : </td>";
		echo "<td>".$row['idcustomer']."</td>";
		echo "</tr>";
		echo "<td></td>";
		echo "<tr>";
		echo "<td> nasi goreng </td>";
		echo "<td> : </td>";
		echo "<td>".$row['pesanan1']*10000;
		echo "</td>";
		echo "<td>".$row['pesanan1']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td> soto </td>";
		echo "<td> : </td>";
		echo "<td>".$row['pesanan2']*10000;
		echo "</td>";
		echo "<td>".$row['pesanan2']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td> kwetiau </td>";
		echo "<td> : </td>";
		echo "<td>".$row['pesanan3']*8000;
		echo "</td>";
		echo "<td>".$row['pesanan3']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td> bakmie jawa </td>";
		echo "<td> : </td>";
		echo "<td>".$row['pesanan4']*10000;
		echo "</td>";
		echo "<td>".$row['pesanan4']."</td>";
		echo "</tr>";

		echo "<tr>";
		echo "<td> pecel lele </td>";
		echo "<td> : </td>";
		echo "<td>".$row['pesanan5']*9000;
		echo "</td>";
		echo "<td>".$row['pesanan5']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td> es jeruk </td>";
		echo "<td> : </td>";
		echo "<td>".$row['pesanan6']*5000;
		echo "</td>";
		echo "<td>".$row['pesanan6']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td> air mineral </td>";
		echo "<td> : </td>";
		echo "<td>".$row['pesanan7']*2000;
		echo "</td>";
		echo "<td>".$row['pesanan7']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td> es teh </td>";
		echo "<td> : </td>";
		echo "<td>".$row['pesanan8']*3000;
		echo "</td>";
		echo "<td>".$row['pesanan8']."</td>";
		echo "</tr>";


		echo "<td></td>";
		echo "<tr>";
		echo "<td><b> jumlah pemesanan </td>";
		echo "<td><b> : </td>";
		echo "<td></td>";
		echo "<td><b>".$row['jumlahpesanan'];
		echo "</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td><b> TOTAL HARGA </td>";
		echo "<td><b> : </td>";
		echo "<td></td>";
		echo "<td><b>".$row['bayar'];
		echo "</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td><b> UANG ANDA </td>";
		echo "<td><b> : </td>";
		echo "<td></td>";
		echo "<td><b>".$row['cash'];
		echo "</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td><b> KEMBALIAN </td>";
		echo "<td><b> : </td>";
		echo "<td></td>";
		echo "<td><b>".$row['kembalian'];
		echo "</td>";
		echo "</tr>";
		echo "</table>";

	}	
}else{
	echo"Tidak dapat di cetak";
}

$konek->close();
?>
</div>
<h3><a href="#" onclick="window.print()"> Print </a> </h3>	
</center>
</body>
</html>