	<div class="panel box-shadow-none content-header">
	  <div class="panel-body">
	    <div class="col-md-12">
	        <h3 class="animated fadeInLeft"> Jabatan</h3>
	        <p class="animated fadeInDown">
	          Data Master <span class="fa-angle-right fa"></span> Edit Data Jabatan
	        </p>
	    </div>
	  </div>
	</div>


        	<div class="col-md-12">
                  <div class="col-md-12 panel">
                    <div class="col-md-12 panel-heading" style="background-color: #2196F3;">
                      <h4 style="color: #ffff;"> <span class="fa fa-edit"></span> Form Edit Jabatan</h4>
                    </div>
                    <div class="col-md-12 panel-body">
                      <div class="col-md-12">
                      		<?php 
                      	$id = $_GET['id'];
                      	$sql= mysqli_query($konek,"SELECT * FROM tb_jabatan WHERE id_jab='$id' ");
                      	$d = mysqli_fetch_array($sql);

                      	 ?>
                        <form class="cmxform" id="signupForm" method="POST" action="?page=proses">
	                        <div class="col-md-12">
	                            <div class="form-group form-animate-text">
	                              <input type="text" name="id" class="form-text" id="validate_firstname" value="<?php echo $d['id_jab']; ?>">
	                              <span class="bar"></span>
	                              <label>ID Jabatan</label>
	                            </div>
	                        </div> 
	                          <div class="col-md-12">
	                            <div class="form-group form-animate-text">
	                              <input type="text" name="jurusan" class="form-text" id="validate_firstname" value="<?php echo $d['jabatan']; ?>">
	                              <span class="bar"></span>
	                              <label>Nama Jabatan *</label>
	                            </div>
	                        </div>     
                          <div class="col-md-12">
                              <input name="edit-jur" class="submit btn btn-primary btn-lg" type="submit" value="Simpan">
                              <a href="javascript:history.back()" class="submit btn btn-danger btn-lg"> Kembali</a>
                        </div>
                      </form>

                    </div>
                  </div>
                </div>
              </div>
          </div>
        
  