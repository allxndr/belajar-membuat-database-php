<?php
include "koneksi.php";
$sql=mysqli_query($koneksi,"select * from barang where nama_barang='$_GET[kode]'");
$data=mysqli_fetch_array($sql);

?>

<h3> Ubah Data Barang </h3>

<form action="" method="post">
<table>
    <tr>
        <td width="120"> Nama Barang </td>
        <td> <input type="text" name="nama_barang" value="<?php echo $data['nama_barang']; ?>"> </td>
    </tr>
    <tr>
        <td> Jumlah Barang </td>
        <td> <input type="text" name="jumlah_barang" value="<?php echo $data['jumlah_barang']; ?>"> </td>
    </tr>
    <tr>
        <td> Satuan Barang </td>
        <td> <input type="text" name="satuan_barang" value="<?php echo $data['satuan_barang']; ?>"> </td>
    </tr>
    <tr>
        <td> Status </td>
        <td> <input type="text" name="status" value="<?php echo $data['status']; ?>"> </td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" name="proses" value="Ubah"> </td>
    </tr>
</table>

</form>

<?php
include "koneksi.php";

if(isset($_POST['proses'])){
mysqli_query($koneksi, "update barang set  
jumlah_barang = '$_POST[jumlah_barang]',
satuan_barang = '$_POST[satuan_barang]',
status = '$_POST[status]'
where nama_barang = '$_GET[kode]'");

echo "Data barang telah diubah";
echo "<meta http-equiv=refresh content=1;URL='data-barang.php'>";

}

?>