<div class="container">
  <div class="row title-bar">
<div class="col-md-12">
<?php 
$id = $_GET['id'];
$sql= mysqli_query($konek,"SELECT * FROM tb_dosen WHERE id_dosen='$id' ");
$data = mysqli_fetch_array($sql);

?>
<!-- <h3> Detail Data Dosen</h3> -->
    <div class="panel-body">

                  <h3> Detail Data Dosen</h3>
<center>
  <a href="?page=d-dosen&id=<?php echo $data['id_dosen']; ?>">
<img src="asset/img-dosen/<?php echo $data['foto'] ?>" width="100" height="100" class="img-thumbnail">
</a>
</center>
<br>
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Nip</th>
                          <th>:</th>
                          <th><?php echo $data['nip']; ?></th>
                        </tr>
                        <tr>
                          <th>Nama Lengkap</th>
                          <th>:</th>
                          <th><?php echo $data['nama_dosen']; ?>, <?php echo $data['gelar']; ?></th>
                        </tr>
                        <tr>
                          <th>Jenis Kelamin</th>
                          <th>:</th>
                          <th><?php echo $data['jk']; ?></th>
                        </tr>
                              <tr>
                          <th>Jabatan Akademik</th>
                          <th>:</th>
                          <th><?php echo $data['id_jab']; ?></th>
                        </tr>
                              <tr>
                          <th>Prodi Mengajar</th>
                          <th>:</th>
                          <th><?php echo $data['id_prodi']; ?></th>
                        </tr>
  
                      </thead>
                    </table>
                    <h3>Karya Yang Pernah Ditulis</h3>

                  <table class="table">
                    <thead style="background-color: #42a5f5;color: white;">
                      <tr>
                        <th>No</th>
                        <th>Jenis</th>
                        <th>Judul</th>
                         <th>Tahun</th>
                         <th>option</th>
                      </tr>
                    </thead>
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
                        <td><a href="?page=detail&id= <?php echo $dm['id_karya'] ?> "><?php echo $dm['judul'] ;?></a></td>
                        <th><?php echo $dm['tahun_terbit'] ;?></th>
                        <th><a href="?page=detail&id= <?php echo $dm['id_karya'] ?> ">Visit</a></th>                       

                      </tr>
                    <?php
                     } ?>
                    </tbody>
                  </table>
</div>
</div>
</div>
</div>
