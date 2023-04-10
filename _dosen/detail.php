   <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft"> Detail Karya</h3>
                        <p class="animated fadeInDown">
                          Dashboard <span class="fa-angle-right fa"></span> Detail Karya
                        </p>
                    </div>
                  </div>
              </div>
              <div class="col-md-12 top-5 padding-0">
                <div class="col-md-12">
                  <div class="panel">
                  	   	<?php 
                      	$id = $_GET['id'];
                      	$detail = mysqli_query($konek,"SELECT * FROM tb_karya
                      		INNER JOIN tb_dosen ON tb_karya.id_dosen=tb_dosen.id_dosen
                      		INNER JOIN tb_jenis ON tb_karya.id_jenis=tb_jenis.id_jenis
                      		-- INNER JOIN tb_file ON tb_karya.id_karya=tb_file.id_karya

                      	 WHERE tb_karya.id_karya='$id' ");
                      	$data = mysqli_fetch_array($detail);
                      	 ?>
                 <div class="panel-heading"><h4> <span class="fa fa-file"></span> Detail Karya : <code><?php echo $data['judul'] ?></code> </h4></div>

                    <div class="panel-body">
                      <div class="responsive-table">
                   
							<table class="table table-striped">
								<thead>
									<tr>
										<th>Nip</th>
										<th>:</th>
										<th><?php echo $data['nip']; ?></th>
									</tr>
									<tr>
										<th>Nama Pengarang</th>
										<th>:</th>
										<th><?php echo $data['nama_dosen'] ?>, <?php echo $data['gelar'] ?></th>
									</tr>
									<tr>
										<th>Jenis Karya</th>
										<th>:</th>
										<th><?php echo $data['jenis']; ?></th>
									</tr>
									<tr>
										<th>Judul</th>
										<th>:</th>
										<th><?php echo $data['judul']; ?></th>
									</tr>
									<tr>
										<th>Tahun Terbit</th>
										<th>:</th>
										<th><?php echo $data['tahun_terbit']; ?></th>
									</tr>
									<tr>
										<th>Penerbit</th>
										<th>:</th>
										<th><?php echo $data['penerbit']; ?></th>
									</tr>
									<tr>
										<th>Bahasa Asli Karya</th>
										<th>:</th>
										<th><?php echo $data['bahasa']; ?></th>
									</tr>
									<tr>
										<th>Abstrak</th>
										<th></th>
										<th></th>
									</tr>
								</thead>
							</table> 

								<table class="table">
								<tr>
									<!-- <td></td>
									<td></td> -->
									<td><?php echo $data['abstrak'] ?></td>
								</tr>
										 	<?php 
                      	$id = $_GET['id'];
                      	$detail = mysqli_query($konek,"SELECT * FROM tb_karya
                      		INNER JOIN tb_dosen ON tb_karya.id_dosen=tb_dosen.id_dosen
                      		INNER JOIN tb_jenis ON tb_karya.id_jenis=tb_jenis.id_jenis
                      		INNER JOIN tb_file ON tb_karya.id_karya=tb_file.id_karya

                      	 WHERE tb_karya.id_karya='$id' ");
                      	$data = mysqli_fetch_array($detail);
                      	 ?>
								<tr>
									<!-- <td></td>
									<td></td> -->
									<td> 
										<a href="<?php echo $data['file'] ?>" target="_blank" class="btn btn-danger"> <span class="fa fa-download"></span> Download File</a>
									</td>
								</tr>

								</table>                   
                      </div>
                  </div>
                </div>
              </div>  
              </div>