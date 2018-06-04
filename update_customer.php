<?php
// membuat koneksi
$konek = new mysqli("localhost","root","","calresto");

// mengecek koneksi
if($konek->connect_error){
  die("Koneksi Gagal Karena : ". $konek->connect_error);
}

$idcustomer = $_POST['idcustomer'];
$Nama= $_POST['Nama'];
$Alamat = $_POST['Alamat'];
$NoMeja=$_POST['NoMeja'];
$NoTelepon= $_POST['NoTelepon'];
$Email= $_POST['Email'];
$Tanggal= $_POST['Tanggal'];


$sql = "UPDATE customer SET Nama='$Nama',Alamat='$Alamat',NoMeja='$NoMeja',NoTelepon='$NoTelepon',Email='$Email',Tanggal='$Tanggal'WHERE idcustomer='$idcustomer'";
if($konek->query($sql)){
  echo "Data customer BERHASIL diedit!<br/>";
}else{
  echo "Data customer GAGAL diedit : ".$konek->error."<br/>";
}

$konek->close();
echo "<a href='tampil_customer.php'>Daftar customer</a>";
?>
