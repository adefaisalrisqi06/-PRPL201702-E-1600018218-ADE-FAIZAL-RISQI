<?php
// membuat koneksi
$konek = new mysqli("localhost","root","","calresto");

// mengecek koneksi
if($konek->connect_error){
  die("Koneksi Gagal Karena : ". $konek->connect_error);
}


$idcustomer = $_GET['idcustomer'];

$customer = mysqli_query($konek, " SELECT * FROM customer where idcustomer='$idcustomer'");
$row = mysqli_fetch_array($customer);

?>

<html>
  <head>
    <meta charset="utf-8">
    <title>Cal'Resto</title>
  </head>
  <body>
    <a href="index.php">Kembali Ke Menu</a>
    <h1>Edit Data customer</h1>
    <form action="update_customer.php" method="post">
      <td><input type="hidden" name="idcustomer" value="<?php echo $row['idcustomer'];?>"/></td>

      <table>
        <tr>
          <td>idcustomer</td>
          <td>:</td>

          <td><input type="text" disabled  value="<?php echo $row['idcustomer'];?>"/></td>
        </tr>
        <tr>
          <td>Nama</td>
          <td>:</td>
          <td><input type="text" name="Nama" value="<?php echo $row['Nama'];?>"></td>
        </tr>
        <tr>
          <td>Alamat</td>
          <td>:</td>
          <td><textarea name="Alamat" value="" rows="8" cols="40"><?php echo $row['Alamat'];?></textarea></td>
        </tr>
        <tr>
          <td>No Meja</td>
          <td>:</td>
          <td><textarea name="NoMeja" value="" rows="8" cols="40"><?php echo $row['NoMeja'];?></textarea></td>
        </tr>
        <tr>
          <td>Email</td>
          <td>:</td>
          <td><textarea name="Email" value="" rows="8" cols="40"><?php echo $row['Email'];?></textarea></td>
        </tr>
        <tr>
          <td>No Telepon</td>
          <td>:</td>
          <td><textarea name="NoTelepon" value="" rows="8" cols="40"><?php echo $row['NoTelepon'];?></textarea></td>
        </tr>
        <tr>
          <td>Tanggal</td>
          <td>:</td>
          <td><textarea name="Tanggal" value="" rows="8" cols="40"><?php echo $row['Tanggal'];?></textarea></td>
        </tr>
        <tr>
          <td colspan="2"></td>
          <td><input type="submit" value="Submit"></td>
        </tr>

      </table>
    </form>
  </body>
</html>
