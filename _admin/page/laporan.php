   <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft"> Laporan</h3>
                        <p class="animated fadeInDown">
                          Laporan <span class="fa-angle-right fa"></span> Laporan Data Karya
                        </p>
                    </div>
                  </div>
              </div>
              <div class="col-md-12 top-5 padding-0">
                <div class="col-md-12">
                  <div class="panel">
                    <div class="panel-heading"><h3>Cetak Laporan</h3></div>
                    <div class="panel-body">
                      <div class="responsive-table">

                      	<!-- form -->
                      	<!-- <h4 class="text-danger">Cetak Laporan Berdasarkan Jenis Dan Tahun</h4> -->
						<form action="../laporan/laporan-pdf.php" method="post" target="_blank">
							<table width="100%"i>
									<tr>
										<td>Jenis Karya</td>
										<td>:</td>
										<td>
											<p class="text-danger">Cetak Laporan Berdasarkan Jenis Dan Tahun</p>
									<select name="id_jenis" class="form-text" style="width: 300px;border-radius: 15px;">
										<option value="">-- Tipe Colections--</option>
										<?php
										$sqlGuru=mysqli_query($konek, "SELECT * FROM tb_jenis ORDER BY id_jenis ASC");
										while($g=mysqli_fetch_array($sqlGuru)){
										echo "<option value='$g[id_jenis]'>$g[jenis]</option>";
										}
										?>                            		
									</select>
								</td>
								<td>Tahun</td>
								<td>:</td>
								<td>
									<?php
									$now=date('Y');
									echo "<select name='tahun_terbit' class='form-text' style='width:200px;'>";
									for ($a=2006;$a<=$now;$a++)
									{
									echo "<option value='$a'>$a</option>";
									}
									echo "</select>";
									?>
								</td>
								<td>
									<button type="submit" class="btn btn-danger"><i class="fa fa-search"></i> Cetak</button>
								</td>
								<td><p class="text-danger">Cetak Semua Data</p>
									<a href="../laporan/alllaporan-xs.php" target="_blank" class="btn btn-success"><i class="fa fa-file-excel-o"></i> Excell</a>
									<a href="../laporan/alllaporan-pdf.php" target="_blank" class="btn btn-danger"><i class="fa fa-file-pdf-o"></i> PDF</a>
									<a  href="../laporan/alllaporan-pr.php" target="_blank" class="btn btn-primary"><i class="fa fa-print"></i> Print</a>
								</td>
									
									</tr>
							</table>


						<!-- 
							<div class="form-group">
						
							<div class="input-group">
									<select name="id_jenis" class="form-text" style="width: 300px;">
										<option value="">-- Tipe Colections--</option>
										<?php
										$sqlGuru=mysqli_query($konek, "SELECT * FROM tb_jenis ORDER BY id_jenis ASC");
										while($g=mysqli_fetch_array($sqlGuru)){
										echo "<option value='$g[id_jenis]'>$g[jenis]</option>";
										}
										?>                            		
									</select>
								<div class="input-group-addon">Tahun</div>
									<?php
									$now=date('Y');
									echo "<select name='tahun' class='form-text' style='width:200px;'>";
									for ($a=2006;$a<=$now;$a++)
									{
									echo "<option value='$a'>$a</option>";
									}
									echo "</select>";
									?>
								</div>
							</div>
							<button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> Cetak</button> -->
						</form>
						<!-- tabel -->
					
						<hr>

						<table class="table table-striped table-hover">
                          <thead>
                            <tr>
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
                    
                      </div>
                  </div>
                </div>
              </div>  
              </div>