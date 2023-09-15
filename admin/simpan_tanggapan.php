<?php
require '../connect.php';
$id_pengaduan = $_POST ['id_pengaduan'];
$tgl = $_POST['tgl_tanggapan'];
$tanggapan = $_POST['tanggapan'];
$id_petugas = $_POST['id_petugas'];
$st = 'selesai';

$sql = mysqli_query($conn, "INSERT INTO tanggapan (id_pengaduan, tgl_tanggapan, tanggapan, id_petugas) values(
    '$id_pengaduan', '$tgl', '$tanggapan', '$id_petugas')");
$update_st = mysqli_query($conn, "UPDATE pengaduan SET status='$st' where id_pengaduan = '$id_pengaduan'"); 

if($sql)
{
    ?>
    <script type="text/javascript">
        alert ("Data sudah ditanggapi!");
        window.location = "admin.php?url=verifikasi_pengaduan"; 
    </script>
<?php    
}
?>