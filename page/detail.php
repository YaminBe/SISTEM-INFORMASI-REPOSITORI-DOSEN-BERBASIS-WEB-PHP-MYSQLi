

<?php 
$id = $_GET['id'];
$detail = mysqli_query($konek,"SELECT * FROM tb_karya
INNER JOIN tb_dosen ON tb_karya.id_dosen=tb_dosen.id_dosen
INNER JOIN tb_jenis ON tb_karya.id_jenis=tb_jenis.id_jenis
-- INNER JOIN tb_file ON tb_karya.id_karya=tb_file.id_karya

WHERE tb_karya.id_karya='$id' ");
$data = mysqli_fetch_array($detail);
?>
<div class="container">
  

  <div class="row title-bar">
<div class="col-md-12">

  <center><h3 class="wow fadeInUp"><?php echo $data['judul'] ?></h3></center><br>
 <?php echo $data['nama_dosen'] ?>, <?php echo $data['gelar'] ?> (<?php echo $data['tahun_terbit'] ?>) <?php echo $data['judul'] ?>, <?php echo $data['jenis'] ?> ,<?php echo $data['penerbit'] ?>


   <?php 
$id = $_GET['id'];
$detail = mysqli_query($konek,"SELECT * FROM tb_karya
INNER JOIN tb_dosen ON tb_karya.id_dosen=tb_dosen.id_dosen
INNER JOIN tb_jenis ON tb_karya.id_jenis=tb_jenis.id_jenis
INNER JOIN tb_file ON tb_karya.id_karya=tb_file.id_karya

WHERE tb_karya.id_karya='$id' ");
$data = mysqli_fetch_array($detail);
?>

<table width="613">
  <tr>
    <td width="337" rowspan="3">

      <embed src="file/<?=$data['file'];?>"> </embed></td>
    <td width="260"><?=$data['jenis'];?></td>
  </tr>
  <tr>
    <td><?php echo $data['nama_dosen'] ?>, <?php echo $data['gelar'] ?> | <?=$data['tipe_file'];?> </td>
  </tr>
  <tr>
    <td height="121"><a href="file/<?=$data['file'];?>" target="_blank">Download (<?=$data['ukuran_file'];?>)</a></td>
  </tr>
</table>
<b>Abstrak</b>
<table class="table">
    <tr>
      <td><?=$data['abstrak'];?></td>
    </tr>
</table>


   



</div>
</div>

