<?php
    include("koneksi.php");
$query_delete=mysqli_query($koneksi,"delete from cutikaryawan where id_user='".$_GET['id_user']."'");
if($query_delete){
    header("location:view_cuti.php");
}else{
    echo mysqli_error ();
}
echo " data telah di apus";
echo "<meta http-equiv=refresh content=2,URL='view_cuti.php'>";
?>
