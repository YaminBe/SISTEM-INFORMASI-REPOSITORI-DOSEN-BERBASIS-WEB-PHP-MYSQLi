<div class="panel box-shadow-none content-header">
  <div class="panel-body">
    <div class="col-md-12">
        <h3 class="animated fadeInLeft">Data User</h3>
        <p class="animated fadeInDown">
          View Data <span class="fa-angle-right fa"></span> Daftar Pengguna
        </p>
    </div>
  </div>
</div>
<div class="col-md-12 top-5 padding-0">
<div class="col-md-12">
  <div class="panel">
    <div class="panel-heading"><a href="../laporan/cetak-user-dosen.php"  target="_blank" class="btn btn-danger pull-right"> <span class="fa fa-print"></span> Cetak Data User</a><h3><h3> Tampil Data Dosen</h3></div>
    <div class="panel-body">
      <div class="responsive-table">
      	  <table class="table table-striped table-hover table-responsive table-condensed" id="datatables-example">
                          <thead>
                            <tr>
                              <th>No.</th>
                              <th>Nip</th>
                              <th>Nama</th>
                              <th>Username</th>
                              <th>Password</th>
                              <th>Status Akun</th>
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
                          		<td><?php echo $data['username'] ?></td>
                          		<td><?php echo $data['password'] ?></td>
                                <td>

                                	<?php 
                                	if ($data['status']=='aktif') {
                                		echo '
                                		       <a class="btn btn-success"><span class="fa fa-check"></span> Aktif</a>
                                		';
                                	}else{
                                		echo '<a class="btn btn-danger"><span class="fa fa-times"></span> Tidak Aktif</a>';
                                	}


                                	 ?>
                                		
                                	</td>
                          		<td>
                             <!--    <a data-toggle="modal" data-target="#edit<?php echo $data['id_dosen']; ?>" class="btn btn-primary"> <span class="fa fa-edit"></span> Ubah Status</a> -->

									<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit<?php echo $data['id_dosen']; ?>">
									<span class="fa fa-edit"></span> Ubah Status
									</button>
									<!-- Modal -->
							<div class="modal fade" id="edit<?php echo $data['id_dosen']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
							  <div class="modal-dialog" role="document">
							    <div class="modal-content">
							      <div class="modal-header">
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							        <h4 class="modal-title" id="myModalLabel">Ubah Status User</h4>
							      </div>
							      <div class="modal-body">
							       <form action="" method="post" enctype="multipart/form-data">
							       	<input type="hidden" name="id_dosen" class="form-control" value="<?php echo $data['id_dosen']; ?>"/>
							       		<div class="form-group">
							       			<label> Pilih Status</label>
							       			 <select name="status" class="form-control" style="width: 400px;">
							       			 	<option value="">--Pilih Status--</option>
							       			 	<option value="aktif">Aktif</option>
							       			 	<option value="none">Tidak Aktif</option>
							       			 </select>
							       			
							       		</div>
							    
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							        <input type="submit" name="update" class="btn btn-primary" value="Simpan">
							      </div>
							  </form>
<?php 
// Script update data
if (isset($_REQUEST['update'])) {
$id_dosen = $_REQUEST['id_dosen'];  
$status = $_REQUEST['status'];  

mysqli_query($konek,"UPDATE tb_dosen SET 
status='$status'
WHERE id_dosen='$id_dosen'") or die(mysqli_error($konek));
?>
<script type="text/javascript">
alert(" Sukses !", "Data berhasil Di Ubah!", "success")
window.location.href="?page=user";     
</script>
<?php 
}
?>
							    </div>
							  </div>
							</div>

          		</td>
                          	</tr>
                          <?php
                           } ?>
                          </tbody>
                      </table>
                      <!-- Button trigger modal -->



                  </div>

      </div>
  </div>
</div>
</div>  
</div>