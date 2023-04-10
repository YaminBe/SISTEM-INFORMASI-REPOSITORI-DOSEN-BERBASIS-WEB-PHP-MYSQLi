<div class="panel box-shadow-none content-header">
  <div class="panel-body">
    <div class="col-md-12">
        <h3 class="animated fadeInLeft">Data Dosen</h3>
        <p class="animated fadeInDown">
          Dosen <span class="fa-angle-right fa"></span> Edit Data Dosen
        </p>
    </div>
  </div>
</div>

<div class="col-md-10 col-md-offset-1">
                  <div class="col-md-12 panel">
                    <div class="col-md-12 panel-heading">
                      <h4> <span class="fa fa-edit"></span> Form Edit Dosen</h4>
                    </div>
                    <div class="col-md-12 panel-body">
                      <div class="col-md-12">
                      		    	<?php 
                      	$id = $_GET['id'];
                      	$sql= mysqli_query($konek,"SELECT * FROM tb_dosen WHERE id_dosen='$id' ");
                      	$data = mysqli_fetch_array($sql);

                      	 ?>
                        <form class="cmxform" id="signupForm" method="post" enctype="multipart/form-data" action="?page=proses">

                            <div class="col-md-12">
	                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
	                            	<input type="hidden" name="id" value="<?php echo $data['id_dosen']; ?>">
	                              <input type="text" class="form-text" id="validate_firstname" name="nip" value="<?php echo $data['nip']; ?>">
	                              <span class="bar"></span>
	                              <label>Nip *</label>
	                            </div>
                            </div>

                            <div class="col-md-6">
	                            <div class="form-group form-animate-text">
	                              <input type="text" class="form-text" id="validate_lastname" name="nama" value="<?php echo $data['nama_dosen']; ?>">
	                              <span class="bar"></span>
	                              <label>Nama Dosen *</label>
	                            </div>
                            </div>

                            <div class="col-md-6">
                              <div class="form-group form-animate-text">
	                              <input type="text" class="form-text" id="validate_username" name="gelar" value="<?php echo $data['gelar']; ?>">
	                              <span class="bar"></span>
	                              <label>Gelar *</label>
                              </div>
                            </div>

        

						  <div class="col-md-12">
							<div class="form-animate-radio">
							  <label class="radio">
							    <input id="radio1" type="radio" name="jk" value="Laki-laki" <?php if ($data['jk'] == 'Laki-laki') {echo "checked";} ?>  />
							    <span class="outer">
							      <span class="inner"></span></span> Laki-laki
							    </label>
							     <label class="radio">
							    <input id="radio2" type="radio" name="jk" value="Perempuan" <?php if ($data['jk'] == 'Perempuan') {echo "checked";} ?>  />
							    <span class="outer">
							      <span class="inner"></span></span> Perempuan
							    </label>
							  </div>
							</div> 
	                        <div class="col-md-6">
	                            <div class="form-group form-animate-text">
	                              <input type="text" class="form-text" id="validate_password" name="username" value=" <?php echo $data['username']; ?>">
	                              <span class="bar"></span>
	                              <label>Username *</label>
	                            </div>
	                        </div>
	                         <div class="col-md-6">
	                            <div class="form-group form-animate-text">
	                              <input type="text" class="form-text" id="validate_password" name="password" value=" <?php echo $data['password']; ?>">
	                              <span class="bar"></span>
	                              <label>Password *</label>
	                            </div>
	                        </div>
	                        <div class="col-md-6">
	                            <div class="form-group form-animate-text">
	                              <select name="id_jab" class="form-text">
										<?php
										$sqlGuru=mysqli_query($konek, "SELECT * FROM tb_jabatan");
										while($g=mysqli_fetch_array($sqlGuru)){
											if($g['jabatan'] == $e['jabatan']){
										$selected = "selected";
										}else{
										$selected = "";
										}
										echo "<option value='$g[jabatan]'>$g[jabatan]</option>";
										}
										?>                            		
                            	</select>
	                              <span class="bar"></span>
	                              <label>Jabatan Akademik *</label>
	                            </div>
	                        </div>
	                          <div class="col-md-6">
	                            <div class="form-group form-animate-text">
	                              <select name="id_prodi" class="form-text">
										<?php
										$sqlGuru=mysqli_query($konek, "SELECT * FROM tb_prodi ORDER BY id_prodi ASC");
										while($g=mysqli_fetch_array($sqlGuru)){
										if($g['prodi'] == $e['prodi']){
										$selected = "selected";
										}else{
										$selected = "";
										}

										echo "<option value='$g[prodi]' $selected>$g[prodi]</option>";
										}
										?>                           		
                            	</select>
	                              <span class="bar"></span>
	                              <label> Prodi Mengajar *</label>
	                            </div>
	                        </div>
	                         <div class="col-md-6">
	                            <div class="form-group form-animate-text">
	                              <input type="text" class="form-text" id="validate_password" name="pddk" value="<?php echo $data['pendidikan']; ?>">
	                              <span class="bar"></span>
	                              <label>Pendidikan Terakhir *</label>
	                          </div>
	                        </div>
	                           <div class="col-md-6">
	                            <div class="form-group form-animate-text">
	                              <input type="text" class="form-text" id="validate_password" name="asalpt" value="<?php echo $data['asal_pt']; ?>">
	                              <span class="bar"></span>
	                              <label>Asal PT *</label>
	                            </div>
	                        </div>
	                         <div class="col-md-6">
	                         	<img src="../asset/img-dosen/<?php echo $data['foto']; ?>" class="img-thumbnail" width="100">
                          <div class="input-group fileupload-v1">
                            <input type="file" name="foto" class="fileupload-v1-file hidden"/>
                            <input type="text" class="form-control fileupload-v1-path" placeholder="File Foto..." disabled>
                            <span class="input-group-btn">
                              <button class="btn fileupload-v1-btn" type="button"><i class="fa fa-folder"></i> File Foto</button>
                            </span>
                          </div><!-- /input-group -->
                        </div><!-- /.col-lg-6 -->

                          <div class="col-md-12">
                              <div class="form-group form-animate-checkbox">
                                 <!--  <input type="checkbox" class="checkbox"  id="validate_agree" name="validate_agree"> -->
                                  <p class="text-danger">Jika Sudah Lengkap, Pilih Simpan Untuk Mengubah Data</p>
                              </div>
                              <input class="submit btn btn-success btn-lg" name="edit-dsn" type="submit" value="Simpan">
                              <a href="javascript:history.back()" class="submit btn btn-warning btn-lg">Kembali</a>
                        </div>
                      </form>

                    </div>
                  </div>
                </div>
                </div>
