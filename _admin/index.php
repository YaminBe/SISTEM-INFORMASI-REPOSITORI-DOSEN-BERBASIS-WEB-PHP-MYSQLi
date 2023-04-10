<?php
session_start();
if (@$_SESSION['login-admin']) {
    include '../koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="description" content="Miminium Admin Template v.1">
  <meta name="author" content="Isna Nur Azis">
  <meta name="keyword" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Halaman Dosen Repository</title>

  <!-- start: Css -->
  <link rel="stylesheet" type="text/css" href="../asset/css/bootstrap.min.css">

  <!-- plugins -->
  <link rel="stylesheet" type="text/css" href="../asset/css/plugins/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="../asset/css/plugins/dropzone.css"/>
  <link rel="stylesheet" type="text/css" href="../asset/css/plugins/datatables.bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="../asset/css/plugins/summernote.css"/>
  <link rel="stylesheet" type="text/css" href="../asset/css/plugins/animate.min.css"/>
  <link href="../asset/css/style.css" rel="stylesheet">
  <!-- end: Css -->

  <link rel="shortcut icon" href="../asset/img/logomi.png">

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
</head>
<?php
if (@$_SESSION['login-admin']) {
$sesi = @$_SESSION['id'];
}

$sql = mysqli_query($konek,"select * from tb_user where id_admin = '$sesi'") or die(mysqli_error($konek));
$data = mysqli_fetch_array($sql);
?>

<body id="mimin" class="dashboard">
      <!-- start: Header -->
        <nav class="navbar navbar-default header navbar-fixed-top">
          <div class="col-md-12 nav-wrapper">
            <div class="navbar-header" style="width:100%;">
              <div class="opener-left-menu is-open">
                <span class="top"></span>
                <span class="middle"></span>
                <span class="bottom"></span>
              </div>
                <a href="" class="navbar-brand"> 
                 <b><span class="fa fa-graduation-cap"></span> e-Repository</b>
                </a>

            <!--   <ul class="nav navbar-nav search-nav">
                <li>
                   <div class="search">
                    <span class="fa fa-search icon-search" style="font-size:23px;"></span>
                    <div class="form-group form-animate-text">
                      <input type="text" class="form-text" required>
                      <span class="bar"></span>
                      <label class="label-search">Type anywhere to <b>Search</b> </label>
                    </div>
                  </div>
                </li>
              </ul> -->
              

              <ul class="nav navbar-nav navbar-right user-nav">
                <li class="user-name"><span><?php echo $data['nama']; ?></span></li>
                  <li class="dropdown avatar-dropdown">
                   <img src="../asset/img-admin/<?php echo $data['foto']; ?>" class="img-circle avatar" alt="user name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"/>
                   <ul class="dropdown-menu user-dropdown">
                     <li><a href="#"><span class="fa fa-user"></span> My Profile</a></li>
                     <li role="separator" class="divider"></li>
                     <li class="more">
                      <ul>
                        <li><a href=""><span class="fa fa-cogs"></span></a></li>
                        <li><a href=""><span class="fa fa-lock"></span></a></li>
                        <li><a href="logout.php"><span class="fa fa-power-off "></span></a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li ><a href="#" class="opener-right-menu"><span class="fa fa-info"></span></a></li>
              </ul>
            </div>
          </div>
        </nav>
      <!-- end: Header -->

      <div class="container-fluid mimin-wrapper">
  
          <!-- start:Left Menu -->
            <div id="left-menu">
              <div class="sub-left-menu scroll">
                <ul class="nav nav-list">
                    <li><div class="left-bg"></div></li>
                    <li class="time">
                       <center><img src="../asset/logo.jpg" width="150" style="border-radius: 15px;"></center>
                <!--       <h1 class="animated fadeInLeft">21:00</h1>
                      <p class="animated fadeInRight">Sat,October 1st 2029</p> -->
                    </li>
                    <li class="active ripple">
                      <a href="?page=home"><span class="fa-home fa" style="font-size: 23px;"></span> Dashboard 
                      </a>
                    </li>
                    <li class="ripple"><a class="tree-toggle nav-header">
                    <span class="fa fa-folder-open" style="font-size: 23px;"></span> Data Master <span class="fa-angle-right fa right-arrow text-right"></span> </a>
                      <ul class="nav nav-list tree">
                        <li>
                          <a href="?page=v_jenis"> <span class="fa fa-folder-open"></span> Data Jenis Karya</a>
                        </li>
                        <li>
                          <a href="?page=fak"><span class="fa fa-folder-open"></span> Data Prodi</a>
                        </li>
                        <li>
                          <a href="?page=jur"><span class="fa fa-folder-open"></span> Data Jabatan</a>
                        </li>                
                      </ul>
                    </li>
                    <li class="ripple">
                      <a href="?page=v_karya">
                        <span class="fa fa-graduation-cap" style="font-size: 23px;"></span> List Data Karya <span class="fa-angle-right fa right-arrow text-right"></span></a>
                    </li>
                     <li class="ripple">
                      <a href="?page=v_dosen">
                        <span class="fa fa-users" style="font-size: 23px;"></span> List Data Dosen <span class="fa-angle-right fa right-arrow text-right"></span></a>
                    </li>
                     <li class="ripple">
                      <a href="?page=v_file">
                        <span class="fa fa-file-archive-o" style="font-size: 23px;"></span> List Data File <span class="fa-angle-right fa right-arrow text-right"></span></a>
                    </li>   
                 <!--     <li class="ripple">
                      <a href="?page=laporan">
                        <span class="fa fa-print" style="font-size: 23px;"></span> Laporan<span class="fa-angle-right fa right-arrow text-right"></span></a>
                    </li>  -->

                 <li class="ripple"><a class="tree-toggle nav-header">
                    <span class="fa fa-print" style="font-size: 23px;"></span> Laporan Karya<span class="fa-angle-right fa right-arrow text-right"></span> </a>
                      <ul class="nav nav-list tree">
                        
                        <li><a href="?page=laporan"> Data Karya</a></li>
                        <li><a href="?page=v_dosenl"> Data Dosen</a></li>
                      </ul>
                    </li> 
                      <li class="ripple">
                      <a href="?page=user">
                        <span class="fa fa-cog" style="font-size: 23px;"></span> Setting User<span class="fa-angle-right fa right-arrow text-right"></span></a>
                    </li>  

                      
                  </ul>
                </div>
            </div>
          <!-- end: Left Menu -->


            <!-- start: Content -->
            <div id="content">
            <!-- Ini Untuk Iclude halaman Dinamis -->
            <?php 
            error_reporting();

            $page= @$_GET['page'];
            if ($page=="home") {
              include 'home.php';
              // Lihat Data Karya
            }elseif ($page=="v_karya") {
              include 'page/V-karya.php';
            }elseif ($page=="detail") {
              include 'page/detail.php';
            }elseif ($page=="edit") {
              include 'page/edit-karya.php';
            }elseif ($page=="del") {
                include 'page/del-karya.php';
            }elseif ($page=="t-karya") {
                include 'page/InputKarya.php';
            }elseif ($page=="upload") {
                include 'page/UploadFile.php';
                // Proses
            }elseif ($page=="proses") {
              include 'page/proses.php';
              // jenis
            }elseif ($page=="v_jenis") {
              include 'page/V-jenis.php';
            }elseif ($page=="t-jenis") {
              include 'page/T-jenis.php'; 
            }elseif ($page=="e-jenis") {
              include 'page/E-jenis.php';
            }elseif ($page=="del-jenis") {
              include 'page/D-jenis.php';
              // fakultas
            }elseif ($page=="fak") {
              include 'page/V-fakultas.php';
            }elseif ($page=="t-fak") {
              include 'page/T-fakultas.php';
            }elseif ($page=="e-fak") {
              include 'page/E-fakultas.php';
            }elseif ($page=="del-fak") {
              include 'page/D-fakultas.php';
              // Jurusan
            }elseif ($page=="jur") {
              include 'page/V-jurusan.php';
            }elseif ($page=="t-jur") {
              include 'page/T-jurusan.php';
            }elseif ($page=="e-jur") {
              include 'page/E-jurusan.php';
            }elseif ($page=="del-jur") {
              include 'page/D-jurusan.php';
              // lihat dosen
            }elseif ($page=="v_dosen") {
              include 'page/V-dosen.php';
            }elseif ($page=="t-dosen") {
              include 'page/T-dosen.php';
            }elseif ($page=="e_dsn") {
              include 'page/E-dosen.php';
            }elseif ($page=="deldsn") {
              include 'page/D-dosen.php';
            }elseif ($page=="detail-dsn") {
              include 'page/Detail-Dsn.php';

              // Daftar File
            }elseif ($page=="v_file") {
              include 'page/V-file.php';
            }elseif ($page=="delfile") {
              include 'page/D-file.php';
              // Laporan
            }elseif ($page=="laporan") {
              include 'page/laporan.php';
            }elseif ($page=="v_dosenl") {
              include 'page/V-dosenL.php';
              // Setting User
            }elseif ($page=="user") {
              include 'page/v_user.php';
            }elseif ($page=="") {
              include 'home.php';
            }else{
              echo "HLAMAN TIDAK TERSEDIA !!";

            }


             ?>
             <!-- Akhir script halaman -->
            </div>
          <!-- end: content -->

          
      </div>

      <!-- start: Mobile -->
      <div id="mimin-mobile" class="reverse">
        <div class="mimin-mobile-menu-list">
            <div class="col-md-12 sub-mimin-mobile-menu-list animated fadeInLeft">
                <ul class="nav nav-list">
                    <li class="active ripple">
                      <a class="tree-toggle nav-header">
                        <span class="fa-home fa"></span>Dashboard 
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>
                      <ul class="nav nav-list tree">
                          <li><a href="dashboard-v1.html">Dashboard v.1</a></li>
                          <li><a href="dashboard-v2.html">Dashboard v.2</a></li>
                      </ul>
                    </li>
                    <li class="ripple">
                      <a class="tree-toggle nav-header">
                        <span class="fa-diamond fa"></span>Master Data
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>
                      <ul class="nav nav-list tree">
                        <li><a href="topnav.html">Top Navigation</a></li>
                        <li><a href="boxed.html">Boxed</a></li>
                      </ul>
                    </li>
                    <li class="ripple">
                      <a class="tree-toggle nav-header">
                        <span class="fa-area-chart fa"></span>Charts
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>
                      <ul class="nav nav-list tree">
                        <li><a href="chartjs.html">ChartJs</a></li>
                        <li><a href="morris.html">Morris</a></li>
                        <li><a href="flot.html">Flot</a></li>
                        <li><a href="sparkline.html">SparkLine</a></li>
                      </ul>
                    </li>
                    <li class="ripple">
                      <a class="tree-toggle nav-header">
                        <span class="fa fa-pencil-square"></span>Ui Elements
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>
                      <ul class="nav nav-list tree">
                        <li><a href="color.html">Color</a></li>
                        <li><a href="weather.html">Weather</a></li>
                        <li><a href="typography.html">Typography</a></li>
                        <li><a href="icons.html">Icons</a></li>
                        <li><a href="buttons.html">Buttons</a></li>
                        <li><a href="media.html">Media</a></li>
                        <li><a href="panels.html">Panels & Tabs</a></li>
                        <li><a href="notifications.html">Notifications & Tooltip</a></li>
                        <li><a href="badges.html">Badges & Label</a></li>
                        <li><a href="progress.html">Progress</a></li>
                        <li><a href="sliders.html">Sliders</a></li>
                        <li><a href="timeline.html">Timeline</a></li>
                        <li><a href="modal.html">Modals</a></li>
                      </ul>
                    </li>
                    <li class="ripple">
                      <a class="tree-toggle nav-header">
                       <span class="fa fa-check-square-o"></span>Forms
                       <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>
                      <ul class="nav nav-list tree">
                        <li><a href="formelement.html">Form Element</a></li>
                        <li><a href="#">Wizard</a></li>
                        <li><a href="#">File Upload</a></li>
                        <li><a href="#">Text Editor</a></li>
                      </ul>
                    </li>
                    <li class="ripple">
                      <a class="tree-toggle nav-header">
                        <span class="fa fa-table"></span>Tables
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>
                      <ul class="nav nav-list tree">
                        <li><a href="datatables.html">Data Tables</a></li>
                        <li><a href="handsontable.html">handsontable</a></li>
                        <li><a href="tablestatic.html">Static</a></li>
                      </ul>
                    </li>
                    <li class="ripple">
                      <a href="calendar.html">
                         <span class="fa fa-calendar-o"></span>Calendar
                      </a>
                    </li>
                    <li class="ripple">
                      <a class="tree-toggle nav-header">
                        <span class="fa fa-envelope-o"></span>Mail
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>
                      <ul class="nav nav-list tree">
                        <li><a href="mail-box.html">Inbox</a></li>
                        <li><a href="compose-mail.html">Compose Mail</a></li>
                        <li><a href="view-mail.html">View Mail</a></li>
                      </ul>
                    </li>
                    <li class="ripple">
                      <a class="tree-toggle nav-header">
                        <span class="fa fa-file-code-o"></span>Pages
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>
                      <ul class="nav nav-list tree">
                        <li><a href="forgotpass.html">Forgot Password</a></li>
                        <li><a href="login.html">SignIn</a></li>
                        <li><a href="reg.html">SignUp</a></li>
                        <li><a href="article-v1.html">Article v1</a></li>
                        <li><a href="search-v1.html">Search Result v1</a></li>
                        <li><a href="productgrid.html">Product Grid</a></li>
                        <li><a href="profile-v1.html">Profile v1</a></li>
                        <li><a href="invoice-v1.html">Invoice v1</a></li>
                      </ul>
                    </li>
                     <li class="ripple"><a class="tree-toggle nav-header"><span class="fa "></span> MultiLevel  <span class="fa-angle-right fa right-arrow text-right"></span> </a>
                      <ul class="nav nav-list tree">
                        <li><a href="view-mail.html">Level 1</a></li>
                        <li><a href="view-mail.html">Level 1</a></li>
                        <li class="ripple">
                          <a class="sub-tree-toggle nav-header">
                            <span class="fa fa-envelope-o"></span> Level 1
                            <span class="fa-angle-right fa right-arrow text-right"></span>
                          </a>
                          <ul class="nav nav-list sub-tree">
                            <li><a href="mail-box.html">Level 2</a></li>
                            <li><a href="compose-mail.html">Level 2</a></li>
                            <li><a href="view-mail.html">Level 2</a></li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                    <li><a href="credits.html">Credits</a></li>
                  </ul>
            </div>
        </div>       
      </div>
      <button id="mimin-mobile-menu-opener" class="animated rubberBand btn btn-circle btn-danger">
        <span class="fa fa-bars"></span>
      </button>
       <!-- end: Mobile -->

<!-- start: Javascript -->
<script src="../asset/js/jquery.min.js"></script>
<script src="../asset/js/jquery.ui.min.js"></script>
<script src="../asset/js/bootstrap.min.js"></script>



<!-- plugins -->
<script src="../asset/js/plugins/moment.min.js"></script>
<script src="../asset/js/plugins/dropzone.js"></script>
<script src="../asset/js/plugins/summernote.min.js"></script>
<script src="../asset/js/plugins/jquery.datatables.min.js"></script>
<script src="../asset/js/plugins/datatables.bootstrap.min.js"></script>
<script src="../asset/js/plugins/jquery.nicescroll.js"></script>


<!-- custom -->
<script src="../asset/js/main.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $('#datatables-example').DataTable();
  });
</script>
<!-- end: Javascript -->
<script type="text/javascript">
  $(document).ready(function(){

  });
</script>
<script type="text/javascript">
  $(document).ready(function(){
       $('#summernote').summernote({
        height:400
       });
  });
</script>
</body>
</html>

<?php
} else{
echo "<script>window.location='../loginadmin.php';</script>";

}