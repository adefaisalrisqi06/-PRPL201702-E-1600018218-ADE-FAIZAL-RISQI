<?php
 
$konek = new mysqli("localhost", "root","", "calresto");

if($konek->connect_error){
  die("Koneksi Gagal Karena : ". $konek->connect_error);
}

//$idpelanggan = $_POST['idpelanggan'];  
$idcustomer = $_POST['idcustomer'];
$tanggal = $_POST['tanggal'];
$bayar = $_POST['bayar'];
$nomormeja = $_POST['nomormeja'];
$pesanan1 = $_POST['pesanan1'];
$pesanan2 = $_POST['pesanan2'];
$pesanan3 = $_POST['pesanan3'];
$pesanan4 = $_POST['pesanan4'];
$pesanan5 = $_POST['pesanan5'];
$pesanan6 = $_POST['pesanan6'];
$pesanan7 = $_POST['pesanan7'];
$pesanan8 = $_POST['pesanan8'];


$jumlahpesanan = $_POST['jumlah_pesanan'];
$cash = $_POST['cash'];
$kembalian = $_POST['kembalian'];


 //echo"Bayar =  $bayar";
 
$sql = "INSERT INTO pemesanan (idcustomer,nomormeja,tanggal,pesanan1,pesanan2,pesanan3,pesanan4,pesanan5,pesanan6,pesanan7,pesanan8,jumlahpesanan,bayar,cash,kembalian)VALUES ('$idcustomer','$nomormeja','$tanggal','$pesanan1','$pesanan2','$pesanan3','$pesanan4','$pesanan5','$pesanan6','$pesanan7','$pesanan8','$jumlahpesanan','$bayar' , '$cash', '$kembalian')";

//,'$order1','$order2','$order3','$order4','$order5','$order6','$order7','$order8','$order9','$order10','$order11','$order12'
//,101,102,103,104,201,202,203,204,301,302,303,304
if($konek->query($sql)){
  echo " <center><h1><a href='tampilpesanan.php'> Pemesanan telah Berhasil</a></h1>";
  //echo "<a href='struck.php?username="username"' </a>";

  //echo '<form action="struck.php" method="POST">
   //     <input type="text" name="nama">
    //    <input type="submit" name="submit" value="Cetak Struk">
     //   </form></center>';
          
 
  //header("location: tampil_customer.php");
}else{
  echo "Data pemesanan GAGAL ditambah : ".$konek->error."<br/>";
}

?>

