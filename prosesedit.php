<?php
include("koneksi.php");

$id_user=$_POST['id_user'];
$nama=$_POST['nama'];
$mulaicuti=$_POST['mulaicuti'];
$akhircuti=$_POST['akhircuti'];
$keterangan=$_POST['keterangan'];
$status=$_POST['status'];
$aprov1=$_POST['aprov1'];

$query="UPDATE cutikaryawan SET id_user='$id_user', nama='$nama', mulaicuti='$mulaicuti', akhircuti='$akhircuti',
     keterangan='$keterangan', status='$status', aprov1='$aprov1' WHERE id_user=$id_user";

     $hasil=mysqli_query($koneksi,$query);

     if(hasil){
         header('location:view_cuti.php');
     }else{
         echo "update data gagal";
     }
?>