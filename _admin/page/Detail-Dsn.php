<div class="panel box-shadow-none content-header">
  <div class="panel-body">
    <div class="col-md-12">
        <h3 class="animated fadeInLeft">Detail Data</h3>
        <p class="animated fadeInDown">
          View Data <span class="fa-angle-right fa"></span> Detail Data Dosen
        </p>
    </div>
  </div>
</div>
<div class="col-md-12 top-5 padding-0">
<div class="col-md-12">
  <div class="panel">
<?php 
$id = $_GET['id'];
$sql= mysqli_query($konek,"SELECT * FROM tb_dosen WHERE id_dosen='$id' ");
$data = mysqli_fetch_array($sql);

?>
    <div class="panel-heading" style="background-color: #42a5f5;"><h3 style="color: #fff;"> Detail Data Dosen</h3></div>
    <div class="panel-body">

                  <h3>Detail</h3>
                    <hr>
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

                  <table class="table table-striped">
                    <thead style="background-color: #42a5f5;color: white;">
                      <tr>
                        <th>No</th>
                        <th>Jenis</th>
                        <th>Judul</th>
                         <th>Tahun</th>
                         <th>Url</th>
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
                        <td><?php echo $dm['judul'] ;?></td>
                        <th><?php echo $dm['tahun_terbit'] ;?></th>
                        <th><a href="?page=detail&id= <?php echo $dm['id_karya'] ?> ">?page=detail&id= <?php echo $dm['id_karya'] ?> </a></th>                       

                      </tr>
                    <?php
                     } ?>
                    </tbody>
                  </table>

    	
</div>
</div>
</div>
</div>





