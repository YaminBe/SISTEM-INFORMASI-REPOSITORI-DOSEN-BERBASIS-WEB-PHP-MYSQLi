   <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft"> Ganti Password</h3>
                        <p class="animated fadeInDown">
                          Dashboard <span class="fa-angle-right fa"></span> Ganti Password
                        </p>
                    </div>
                  </div>
              </div>
              <div class="col-md-12 top-5 padding-0">
                <div class="col-md-12">
                  <div class="panel">
                 <div class="panel-heading"><h4> <span class="fa fa-wrench"></span> Form Ganti Password </h4></div>

                    <div class="panel-body">
                      <div class="responsive-table">
                      	<form action="?page=proses" method="post" accept-charset="utf-8">
                      	        <table class="table table-striped" width="40%">
								<thead>
									<tr>
										<th>Username</th>
										<th>:</th>
										<th><?php echo $data['username']; ?></th>
									</tr>
									<tr>
										<th>Password Lama</th>
										<th>:</th>
										<th><?php echo $data['password'] ?></th>
									</tr>
									<tr>
										<th>Password Baru *</th>
										<th>:</th>
										<th> 
											<input type="hidden" name="id" value="<?php echo $data['id_dosen']; ?>"> 
											<input type="text" name="password" class="form-control" placeholder="Enter Your New Password ******"> 
										</th>
									</tr>
									<tr>
										<th></th>
										<th></th>
										<th> <input type="submit" name="ganti" class="btn btn-success" value="Ganti Password"> </th>
									</tr>
								</thead>
							</table> 
                      	</form>                
                      </div>
                  </div>
                </div>
              </div>  
              </div>