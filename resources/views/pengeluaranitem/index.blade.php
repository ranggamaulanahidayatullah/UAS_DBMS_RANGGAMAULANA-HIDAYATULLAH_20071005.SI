<h1>Data Bagian</h1>

<table border="1">

<tr>
    <td>No</td>
    <td>ID</td>
    <td>Nobk</td>
    <td>Barang ID</td>
    <td>Jumlah</td>
</tr>

<?php 
$no=0;
 foreach ($pengeluaranitemrmh as $row) {
$no++;
?>
<tr>
    <td><?php echo $no?></td>
    <td><?php echo $row->id_rmh?></td>
    <td><?php echo $row->nobk_rmh?></td>
    <td><?php echo $row->barangid_rmh?></td>
    <td><?php echo $row->jumlah_rmh?></td>
</tr>
<?php
}
?>

</table>