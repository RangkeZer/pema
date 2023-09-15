<?php
if (isset($_GET['url']))
{
    $url=$_GET['url'];

    switch($url)
    {
        
        
        case 'verifikasi_pengaduan';
        include 'verifikasi_pengaduan.php';
        break;
        case 'detail_pengaduan';
        include 'detail_pengaduan.php';
        break;

    }
}
else
{
    ?>
    Selamat datang di Aplikasi Pengaduan Masyarakat (PEMA)<br><br>
    anda Login sebagai: <h2><b><?php echo $_SESSION['nama']; 
    
    require "../connect.php";
    $sql = mysqli_query($conn, "SELECT * FROM pengaduan where status ='0' ");
    if($check = mysqli_num_rows($sql))
{
    ?>
    <br>
    <br>
    <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Laporan Pengaduan :
                        
                      </div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">Ada <?php echo $check; ?> Laporan dari masyarakat</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comments fa-4x text-gray-300"></i>
                      <span class= "badge badge-danger badge-counter"><?php echo $check; ?></span>

                    </div>
                  </div>
                </div>
              </div>
            </div>

            
<?php
} }
?>