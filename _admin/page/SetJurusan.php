<div class="panel box-shadow-none content-header">
  <div class="panel-body">
    <div class="col-md-12">
        <h3 class="animated fadeInLeft">Karya Dosen</h3>
        <p class="animated fadeInDown">
          View Data <span class="fa-angle-right fa"></span> Daftar Data Karya
        </p>
    </div>
  </div>
</div>
<div class="col-md-12 top-5 padding-0">
<div class="col-md-12">
  <div class="panel">
    <div class="panel-heading"><a href="?page=t-jenis" class="btn btn-primary pull-right"> <span class="fa fa-plus"></span> Tambah Data Jenis</a><h3> Tampil Data Judul</h3> </div>
    <div class="panel-body">
      <div class="responsive-table">
      	  <table class="table table-striped table-hover" id="datatables-example">
                          <thead>
                            <tr>
                              <th>No.</th>
                              <th>Nama Fakultas</th>
                               <th>Jurusan</th>
                              <th>More</th>
                            </tr>
                          </thead>
                          <tbody>
                          	 <?php 
                        $no=1;
                        $query= "SELECT * FROM tb_fakultas
                        ";
                            $sql_ds = mysqli_query($konek,$query) or die(mysqli_error($konek)) ;
                        while ( $data= mysqli_fetch_array($sql_ds) ) { ?>
                          	<tr>
                          		<td><?php echo $no++ ?>.</td>
                          		<td><?php echo $data['nm_fakultas'] ?></td>
                              <td>
                                  <?php 
                                  $n=1;
                                  $mapel = mysqli_query($konek,"SELECT * FROM tb_fakultas 
                                    INNER JOIN tb_jurusan ON tb_fakultas.id_fakultas=tb_jurusan.id_fakultas WHERE tb_fakultas.id_fakultas='$data[id_fakultas]'
                                    ");
                                  while ($dm = mysqli_fetch_array($mapel)) {
                                  echo "<span class='badge badge-primary'>".$n++.".</span>";

                                  echo "<a href=''style='color:#2979ff;border-bottom:2px;'><b> " .$dm['jurusan']. "</b></a>"."<br>";

                                  }

                                  ?>
                              </td>
                          		<td>
                          			<a href="?page=e-jenis&id= <?php echo $data['id_jenis']; ?> " class="btn btn-info"> <span class="fa fa-edit"></span> Edit</a>
                          			<a href="?page=del-jenis&id= <?php echo $data['id_jenis']; ?> " class="btn btn-danger"> <span class="fa fa-trash"></span> Del</a>
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