<div class="container">
  <div class="row title-bar">
<div class="col-md-12">

	<form class="form-inline" action="" method="POST" id="login-form">
	<div class="form-group">
	<input type="text" name="inputan_pencarian" class="form-control" placeholder="Masukkan Nama Dosen" style="width: 400px;">
	</div>
	<input type="submit" class="btn btn-info" name="cari" value="Cari">
	</form>
<br>

<table class="table">
				<thead>
					<tr>
						<th>No</th>
						<th>Nip/Nidn</th>
						<th>Nama Dosen</th>
						<th>Foto</th>
					</tr>
				</thead>
				<tbody>
				<?php 
				$no=1; 
				$inputan_pencarian= @$_POST['inputan_pencarian'];
				$cari = @$_POST['cari'];
				if ($cari) {
					if ($inputan_pencarian != "") {
						 $sql_ds= mysqli_query($konek,"SELECT * FROM tb_dosen WHERE nama_dosen like '%$inputan_pencarian%' or nip like '%$inputan_pencarian%' ") or die(mysqli_error($konek));
					}else{
							$sql= "SELECT * FROM tb_karya
				INNER JOIN tb_dosen ON tb_karya.id_dosen = tb_dosen.id_dosen GROUP BY tb_dosen.nama_dosen ";
				$sql_ds = mysqli_query($konek,$sql) or die(mysqli_error($konek)) ;
					}
				}else{
				$sql= "SELECT * FROM tb_karya
				INNER JOIN tb_dosen ON tb_karya.id_dosen = tb_dosen.id_dosen GROUP BY tb_dosen.nama_dosen";
				$sql_ds = mysqli_query($konek,$sql) or die(mysqli_error($konek)) ;

				}
				$cek = mysqli_num_rows($sql_ds);
				if ($cek < 1 ) {
					?>
					<tr>
						<td colspan="4" align="center"> <b class="text-danger">Data Tidak Ditemukan !!</b> </td>
					</tr>
					<?php
				}else {
	
				while ($data= mysqli_fetch_array($sql_ds) ) { ?>
					<tr>
						<td><?php echo $no++; ?>.</td>
						<td><?php echo $data['nip'] ?></td>
						<td><?php echo $data['nama_dosen'] ?></td>
						<td> <a href="?page=d-dosen&id=<?php echo $data['id_dosen']; ?>">
							<img src="asset/img-dosen/<?php echo $data['foto'] ?>" width="70" height="70" class="img-thumbnail">
						</a></td>
					</tr>
				<?php
				 }
				 }
				  ?>
				</tbody>
			</table>

		</div>
	</div>
</div>
