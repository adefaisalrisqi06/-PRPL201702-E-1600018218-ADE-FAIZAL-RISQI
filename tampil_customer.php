<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <title>Cal'Resto</title>

  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="">
  <meta name="description" content="">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/animate.min.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/nivo-lightbox.css">
  <link rel="stylesheet" href="css/nivo_themes/default/default.css">
  <link rel="stylesheet" href="css/style.css">
  <link href='https://fonts.googleapis.com/css?family=Roboto:400,500' rel='stylesheet' type='text/css'>
</head>

<body>

<!-- preloader section -->


<!-- navigation section -->
<section class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon icon-bar"></span>
        <span class="icon icon-bar"></span>
        <span class="icon icon-bar"></span>
      </button>
      <a href="index.html" class="navbar-brand">Cal'Resto</a>
    </div>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.html" class="smoothScroll">HOME</a></li>
        <li><a href="#" class="smoothScroll">FOOD GALLERY</a></li>
        <li><a href="#" class="smoothScroll">SPECIAL MENU</a></li>
        <li><a href="#" class="smoothScroll">LOGIN</a></li>
        <li><a href="tambahpesanan.php" class="smoothScroll">PEMESANAN MAKANAN</a></li>
        <li><a href="tampil_customer.php" class="smoothScroll">ADMIN</a></li>
      </ul>
    </div>
  </div>
</section>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.parallax.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/nivo-lightbox.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>




<br>
<br>
<br>
<br>
<?php
include 'koneksi.php';
?>


<html>
<head>

</head>
<body>

  <center>
<div class="container" id="orderline">
  <form action="pencarian.php" method="POST">

    <h5> <a class="kiri">Masukkan Tanggal Awal</a> &nbsp;
         <a class="kanan">Masukkan Tanggal Terakhir</a>
    </h5>

  <input type="date" class="name wow zoomIn" name="tanggalawal"  />
  <input type="date" class="name1 wow zoomIn" name="tanggalakhir" />
  <center><input class="booknow wow fadeInUp" type="submit" name="cari" value="search" /></center> 

    </form>
  
  


<?php
// membuat koneksi
$konek = new mysqli("localhost","root","","calresto");

// mengecek koneksi
if($konek->connect_error){
  die("Koneksi Gagal Karena : ". $konek->connect_error);
}

$sql = "SELECT * FROM customer";
$data = $konek->query($sql);


echo "<h1>Daftar customer</h1>";
echo "<table border='1'>";
echo "<tr><td>idcustomer</td><td>Nama</td><td>Alamat</td><td>Email</td><td>NoMeja</td><td>NoTelepon</td><td>Tanggal</td><td colspan=2>Aksi</td></tr>";
if ($data->num_rows > 0){
  $no = 1;
  while ($row = $data->fetch_assoc()) {
    echo "<tr>";
    echo "<td>".$row['idcustomer']."</td>";
    echo "<td>".$row['Nama']."</td>";
    echo "<td>".$row['Alamat']."</td>";
    echo "<td>".$row['NoTelepon']."</td>";
    echo "<td>".$row['NoMeja']."</td>";
    echo "<td>".$row['Email']."</td>";
    echo "<td>".$row['Tanggal']."</td>";
    echo "<td><a href='formupdate_customer.php?idcustomer=".$row['idcustomer']."'>Edit</a></td>";
    echo "<td><a href='delete_customer.php?idcustomer=".$row['idcustomer']."'>Hapus</a></td>";
    echo "</tr>";
  }
}else{
  echo "Data Kosong!";
}
echo "</table>";

$konek->close();

echo "<a href='index.html'>Kembali ke Menu</a>";

?>
</table>

</br>
</br>
</br>
</br>
</center>
<footer class="parallax-section">
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.6s">
        <h2 class="heading">Contact Info.</h2>
        <div class="ph">
          <p><i class="fa fa-phone"></i> Phone</p>
          <h4>090-080-0760</h4>
        </div>
        <div class="address">
          <p><i class="fa fa-map-marker"></i> Our Location</p>
          <h4>Yogyakarta</h4>
        </div>
      </div>
      <div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.6s">
        <h2 class="heading">Open Hours</h2>
          <p>Sunday <span>10:30 AM - 10:00 PM</span></p>
          <p>Mon-Fri <span>9:00 AM - 8:00 PM</span></p>
          <p>Saturday <span>11:30 AM - 10:00 PM</span></p>
      </div>
      <div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.6s">
        <h2 class="heading">Follow Us</h2>
        <ul class="social-icon">
          <li><a href="#" class="fa fa-facebook wow bounceIn" data-wow-delay="0.3s"></a></li>
          <li><a href="#" class="fa fa-twitter wow bounceIn" data-wow-delay="0.6s"></a></li>
          <li><a href="#" class="fa fa-behance wow bounceIn" data-wow-delay="0.9s"></a></li>
          <li><a href="#" class="fa fa-dribbble wow bounceIn" data-wow-delay="0.9s"></a></li>
          <li><a href="#" class="fa fa-github wow bounceIn" data-wow-delay="0.9s"></a></li>
        </ul>
      </div>
    </div>
  </div>
</footer>


<!-- copyright section -->
<section id="copyright">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-12">
        <h3>Cal'Resto</h3>
        <p>Copyright © Cal Restaurant and Cafe 
                
                | Design: <a rel="nofollow" href="#" target="_parent">Tooplate</a></p>
      </div>
    </div>
  </div>
</section>

  </body>
    </html>