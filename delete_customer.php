 <?php
// membuat koneksi
$konek = new mysqli("localhost","root","","calresto");

// mengecek koneksi
if($konek->connect_error){
  die("Koneksi Gagal Karena : ". $konek->connect_error);
}

$idcustomer = $_GET['idcustomer'];

$sql = "DELETE FROM customer WHERE idcustomer='$idcustomer'";
if($konek->query($sql)){
  echo "Data customer BERHASIL dihapus!<br/>";
}else{
  echo "Data customer GAGAL dihapus : ".$konek->error."<br/>";
}

$konek->close();
echo "<a href='tampil_customer.php'>Daftar customer</a>";
?>
