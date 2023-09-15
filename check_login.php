<?php 

require 'connect.php';
$user=$_POST['username'];
$pass=$_POST['password'];
$sql = mysqli_query($conn, "select * from masyarakat where username='$user' and password='$pass' ");

$check=mysqli_num_rows($sql);

    if($check>0)
    {
        $data=mysqli_fetch_array($sql);
        session_start();
        $_SESSION['nama'] = $user;
        $_SESSION['nik'] = $data['nik'];
        header('location:masyarakat.php');
    }
    else
    {
        ?>
    <script type="text/javascript">
        alert('Username atau Password tidak ditemukan');
        window.location="index.php";
    </script>
<?php
    }
?>