<?php 
include '../koneksi.php';
$id = $_GET['id'];
mysqli_query($konek,"DELETE FROM tb_prodi WHERE id_prodi='$id' ");
echo " <script>
 	alert('Data telah dihapus !!');
 	window.location='?page=fak';
 </script>";
 ?>
