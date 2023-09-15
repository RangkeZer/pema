<?php 
require 'connect.php';
$tgl=date('Y/m/d');
$nik=$_POST['nik'];
$isi=$_POST['isi_laporan'];
// ambil data file
$namaFile = $_FILES['foto']['name'];
$namaSementara = $_FILES['foto']['tmp_name'];
$st=0;

// tentukan lokasi file akan dipindahkan
$dirUpload = "foto/";

// pindahkan file
$terupload = move_uploaded_file($namaSementara, $dirUpload.$namaFile);

if ($terupload) {
    $sql=mysqli_query($conn,"insert into pengaduan(tgl_pengaduan,nik,isi_laporan,foto,status) values('$tgl', '$nik', '$isi', '$namaFile', '$st')");
    ?>
    <script>
        alert('Laporan berhasil!');
        window.location="masyarakat.php?url=lihat_pengaduan";
    </script>
    <?php
    // header('location:masyarakat.php?url=lihat_pengaduan');
    // echo "Link: <a href='".$dirUpload.$namaFile."'>".$namaFile."</a>";
} else {
    echo "Upload Gagal!";
    header('location:masyarakat.php?url=tulis_pengaduan');
    //Stop The Process
    die();  
}

?>