<?php 
require '../connect.php';
$sql = mysqli_query($conn, "UPDATE pengaduan set status='proses' where id_pengaduan='$_GET[id]'");
if($sql)
{
    header('location:petugas.php?url=verifikasi_pengaduan');
    
}
?>