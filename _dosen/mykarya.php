   <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft"> Tampil Data Karya</h3>
                        <p class="animated fadeInDown">
                          Dashboard <span class="fa-angle-right fa"></span> Daftar Karyaku
                        </p>
                    </div>
                  </div>
              </div>
              <div class="col-md-12">
                <div class="col-md-12">
                  <div class="panel">
                    <div class="panel-heading" style="background-color: #2196F3;"><h4 style="color: #ffff;"><span class="fa fa-graduation-cap"></span> Daftar Karya | <strong> <?php echo $data['nama_dosen'] ?> </strong></h4>
                     </div>
                    <div class="panel-body">
                      <div class="responsive-table">
                        <table class="table" id="datatables-example">
                          <thead>
                            <tr>
                              <th>No.</th>
                              <th>Judul</th>
                              <th>Tpe Karya</th>
                              <th>More</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php 
                            $no=1;
                            $query= "SELECT * FROM tb_karya
                            INNER JOIN tb_dosen ON tb_karya.id_dosen  = tb_dosen.id_dosen
                             INNER JOIN tb_jenis ON tb_karya.id_jenis = tb_jenis.id_jenis
                             WHERE tb_dosen.id_dosen='$data[id_dosen]' ";
                            $sql_ds = mysqli_query($konek,$query) or die(mysqli_error($konek)) ;
                        while ( $data= mysqli_fetch_array($sql_ds) ) { ?>
                            <tr>
                              <td><?php echo $no++; ?></td>
                              <td><?php echo $data['judul']; ?></td>
                              <td><?php echo $data['jenis']; ?></td>
                              <td>
                                <a href="?page=detail&id= <?php echo $data['id_karya'] ?> " class="btn btn-success"> <span class="fa fa-search"></span> Detail </a>
                                <a href="?page=ekarya&id= <?php echo $data['id_karya'] ?> " class="btn btn-warning"> <span class="fa fa-edit"></span>Edit </a>
                                <a href="?page=dkarya&id= <?php echo $data['id_karya'] ?>" class="btn btn-danger"> <span class="fa fa-trash"></span> Del</a>
                              </td>
                            </tr>
                          <?php 
                        } ?>
                          </tbody>
                        </table>
                    
                      </div>
                      <br> <br>
                       <a href="?page=create" class="btn btn-info"> <span class="fa fa-plus"></span> Tambah Karya Baru</a>
                  </div>
                </div>
              </div>  
              </div>