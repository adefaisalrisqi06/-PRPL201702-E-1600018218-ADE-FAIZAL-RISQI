<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Cal'Resto</title>
  </head>
  <body bgcolor="aqua">
    <a href="pesanan.html">Kembali Ke Menu</a>
    <h1>Tambah Data customer</h1>
    <form action="simpan_customer.php" method="post">
      <table>
        <tr>
          <td>id customer</td>
          <td>:</td>
          <td><input type="text" name="idcustomer"></td>
        </tr>
        <tr>
          <td>Nama</td>
          <td>:</td>
          <td><input type="text" name="Nama"></td>
        </tr>
        <tr>
          <td>Alamat</td>
          <td>:</td>
          <td><textarea name="Alamat" rows="8" cols="40"></textarea></td>
        </tr>
        <tr>
          <td>No Meja</td>
          <td>:</td>
          <td><input type="text" name="NoMeja"></td>
        </tr>
        <tr>
          <td>No Telepon</td>
          <td>:</td>
          <td><input type="text" name="NoTelepon"></td>
        </tr>
        <tr>
          <td>Tanggal</td>
          <td>:</td>
          <td><input type="text" name="Tanggal"></td>
        </tr>
        <tr>
          <td>Email</td>
          <td>:</td>
          <td><input type="text" name="Email"></td>
        </tr>
        <tr>
          <td colspan="2"></td>
          <td><input type="submit" value="Submit"></td>
        </tr>
      </table>
    </form>
  </body>
</html>