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
<section class="preloader">
  <div class="sk-spinner sk-spinner-pulse"></div>
</section>

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
        <li><a href="#" class="smoothScroll">RESERVASI</a></li>
        <li><a href="tambahpesanan.php" class="smoothScroll">PEMESANAN MAKANAN</a></li>
        <li><a href="tampil_customer.php" class="smoothScroll">ADMIN</a></li>
      </ul>
    </div>
  </div>
</section>
<script language="JavaScript" type="text/javascript">

function jumlah() {
//var myForm = document.form1;
var NasiGoreng = 10000 * myForm.pesanan1.value;
var Soto = 10000 * myForm.pesanan2.value;
var Kwetiau = 8000 * myForm.pesanan3.value;
var BakmiJawa = 10000 * myForm.pesanan4.value;
var Pecellele = 9000 * myForm.pesanan5.value;
var EsJeruk = 5000 * myForm.pesanan6.value;
var AirMineral = 2000 * myForm.pesanan7.value;
var EsTeh = 3000 * myForm.pesanan8.value;


var hasil = NasiGoreng+Soto+Kwetiau+BakmiJawa+Pecellele+EsJeruk+AirMineral+EsTeh;
var jumlah = (NasiGoreng/10000)+(Soto/10000)+(Kwetiau/8000)+(BakmiJawa/10000)+(Pecellele/9000)+(EsJeruk/5000)+(AirMineral/2000)+(EsTeh/3000);

var terbayar = myForm.cash.value ;
var kembalian = terbayar - hasil;

myForm.jumlahpesanan.value = jumlah;

if (hasil > 200000) {
    myForm.subtotal.value = hasil;
    myForm.diskon.value = (25*hasil)/100;
    myForm.bayar.value = hasil - eval(myForm.diskon.value);
    myForm.kembalian.value = terbayar - myForm.bayar.value;
 } else {
    myForm.subtotal.value = hasil;
    myForm.diskon.value = 0;
    document.myForm.bayar.value = hasil - eval(myForm.diskon.value);
    myForm.kembalian.value = terbayar - myForm.bayar.value;
 }
 //document.myForm.bayar.value = hasil;

} 
function resetForm(){
document.form1.reset();
}
</script>
<br><br><br></br></br></br>
<center>
<marquee><h4>Promo : Diskon 25 % jika transaksi di atas Rp. 200.000 </h4></marquee>

<form name="myForm"  action="simpanpesanan.php" method="post">
<table border="0">  
<tr>
  <td><label for="exampleInputEmail1"><strong>Nama Pemesan :</strong></label>
  <select class="form-control" name="idcustomer"> 
                <?php
                  $konek = new mysqli("localhost", "root","", "calresto");

if($konek->connect_error){
  die("Koneksi Gagal Karena : ". $konek->connect_error);
}
                    $select = $konek->query("SELECT * FROM customer");
                    foreach ($select as $x) {
                ?>
                    <option value="<?php echo $x['idcustomer']; ?>"><?php echo $x['Nama']; ?></option>
                <?php } ?>
            </select></td>
  </tr>
<tr>
  <td><strong> nomor meja </strong> </td>
  <td> : </td>
  <td> <input type="text" name="nomormeja" placeholder=" nomor meja" required /></td>
</tr>
<tr>
  <td><strong> Tanggal </strong></td>
  <td> : </td>
  <td> <input type="date" name=" tanggal" required /></td>
</tr>
</table>

<table border="3" cellspacing=0 cellpadding=0> 
<colgroup align="center">
<colgroup align="center">
<colgroup align="center">
<thead valign="middle">
<tr>
<th width="35"><font color="black" size="4">No</font>
<th width="200"><font color="black" size="4">Makanan/Minuman</font>
<th width="180"><font color="black" size="4">Harga Satuan</font>
<th width="100"><font color="black" size="4">jumlah pesanan</font>
</tr>
<tbody>

<tr>
<td>1<td>Nasi Goreng<td><input type="text" value="10000" disabled="true"/><td>
<input  type="text"  name="pesanan1" value="0" onChange="jumlah()"/>
</tr>
<tr>
<td>2<td>Soto<td><input type="text" value="10000" disabled="true"/><td>
<input  type="text"  name="pesanan2" value="0" onChange="jumlah()" />
</tr>
<tr>
<td>3<td>Kwetiau<td><input  type="text"   value="8000" disabled="true"/> <td>
<input  type="text"  name="pesanan3" value="0" onChange="jumlah()"/>
</tr>
<tr>
<td>4<td>Bakmie Jawa<td><input  type="text"   value="10000" disabled="true"/>
<td><input  type="text"  name="pesanan4" value="0" onChange="jumlah()" />
</tr>
<tr>
<td>5<td>Pecel Lele<td><input  type="text"   value="9000" disabled="true"/> <td>
<input  type="text"  name="pesanan5" value="0" onChange="jumlah()"/>
</tr>
<tr>
<td>6<td>Es Jeruk<td><input  type="text"   value="5000" disabled="true"/> <td>
<input  type="text"  name="pesanan6" value="0" onChange="jumlah()"/>
</tr>
<tr>
<td>7<td>Air Mineral<td><input  type="text"   value="2000" disabled="true"/> <td>
<input  type="text"  name="pesanan7" value="0" onChange="jumlah()"/>
</tr>
<tr>
<td>8<td>Es Teh<td><input  type="text"   value="3000" disabled="true"/> <td>
<input  type="text"  name="pesanan8" value="0" onChange="jumlah()"/>
</tr>

<tr>
<td colspan=3 align="right">Jumlah Pembayaran<td><input type="text"  id="subtotal" name="total" value="" />
</tr>
<tr>
<td colspan=3 align="right">Jumlah pemesanan<td><input type="text"  id="jumlahpesanan" name="jumlah_pesanan" value="" />
</tr>
<tr>
<td colspan=3 align="right">Diskon<td><input  type="text"  name="diskon"  />
</tr>
<tr>
<td colspan=3 align="right">Total Pembayaran<td><input type="text" name="bayar" value="" />
</tr>
<tr>
<td colspan=3 align="right">cash<td><input type="text" id="cash" name="cash" value="" onChange="jumlah()"/>
</tr>
<tr>
<td colspan=3 align="right">Uang Kembalian<td><input type="text" id="kembalian" name="kembalian" value=""  />
</tr>
</table>

<input type="reset" value="Reset" onClick="resetForm()" />
<button type="submit" value="Konfirmasi" > Konfirmasi</button>

</form action="tampilpesanan.php" method="post">
<br>
<br>

</center>

</body>
</html> 
  

  <script language="javascript">
function getkey(e)
{
if (window.event)
   return window.event.keyCode;
else if (e)
   return e.which;
else
   return null;
}
function goodchars(e, goods, field)
{
var key, keychar;
key = getkey(e);
if (key == null) return true;
 
keychar = String.fromCharCode(key);
keychar = keychar.toLowerCase();
goods = goods.toLowerCase();
 
// check goodkeys
if (goods.indexOf(keychar) != -1)
    return true;
// control keys
if ( key==null || key==0 || key==8 || key==9 || key==27 )
   return true;
    
if (key == 13) {
    var i;
    for (i = 0; i < field.form.elements.length; i++)
        if (field == field.form.elements[i])
            break;
    i = (i + 1) % field.form.elements.length;
    field.form.elements[i].focus();
    return false;
    };
// else return false
return false;
}
</script>
 
<!--  <script>
    function hanyaAngka(evt) {
      var charCode = (evt.which) ? evt.which : event.keyCode
       if (charCode > 31 && (charCode < 48 || charCode > 57))
 
        return false;
      return true;
    }
  </script> 
  --> 
    </div> <!-- end of order id-->
</div>    <!-- end of order order-->


<p></p><p></p>

<!-- JAVASCRIPT JS FILES -->  
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.parallax.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/nivo-lightbox.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>

<!-- footer section -->
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

<!-- JAVASCRIPT JS FILES -->  
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.parallax.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/nivo-lightbox.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/custom.js"></script>

<script type="text/javascript">
  function validasi() {
    var Nama = document.getElementById("Nama").value;
    //var noTelepon = document.getElementById("noTelepon").value;
    var Email = document.getElementById("Email").value;
    var Alamat = document.getElementById("Alamat").value;
    if (Nama != ""!="" && Email!="" && Alamat !="") {
      return true;
    }else{
      alert('Anda harus mengisi data dengan lengkap !');
    }
  }
</script> 

</body>
</html>