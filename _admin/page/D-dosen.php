<?php 
include '../koneksi.php';
$id = $_GET['id'];
mysqli_query($konek,"DELETE FROM tb_dosen WHERE id_dosen='$id' ");
echo " <script>
 	alert('Data telah dihapus !!');
 	window.location='?page=v_dosen';
 </script>";
 ?>
