<?php
// membuat koneksi
$konek = new mysqli("localhost","root","","calresto");

// mengecek koneksi
if($konek->connect_error){
  die("Koneksi Gagal Karena : ". $konek->connect_error);
}

$idcustomer=$_POST['idcustomer'];
$Nama=$_POST['Nama'];
$Alamat=$_POST['Alamat'];
$NoMeja=$_POST['NoMeja'];
$NoTelepon=$_POST['NoTelepon'];
$Email=$_POST['Email'];
$Tanggal=$_POST['Tanggal'];


// membuat table customer
$sql = "INSERT INTO customer(idcustomer, Nama, Alamat, NoMeja, Email, NoTelepon, Tanggal) VALUES ('$idcustomer','$Nama','$Alamat','$NoMeja','$NoTelepon', '$Email', '$Tanggal')";

if($konek->query($sql)){
  echo "data customer BERHASIL dibuat!<br/>";
}else{
  echo "data customer GAGAL dibuat : ".$konek->error."<br/>";
}
$konek->close();
echo "<a href='tampil_customer.php'>Daftar customer</a>";
?>