<?php
include("koneksi.php");

$id_user=$_GET['id_user'];

$query="SELECT * FROM cutikaryawan WHERE id_user=" . $id_user;

$hasil=mysqli_query($koneksi,$query);
?>
    <div class="container">
    <h2><b>FROM PENGAJUAN CUTI</b></h2>
    <form name="form1" method="post" action="prosesedit.php">
    <?php while($data=mysqli_fetch_array($hasil)){ ?>

        <table width="600" boder="0" cellspacing="1" cellpadding="1">
            <tr>
                <td>ID</td>
                <td><input type="text" name="id_user" value="<?php echo $data['id_user'] ?>"/></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" value="<?php echo $data['nama'] ?>"/></td>
            </tr>
			<tr>
                <td>Mulai Cuti</td>
                <td><input type="date" name="mulaicuti" value="<?php echo $data['mulaicuti'] ?>"/></td>
            </tr>
			<tr>
                <td>Akhir cuti</td>
                <td><input type="date" name="akhircuti" value="<?php echo $data['akhircuti'] ?>"/></td>
            </tr>
            <tr>
                <td>Keterangan</td>
                <td><input type="text" name="keterangan" value="<?php echo $data['keterangan'] ?>"/></td>
            </tr>
            <tr>
                <td>Setatus</td>
                <td><input type="text" name="status" value="<?php echo $data['status'] ?>"/></td>
            </tr>
            <tr>
                <td>aprov1</td>
                <td><select name="aprov1" value="<?php echo $data['aprov1'] ?>">
                            <option value="">--pilihan--</option>
                            <option value="terima">terima</option>
                            <option value="tolak">tolak</option>
                        </select></td>
                </td>
            </tr>
            <tr>
                <td></td>
                <input type="hidden" name="id_user" value="<?php echo $data['id_user'] ?>"/></td>
                <td><Input type="submit" name="save" value="Simpan"></td>
            </tr>
        </table>
        <?php } ?>
    </form>
    </div>