<?php        
    //program simpanNyo 

include '../koneksi.php';
if (isset($_POST['next'])){
	$id_dosen   = $_POST['id_dosen'];
	$id_jenis   = $_POST['id_jenis'];
	$pengarang  = $_POST['pengarang'];
	$judul      = $_POST['judul'];
	$alternatif = $_POST['alternatif'];
	$tahun      = $_POST['tahun'];
	$penerbit   = $_POST['penerbit'];
	$abstrak    = $_POST['abstrak'];
	$bahasa     = $_POST['bahasa'];
	$tgl        = date("Y-m-d");
	 mysqli_query($konek,"INSERT INTO tb_karya VALUES(NULL,'$id_dosen','$id_jenis','$judul','$alternatif','$abstrak','$pengarang','$tahun','$penerbit','$bahasa','$tgl')") or die(mysqli_error($konek)) ;
	 echo"<script>
	window.location='?page=upload';
</script>";

}elseif (isset($_POST['next-update'])){
	$id   = $_POST['id'];
	$id_jenis   = $_POST['id_jenis'];
	$pengarang  = $_POST['pengarang'];
	$judul      = $_POST['judul'];
	$alternatif = $_POST['alternatif'];
	$tahun      = $_POST['tahun'];
	$penerbit   = $_POST['penerbit'];
	$abstrak    = $_POST['abstrak'];
	$bahasa     = $_POST['bahasa'];
	$tgl        = date("Y-m-d");

	 mysqli_query($konek,"UPDATE tb_karya SET id_jenis='$id_jenis',judul='$judul',alternatif_judul='$alternatif',abstrak='$abstrak',pengarang='$pengarang',tahun_terbit='$tahun',penerbit='$penerbit',bahasa='$bahasa',tgl_post='$tgl' WHERE id_karya='$id' ") or die(mysqli_error($konek)) ;
	 echo"<script>
	window.location='?page=mykarya';
</script>";

}elseif (isset($_POST['ganti'])){
	$id   = $_POST['id'];
	$password   = $_POST['password'];

	 mysqli_query($konek,"UPDATE tb_dosen SET password='$password' WHERE id_dosen='$id' ") or die(mysqli_error($konek)) ;
	 echo"<script>
	 alert('Sukses .. Password Telah treganti')
	window.location='?page=ganti';
</script>";

}

?>
