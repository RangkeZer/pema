<?php 

require '../connect.php';
$id = $_POST ['id_petugas'];
$nama = $_POST['nama_petugas'];
$user = $_POST['username'];
$pass = $_POST['password'];
$telp = $_POST['telp'];
$level = $_POST['level'];

$sql = mysqli_query($conn, "UPDATE petugas set nama_petugas='$nama', username='$user', password='$pass', telp='$telp', level='$level' where 
id_petugas='$id' "); 

if($sql)
{
?>
<script type="text/javascript">
        alert ("Data Berhasil Diudah");
        window.location = "admin.php?url=lihat_petugas"; 
    </script>
<?php    
}
?>
