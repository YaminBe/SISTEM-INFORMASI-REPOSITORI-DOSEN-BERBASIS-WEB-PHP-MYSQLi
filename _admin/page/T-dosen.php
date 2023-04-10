<div class="panel box-shadow-none content-header">
  <div class="panel-body">
    <div class="col-md-12">
        <h3 class="animated fadeInLeft">Data Dosen</h3>
        <p class="animated fadeInDown">
          Dosen <span class="fa-angle-right fa"></span> Tambah Data Dosen
        </p>
    </div>
  </div>
</div>

<div class="col-md-10 col-md-offset-1">
                  <div class="col-md-12 panel">
                    <div class="col-md-12 panel-heading">
                      <h4> <span class="fa fa-edit"></span> Form Tambah Dosen</h4>
                    </div>
                    <div class="col-md-12 panel-body">
                      <div class="col-md-12">
                        <form class="cmxform" id="signupForm" method="post" enctype="multipart/form-data" action="?page=proses">

                            <div class="col-md-12">
	                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
	                              <input type="text" class="form-text" id="validate_firstname" name="nip" required>
	                              <span class="bar"></span>
	                              <label>Nip / NIDN *</label>
	                            </div>
                            </div>

                            <div class="col-md-6">
	                            <div class="form-group form-animate-text">
	                              <input type="text" class="form-text" id="validate_lastname" name="nama" required>
	                              <span class="bar"></span>
	                              <label>Nama Dosen *</label>
	                            </div>
                            </div>

                            <div class="col-md-6">
                              <div class="form-group form-animate-text">
	                              <input type="text" class="form-text" id="validate_username" name="gelar" required>
	                              <span class="bar"></span>
	                              <label>Gelar *</label>
                              </div>
                            </div>
<!-- 
                          <div class="col-md-6">
                            <div class="form-group form-animate-text">
                              <input type="password" class="form-text" id="validate_password" name="tmp" required>
                              <span class="bar"></span>
                              <label>Tempat Lahir *</label>
                            </div>
                          </div>

                         <div class="col-md-6" >
                            <div class="form-group form-animate-text">
                              <input type="date" class="form-text" id="validate_confirm_password" name="tgl" required>
                              <span class="bar"></span>
                         
                            </div>
                          </div> -->

						  <div class="col-md-12">
							<div class="form-animate-radio">
							  <label class="radio">
							    <input id="radio1" type="radio" name="jk" value="Laki-laki" />
							    <span class="outer">
							      <span class="inner"></span></span> Laki-laki
							    </label>
							     <label class="radio">
							    <input id="radio2" type="radio" name="jk" value="Perempuan" />
							    <span class="outer">
							      <span class="inner"></span></span> Perempuan
							    </label>
							  </div>
							</div> 

<!-- 							<div class="col-md-12" style="padding:20px;padding-bottom:0px;">
	                            <div class="form-group form-animate-text">
	                              <input type="text" class="form-text" id="validate_password" name="alamat" required>
	                              <span class="bar"></span>
	                              <label>Alamat *</label>
	                            </div>
	                        </div>
	                        <div class="col-md-12">
	                            <div class="form-group form-animate-text">
	                              <input type="email" class="form-text" id="validate_password" name="email" required>
	                              <span class="bar"></span>
	                              <label>E-mail *</label>
	                            </div>
	                        </div> -->
	                        <div class="col-md-6">
	                            <div class="form-group form-animate-text">
	                              <input type="text" class="form-text" id="validate_password" name="username" required>
	                              <span class="bar"></span>
	                              <label>Username *</label>
	                            </div>
	                        </div>
	                         <div class="col-md-6">
	                            <div class="form-group form-animate-text">
	                              <input type="password" class="form-text" id="validate_password" name="password" required>
	                              <span class="bar"></span>
	                              <label>Password *</label>
	                            </div>
	                        </div>
	                        <div class="col-md-6">
	                            <div class="form-group form-animate-text">
	                              <select name="id_jab" class="form-text">
                            		<option value="">-- Pilih Jabatan--</option>
										<?php
										$sqlGuru=mysqli_query($konek, "SELECT * FROM tb_jabatan");
										while($g=mysqli_fetch_array($sqlGuru)){
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
                            		<option value="">-- Pilih Prodi--</option>
										<?php
										$sqlGuru=mysqli_query($konek, "SELECT * FROM tb_prodi");
										while($g=mysqli_fetch_array($sqlGuru)){
										echo "<option value='$g[prodi]'>$g[prodi]</option>";
										}
										?>                            		
                            	</select>
	                              <span class="bar"></span>
	                              <label> Prodi Mengajar *</label>
	                            </div>
	                        </div>
	                         <div class="col-md-6">
	                            <div class="form-group form-animate-text">
	                              <input type="text" class="form-text" id="validate_password" name="pddk" required>
	                              <span class="bar"></span>
	                              <label>Pendidikan Terakhir *</label>
	                          </div>
	                        </div>
	                           <div class="col-md-6">
	                            <div class="form-group form-animate-text">
	                              <input type="text" class="form-text" id="validate_password" name="asalpt" required>
	                              <span class="bar"></span>
	                              <label>Asal PT *</label>
	                            </div>
	                        </div>
	                         <div class="col-md-6">
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
                                  <p class="text-danger">Jika Sudah Lengkap, Pilih Simpan Untuk Menyimpan Data</p>
                              </div>
                              <input class="submit btn btn-success btn-lg" name="simpan-dsn" type="submit" value="Simpan">
                              <a href="javascript:history.back()" class="submit btn btn-warning btn-lg">Kembali</a>
                        </div>
                      </form>

                    </div>
                  </div>
                </div>
                </div>
