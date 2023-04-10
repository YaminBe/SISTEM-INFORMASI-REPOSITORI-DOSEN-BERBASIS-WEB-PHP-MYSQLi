<?php
 //Define relative patd from tdis script to mPDF
 $nama_file='cetak-deskripsi'; //Beri nama file PDF hasil.
define('_MPDF_PAtd','mpdf60/');
//define("_JPGRAPH_PAtd", '../mpdf60/graph_cache/src/');

//define("_JPGRAPH_PAtd", '../jpgraph/src/'); 
 
include(_MPDF_PAtd . "mpdf.php");
//include(_MPDF_PAtd . "graph.php");

//include(_MPDF_PAtd . "graph_cache/src/");

$mpdf=new mPDF('utf-8', 'A4'); // Create new mPDF Document
 
//Beginning Buffer to save PHP variables and HTML tags
ob_start(); 

$mpdf->useGraphs = true;

?>

<?php
include '../koneksi.php';
if(isset($_POST['id_jenis']) && $_POST['tahun_terbit']){
$sqlSiswa = mysqli_query($konek, "SELECT * FROM tb_karya 
INNER JOIN tb_jenis ON tb_karya.id_jenis=tb_jenis.id_jenis WHERE tb_karya.id_jenis='$_POST[id_jenis]' AND tb_karya.tahun_terbit='$_POST[tahun_terbit]' ");
$ds=mysqli_fetch_array($sqlSiswa);
$id_jenis = $ds['id_jenis'];
$tahun_terbit = $ds['tahun_terbit'];
?>
<!-- <center>
	<img src="../logo.jpg" width="70">

		<h3>Laporan Data <?php echo $ds['jenis'] ?> <br> REPOSITORY STKIP AHLUSUNNAH BUKITTINGGI</h3></center>
		<hr> -->
<table widtd="100%" style="text-align: center;">
<tr>
<td>
<img src="../asset/logo.jpg" width="80">
</td>
<td>
<h4 align="center">LAPORAN DATA KARYA  <?php echo $ds['jenis'] ?> DOSEN<br><!-- PROGRAM STUDI <b><?php echo $data['prodi']; ?></b> <br> -->  SEKOLAH TINGGI ILMU KEPENDIDIKAN (STKIP) AHLUSUNNAH<br> BUKITTINGGI</h4>
</td>
</tr>
</table>
<hr style=";border:2px solid double;">

		<table width="100%" border="1" bordercolor="#333333" cellspacing="0" cellpadding="4" style="border-collapse:collapse;">
			<thead>
			<tr style="height: 40px;background-color: #ffff;">
				<th>No.</th>
 				<th>Jenis Karya</th>
 				<th>Tahun</th>
 				<th>Pengarang</th>
 				<th>Judul</th>
 				<th>Penerbit</th>
			</tr>
			</thead>
		<tbody>
	 			<?php 
	 			$no=1;
	 			$sql = mysqli_query($konek,"SELECT * FROM tb_karya
	 				INNER JOIN tb_jenis ON tb_karya.id_jenis=tb_jenis.id_jenis
	 				INNER JOIN tb_dosen ON tb_karya.id_dosen=tb_dosen.id_dosen
	 			 WHERE tb_karya.id_jenis='$ds[id_jenis]' AND tb_karya.tahun_terbit='$ds[tahun_terbit]'");
	 			while ($data = mysqli_fetch_array($sql)) { ?>
	 			<tr>
	 				<td><?php echo $no++ ?>.</td>
	 				<td><?php echo $data['jenis'] ?></td>
	 				<td><?php echo $data['tahun_terbit'] ?></td>
	 				<td><?php echo $data['nama_dosen'] ?></td>
	 				<td><?php echo $data['judul'] ?></td>
	 				<td><?php echo $data['penerbit'] ?></td>
	 			</tr>
	 			<?php 
	 			}

	 			 ?>
	 		</tbody>
			
</table>

<?php
}
?>


<?php
$html = ob_get_contents(); //Proses untuk mengambil data
ob_end_clean();
//Here convert tde encode for UTF-8, if you prefer tde ISO-8859-1 just change for $mpdf->WriteHTML($html);
$mpdf->WriteHTML(utf8_encode($html));
// LOAD a stylesheet
$stylesheet = file_get_contents('mpdfstyletables.css');
$mpdf->WriteHTML($stylesheet,1);    // tde parameter 1 tells tdat tdis is css/style only and no body/html/text
$mpdf->WriteHTML($html,1);
$mpdf->Output($nama_file."-".date("Y/m/d H:i:s").".pdf" ,'I');
exit; 
?>
