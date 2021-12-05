<?php
include "koneksi.php";
$query_view=mysqli_query($koneksi,"select * from cutikaryawan");
?>
</br>
<h4>PENGAJUAN CUTI </h4>
<a href="input_cuti.php" class="btn btn-danger">From cuti</a>|
<a href="index.php" class="btn btn-danger">logout</a>
<table class="table table-bordered" border="1">
    <tr>
        <td>No</td>
        <td>Id Karyawan</td>
        <td>nama</td>
        <td>mulai cuti</td>
        <td>akhir cuti</td>
        <td>keterangan</td>
        <td>setatus</td>
        <td>aprov 1</td>
        <th colspan="4">Aprov 1</th>
    </tr>
<?php
$no=1;
while($data=mysqli_fetch_array($query_view)) {?>
    <tr>
        <td><?php echo $no++;?></td>
        <td><?php echo $data['id_user'];?></td>
        <td><?php echo $data['nama'];?></td>
        <td><?php echo $data['mulaicuti'];?></td>
        <td><?php echo $data['akhircuti'];?></td>
        <td><?php echo $data['keterangan'];?></td>
        <td><?php echo $data['status'];?></td>
        <td><?php echo $data['aprov1'];?></td>
        <td><a href="aprov_cuti.php?id_user=<?php echo $data['id_user']?>">rievew</a></td>
        <td><a href="hapus_cuti.php?id_user=<?php echo $data['id_user'];?>">hapus</a></td>
   </tr>

<?php }?>
</table>