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

<table widtd="100%" style="text-align: center;">
<tr>
<td>
<img src="../asset/logo.jpg" width="80">
</td>
<td>
<h4 align="center">DAFTAR AKUN / PENGGUNA SISTEM REPOSITORY DOSEN<br>  SEKOLAH TINGGI ILMU KEPENDIDIKAN (STKIP) AHLUSUNNAH<br> BUKITTINGGI</h4>
</td>
</tr>
</table>
<hr style=";border:2px solid double;">
<table width="100%" border="1" style="border-collapse: collapse;" cellpadding="4" cellspacing="0">
  <thead>
    <tr>
      <th>No.</th>
      <th>NIDN</th>
      <th>Nama</th>
      <th>Username</th>
      <th>Password</th>
      <th>Status Akun</th>
    </tr>
  </thead>
  <tbody>
  	 <?php 
  	 include '../koneksi.php';
$no=1;
$query= "SELECT * FROM tb_dosen";
    $sql_ds = mysqli_query($konek,$query) or die(mysqli_error($konek)) ;
while ( $data= mysqli_fetch_array($sql_ds) ) { ?>
  	<tr>
  		<td><?php echo $no++ ?>.</td>
  		<td><?php echo $data['nip'] ?></td>
  		<td><?php echo $data['nama_dosen'] ?>,<?php echo $data['gelar'] ?></td>
  		<td><?php echo $data['username'] ?></td>
  		<td><?php echo $data['password'] ?></td>
        <td><?php echo $data['status'] ?></td>
    </tr>
<?php } ?>
</tbody>
</table>
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
