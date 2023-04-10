<?php 
include '../koneksi.php';
$id = $_GET['id'];
mysqli_query($konek,"DELETE FROM tb_file WHERE id_file='$id' ");
echo " <script>
 	alert('Data File telah dihapus !!');
 	window.location='?page=v_file';
 </script>";
 ?>
