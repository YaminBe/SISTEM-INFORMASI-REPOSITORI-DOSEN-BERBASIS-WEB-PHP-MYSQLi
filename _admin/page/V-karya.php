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
    <div class="panel-heading"><a href="?page=t-karya" class="btn btn-success pull-right"> <span class="fa fa-plus"></span> Input Karya Dosen</a><h3> Tampil Data Judul</h3></div>
    <div class="panel-body">
      <div class="responsive-table">
      	  <table class="table table-striped table-hover" id="datatables-example">
                          <thead>
                            <tr>
                              <th>No.</th>
                              <th>Tahun</th>
                              <th>Jenis</th>
                              <th>Judul</th>
                              <th>More</th>
                            </tr>
                          </thead>
                          <tbody>
                          	 <?php 
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
                          		<td><?php echo $data['judul'] ?></td>
                          		<td>
                          			<a href="?page=detail&id= <?php echo $data['id_karya']; ?> " class="btn btn-primary"> <span class="fa fa-search"></span> Detail</a>
                          			<a href="?page=edit&id= <?php echo $data['id_karya']; ?> " class="btn btn-warning"> <span class="fa fa-edit"></span> Edit</a>
                          			<a href="?page=del&id= <?php echo $data['id_karya']; ?> " class="btn btn-danger"> <span class="fa fa-trash"></span> Del</a>
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