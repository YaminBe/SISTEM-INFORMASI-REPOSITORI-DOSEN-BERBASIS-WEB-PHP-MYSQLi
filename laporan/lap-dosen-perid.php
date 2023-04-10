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
$id = $_GET['id'];
$sql= mysqli_query($konek,"SELECT * FROM tb_dosen
 WHERE id_dosen='$id' ");
$data = mysqli_fetch_array($sql);

?>
<table widtd="100%" style="text-align: center;">
<tr>
<td>
<img src="../asset/logo.jpg" width="80">
</td>
<td>
<h4 align="center">LAPORAN DATA KARYA DOSEN<br>PROGRAM STUDI <b><?php echo $data['prodi']; ?></b> <br>  SEKOLAH TINGGI ILMU KEPENDIDIKAN (STKIP) AHLUSUNNAH<br> BUKITTINGGI</h4>
</td>
</tr>
</table>
<hr style=";border:2px solid double;">


<table width="100%">
  <tr>
    <td width="20%">NIDN</td>
    <td width="1%">:</td>
    <td width="53%"><?php echo $data['nip'] ?></td>
    <td width="26%" rowspan="10"><img src="../asset/img-dosen/<?php echo $data['foto'];?>" width="112" height="170"style="border:1px solid black;"></td>
  </tr>
  <tr>
    <td>Nama Lengkap Dosen </td>
    <td>:</td>
    <td><?php echo $data['nama_dosen']; ?></td>
  </tr>
  <tr>
    <td>Gelar Akademik </td>
    <td>:</td>
    <td><?php echo $data['gelar']; ?></td>
  </tr>
  <tr>
    <td>Jenis Kelamin </td>
    <td>:</td>
    <td><?php echo $data['jk']; ?></td>
  </tr>

  <tr>
    <td>Pendidikan Terakhir </td>
    <td>:</td>
    <td><?php echo $data['pendidikan']; ?></td>
  </tr>
  <tr>
    <td>Asal PT </td>
    <td>:</td>
    <td><?php echo $data['asal_pt']; ?></td>
  </tr>
  <tr>
    <td>Jabatan Akademik </td>
    <td>:</td>
    <td><?php echo $data['id_jab']; ?></td>
  </tr>
</table>
                   <!--  JABATAN AKADEMIK ,GELAR AKADEMIK,PENDIDIKAN,ASAL PT -->
                    <h3>Karya Yang Pernah Ditulis</h3>

                  <table widtd="100%" border="1" style="border-collapse: collapse;">
                    <tdead style="background-color: #42a5f5;color: white;">
                      <tr>
                        <td>No</td>
                        <td>Jenis Karya</td>
                        <td>Judul</td>
                         <td>Tahun Terbit</td>
                      </tr>
                    </tdead>
                    <tbody>

                    <?php 
                    $n=1;
                    $mapel = mysqli_query($konek,"SELECT * FROM tb_dosen 
                    INNER JOIN tb_karya ON tb_dosen.id_dosen=tb_karya.id_dosen
                    INNER JOIN tb_jenis ON tb_karya.id_jenis=tb_jenis.id_jenis WHERE tb_dosen.id_dosen='$id'
                    ");
                    while ($dm = mysqli_fetch_array($mapel)) { ?>
                      <tr>
                        <td><?php echo $n++ ?></td>
                        <td><?php echo $dm['jenis'] ;?></td>
                        <td><?php echo $dm['judul'] ;?></td>
                        <td><?php echo $dm['tahun_terbit'] ;?></td>
                      </tr>
                    <?php
                     } ?>
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
