<h3> Data Barang </h3>

<table border="1">
    <tr>
        <th>No</th>
        <th>Nama Barang </th>
        <th>Jumlah Barang </th>
        <th>Satuan Barang</th>
        <th>Status</th>
        <th colspan="2">Aksi</th>
    </tr>

    <?php
    include "koneksi.php";

    $no=1;
    $ambildata = mysqli_query($koneksi,"select * from barang");
    while($tampil = mysqli_fetch_array($ambildata)){
        echo "
        <tr>
            <td>$no</td>
            <td>$tampil[nama_barang]</td>
            <td>$tampil[jumlah_barang]</td>
            <td>$tampil[satuan_barang]</td>
            <td>$tampil[status]</td>
            <td><a href='?kode=$tampil[nama_barang]'> Hapus </a></td>
            <td><a href='ubah-barang.php?kode=$tampil[nama_barang]'> Ubah </a></td>
        <tr>";
        $no++;
    }
    ?>
    </table>

    <?php
    include "koneksi.php";

    if(isset($_GET['kode'])){
    mysqli_query($koneksi,"delete  from barang where nama_barang='$_GET[kode]'");
    
    echo "Data berhasil dihapus";
    echo "<meta http-equiv=refresh content=2;URL='data-barang.php'>";

    }
    ?>