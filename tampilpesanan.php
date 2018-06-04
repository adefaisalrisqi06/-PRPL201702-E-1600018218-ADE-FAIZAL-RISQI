<center>
<div class="container" id="orderline">
    <h2 class="wow fadeInUp" data-wow-delay="0.3s"><center> Daftar Pesanan</center></h2>
  <form action="data_tanggal.php" method="POST">
    <h5><a class="kiri">Masukkan Tanggal Awal </a><a class="kanan">Masukkan Tanggal Terakhir</a></h5>
    <input type="date" class="name wow zoomIn" name="tanggalawal"  />
    <input type="date" class="name1 wow zoomIn" name="tanggalakhir" /> 
    <center><input class="booknow wow fadeInUp" type="submit" name="cari" value="search" /></center> 
    </form>
    
<center>

<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
    
</style>
        
    <table border="1">
        <tr>
        <td>ID Pemesan</td>
        <td>Nomor Meja </td>
        <td>Tanggal</td>
        <td>Jumlah pesanan</td>
        <td>Total Pembayaran</td>
        <td>Uang Pembayaran</td>
        <td>Uang Kembalian</td>
        <center>
        <td colspan=2><center>Aksi</center></td>
        </tr> 
        
    <?php
    $konek = new mysqli("localhost", "root","", "calresto");

if($konek->connect_error){
  die("Koneksi Gagal Karena : ". $konek->connect_error);
}
    $select = mysqli_query($konek, "SELECT * from pemesanan");

    if ($select->num_rows > 0){
    $no = 1; 
  while ($row = $select->fetch_assoc()) {
    echo "<tr>";
    echo "<td>".$row['idcustomer']."</td>";
    echo "<td>".$row['nomormeja']."</td>";
    echo "<td>".$row['tanggal']."</td>";
    echo "<td>".$row['jumlahpesanan']."</td>";
    echo "<td>".$row['bayar']."</td>";
    echo "<td>".$row['cash']."</td>";
    echo "<td>".$row['kembalian']."</td>";
    
    echo "<td><a href='deletepesanan.php?nomormeja=".$row['nomormeja']."'>Hapus</a></td>";
    echo "<td><a href='struck.php?nomormeja=".$row['nomormeja']."'>Cetak</a></td>";
    echo "</tr>";
  }
}else{
echo '<tr><td colspan="7"> Data Yang Dicari Tidak ada ...!!! <td></tr>';
    }
     ?>
</table>

</table>

<center><a href='index.html'>Kembali ke Home</a></center>
</center>   <br><br>

