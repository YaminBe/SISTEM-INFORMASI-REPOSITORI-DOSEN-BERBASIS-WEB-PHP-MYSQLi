<div class="panel box-shadow-none content-header">
  <div class="panel-body">
    <div class="col-md-12">
        <h3 class="animated fadeInLeft">Jabatan</h3>
        <p class="animated fadeInDown">
          Data Master <span class="fa-angle-right fa"></span> Daftar Data Jabatan
        </p>
    </div>
  </div>
</div>
<div class="col-md-12 top-5 padding-0">
<div class="col-md-12">
  <div class="panel">
    <div class="panel-heading"><a href="?page=t-jur" class="btn btn-primary pull-right"> <span class="fa fa-plus"></span> Tambah Jabatan</a><h3> Tampil Data Jabatan</h3> </div>
    <div class="panel-body">
      <div class="responsive-table">
      	  <table class="table table-striped table-hover" id="datatables-example">
                          <thead>
                            <tr>
                              <th>No.</th>
                              <th>Nama Jabatan</th>
                              <th>More</th>
                            </tr>
                          </thead>
                          <tbody>
                          	 <?php 
                        $no=1;
                        $query= "SELECT * FROM tb_jabatan";
                            $sql_ds = mysqli_query($konek,$query) or die(mysqli_error($konek)) ;
                        while ( $data= mysqli_fetch_array($sql_ds) ) { ?>
                          	<tr>
                          		<td><?php echo $no++ ?>.</td>
                          		<td><?php echo $data['jabatan'] ?></td>
                          		<td>
                          			<a href="?page=e-jur&id= <?php echo $data['id_jab']; ?> " class="btn btn-info"> <span class="fa fa-edit"></span> Edit</a>
                          			<a href="?page=del-jur&id= <?php echo $data['id_jab']; ?> " class="btn btn-danger"> <span class="fa fa-trash"></span> Del</a>
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