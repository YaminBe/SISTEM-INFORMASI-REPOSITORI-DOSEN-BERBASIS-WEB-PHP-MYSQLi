  <?php
// Skrip berikut ini adalah skrip yang bertugas untuk meng-export data tadi ke excell
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Laporan Data Karya Dosen.xls");?>
<!DOCTYPE html>
<html>
<head>
  <title></title>

</head>
<body>


<center>

<h3>Laporan Data Karya<br> REPOSITORY STKIP AHLUSUNNAH BUKITTINGGI</h3></center>
    <hr>

    <table width="100%" border="1" bordercolor="#333333" cellspacing="0" cellpadding="4" style="border-collapse:collapse;">
      <thead>
                            <tr style="height: 40px; background-color: yellow;">
                              <th>No.</th>
                              <th>Tahun</th>
                              <th>Jenis</th>
                              <th>Pengarang</th>
                              <th>Judul</th>
                              <th>Penerbit</th>
                            </tr>
                          </thead>
                          <tbody>
                             <?php 
                             include '../koneksi.php';
                        $no=1;
                        $query= "SELECT * FROM tb_karya
                          INNER JOIN tb_dosen ON tb_karya.id_dosen = tb_dosen.id_dosen
                          INNER JOIN tb_jenis ON tb_karya.id_jenis = tb_jenis.id_jenis
                          ";
                            $sql_ds = mysqli_query($konek,$query) or die(mysqli_error($konek)) ;
                        while ( $data= mysqli_fetch_array($sql_ds) ) { ?>
                            <tr>
                              <td><?php echo $no++ ?>.</td>
                              <td><?php echo $data['tahun_terbit'] ?></td>
                              <td><?php echo $data['jenis'] ?></td>
                              <td><?php echo $data['nama_dosen'] ?></td>
                              <td><?php echo $data['judul'] ?></td>
                              <td> <?php echo $data['penerbit'] ?></td>
                            </tr>
                          <?php
                           } ?>
                          </tbody>
      
</table>




</body>
</html>