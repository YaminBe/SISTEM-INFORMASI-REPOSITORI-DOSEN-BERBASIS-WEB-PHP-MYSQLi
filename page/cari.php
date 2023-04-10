<div class="container">
  

  <div class="row title-bar">
<div class="col-md-12">

			<h4><b> <span class="fa fa-search"></span> Berikut Data Yang Anda Cari</b></h4>
			<hr>


		
    <?php 
    //koneksi
// $koneksi = mysqli_connect("localhost","root","","db_kompre");
     $koneksi = new mysqli('localhost','root','','db_stkip');
    if (isset($_POST['cari'])) {
      //variable
      $keyword = $_POST['keyword'];
      $query = $koneksi->query("SELECT * FROM tb_karya WHERE judul LIKE '%$keyword%' OR tahun_terbit LIKE '%$keyword%' ");
      $row = mysqli_num_rows($query);
      if ($row==0) {
        ?>
			<div class="alert alert-danger" role="alert">
			<strong style="font-size: 23px;"> <span class="fa fa-ban"></span> Maaf !!</strong> Judul Atau Referensi Yang Anda Cari Tidak Ditemukan !

			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
			</div>
        <?php
      }else{
          ?>

          <table class="table">
				<thead>
					<tr>
						<th>No</th>
						<th>Judul</th>
						<!-- <th>Pengarang</th>
						<th>Jenis Karya</th> -->
						<!-- <th>Tahun</th> -->
						<th>More</th>
					</tr>
				</thead>
				<tbody>
					<?php 
					foreach ($query as $row) {
						@$no ++;						
						$judul = $row ['judul'];
						// $dosen = $row ['id_dosen'];
						// $jenis = $row ['id_jenis'];
							$data = $row ['id_jenis'];
						$id = $row ['id_karya'];
					

					 ?>
					<tr>
						<td><?php echo $no; ?>.</td>
						<td><a href="?page=detail&id=<?php echo $id; ?>"><?php echo $judul; ?></a></td>
						<!-- <td><?php echo $dosen; ?></td>
						<td><?php echo $jenis; ?></td> -->
						<!-- <td><?php echo $tahun; ?></td> -->
						<td> <a href="?page=detail&id=<?php echo $id; ?>" class="btn btn-danger btn-xs"> <span class="fa fa-search-plus"></span> Detail </a></td>
					</tr>
				<?php
				 }
				  ?>
				</tbody>
			</table>


          
		<?php
			}
				}

				?>
		

          


			
</div>
</div>
</div>
