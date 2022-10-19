<h3> Tambah Barang </h3>

<form action="" method="post">
<table>
    <tr>
        <td width="120"> Nama Barang </td>
        <td> <input type="text" name="nama_barang"> </td>
    </tr>
    <tr>
        <td> Jumlah Barang </td>
        <td> <input type="text" name="jumlah_barang"> </td>
    </tr>
    <tr>
        <td> Satuan Barang </td>
        <td>
             <input type="radio" name="satuan_barang" value="kg">kg
             <input type="radio" name="satuan_barang" value="pcs">pcs
             <input type="radio" name="satuan_barang" value="liter">liter
             <input type="radio" name="satuan_barang" value="meter">meter
        </td>
    </tr>
    <tr>
        <td> Status </td>
        <td>
             <input type="radio" name="status" value="available">available
             <input type="radio" name="satuan_barang" value="not-available">not available
        </td>
    <tr>
        <td></td>
        <td><input type="submit" name="proses" value="Simpan"> </td>
    </tr>
</table>

</form>

<?php
include "koneksi.php";

if(isset($_POST['proses'])){
mysqli_query($koneksi, "insert into barang set  
nama_barang = '$_POST[nama_barang]',
jumlah_barang = '$_POST[jumlah_barang]',
satuan_barang = '$_POST[satuan_barang]',
status = '$_POST[status]' ");

echo "Data barang baru telah tersimpan";

}

?>