<?php 

require 'connect.php';

$user = $_POST['username'];
$pass = $_POST['password'];
$conn = mysqli_connect("localhost", "root", "", "db_pemas"); // penjabaran database
$sql = mysqli_query($conn, "SELECT * FROM petugas WHERE username='$user' and password='$pass' ");

$check = mysqli_num_rows($sql);

if ($check > 0) // Jika ditemukan
{
    $data = mysqli_fetch_array($sql);
    if ($data['level'] == "admin")
    {
        session_start();
        $_SESSION['id_petugas'] = $data['id_petugas'];
        $_SESSION['user'] = $user;
        $_SESSION['nama'] = $data['username'];
        $_SESSION['level'] = $data['level'];

        header('location:admin/admin.php');
    }
    else if ($data['level'] == "petugas")
    {
        session_start();
        $_SESSION['user'] = $user;
        $_SESSION['nama'] = $data['username'];
        $_SESSION['level'] = $data['level'];

        header('location:petugas/petugas.php');
    }
}
else
{
    ?>
    <script type="text/javascript">
        alert('Nama atau Password tidak ditemukan');
        window.location="index2.php";
    </script>
    <?php
}
?>



