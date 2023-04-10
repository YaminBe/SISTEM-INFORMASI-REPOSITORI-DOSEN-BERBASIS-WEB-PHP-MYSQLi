<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="description" content="Miminium Admin Template v.1">
  <meta name="author" content="Isna Nur Azis">
  <meta name="keyword" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Login Dosen || Repository</title>

  <!-- start: Css -->
  <link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">

  <!-- plugins -->
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/font-awesome.min.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/simple-line-icons.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/animate.min.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/icheck/skins/flat/aero.css"/>
  <link href="asset/css/style.css" rel="stylesheet">
  <!-- end: Css -->

  <link rel="shortcut icon" href="asset/img/logomi.png">
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
    </head>

    <body id="mimin" style="background-image: url(bg.jpg);">
<br>
<br>
<br>
<br>
<br>
<br>
      <div class="container">

        <form class="form-signin" action="" method="post">
          <div class="panel periodic-login">

              <div class="panel-body text-center">
                <!--  <h1>  <span class="fa fa-graduation-cap"></span> <br>STKIP </h1> -->
                 <img src="logo.jpg" alt="" style="border-radius: 15px;width: 50px;">
               
                
                  <h1>Repository</h1>
                  <!-- <p class="atomic-mass">14.072110</p> -->
                  
                  <p class="element-name">Login Dosen</p>

                  <i class="icons icon-arrow-down"></i>
                  <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input type="text" name="user" class="form-text" required>
                    <span class="bar"></span>
                    <label>Username</label>
                  </div>
                  <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input type="password" name="pass" class="form-text" required>
                   
                    <label>Password</label>
                    <span class="bar"></span>
                      
                   
                    
                  </div>
                  <!-- <label class="pull-left">
                  <input type="checkbox" class="icheck pull-left" name="checkbox1"/> Remember me
                  </label> -->
                  <input type="submit" name="login" class="btn col-md-12" value="Login"/>
              </div>
                <!-- <div class="text-center" style="padding:5px;">
                    <a href="forgotpass.html">Forgot Password </a>
                    <a href="reg.html">| Signup</a>
                </div> -->
          </div>
        </form>
        <!-- AWAL: KODING LOGIN -->
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
//variabel yang akan disimpan pada database
$user = $_POST['user'];
$pass = $_POST['pass'];
if ($user=='' || $pass=='') {
echo "from belum lengkap";
}else{
include "koneksi.php";
$sqlLogin = mysqli_query($konek, "SELECT * FROM tb_dosen WHERE username ='$user' AND password='$pass'");
$jml = mysqli_num_rows($sqlLogin);
$a= mysqli_fetch_array($sqlLogin);
if($jml > 0){

	$_SESSION['login'] = true ;
	$_SESSION['id'] = $a['id_dosen'];
	$_SESSION['username'] = $a['username'];
	// header('location:./_dosen/');
        echo" <script>
      alert('Suksess...');
      window.location='_dosen/';
    </script>";
	
                  
      }else{
      
	  echo" <script>
      alert('Login Gagal');
    </script>";
	  }
	  }
	  }
	  ?>
   

      </div>

      <!-- end: Content -->
      <!-- start: Javascript -->
      <script src="asset/js/jquery.min.js"></script>
      <script src="asset/js/jquery.ui.min.js"></script>
      <script src="asset/js/bootstrap.min.js"></script>

      <script src="asset/js/plugins/moment.min.js"></script>
      <script src="asset/js/plugins/icheck.min.js"></script>

      <!-- custom -->
      <script src="asset/js/main.js"></script>
      <script type="text/javascript">
       $(document).ready(function(){
         $('input').iCheck({
          checkboxClass: 'icheckbox_flat-aero',
          radioClass: 'iradio_flat-aero'
        });
       });
     </script>
     <!-- end: Javascript -->
   </body>
   </html>