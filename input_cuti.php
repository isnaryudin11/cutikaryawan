<?php
include("koneksi.php");

if(isset($_POST['save'])){
$query_input=mysqli_query($koneksi,"insert into cutikaryawan (id_user,nama,mulaicuti,akhircuti,keterangan,status)values(
'".$_POST['id_user']."',
'".$_POST['nama']."',
'".$_POST['mulaicuti']."',
'".$_POST['akhircuti']."',
'".$_POST['keterangan']."',
'".$_POST['status']."')");

if($query_input){
header('location:view_cuti.php');
}else{
}
}
?>
<body>
    <div class="container">
    <h2><b>FROM PENGAJUAN CUTI</b></h2>
    <form name="form1" method="post" action="">
        <table width="600" boder="0" cellspacing="1" cellpadding="1">
            <tr>
                <td>ID</td>
                <td><input type="text" name="id_user"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
			<tr>
                <td>Mulai Cuti</td>
                <td><input type="date" name="mulaicuti"></td>
            </tr>
			<tr>
                <td>Akhir cuti</td>
                <td><input type="date" name="akhircuti"></td>
            </tr>
            <tr>
                <td>Keterangan</td>
                <td><textarea name="keterangan"></textarea></td>
            </tr>
            <tr>
                <td>Setatus</td>
                <td><select name="status">
                    <option value="">--pilihan--</option>
                    <option value="karyawan">karyawan</option>
                    <option value="leader">Leader</option>
                    <option value="supervisor">supervisor</option>
                    <option value="Manager">Manager</option>
                    <option value="HRD">HRD</option>
                </select></td>
            </tr>
            <tr>
                <td></td>
                <td><Input type="submit" name="save" value="Simpan"></td>
            </tr>
        </table>
    </form>
    </div>
</body>
</html>