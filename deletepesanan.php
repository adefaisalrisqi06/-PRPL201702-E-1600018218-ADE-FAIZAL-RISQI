 <?php
// membuat koneksi
$konek = new mysqli("localhost","root","","calresto");

// mengecek koneksi
if($konek->connect_error){
  die("Koneksi Gagal Karena : ". $konek->connect_error);
}

$nomormeja = $_GET['nomormeja'];

$sql = "DELETE FROM pemesanan WHERE nomormeja='$nomormeja'";
if($konek->query($sql)){
  echo "Data pesanan BERHASIL dihapus!<br/>";
}else{
  echo "Data pesanan GAGAL dihapus : ".$konek->error."<br/>";
}

$konek->close();
echo "<a href='tampilpesanan.php'>Daftar pesanan</a>";
?>
