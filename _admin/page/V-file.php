<div class="panel box-shadow-none content-header">
  <div class="panel-body">
    <div class="col-md-12">
        <h3 class="animated fadeInLeft">File Karya Dosen</h3>
        <p class="animated fadeInDown">
          View Data <span class="fa-angle-right fa"></span> Daftar File Karya
        </p>
    </div>
  </div>
</div>
<div class="col-md-12 top-5 padding-0">
<div class="col-md-12">
  <div class="panel">
    <div class="panel-heading"><h3> Tampil Data File</h3></div>
    <div class="panel-body">
      <div class="responsive-table">
      	  <table class="table table-striped table-hover" id="datatables-example">
                          <thead>
                            <tr>
                              <th>No.</th>
                              <th>ID Karya</th>
                              <th>Tgl Upload</th>
                              <th>Nama File</th>
                              <th>Tipe File</th>
                              <th>Size</th>
                              <th>File</th>
                            </tr>
                          </thead>
                          <tbody>
                          	 <?php 
                        $no=1;
                        $query= "SELECT * FROM tb_file";
                            $sql_ds = mysqli_query($konek,$query) or die(mysqli_error($konek)) ;
                        while ( $data= mysqli_fetch_array($sql_ds) ) { ?>
                          	<tr>
                          		<td><?php echo $no++ ?>.</td>
                              <td><?php echo $data['id_karya'] ?></td>
                          		<td><?php echo $data['tanggal_upload'] ?></td>
                          		<td><?php echo $data['nama_file'] ?></td>
                          		<td><?php echo $data['tipe_file'] ?></td>
                              <td><?php echo $data['ukuran_file'] ?></td>
                          		<td>
                                <a target="_blank" href="<?php echo $data['file']; ?> " class="btn btn-success"> <span class="fa fa-download"></span> Download</a>
                          			<a href="?page=delfile&id= <?php echo $data['id_file']; ?> " class="btn btn-danger"> <span class="fa fa-trash"></span> Del</a>
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