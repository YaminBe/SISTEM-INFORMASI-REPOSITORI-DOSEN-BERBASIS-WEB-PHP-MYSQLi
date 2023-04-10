<?php 
include '../koneksi.php';
$id = $_GET['id'];
mysqli_query($konek,"DELETE FROM tb_karya WHERE id_karya='$id' ");
echo " <script>
 	alert('Data telah dihapus !!');
 	window.location='?page=v_karya';
 </script>";
 ?>
