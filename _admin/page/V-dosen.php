<div class="panel box-shadow-none content-header">
  <div class="panel-body">
    <div class="col-md-12">
        <h3 class="animated fadeInLeft">Data Dosen</h3>
        <p class="animated fadeInDown">
          View Data <span class="fa-angle-right fa"></span> Daftar Data Dosen
        </p>
    </div>
  </div>
</div>
<div class="col-md-12 top-5 padding-0">
<div class="col-md-12">
  <div class="panel">
    <div class="panel-heading"><a href="?page=t-dosen" class="btn btn-success pull-right"> <span class="fa fa-plus"></span> Tambah Data Dosen</a><h3><h3> Tampil Data Dosen</h3></div>
    <div class="panel-body">
      <div class="responsive-table">
      	  <table class="table table-striped table-hover table-responsive table-condensed" id="datatables-example">
                          <thead>
                            <tr>
                              <th>No.</th>
                              <th>Nip</th>
                              <th>Nama</th>
                             <!--  <th>Tpt,Tgl Lahir</th> -->
                              <th>Gender</th>
                            <!--   <th>Alamat</th> -->
                      
                              <th>Karya</th>
                              <th>More</th>
                            </tr>
                          </thead>
                          <tbody>
                          	 <?php 
                        $no=1;
                        $query= "SELECT * FROM tb_dosen";
                            $sql_ds = mysqli_query($konek,$query) or die(mysqli_error($konek)) ;
                        while ( $data= mysqli_fetch_array($sql_ds) ) { ?>
                          	<tr>
                          		<td><?php echo $no++ ?>.</td>
                          		<td><?php echo $data['nip'] ?></td>
                          		<td><?php echo $data['nama_dosen'] ?>,<?php echo $data['gelar'] ?></td>
                   <!--        		<td><?php echo $data['t_lahir'] ?>,<?php echo $data['tg_lahir'] ?></td> -->
                          		<td><?php echo $data['jk'] ?></td>
                    <!--       		<td><?php echo $data['alamat'] ?></td> -->
                 
                              <td>
                                <?php 
                                  $n=1;
                                  $mapel = mysqli_query($konek,"SELECT * FROM tb_dosen 
                                    INNER JOIN tb_karya ON tb_dosen.id_dosen=tb_karya.id_dosen
                                    INNER JOIN tb_jenis ON tb_karya.id_jenis=tb_jenis.id_jenis WHERE tb_dosen.id_dosen='$data[id_dosen]'
                                    ");
                                  while ($dm = mysqli_fetch_array($mapel)) {
                                  echo "<span class='badge badge-danger'>".$n++.".</span>";

                                  echo "<a href='?page=detail&id= $dm[id_karya] 'style='color:#2979ff;border-bottom:2px;'><b> " .$dm['jenis']. "</b> | Tahun <b> " .$dm['tahun_terbit']. "</b> </a>"."<br>";

                                  }

                                  ?>
                              </td>
                          		<td>
                                <a href="?page=detail-dsn&id= <?php echo $data['id_dosen']; ?> " class="btn btn-success"> <span class="fa fa-search"></span> Detail</a>
                                <a href="?page=e_dsn&id= <?php echo $data['id_dosen']; ?> " class="btn btn-warning"> <span class="fa fa-edit"></span> Edit</a>
                          			<a href="?page=deldsn&id= <?php echo $data['id_dosen']; ?> " class="btn btn-danger"> <span class="fa fa-trash"></span> Del</a>
                          		</td>
                          	</tr>
                          <?php
                           } ?>
                          </tbody>
                      </table>
                  </div>

      </div>
  </div>
</div>
</div>  
</div>