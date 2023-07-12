<h1>Data Bagian</h1>

<table border="1">

<tr>
    <td>No</td>
    <td>Petugas ID</td>
    <td>Nama Petugas</td>
    <td>Alamat</td>
    <td>Handphone</td>
    <td>Password</td>
    <td>Level</td>
</tr>

<?php 
$no=0;
 foreach ($petugasrmh as $row) {
$no++;
?>
<tr>
    <td><?php echo $no?></td>
    <td><?php echo $row->petugasid_rmh?></td>
    <td><?php echo $row->namapetugas_rmh?></td>
    <td><?php echo $row->alamat_rmh?></td>
    <td><?php echo $row->handphone_rmh?></td>
    <td><?php echo $row->password?></td>
    <td><?php echo $row->level?></td>
</tr>
<?php
}
?>

</table>