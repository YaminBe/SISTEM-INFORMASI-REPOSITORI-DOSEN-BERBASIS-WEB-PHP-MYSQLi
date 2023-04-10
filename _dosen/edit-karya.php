	<div class="panel box-shadow-none content-header">
	  <div class="panel-body">
	    <div class="col-md-12">
	        <h3 class="animated fadeInLeft"> Edit Karya</h3>
	        <p class="animated fadeInDown">
	          Dashboard <span class="fa-angle-right fa"></span> Edit Karya Baru
	        </p>
	    </div>
	  </div>
	</div>


        	<div class="col-md-12">
                  <div class="col-md-12 panel">
                    <div class="col-md-12 panel-heading" style="background-color: #42a5f5;">
                      <h4 style="color: #ffff;"> <span class="fa fa-edit"></span> Form Edit Karya</h4>
                    </div>
                    <div class="col-md-12 panel-body">
                      <div class="col-md-12">
                      	<?php
                      	$id = $_GET['id'];
                      	$sql = mysqli_query($konek,"SELECT * FROM tb_karya WHERE id_karya ='$id' ");
                      	$data = mysqli_fetch_array($sql);

                      	 ?>
                        <form class="cmxform" id="signupForm" method="POST" action="?page=proses">
                        	 <div class="col-md-12">
                        	 	 <input type="hidden" name="id" value="<?php echo $data['id_karya'] ?>">
                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                            	<select name="id_jenis" class="form-text">
                            		<option value="">-- Tipe Colections--</option>
										<?php
					$sqlGuru=mysqli_query($konek, "SELECT * FROM tb_jenis ORDER BY id_jenis ASC");
					while($g=mysqli_fetch_array($sqlGuru)){
					if($g['id_jenis'] == $g['id_jenis']){
					$selected = "selected";
					}else{
					$selected = "";
					}

					echo "<option value='$g[id_jenis]' $selected>$g[jenis]</option>";
					}
					?>
				</select>
                              <span class="bar"></span>
                              <label>Tipe Karya</label>

                            </div>
                        </div>
                          <div class="col-md-12">
                            <div class="form-group form-animate-text">

                              <input type="text" name="pengarang" class="form-text" id="validate_firstname" value="<?php echo$data['pengarang'] ?>">
                              <span class="bar"></span>
                              <label>Pengarang</label>
                              <p class="text-danger">Masukkan Nama Pengarang Sesuai Prosedur Penulisan STKIP Ahlusunnah</p>
                            </div>
                        </div>
                          <div class="col-md-12">
                            <div class="form-group form-animate-text">
                              <input type="text" class="form-text" id="validate_firstname" name="judul" value="<?php echo$data['judul'] ?>">
                              <span class="bar"></span>
                              <p class="text-danger">Masukkan Judul Asli</p>
                              <label>Judul *</label>
                            </div>

                            <div class="form-group form-animate-text">
                              <input type="text" class="form-text" id="validate_lastname" name="alternatif" value="<?php echo$data['alternatif_judul'] ?>">
                              <span class="bar"></span>
                               <p class="text-danger">Jika Karya ini memiliki judul alternatif(terjemahan), silahkan masukkan pada kolom ini</p>
                              <label>Judul Alternatif</label>
                            </div>

                            <div class="form-group form-animate-text">
                            		 <?php
                        $now=date('Y');
                        echo "<select name='tahun' class='form-text'";
                        for ($a=2006;$a<=$now;$a++)
                        {
                        echo "<option value='$a'>$a</option>";
                        }
                        echo "</select>";
                        ?>
                              <span class="bar"></span>
                              <label>Tahun Terbit</label>
                            </div>
                          </div>
                    <div class="col-md-12">
                            <div class="form-group form-animate-text">
                               <input type="text" class="form-text" id="validate_password" name="penerbit" value="<?php echo $data['penerbit'] ?>">
                              <span class="bar"></span>
                              <label>Penerbit</label>
                        </div> 
                    </div>
                        <div class="col-md-12">
                            <div class="form-group">
                              <p> <b>Abstrak</b> </p>
                              <textarea type="text" id="summernote" class="form-control" id="validate_password" name="abstrak"> <?php echo $data['abstrak'] ?></textarea>
                            </div>
                        </div>

                         <div class="col-md-12">
                            <div class="form-group form-animate-text">
                    
                              <input type="text" class="form-text" id="validate_password" name="bahasa" value="<?php echo $data['bahasa'] ?>" >
                              <span class="bar"></span>
                              <p class="text-danger"> Pilih Bahasa Asli Karya</p>
                              <label>Bahasa</label>
                            </div>  
                        </div>

                                          
                          <div class="col-md-12">
                              <input name="next-update" class="submit btn btn-success btn-lg" type="submit" value="Save & Close">
                        </div>
                      </form>

                    </div>
                  </div>
                </div>
              </div>
          </div>
        
  