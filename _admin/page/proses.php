<?php        
    //program simpanNyo 

include '../koneksi.php';
if (isset($_POST['next'])){
	$id_dosen   = $_POST['id_dosen'];
	$id_jenis   = $_POST['id_jenis'];
	// $pengarang  = $_POST['pengarang'];
	$judul      = $_POST['judul'];
	$alternatif = $_POST['alternatif'];
	$tahun      = $_POST['tahun'];
	$penerbit   = $_POST['penerbit'];
	$abstrak    = $_POST['abstrak'];
	$bahasa     = $_POST['bahasa'];
	$tgl        = date("Y-m-d");
	 mysqli_query($konek,"INSERT INTO tb_karya (id_karya,id_dosen,id_jenis,judul,alternatif_judul,abstrak,pengarang,tahun_terbit,penerbit,bahasa,tgl_post) VALUES(NULL,'$id_dosen','$id_jenis','$judul','$alternatif','$abstrak','$id_dosen','$tahun','$penerbit','$bahasa','$tgl')") or die(mysqli_error($konek)) ;
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
	 	 alert('Sukses .. Berhasil Dubah');
	window.location='?page=v_karya';
</script>";

}elseif (isset($_POST['simpan-jenis'])){
	$jenis   = $_POST['jenis'];

	 mysqli_query($konek," INSERT INTO tb_jenis (id_jenis,jenis) VALUES (NULL,'$jenis') ") or die(mysqli_error($konek)) ;

	 echo"<script>
	 alert('Sukses .. Berhasil Disimpan');
	window.location='?page=v_jenis';
</script>";

}elseif (isset($_POST['edit-jenis'])){
	$id   = $_POST['id'];
	$jenis   = $_POST['jenis'];

	 mysqli_query($konek," UPDATE tb_jenis SET jenis='$jenis' WHERE id_jenis='$id' ") or die(mysqli_error($konek)) ;

	 echo"<script>
	 alert('Sukses .. Berhasil Diubah !!')
	window.location='?page=v_jenis';
</script>";

}elseif (isset($_POST['simpan-fak'])){
	// $id   = $_POST['id'];
	$fakultas   = $_POST['fakultas'];

	 mysqli_query($konek," INSERT INTO tb_prodi (id_prodi,prodi) VALUES(NULL,'$fakultas') ") or die(mysqli_error($konek)) ;

	 echo"<script>
	 alert('Sukses .. Berhasil Ditambahkan !!')
	window.location='?page=fak';
</script>";

}elseif (isset($_POST['e-fak'])){
	$id   = $_POST['id'];
	$fakultas   = $_POST['fakultas'];

	 mysqli_query($konek," UPDATE tb_prodi SET prodi='$fakultas' WHERE id_prodi='$id' ") or die(mysqli_error($konek)) ;

	 echo"<script>
	 alert('Sukses .. Berhasil Diubah !!')
	window.location='?page=fak';
</script>";

}elseif (isset($_POST['simpan-jur'])){
	// $id   = $_POST['id'];
	$jurusan   = $_POST['jurusan'];

	 mysqli_query($konek," INSERT INTO tb_jabatan (id_jab,jabatan) VALUES(NULL,'$jurusan') ") or die(mysqli_error($konek)) ;

	 echo"<script>
	 alert('Sukses .. Berhasil Ditambahkan !!')
	window.location='?page=jur';
</script>";

}elseif (isset($_POST['edit-jur'])){
	$id   = $_POST['id'];
	$jurusan   = $_POST['jurusan'];

	 mysqli_query($konek," UPDATE tb_jabatan SET jabatan='$jurusan' WHERE id_jab='$id' ") or die(mysqli_error($konek)) ;

	 echo"<script>
	 alert('Sukses .. Berhasil DiUbah !!')
	window.location='?page=jur';
</script>";
// SIMAPN DOSEN

}elseif (isset($_POST['simpan-dsn'])) {
	// Lanjutkan
	$nama  = $_POST['nama'];
	$nip   = $_POST['nip'];
	$gelar   = $_POST['gelar'];
	// $tmp = $_POST['tmp'];
	// $tgl = $_POST['tgl'];
	$jk = $_POST['jk'];
	// $alamat = $_POST['alamat'];
	// $email = $_POST['email'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$id_jab = $_POST['id_jab'];
	$id_prodi = $_POST['id_prodi'];
	$pddk = $_POST['pddk'];
	$asalpt = $_POST['asalpt'];


			$sumber = @$_FILES['foto']['tmp_name'];
			$target = '../asset/img-dosen/';
			$nama_gambar = @$_FILES['foto']['name'];

			$pindah = move_uploaded_file($sumber, $target.$nama_gambar);

			if ($pindah) {

			mysqli_query($konek,"INSERT INTO tb_dosen (id_dosen,nip,nama_dosen,gelar,jk,username,password,status,id_prodi,id_jab,pendidikan,asal_pt,foto) 
				VALUES ('','$nip','$nama','$gelar','$jk','$username','$password','aktif', '$id_prodi','$id_jab','$pddk','$asalpt', '$nama_gambar')") or die (mysqli_error($konek));

			echo "<script>
 	alert('Data Berhasil Ditambahkan !!');
 	window.location='?page=v_dosen';
 </script>";
}

}elseif (isset($_POST['edit-dsn'])) {
	// Lanjutkan
	$id  = $_POST['id'];
	$nama  = $_POST['nama'];
	$nip   = $_POST['nip'];
	$gelar   = $_POST['gelar'];

	$jk = $_POST['jk'];

	$username = $_POST['username'];
	$password = $_POST['password'];
	$id_jab = $_POST['id_jab'];
	$id_prodi = $_POST['id_prodi'];
	$pddk = $_POST['pddk'];
	$asalpt = $_POST['asalpt'];

	$gambar = @$_FILES['foto']['name'];
	if (!empty($gambar)) {
		move_uploaded_file($_FILES['foto']['tmp_name'],"../asset/img-dosen/$gambar");
		$ganti = mysqli_query($konek,"UPDATE tb_dosen SET foto='$gambar' WHERE id_dosen='$id' ");
	}
	mysqli_query($konek,"UPDATE tb_dosen SET nip='$nip',nama_dosen='$nama',gelar='$gelar',jk='$jk',username='$username',password='$password', id_prodi='$id_prodi',id_jab='$id_jab' WHERE id_dosen='$id' ") or die (mysqli_error($konek));

echo "<script>
 	alert('Data Berhasil DiUpdate !!');
 	window.location='?page=v_dosen';
 </script>";


}

?>
