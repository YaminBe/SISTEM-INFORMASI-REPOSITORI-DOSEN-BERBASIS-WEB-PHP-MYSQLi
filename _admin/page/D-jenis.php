<?php 
include '../koneksi.php';
$id = $_GET['id'];
mysqli_query($konek,"DELETE FROM tb_jenis WHERE id_jenis='$id' ");
echo " <script>
 	alert('Data telah dihapus !!');
 	window.location='?page=v_jenis';
 </script>";
 ?>
