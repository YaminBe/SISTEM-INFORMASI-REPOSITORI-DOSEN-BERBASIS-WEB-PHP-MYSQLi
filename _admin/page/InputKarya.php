	<div class="panel box-shadow-none content-header">
	  <div class="panel-body">
	    <div class="col-md-12">
	        <h3 class="animated fadeInLeft"> Input Karya</h3>
	        <p class="animated fadeInDown">
	          Dashboard <span class="fa-angle-right fa"></span> Input Karya Baru
	        </p>
	    </div>
	  </div>
	</div>


        	<div class="col-md-12">
                  <div class="col-md-12 panel">
                    <div class="col-md-12 panel-heading" style="background-color: #2196F3;">
                      <h4 style="color: #ffff;"> <span class="fa fa-edit"></span> Form Upload Karya</h4>
                    </div>
                    <div class="col-md-12 panel-body">
                      <div class="col-md-12">
                        <form class="cmxform" id="signupForm" method="POST" action="?page=proses">
                        	 <div class="col-md-12">
                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                <select name="id_jenis" class="form-text">
                                <option value="">-- Tipe Colections--</option>
                                <?php
                                $sqlGuru=mysqli_query($konek, "SELECT * FROM tb_jenis ORDER BY id_jenis ASC");
                                while($g=mysqli_fetch_array($sqlGuru)){
                                echo "<option value='$g[id_jenis]'>$g[jenis]</option>";
                                }
                                ?>                            		
                                </select>
                              <span class="bar"></span>
                              <label>Tipe Karya</label>

                            </div>
                        </div>
                          <div class="col-md-12">
                            <div class="form-group form-animate-text">
                              <select name="id_dosen" class="form-text">
                                <option value="">-- Nama Pengarang--</option>
                                <?php
                                $sqlGuru=mysqli_query($konek, "SELECT * FROM tb_dosen ORDER BY id_dosen ASC");
                                while($g=mysqli_fetch_array($sqlGuru)){
                                echo "<option value='$g[id_dosen]'>$g[nama_dosen]</option>";
                                }
                                ?>                                
                                </select>
                              <span class="bar"></span>
                              <label>Pengarang / Nama Dosen</label>
                              <p class="text-danger">Masukkan Nama Pengarang Sesuai Prosedur Penulisan STKIP Ahlusunnah</p>
                            </div>
                        </div>
                          <div class="col-md-12">
                            <div class="form-group form-animate-text">
                              <input type="text" class="form-text" id="validate_firstname" name="judul" required>
                              <span class="bar"></span>
                              <p class="text-danger">Masukkan Judul Asli</p>
                              <label>Judul *</label>
                            </div>

                            <div class="form-group form-animate-text">
                              <input type="text" class="form-text" id="validate_lastname" name="alternatif" required>
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
                             <!--  <input type="hidden" name="id_dosen" value="<?php echo $data['id_dosen'] ?>"> -->
                               <input type="text" class="form-text" id="validate_password" name="penerbit">
                              <span class="bar"></span>
                              <label>Penerbit</label>
                        </div> 
                    </div>
                        <div class="col-md-12">
                            <div class="form-group">
                              <p><b>Abstrak</b> </p>
                              <textarea type="text" id="summernote" class="form-control" id="validate_password" name="abstrak" required>Abstrak</textarea>
                            <!--   <div id="summernote">Hello Summernote</div> -->
                            </div>
                        </div>

                         <div class="col-md-12">
                            <div class="form-group form-animate-text">
                    
                              <input type="text" class="form-text" id="validate_password" name="bahasa" required>
                              <span class="bar"></span>
                              <p class="text-danger"> Pilih Bahasa Asli Karya</p>
                              <label>Bahasa</label>
                            </div>  
                        </div>

                                          
                          <div class="col-md-12">
                          	<p class="text-danger"> Jika Kolom Telah Terisi dengan baik, Tekan Tombol Next Untuk Upload File</p>
                              <input name="next" class="submit btn btn-danger btn-lg" type="submit" value="Next To Upload File">
                        </div>
                      </form>

                    </div>
                  </div>
                </div>
              </div>
          </div>
        
  