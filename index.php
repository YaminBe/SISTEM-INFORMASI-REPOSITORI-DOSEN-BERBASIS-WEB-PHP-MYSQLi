<?php include 'koneksi.php'; ?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Selamat Datang di Repository STKIP Bukittinggi</title>
    <link rel="shortcut icon" href="front/img/favicon.ico">

    <!-- Global Stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
    <link href="front/css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="front/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="front/css/animate/animate.min.css">
    <link rel="stylesheet" href="front/css/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="front/css/owl-carousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="front/css/style.css">
  </head>

  <body id="page-top">

<!--====================================================
                         HEADER
======================================================--> 

    <header>

      <!-- Top Navbar  -->
      <div class="top-menubar">
        <div class="topmenu" style="background-color:#212121;color: #fff;">
          <div class="container">
            <div class="row">
              <div class="col-md-7">
                <ul class="list-inline top-contacts">
                  <li style="color: #fff;">
                    <!-- <i class="fa fa-envelope"></i> Email: <a href="mailto:info@themeborn.com">info@themeborn.com</a> -->
                  </li>
                  <li>
                    <i class="fa fa-phone"></i> Telp/Fax: (0751) 7861005 /444344
                  </li>
                </ul>
              </div> 
              <div class="col-md-5">
                <ul class="list-inline top-data">
              
                  <li><a href="logindosen.php" class="log-top"> <span class="fa fa-user"></span> Login Dosen</a></li>  
                  <li><a href="loginadmin.php" class="log-top"><span class="fa fa-user"></span> Login Admin</a></li>  
                </ul>
              </div>
            </div>
          </div>
        </div> 
      </div> 
      
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-light" id="mainNav" data-toggle="affix">
        <div class="container">
          <center><a class="navbar-brand smooth-scroll" href="">        
           <h3><b style="color: #212121;"> <span class="fa fa-graduation-cap" style="color:rgb(0,133,248);font-size: 40px;"></span> STKIP</b> <small>Repository</small></h3>
          </center>
             
           
          </a> 
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"> 
                <span class="navbar-toggler-icon"></span>
          </button>  
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item" ><a class="nav-link smooth-scroll" href="?page=">Home</a></li>
                <li class="nav-item dropdown" >
                  <a class="nav-link dropdown-toggle smooth-scroll" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Profil STKIP</a> 
                  <div class="dropdown-menu dropdown-cust" aria-labelledby="navbarDropdownMenuLink">
                   <!--  <a class="dropdown-item" href="?page=ketua">Sambutan Ketua</a> -->
                    <a class="dropdown-item" href="?page=sejarah">Sejarah</a>
                    <a class="dropdown-item" href="?page=vm">Visi & Misi</a>
                  </div>
                </li>
                <li class="nav-item dropdown" >
                  <a class="nav-link dropdown-toggle smooth-scroll" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Browse</a> 
                  <div class="dropdown-menu dropdown-cust" aria-labelledby="navbarDropdownMenuLink"> 
                    <a class="dropdown-item" href="?page=tahun">Browse By Tahun</a> 
                    <a class="dropdown-item" href="?page=tipe">Browse By Tipe</a> 
                    <a class="dropdown-item" href="?page=dosen">Browse By Dosen</a>
                  </div>
                </li>
                      <li class="nav-item dropdown" >
                  <a class="nav-link dropdown-toggle smooth-scroll" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Portal Akademik</a> 
                  <div class="dropdown-menu dropdown-cust" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" target="_blank" href="http://siadak.stkip-ahlussunnah.ac.id/">SIADAK</a>
                      <a class="dropdown-item" target="_blank" href="http://www.stkip-ahlussunnah.ac.id/">Website</a>
                    
                  </div>
                </li>
                 <li class="nav-item" ><a class="nav-link smooth-scroll" href="?page=maps">Lokasi Kami</a></li>
                <li>
                  <div class="top-menubar-nav">
                    <div class="topmenu ">
                      <div class="container">
                        <div class="row">
                          <div class="col-md-9">
                            <ul class="list-inline top-contacts">
                              <li>
                                <i class="fa fa-envelope"></i> Email: <a href="mailto:info@htmlstream.com">info@htmlstream.com</a>
                              </li>
                              <li>
                                <i class="fa fa-phone"></i> Hotline: (1) 396 4587 99
                              </li>
                            </ul>
                          </div> 
                          <div class="col-md-3">
                          </div>
                        </div>
                      </div>
                    </div> 
                  </div>
                </li>
            </ul>  
          </div>
        </div>
      </nav>
    </header> 


   

<!--====================================================
                         HOME
======================================================-->
    <section id="home">
      <div id="carousel" class="carousel slide carousel-fade" data-ride="carousel"> 
        <!-- Carousel items -->
        <div class="carousel-inner">
            <div class="carousel-item active slides">
              <div class="overlay"></div>
              <div class="slide-1"></div>
                <div class="hero ">
                  <hgroup class="wow fadeInUp">
                      <h1><!-- STKIP  --> <img src="logo.jpg" width="55" style="border-radius: 10px;border:2px solid yellow;"> <span ><a href="" class="typewrite" data-period="2000" data-type='["Selamat Datang !!","di","Repository Dosen", " Sekolah Tinggi Keguruan","Dan ILMU PENDIDIKAN" ," Ahlusunnah Bukittinggi"]'>
                        <span class="wrap"></span></a></span> </h1>        
                      <h3>Sekolah Tingi kEGURUAN DAN Ilmu pendidikan</h3>
                      <p class="text-danger">jl. Diponegoro No. 8 Depan Terminal Aur Kuning</p>
                    </hgroup>
                <!--   <button class="btn btn-general btn-green wow fadeInUp" role="button">Contact Now</button> -->
                </div>           
            </div> 
        </div> 
      </div> 
    </section> 

<br>
<br>

<!--====================================================
                        OFFER
======================================================-->
    <section id="comp-offer">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3 col-sm-3 desc-comp-offer wow fadeInUp" data-wow-delay="0.2s" id="div-forms">

            <!-- form -->        
            <form action="?page=cari" method="POST" id="login-form" class="form-inline">
              <div class="form-group">
                <label class="sr-only" for="keyword">Pencarian</label>
                <input type="text" name="keyword" class="form-control" id="keyword" placeholder="Cri disini ..." style="width: 260px;">
              </div>
               <button type="submit" name="cari" class="btn btn-primary"> <span class="fa fa-search"></span> Cari</button>
            </form>     
            <!-- end form -->
            <br>
             

            <h2>Koleksi</h2>
            <div class="heading-border-light"></div> 

                        <?php
                        $tampil=mysqli_query($konek,"SELECT * FROM tb_jenis
                        ");
                        while($data=mysqli_fetch_array($tampil)){
                        ?>
                          <!-- <button class="btn btn-general btn-white" role="button">Koleksi Desertasi</button> -->
                          <ul>
                            <li style="color: #fff;" class="list-group-item active">
                             <a href="?page=jenis&id=<?php echo $data['id_jenis']; ?>" class="list-group-item"> <span class="fa fa-angle-double-right" style="color: #2196F3;"></span> <strong><?php echo $data['jenis']; ?></strong> </a>
                           </li>
                          </ul>

                       
                        <?php } ?>  
                        <hr>
                        <h2>Terbaru</h2>
            <div class="heading-border-light"></div> 
              <ul>
                      <?php
                      $no=1;
                      $tampil=mysqli_query($konek,"SELECT * FROM tb_karya ORDER BY id_karya DESC LIMIT 4
                      ");
                      while($data1=mysqli_fetch_array($tampil)){
                      ?>
                      <li style="color: #fff;" class="list-group-item">
                        <a href="?page=detail&id=<?php echo $data1['id_karya']; ?>">
                          <span class="fa fa-angle-double-right"></span>  <b><?php echo $no++; ?>.</b><?php echo $data1['judul']; ?> </a> 
                    </li>
                          

                      <?php } ?> 
                      </ul>



          
          </div>
          <div class="col-md-9 col-sm-9 desc-comp-offer wow fadeInUp" data-wow-delay="0.4s">
            <div class="desc-comp-offer-cont">
              <div class="thumbnail-blogs">
                  <div class="caption">
                    <i class="fa fa-chain"></i>
                  </div>
              </div>

                  <?php 
                        error_reporting();
                        $page= @$_GET['page'];
                        if ($page=='home') {
                        echo'<div class="col-md-12">
                        <div class="jumbotron">
                        <h1>Selamat Datang, Repository STKIP</h1>
                        <p> E-Repository Merupakan Penyimpanan Naskah, Dokumen, Karya ilmiah,skripsi,tesis, dll Segenap civitas akademika STKIP Ahlusunnah Bukittinggi Agar dapat digunakan bersama bagi seluruh pengguna yang berkepentingan / peduli dengan peningkatan pendidikan di negeri tercinta Indonesia</p>
                       
                        </div>
                        </div>';
                        }elseif ($page=='cari') {
                        include 'page/cari.php';
                        }elseif ($page=='jenis') {
                        include 'page/jenis.php';
                        }elseif ($page=='detail') {
                        include 'page/detail.php';
                        }elseif ($page=='tahun') {
                        include 'page/by_tahun.php';
                        }elseif ($page=='tipe') {
                        include 'page/by_tipe.php';
                        }elseif ($page=='prodi') {
                        include 'page/by_prodi.php';
                        }elseif ($page=='dosen') {
                        include 'page/by_dosen.php';
                        }elseif ($page=='d-dosen') {
                        include 'page/Detail-Dsn.php';
                        }elseif ($page=='sejarah') {
                          echo'
                          <div class="container">
                          <div class="row title-bar">
                          <div class="col-md-12" style="min-height:500px;">
                          <center><img src="logo.jpg" width="100"></center>
                          <h1 class="wow fadeInUp">Sejarah STKIP</h1>
                          <h3>Sekolah Tinggi Keguruan dan Ilmu Pendidikan yang disingkat STKIP Ahlussunnah Bukittinggi, didirikan oleh Yayasan Ahlussunnah pada bulan Juni 1984 dengan Akta Notaris Nomor 3 tanggal 24 Oktober 1968. Akta ini telah mengalami penyempurnaan/penyesuaian d antaranya: Akta Notaris Nomor 26 tanggal 15 Agustus 2008, dan yang terakhir kepemimpinannya terdaftar di Kemenkumham dengan nomor AHU-AH.01.06-01 tertanggal 02 Januari 2014 .
                          STKIP Ahlussunnah pada awalnya mendapatkan izin sebagai STIPS tahun yang kemudian menjadi STKIP Ahlussunnah dengan status terdaftar dari Kopertis Wil I Medan. Dari tahun sampai tahun status Diakui dari Kopertis Wil X. Hingga sekarang seluruh Prodi strata satu (S1) dan terakreditasi BAN PT
                          Program studi yang ada di STKIP Ahlussunnah Bukittinggi antara lain:
                          1. Program Studi Pendidikan Pancasila dan Kewarganegaraan (PPKn), <br>
                          2. Program Studi Pendidikan Geografi <br>
                          3. Program Studi Pendidikan Matematika <br>
                          4. Program Studi Pendidikan Biologi, <br>
                          5. Program Studi Pendidikan Bahasa dan Sastra Indonesia
                          </h3>
                          </div>
                          </div>
                          </div>';
                        }elseif ($page=='vm') {
                        echo'
                        <div class="container">
                        <div class="row title-bar">
                        <div class="col-md-12" style="min-height:500px;">
                        <center><img src="logo.jpg" width="100"></center>
                        <h1 class="wow fadeInUp">Visi & Misi</h1>
                        <h3>Repository Merupakan Penyimpanan Naskah, Dokumen, Karya ilmiah,skripsi,tesis, dll Segenap civitas akademika STKIP Ahlusunnah Bukittinggi Agar dapat digunakan bersama bagi seluruh pengguna yang berkepentingan / peduli dengan peningkatan pendidikan di negeri tercinta Indonesia</h3>
                        </div>
                        </div>
                        </div>';
                        }elseif ($page=='maps') {
                        echo'
                        <div class="container">
                        <div class="row title-bar">
                        <div class="col-md-12" style="min-height:500px;">
                        <center><img src="logo.jpg" width="100"></center>
                        <h1 class="wow fadeInUp">Lokasi Kami</h1> <br><br>
                      <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m11!1m3!1d1006.7400184205261!2d100.38593438941686!3d-0.3149925810015093!2m2!1f0!2f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd50ceef85e9291%3A0xac4d373509ee1d!2sSTKIP+Ahlussunnah!5e1!3m2!1sid!2sid!4v1534007044859" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                        </div>
                        </div>';
                        }elseif ($page=='') {
                        echo'
                        <div class="container">
                        <div class="row title-bar">
                        <div class="col-md-12" style="min-height:500px;">
                        <center><img src="logo.jpg" width="100"></center>
                        <h1 class="wow fadeInUp">Selamat Datang, Repository STKIP</h1>
                        <h3>Repository Merupakan Penyimpanan Naskah, Dokumen, Karya ilmiah,skripsi,tesis, dll Segenap civitas akademika STKIP Ahlusunnah Bukittinggi Agar dapat digunakan bersama bagi seluruh pengguna yang berkepentingan / peduli dengan peningkatan pendidikan di negeri tercinta Indonesia</h3>
                        </div>
                        </div>
                        </div>';
                        }else{
                        echo" <h3>Halaman Tidak Ada Guys !!</h3>";
                        }


                        ?>






              
            </div>
          </div> 
        </div>
      </div>
    </section>

 


<!--====================================================
                      FOOTER
======================================================--> 
    <footer> 
        <div id="footer-s1" class="footer-s1">
          <div class="footer">
            <div class="container">
              <div class="row">
                <!-- About Us -->
                <div class="col-md-3 col-sm-6 ">
                  <div><img src="img/logo-w.png" alt="" class="img-fluid"></div>
                  <ul class="list-unstyled comp-desc-f">
                     <li><p>Repository Merupakan Penyimpanan Naskah, Dokumen, Karya ilmiah,skripsi,tesis, dll Segenap civitas akademika STKIP Ahlusunnah Bukittinggi Agar dapat digunakan bersama bagi seluruh pengguna yang berkepentingan / peduli dengan peningkatan pendidikan di negeri tercinta Indonesia. </p></li> 
                  </ul><br> 
                </div>
                <!-- End About Us -->

                <!-- Recent News -->
                <div class="col-md-3 col-sm-6 ">
                  <div class="heading-footer"><h2> Koleksi</h2></div>
                  <ul class="list-unstyled link-list">

                        <?php
                        $tampil=mysqli_query($konek,"SELECT * FROM tb_jenis
                        ");
                        while($data=mysqli_fetch_array($tampil)){
                        ?>
                          <!-- <button class="btn btn-general btn-white" role="button">Koleksi Desertasi</button> -->
                         
                          <li><a href="?page=jenis&id=<?php echo $data['id_jenis']; ?>"><?php echo $data['jenis']; ?></a><i class="fa fa-angle-right"></i></li> 

                       
                        <?php } ?>  

                    
                  </ul>
                </div>
                <!-- End Recent list -->

                <!-- Recent Blog Entries -->
                <div class="col-md-3 col-sm-6 ">
                  <div class="heading-footer"><h2>Posting Terbaru</h2></div>
                  <ul class="list-unstyled thumb-list">
                         <?php
                      $no=1;
                      $tampil=mysqli_query($konek,"SELECT * FROM tb_karya ORDER BY id_karya DESC LIMIT 2
                      ");
                      while($data1=mysqli_fetch_array($tampil)){
                      ?>
                     <li>
                      <div class="overflow-h">
                        <a href="?page=detail&id=<?php echo $data1['id_karya']; ?>"><?php echo $data1['judul']; ?> </a>
                        <small><?php echo $data1['tgl_post'] ?></small>
                      </div>
                    </li>
                          

                      <?php } ?> 

                   
                  </ul>
                </div>
                <!-- End Recent Blog Entries -->

                <!-- Latest Tweets -->
                <div class="col-md-3 col-sm-6">
                  <div class="heading-footer"><h2>Kontak Kami</h2></div>
                  <address class="address-details-f">
                    
                   Jl. Diponegoro No. 8 
Depan Terminal Aur Kuning <br>
                    Phone: (0751) 7861005 <br>
                    Fax:  /444344 <br>
                    Email: <a href="mailto:info@Businessbox.com" class="">info@Businessbox.com</a>
                  </address>  
                  <ul class="list-inline social-icon-f top-data">
                    <li><a href="#" target="_empty"><i class="fa top-social fa-facebook"></i></a></li>
                    <li><a href="#" target="_empty"><i class="fa top-social fa-twitter"></i></a></li>
                    <li><a href="#" target="_empty"><i class="fa top-social fa-google-plus"></i></a></li> 
                  </ul>
                </div>
                <!-- End Latest Tweets -->
              </div>
            </div><!--/container -->
          </div> 
        </div>

        <div id="footer-bottom" style="background-color:rgb(0,133,248);">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div id="footer-copyrights">
                            <p class="text-white">Copyrights &copy; 2018 Repository STKIP Bukittinggi. <a href="#" style="color: black;">Fitri Veronika</a> <a href="#"></a></p>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
        <a href="#home" id="back-to-top" class="btn btn-sm btn-green btn-back-to-top smooth-scrolls hidden-sm hidden-xs" title="home" role="button">
            <i class="fa fa-angle-up"></i>
        </a>
    </footer>

    <!--Global JavaScript -->
    <script src="front/js/jquery/jquery.min.js"></script>
    <script src="front/js/popper/popper.min.js"></script>
    <script src="front/js/bootstrap/bootstrap.min.js"></script>
    <script src="front/js/wow/wow.min.js"></script>
    <script src="front/js/owl-carousel/owl.carousel.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="front/js/jquery-easing/jquery.easing.min.js"></script> 
    <script src="front/js/custom.js"></script> 
  </body>

</html>
