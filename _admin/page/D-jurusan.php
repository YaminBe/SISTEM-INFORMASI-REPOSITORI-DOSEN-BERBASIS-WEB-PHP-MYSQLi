<?php 
include '../koneksi.php';
$id = $_GET['id'];
mysqli_query($konek,"DELETE FROM tb_jabatan WHERE id_jab='$id' ");
echo " <script>
 	alert('Data telah dihapus !!');
 	window.location='?page=jur';
 </script>";
 ?>
