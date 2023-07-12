<h1>Data Bagian</h1>

<table border="1">

<tr>
    <td>No</td>
    <td>Bagian ID</td>
    <td>Nama Bagian</td>
    <td>Kepala Bagian</td>
    <td>telp</td>
</tr>

<?php 
$no=0;
 foreach ($bagianrmh as $row) {
$no++;
?>
<tr>
    <td><?php echo $no?></td>
    <td><?php echo $row->bagianid_rmh?></td>
    <td><?php echo $row->namabagian_rmh?></td>
    <td><?php echo $row->kepalabagian_rmh?></td>
    <td><?php echo $row->telp_rmh?></td>
</tr>
<?php
}
?>

</table>