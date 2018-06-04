<?php
// membuat koneksi
$konek = new mysqli("localhost","root","","calresto");

// mengecek koneksi
if($konek->connect_error){
  die("Koneksi Gagal Karena : ". $konek->connect_error);
}

// membuat table customer
$sql = "CREATE TABLE customer(
  idcustomer VARCHAR(15) NOT NULL,
  Nama VARCHAR(30),
  Alamat VARCHAR(50),
  NoMeja VARCHAR(50),
  NoTelepon VARCHAR(50),
  Tanggal VARCHAR(50),
  Email VARCHAR(50),
  PRIMARY KEY (idcustomer)
)";

if($konek->query($sql)){
  echo "Table customer BERHASIL dibuat!<br/>";
}else{
  echo "Table customer GAGAL dibuat : ".$konek->error;
}
$konek->close();
?>
